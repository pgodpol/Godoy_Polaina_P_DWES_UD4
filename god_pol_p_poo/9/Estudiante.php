<?php

// Clase Estudiante creada para ejercicio anterior
class Estudiante
{
    private $nombre;
    private $notas;

    // Método constructor con dos parámetros de entrada
    public function __construct($nombre, $notas)
    {
        $this->nombre = $nombre;
        $this->notas = $notas;
    }

    // Método GET para el nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    // Método SET para modificar el nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Método GET para obtener las notas
    public function getNotas()
    {
        return $this->notas;
    }

    // Método SET para modificar las notas
    public function setNotas($notas)
    {
        $this->notas = $notas;
    }

    // Método que obtendrá la media de las notas
    public function getMediaNotas()
    {
        $sumaNotas = 0;
        foreach ($this->notas as $nota) {
            $sumaNotas += $nota;
        }
        return $sumaNotas / count($this->notas);
    }
}
