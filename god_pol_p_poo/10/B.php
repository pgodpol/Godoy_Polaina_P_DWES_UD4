<?php
/* EJERCICIO 10. Alumno Pedro Godoy Polaina*/
// Importamos la clase A
require_once 'A.php';

// Definición de la clase B
// Se refiere a invertebrados, pero solo se implementa la función contrucctora y la función andar
class B extends A
{
    protected $num_patas;

    public function __construct($nombre, $num_patas)
    {
        parent::__construct($nombre);
        $this->num_patas = $num_patas;
    }

    public function andar()
    {
        echo $this->nombre . " anda con " . $this->num_patas . " patas.<br>";
    }

    public function reproducirse()
    {
        echo $this->nombre . " se reproduce por huevos.<br>";
    }
    
}
