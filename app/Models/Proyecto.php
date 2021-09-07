<?php

namespace App\Models;

use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    public $timestamps = true;

    public static $rules = [
        'logo'              => 'required|file|mimes: jpg,bmp,png',
        'titulo_proyecto'   => 'required|string|max: 255',
        'color_fondo'       => 'required|string',
        'descripcion_corta' => 'required|string',
        'descripcion_larga' => 'required|string',
        'activo'            => 'nullable|boolean'
    ];

    public static $rulesUpdate = [
        'logo'              => 'nullable|file|mimes: jpg,bmp,png',
        'titulo_proyecto'   => 'nullable|string|max: 255',
        'color_fondo'       => 'nullable|string',
        'descripcion_corta' => 'nullable|string',
        'descripcion_larga' => 'nullable|string',
        'activo'            => 'nullable|boolean'
    ];

    protected $fillable = [
        'logo',
        'titulo_proyecto',
        'color_fondo',
        'descripcion_corta',
        'descripcion_larga',
        'activo'
    ];

     protected $visible = [
        'id',
        'logo',
        'titulo_proyecto',
        'color_fondo',
        'descripcion_corta',
        'descripcion_larga',
        'activo',
        'imagenes'
    ];

    // INICIO RELACIONES
    public function imagenes(){
        return  $this->hasOne(Imagen::class, 'id_proyecto');
    }
}
