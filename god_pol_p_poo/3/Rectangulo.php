<?php

/*
EJERCICIO 3. Alumno Pedro Godoy Polaina
Crea una clase llamada Rectangulo con dos propiedades/atributos denominados longitud
 y ancho, con constructor y con un método que calcule el area del rectángulo 
 usando dichas propiedades/atributos. Crea 3 instancias/objetos de la clase 
 Rectangulo y ejecuta en ellos el método creado.
*/

// Creación de la Clase Rectangulo
class Rectangulo
{
    // Atributos privados
    private $longitud;
    private $ancho;

    // Método constructor con dos parámetros de entrada
    public function __construct($longitud, $ancho)
    {
        $this->longitud = $longitud;
        $this->ancho = $ancho;
    }

    // Método que calculará el área del rectángulo
    public function getArea()
    {
        return $this->longitud * $this->ancho;
    }
}

// Creamos 3 objetos de la clase Rectangulo
$rectangulo1 = new Rectangulo(14, 12);
$rectangulo2 = new Rectangulo(2, 8);
$rectangulo3 = new Rectangulo(10, 19);

// Presentación en pantalla del cálculo del área para cada objeto rectángulo
echo 'Área del rectángulo 1 = ' . $rectangulo1->getArea() . '<br>';
echo 'Área del rectángulo 2 = ' . $rectangulo2->getArea() . '<br>';
echo 'Área del rectángulo 3 = ' . $rectangulo3->getArea() . '<br>';
