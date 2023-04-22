<?php
/* EJERCICIO 10. Alumno Pedro Godoy Polaina*/
// Importamos la clase A y B
require_once 'A.php';
require_once 'B.php';


// Definición de la clase C
// Se refiere a insectos, pero solo se implementa la función contrucctora y la función interactuar
class C extends B
{
    protected $tipo_antena;

    public function __construct($nombre, $num_patas, $tipo_antena)
    {
        parent::__construct($nombre, $num_patas);
        $this->tipo_antena = $tipo_antena;
    }

    public function interactuar()
    {
        echo $this->nombre . " interactua con sus antenas mediante " . $this->tipo_antena . ".<br>";
    }

    public function reproducirse()
    {
        echo $this->nombre . " se reproduce por fecundación.<br>";
    }
    
}
