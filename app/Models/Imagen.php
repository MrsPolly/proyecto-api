<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    public $timestamps = true;

    public static $rules = [
        'id_proyecto'     => 'required|numeric',
        'imagen_lateral1' => 'required|file|mimes: jpg,bmp,png',
        'imagen_lateral2' => 'nullable|file|mimes: jpg,bmp,png',
    ];

    public static $rulesUpdate = [
        'id_proyecto'     => 'nullable|numeric',
        'imagen_lateral1' => 'nullable|file|mimes: jpg,bmp,png',
        'imagen_lateral2' => 'nullable|file|mimes: jpg,bmp,png',
    ];

    protected $fillable = [
        'id_proyecto',
        'imagen_lateral1',
        'imagen_lateral2'
    ];

     protected $visible = [
        'id',
        'id_proyecto',
        'imagen_lateral1',
        'imagen_lateral2'
    ];
}
