<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('librerias')->insert(['titulo' => 'La Ilíada', 'autor' => 'Homero', 'editorial' => 'Editorial Gredos']);
        DB::table('librerias')->insert(['titulo' => 'La Divina Comedia', 'autor' => 'Dante Alighieri', 'editorial' => 'Alianza Editorial']);
        DB::table('librerias')->insert(['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'editorial' => 'Castalia']);
        DB::table('librerias')->insert(['titulo' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez', 'editorial' => 'Sudamericana']);
        DB::table('librerias')->insert(['titulo' => 'Orgullo y Prejuicio', 'autor' => 'Jane Austen', 'editorial' => 'Penguin']);


    }
}
