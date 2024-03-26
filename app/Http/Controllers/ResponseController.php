<?php

namespace App\Http\Controllers;

use App\Events\NewResponseEvent;
use App\Models\Correspondence;
use App\Models\Document;
use App\Models\Response;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ResponseController extends Controller
{
    public function createResponse(Request $request)
    {
        DB::beginTransaction();

        $request->validate([
            'respuesta' => ['required']
        ], [
            'respuesta.required' => 'La respuesta es requerida'
        ]);

        try {
            $documento = $request->file("documento");
            $nameDocumento = "";
            $documentoCreado = null;
            if ($documento != null) {
                $extension = $documento->getClientOriginalExtension();
                $nameDocumento = Str::random(36) . '.' . $extension;
                $documentoCreado = Document::create([
                    'nombreDocumento' => $nameDocumento,
                    'fechaSubida' => Carbon::now(),
                    'correspondence_id' => $request->correspondencia_id,
                    'user_id' => $request->creador_id,
                ]);
                Storage::disk('local')->put('/public/documentos/' . $nameDocumento, file_get_contents($documento));
            }
            Response::create([
                'response' => $request->respuesta,
                'document_id' => isset($documentoCreado->id) ? $documentoCreado->id : null,
                'correspondence_id' => $request->correspondencia_id,
                'user_id' => $request->creador_id,
                'user_secondary_id' => $request->creador_secundario_id
            ]);

            $correspondencia = Correspondence::find($request->correspondencia_id);
            if ($request->creador_id !== $correspondencia->user_id) {
                $usuarioCreador = User::find($request->creador_id);
                $nombreCompleto = $usuarioCreador->nombres . ' ' . $usuarioCreador->apellidoPaterno . ' ' . $usuarioCreador->apellidoMaterno;
                event(new NewResponseEvent($nombreCompleto, $correspondencia->nombre, $correspondencia->id));
            }
            DB::commit();
            return [
                'message' => 'Respuesta creada correctamente'
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$th->getMessage()]
            ], 422);
        }
    }

    public function getResponse($id)
    {
        return Response::where('id', $id)->with('document')->first();
    }

    public function editResponse(Request $request, $idResponse)
    {
        DB::beginTransaction();

        $request->validate([
            'respuesta' => ['required']
        ], [
            'respuesta.required' => 'La respuesta es requerida'
        ]);

        try {
            $response = Response::where('id', $idResponse)->with('document')->first();

            $documento = $request->file("documento");
            $documentoCreado = null;
            $nameDocumento = "";
            $files = '';
            $entro = '';

            if ($request->estadoDocumento === 'reemplazar') { //Reemplazar
                if ($documento !== null) {
                    $extension = $documento->getClientOriginalExtension();
                    $nameDocumento = Str::random(36) . '.' . $extension;
                    Storage::disk('local')->put('/public/documentos/' . $nameDocumento, file_get_contents($documento));

                    if (isset($response->document->nombreDocumento)) { //Hay documento
                        $documentoBaseDatos = Document::where('nombreDocumento', $response->document->nombreDocumento)->first();
                        $rutaArchivo =  'public/documentos/' . $response->document->nombreDocumento;
                        Storage::delete($rutaArchivo);
                        $documentoBaseDatos->nombreDocumento = $nameDocumento;
                        $documentoBaseDatos->save();
                    } else {
                        $documentoCreado = Document::create([
                            'nombreDocumento' => $nameDocumento,
                            'fechaSubida' => Carbon::now(),
                            'correspondence_id' => $request->correspondencia_id,
                            'user_id' => $request->creador_id,
                        ]);
                        $response->document_id = $documentoCreado->id;
                    }
                }

                $response->response = $request->respuesta;
                $response->save();
                DB::commit();
                return [
                    'message' => 'Respuesta editada correctamente'
                ];
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$th->getMessage()]
            ], 422);



            // } else { //Aumentar
            //     $request->validate([
            //         'documento' => ['required']
            //     ], [
            //         'documento.required' => 'El documento es requerido'
            //     ]);

            //     //Documento guardado
            //     $nameDocumento = $response->document->nombreDocumento;

            //     //Documento enviado
            //     $documentoEnviado = $request->file('documento');
            //     $extension = $documentoEnviado->getClientOriginalExtension();
            //     // $nameDocumento2 = Str::random(36) . '.' . $extension;
            //     $nameDocumento2 = 'PdfParaunir'. '.' . $extension;
            //     Storage::disk('local')->put('/public/documentos/' . $nameDocumento2, file_get_contents($documentoEnviado));

            //     //Merge
            //     $files = [storage_path('app/public/documentos/') . $nameDocumento, storage_path('app/public/documentos/') . $nameDocumento2];

            //     $pdf = new Fpdi();

            //     foreach ($files as $file) {
            //         // set the source file and get the number of pages in the document
            //         $pageCount =  $pdf->setSourceFile($file);

            //         for ($i = 0; $i < $pageCount; $i++) {
            //             $size = $pdf->getTemplateSize($i + 1);
            //             $orientation = ($size['width'] > $size['height']) ? 'L' : 'P';

            //             //create a page
            //             $pdf->AddPage($orientation, [$size['width'], $size['height']]);
            //             //import a page then get the id and will be used in the template
            //             $tplId = $pdf->importPage($i + 1);
            //             //use the template of the imporated page
            //             $pdf->useTemplate($tplId);
            //         }
            //     }
            //     $contenidoPdf = $pdf->Output('', 'S');

            //     // Guardar el contenido en un archivo utilizando Storage

            //     // $nameFinal = Str::random(36) . '.pdf';
            //     $nameFinal = 'DocumentoUnido.pdf';
            //     $rutaArchivo = 'public/documentos/' . $nameFinal;
            //     Storage::put($rutaArchivo, $contenidoPdf);
            //     return;
            //     // Document::create([
            //     //     'nombreDocumento' => $nameFinal,
            //     //     'fechaSubida' => Carbon::now(),
            //     //     'correspondence_id' => null,
            //     //     'user_id' => null,
            //     // ]);
            //     // // Ruta donde se almacenará el PDF en el sistema de archivos local

            //     // $rutaArchivo =  'public/documentos/' . $nameDocumento2;
            //     // Storage::delete($rutaArchivo);
            //     // $rutaArchivo =  'public/documentos/' . $nameDocumento;
            //     // Storage::delete($rutaArchivo);
            //     // $response->document->nombreDocumento = $nameFinal;
            //     $entro = 'Se realizo el aumento';
            // }
            // return [
            //     'data' => $entro
            // ];
        }
    }

    public function deleteResponse($idResponse)
    {
        DB::beginTransaction();

        try {
            $response = Response::where('id', $idResponse)->with('document')->first();
            if (isset($response->document->nombreDocumento)) { //Hay documento
                $documentoBaseDatos = Document::where('nombreDocumento', $response->document->nombreDocumento)->first();
                $response->delete();
                $documentoBaseDatos->delete();
                $rutaArchivo =  'public/documentos/' . $response->document->nombreDocumento;
                Storage::delete($rutaArchivo);
            } else {
                $response->delete();
            }
            DB::commit();
            return [
                'message' => 'Respuesta eliminada correctamente'
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$th->getMessage()]
            ], 422);
        }
    }
}
