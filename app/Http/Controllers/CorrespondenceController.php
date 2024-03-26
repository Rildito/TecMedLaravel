<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorrespondenceRequest;
use App\Http\Resources\CorrespondenceCollection;
use App\Models\Correspondence;
use App\Models\Document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\DB;

class CorrespondenceController extends Controller
{
    public function getCorrespondencesReceived()
    {
        return new CorrespondenceCollection(Correspondence::with('unit')->where('tipo', 'recibida')->where('estado','!=','eliminado')->get());
    }

    public function getCorrespondencesRecover()
    {
        return new CorrespondenceCollection(Correspondence::with('unit')->where('estado','eliminado')->get());
    }

    public function getCorrespondencesDespachada()
    {
        return new CorrespondenceCollection(Correspondence::with('unit')->where('tipo', 'despachada')->where('estado','!=','eliminado')->get());
    }

    public function getIdentificador()
    {

        $correspondencias = Correspondence::with('unit')->where('tipo', 'despachada')->get();
        $hojaDeRuta = 12500;

        if (count($correspondencias) > 0) {
            $lastCorrespondencia = $correspondencias->last();
            $hojaDeRuta = intval($lastCorrespondencia->hojaDeRuta) + 1;
        }
        return [
            'identificador' => strval($hojaDeRuta . '-CTM')
        ];
    }

    public function getCorrespondenceId($id)
    {
        $correspondence = Correspondence::with('unit')->find($id);
        return $correspondence;
    }

    public function createCorrespondence(CorrespondenceRequest $request)
    {
        DB::beginTransaction();
        $data = $request->validated();

        try {
            // Crear la correspondencia
            $correspondence = Correspondence::create([
                "unit_id" => $data['unit_id'],
                "nombre" => $data['nombre'],
                "fechaCreacion" => Carbon::now(),
                "hojaDeRuta" => $data['hojaDeRuta'],
                "descripcion" => $data['descripcion'],
                "estado" => $request['estado'],
                "receptor" => '',
                "user_id" => $request['creadorCorrespondencia'],
                "tipo" => $request['tipoCorrespondencia'],
            ]);
            $documento = $request->file("documento");
            // $nombreDocumento = $documento->getClientOriginalName();
            $extension = $documento->getClientOriginalExtension();
            $nameDocumento = Str::random(36) . '.' . $extension;
            Document::create([
                'nombreDocumento' => $nameDocumento,
                'fechaSubida' => Carbon::now(),
                'correspondence_id' => $correspondence['id'],
                "user_id" => $request['creadorCorrespondencia']
            ]);
            // DocumentoPDF

            Storage::disk('local')->put('/public/documentos/' . $nameDocumento, file_get_contents($documento));

            $correspondence->documento_inicial = $nameDocumento;
            $correspondence->save();

            DB::commit();

            return [
                "message" => "Correspondencia creada correctamente",
            ];
        } catch (\Throwable $e) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$e->getMessage()]
            ], 422);
        }
    }

    public function editCorrespondence(Request $request, $id)
    {

        $request->validate([
            "nombre" => ['required', 'string'],
            "hojaDeRuta" => ['required', 'string'],
            "descripcion" => ['required', 'string'],
            "estado" => ['string']
        ], [
            'nombre.required' => 'El nombre del documento es obligatorio',
            'hojaDeRuta.unique' => 'Ya existe una hoja de ruta con esa identificacion',
            'unit_id' => 'La unidad es obligatoria',
            'descripcion.required' => 'La descripcion es obligatoria',
        ]);
        DB::beginTransaction();

        try {
            $correspondence = Correspondence::find($id);
            $documentoEncontrado = Document::where('correspondence_id', $id)->first();
            //Verificando documento  
            $rutaArchivo =  'public/documentos/' . $documentoEncontrado->nombreDocumento;
            // $infoArchivo = pathinfo($rutaArchivo);

            $documento = $request->file("documento");
            $nameDocumento = "";
            // $nameDocumento = $documento->getClientOriginalName();

            if ($documento != null) {
                Storage::delete($rutaArchivo);
                $extension = $documento->getClientOriginalExtension();
                $nameDocumento = Str::random(36) . '.' . $extension;
                Storage::disk('local')->put('/public/documentos/' . $nameDocumento, file_get_contents($documento));
                $documentoEncontrado->nombreDocumento = $nameDocumento;
                $documentoEncontrado->fechaSubida = Carbon::now();
                $documentoEncontrado->save();
            }

            $correspondence->nombre = $request->nombre;
            $correspondence->hojaDeRuta = $request->hojaDeRuta;
            $correspondence->descripcion = $request->descripcion;
            $correspondence->receptor = $request->receptor;
            $correspondence->unit_id = $request->unit_id;
            $correspondence->estado = $request->estado;

            if ($request->estado === 'Entregado') {
                $correspondence->fechaEntregado = Carbon::now();
            }
            $correspondence->save();

            DB::commit();
            return [
                "message" => "Correspondencia editada correctamente"
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$th->getMessage()]
            ], 422);
        }
    }

    public function deleteCorrespondence($id)
    {
        $correspondence = Correspondence::find($id);
        $correspondence->estadoAnterior = $correspondence->estado;
        $correspondence->estado = 'eliminado';
        $correspondence->save();

        return [
            "message" => "Correspondencia eliminada correctamente"
        ];
    }

    public function correspondenceRecover($id)
    {
        $correspondence = Correspondence::find($id);
        $correspondence->estado = $correspondence->estadoAnterior;
        $correspondence->estadoAnterior = '';

        $correspondence->save();

        return [
            "message" => "Correspondencia recuperada correctamente"
        ];
    }

    public function confirmDeleteCorrespondence ($id) {
        $correspondence = Correspondence::find($id);
        $correspondence->delete();

        //Verificando documento  
        $rutaArchivo =  'public/documentos/' . $correspondence->documento;
        Storage::delete($rutaArchivo);

        return [
            "message" => "Correspondencia eliminada correctamente"
        ];
    }
    public function getCorrespondenceDocument($dateOne, $dateTwo, $tipoCorrespondence)
    {
        $fechaInicial = Carbon::parse($dateOne);
        $fechaFinal = Carbon::parse($dateTwo);
        $correspondenciasObtenidas = Correspondence::with('unit')->where('tipo', $tipoCorrespondence)->where('estado','!=','eliminado')->get();
        $correspondencias = [];

        foreach ($correspondenciasObtenidas as $correspondences) {
            $fechaComparar = Carbon::parse($correspondences->fechaCreacion);
            if ($fechaComparar->between($fechaInicial, $fechaFinal)) {
                $correspondencias[] = $correspondences;
            }
        }

        $fechaInicial->setLocale('Es');
        $fechaFinal->setLocale('Es');
        $fechaMostrarOne = strtoupper($fechaInicial->isoFormat('D MMMM Y'));
        $fechaMostrarTwo = strtoupper($fechaFinal->isoFormat('D MMMM Y'));
        //Creadno el pdf 

        $pdf = new PDF_MC_Table();
        $pdf->AddPage('L', 'Legal');
        $pdf->Image(public_path('logos/logoTecMed.png'), 319, 6, 20);
        $pdf->Image(public_path('logos/LogoUMSA.png'), 10, 6, 18, 30);
        $pdf->SetFont('Arial', 'B', 16,);
        $pdf->Cell(335, 8, iconv('UTF-8', 'windows-1252', 'UNIVERSIDAD MAYOR DE SAN ANDRÉS'), 0, 1, 'C');
        $pdf->Cell(335, 8, iconv('UTF-8', 'windows-1252', 'FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA'), 0, 1, 'C');
        $pdf->Cell(335, 10, iconv('UTF-8', 'windows-1252', 'CARRERA DE TECNOLOGÍA MÉDICA'), 0, 1, 'C');
        $pdf->Cell(335, 5, '', 0, 1, 'C');
        $pdf->Cell(330, 10, iconv('UTF-8', 'windows-1252', 'REPORTE DE CORRESPONDENCIAS ' . strtoupper($tipoCorrespondence) . 'S CARRERA DE TECNOLOGÍA MÉDICA'), 0, 1, 'C');
        $pdf->Cell(330, 8, iconv('UTF-8', 'windows-1252', 'DEL ' . $fechaMostrarOne . ' AL ' . $fechaMostrarTwo), 0, 1, 'C');
        $pdf->Ln();
        // Definir encabezados de la tabla
        $header = array('Fecha', 'Entregado a ', 'Nombre','Identificador', 'Descripcion');

        // Definir datos de la tabla
        $data = [];
        // for ($i = 0; $i < 50; $i++) {
        //     $data[] = ['Dato 1', 'Dato ', Str::random(rand(1, 250)), 'Dato 1', 'Dato 2', 'Dato 3'];
        // };

        foreach ($correspondencias as $correspondencia) {
            $fechaCambiada = Carbon::createFromFormat('Y-m-d', $correspondencia->fechaCreacion);

            // $data[] = [$fechaCambiada->format('d-m-Y'), $correspondencia->receptor ? iconv('UTF-8', 'windows-1252', $correspondencia->receptor) : 'Sin receptor', iconv('UTF-8', 'windows-1252', $correspondencia->nombre),iconv('UTF-8', 'windows-1252', $correspondencia->unit->nombre),$correspondencia->hojaDeRuta, iconv('UTF-8', 'windows-1252', $correspondencia->descripcion), $correspondencia->estado];
            $data[] = [
                $fechaCambiada->format('d-m-Y'), 
                $correspondencia->receptor ? iconv('UTF-8', 'windows-1252', $correspondencia->receptor) : 'Sin receptor', iconv('UTF-8', 'windows-1252', $correspondencia->nombre),$correspondencia->hojaDeRuta, 
                iconv('UTF-8', 'windows-1252', $correspondencia->descripcion)];
        };
        // Establecer anchuras de las columnas
        $widths = array(30, 40, 40,40, 180);
        $aligns = array('C', 'C', 'C','C', 'C');
        $pdf->SetWidths($widths); //330
        $pdf->SetAligns($aligns);

        // Agregar encabezados de tabla
        $pdf->SetFont('Arial', 'B', 10);
        
        for ($i = 0; $i < count($header); $i++) {
            $pdf->Cell($widths[$i], 10, $header[$i], 1, 0, 'C');
        }
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 10);

        $c = 100;
        $sumMaxCellHeight = 0;
        $limit = 120;

        for ($i = 0; $i < count($data); $i++)
            $pdf->Row(array($data[$i][0], $data[$i][1], $data[$i][2], $data[$i][3], $data[$i][4]));

        $pdfContent = $pdf->Output('', 'S');
        return response()->json(['pdfContent' => base64_encode($pdfContent)]);
    }
}


//Generador de pdf
class PDF_MC_Table extends FPDF
{
    protected $widths;
    protected $aligns;

    function SetWidths($w)
    {
        // Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        // Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data)
    {
        // Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 5 * $nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h);
        // Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x, $y, $w, $h);
            // Print the text
            $this->MultiCell($w, 5, $data[$i], 0, $a);
            // Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        // Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            // $this->AddPage($this->CurOrientation);
            $this->AddPage('L', 'Legal');
    }

    function NbLines($w, $txt)
    {
        // Compute the number of lines a MultiCell of width w will take
        if (!isset($this->CurrentFont))
            $this->Error('No font has been set');
        $cw = $this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', (string)$txt);
        $nb = strlen($s);
        if ($nb > 0 && $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l += $cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }
}
