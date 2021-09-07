<?php

namespace Database\Seeders;

use App\Models\Imagen;
use Illuminate\Database\Seeder;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imagen::create([
            'id'              => 1,
            'id_proyecto'     => 1,
            'imagen_lateral1' => 'playa.jpg',
            'imagen_lateral2' => 'tarjeta.jpg',
        ]);
        Imagen::create([
            'id'              => 2,
            'id_proyecto'     => 2,
            'imagen_lateral1' => 'autos.jpg',
            'imagen_lateral2' => 'autos2.jpg',
        ]);
        Imagen::create([
            'id'              => 3,
            'id_proyecto'     => 3,
            'imagen_lateral1' => 'negocio1.jpg',
            'imagen_lateral2' => 'negocio2.jpg',
        ]);

    }
}
