<?php

// Importamos la clase Forma y Punto
require_once 'Forma.php';
require_once 'Punto.php';

// La clase Circulo hereda de la clase Forma
class Circulo extends Forma
{
    // Atributos privados
    private $radio;

    // Método constructor con dos parámetros de entrada
    public function __construct(Punto $centro, $radio)
    {
        parent::__construct($centro);
        $this->radio = $radio;
    }

    // Método para cálculo del área del círculo
    public function getArea()
    {
        return pi() * pow($this->radio, 2);
    }

    // Método para cálculo de la circunferencia del círculo
    public function getCircunferencia()
    {
        return 2 * pi() * $this->radio;
    }
   
}