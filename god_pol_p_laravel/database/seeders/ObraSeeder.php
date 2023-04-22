<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObraSeeder extends Seeder
{

    public function run(): void
    {

        DB::table('obras')->insert([
            'tipo' => 'Disco', 'titulo' => 'The wall', 'artista' => 'Pink Floyd',
            'lanzamiento' => '1970/01/01', 'genero' => 'musical', 'duracion' => '55'
        ]);

        DB::table('obras')->insert([
            'tipo' => 'Pelicula', 'titulo' => 'La naranja mecánica', 'artista' => 'Stanley Kubrick',
            'lanzamiento' => '1967/01/01', 'genero' => 'guerra', 'duracion' => '120'
        ]);

        DB::table('obras')->insert([
            'tipo' => 'Pelicula', 'titulo' => 'Amélie', 'artista' => 'Jean-Pierre Jeunet',
            'lanzamiento' => '2001/01/01', 'genero' => 'romantica', 'duracion' => '110'
        ]);

        DB::table('obras')->insert([
            'tipo' => 'Pelicula', 'titulo' => 'Lawrence de Arabia', 'artista' => 'David Lean',
            'lanzamiento' => '1962/01/01', 'genero' => 'aventuras', 'duracion' => '150'
        ]);

        DB::table('obras')->insert([
            'tipo' => 'Disco', 'titulo' => 'Back in Black', 'artista' => 'ACDC',
            'lanzamiento' => '1980/01/01', 'genero' => 'rock', 'duracion' => '90'
        ]);

        DB::table('obras')->insert([
            'tipo' => 'Disco', 'titulo' => 'Born in the USA', 'artista' => 'Bruce Springsteen',
            'lanzamiento' => '1984/01/01', 'genero' => 'rock', 'duracion' => '120'
        ]);
    }
}
