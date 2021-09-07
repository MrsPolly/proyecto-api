<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $datos = [];

        $proyectos = Proyecto::select('id','logo','titulo_proyecto','color_fondo','descripcion_corta','descripcion_larga')
            ->with(['imagenes'])
            ->get();

        foreach ($proyectos as $key => $value) {
            $datos[$key]['logo'] = asset('storage/files/'.$value->logo);
            $datos[$key]['titulo_proyecto'] = $value->titulo_proyecto;
            $datos[$key]['color_fondo'] = $value->color_fondo;
            $datos[$key]['descripcion_corta'] = $value->descripcion_corta;
            $datos[$key]['descripcion_larga'] = $value->descripcion_larga;
            $datos[$key]['imagen_lateral1'] = asset('storage/files/'.$value->imagenes->imagen_lateral1);
            $datos[$key]['imagen_lateral2'] = asset('storage/files/'.$value->imagenes->imagen_lateral2);
        }

        return response()->json([
            'data' => $datos
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $datos = [];

        $proyecto = Proyecto::select('id','logo','titulo_proyecto','color_fondo','descripcion_corta','descripcion_larga')
            ->where('id', $id)
            ->with(['imagenes'])
            ->first();

        if(empty($proyecto)){
            return response()->json([
                'errors' => ['El proyecto no se encuentra disponible'],
                'message' => 'Error al encontrar el registro'
            ], 404);
        }

        $datos['logo'] = asset('storage/files/'.$proyecto->logo);
        $datos['titulo_proyecto'] = $proyecto->titulo_proyecto;
        $datos['color_fondo'] = $proyecto->color_fondo;
        $datos['descripcion_corta'] = $proyecto->descripcion_corta;
        $datos['descripcion_larga'] = $proyecto->descripcion_larga;
        $datos['imagen_lateral1'] = asset('storage/files/'.$proyecto->imagenes->imagen_lateral1);
        $datos['imagen_lateral2'] = asset('storage/files/'.$proyecto->imagenes->imagen_lateral2);

        return response()->json([
            'data' => $datos
        ], 200);
    }
}
