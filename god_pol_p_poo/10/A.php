<?php
/* EJERCICIO 10. Alumno Pedro Godoy Polaina*/

// Definición de la clase A
// Se refiere a seres vivos, pero no se implementa nada que la función contrucctora y la función respirar
class A
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function respirar()
    {
        echo $this->nombre . " está respirando.<br>";
    }

    public function reproducirse()
    {
        echo $this->nombre . " se reproduce de manera sexual.<br>";
    }
    
}
