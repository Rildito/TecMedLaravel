<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Http\Resources\MaterialCollection;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MaterialController extends Controller
{
    public function getMaterials()
    {
        return new MaterialCollection(Material::all());
    }

    public function getMaterialsStudent()
    {
        return new MaterialCollection(Material::where('estado','disponible')->get());
    }

    public function getMaterialId($id)
    {
        $material = Material::find($id);
        $material->imagen = asset('storage/materiales/' . $material->imagen);
        return $material;
    }
    public function createMaterial(MaterialRequest $request)
    {

        $data = $request->validated();

        //imagen
        $imagen = $request->file("imagen");
        $extension = $imagen->getClientOriginalExtension();
        $nameImagen = Str::random(36) . '.' . $extension;

        Material::create([
            'inventory_id' => '1',
            'nombre' => $data['nombre'],
            'cantidad_disponible' => $data['cantidad'],
            'cantidad_utilizada' => $data['cantidad'],
            'estado' => $data['estado'],
            'descripcion' => $data['descripcion'],
            'imagen' => $nameImagen,
        ]);

        Storage::disk('local')->put('/public/materiales/' . $nameImagen, file_get_contents($imagen));

        return [
            "message" => "Material creado correctamente"
        ];
    }

    public function editMaterial($id, Request $request)
    {
        $request->validate([
            "nombre" => ["required", "string","unique:materials,nombre,".$id],
            "cantidad" => ["required", "integer"],
            "estado" => ["required"],
            "descripcion" => ["required", "string"],
        ],[
            "nombre.required" => "El nombre es requerido",
            "nombre.unique" => "Ya existe un registro con ese nombre",
            "estado.required" => "El estado es requerido",
            "descripcion.required" => "La descripcion es requerida"
        ]);
        $material = Material::find($id);
        //Verificando documento  
        $rutaArchivo =  'public/materiales/' . $material->imagen;
        // $infoArchivo = pathinfo($rutaArchivo);

        $imagen = $request->file("imagen");
        // $nameDocumento = $documento->getClientOriginalName();
        if ($imagen != null) {
            Storage::delete($rutaArchivo);
            $nameImagen = $imagen->getClientOriginalName();
            Storage::disk('local')->put('/public/materiales/' . $nameImagen, file_get_contents($imagen));
            $material->imagen = $nameImagen;
        }

        $material->nombre = $request->nombre;
        

        if ($request->cantidad < $material->cantidad_disponible) {
            $material->cantidad_utilizada = $material->cantidad_utilizada - ($material->cantidad_disponible - $request->cantidad);
        } else {
            // Log::info('Cantidad y Disponible:', [$request->cantidad, $material->cantidad_disponible, $material->cantidad_utilizada, 'no']);
            $material->cantidad_utilizada = $material->cantidad_utilizada + ($request->cantidad - $material->cantidad_disponible);
        }

        $material->cantidad_disponible = $request->cantidad;
        $material->estado = $request->estado;
        $material->descripcion = $request->descripcion;

        $material->save();

        return [
            "message" => "Material editado correctamente"
        ];
    }

    public function deleteMaterial($id)
    {
        $material = Material::find($id);
        $material->delete();
        $rutaArchivo =  'public/materiales/' . $material->imagen;
        Storage::delete($rutaArchivo);
        return [
            "message" => "Material eliminado correctamente"
        ];
    }
}
