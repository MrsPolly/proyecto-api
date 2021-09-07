<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyecto::create([
            'id'                => 1,
            'logo'              => 'diners.png',
            'titulo_proyecto'   => 'Sitio público y privado',
            'color_fondo'       => '#16347a',
            'descripcion_corta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.',
            'descripcion_larga' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.',
            'activo'            => 1
        ]);
        Proyecto::create([
            'id'                => 2,
            'logo'              => 'derco.png',
            'titulo_proyecto'   => 'Sitios web 2017',
            'color_fondo'       => '#d82332',
            'descripcion_corta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.',
            'descripcion_larga' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.',
            'activo'            => 1
        ]);
        Proyecto::create([
            'id'                => 3,
            'logo'              => 'copec.png',
            'titulo_proyecto'   => 'Tv App',
            'color_fondo'       => '#fff',
            'descripcion_corta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.',
            'descripcion_larga' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est numquam hic placeat quo vitae. Debitis ea saepe explicabo eveniet eius, earum quod est aliquid minima odit, omnis, quam molestiae magnis.',
            'activo'            => 1
        ]);
    }
}
