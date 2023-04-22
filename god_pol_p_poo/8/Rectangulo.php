<?php

// Importamos la clase Forma y Punto
require_once 'Forma.php';
require_once 'Punto.php';

// Creación de la Clase Rectangulo que hereda de la clase Forma
class Rectangulo extends Forma
{
    // Atributos privados
    private $longitud;
    private $ancho;

    // Método constructor con tres parámetros de entrada
    public function __construct(Punto $centro, $longitud, $ancho)
    {
        parent::__construct($centro);
        $this->longitud = $longitud;
        $this->ancho = $ancho;
    }
    
    // Método que calculará el área del rectángulo
    public function getArea()
    {
        return $this->longitud * $this->ancho;
    }
}