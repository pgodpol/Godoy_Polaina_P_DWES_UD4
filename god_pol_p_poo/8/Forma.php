<?php

/*
EJERCICIO 8. Alumno Pedro Godoy Polaina
Crea una clase llamada Forma con una propiedad/atributo denominada centro de tipo
 clase Punto y un método que se llame area y que devuelva un número, por ejemplo 0.
  A continuación, crea dos clases llamadas Rectangulo y Circulo (realizados en ejercicios 03 y 04)
   que hereden de la clase Forma ya creada. Crea 3 instancias/objetos de las clases Rectangulo, 
   Circulo, de la clase que hereda Forma y ejecuta sus métodos.
*/

// Insertamos la clase Punto, Rectangulo y Circulo
require_once 'Punto.php';
require_once 'Circulo.php';
require_once 'Rectangulo.php';

class Forma
{
    protected $centro;

    public function __construct(Punto $centro)
    {
        $this->centro = $centro;
    }

    public function area()
    {
        return 0; // no se usa, pero se pide para el ejercicio
    }
}

// Crear un objeto Punto para el centro que usaremos en la clase Forma
$centro = new Punto(10, 10);

// Crear objetos Rectangulo y Circulo
$rectangulo = new Rectangulo($centro, 8, 12);
$circulo = new Circulo($centro, 5);

// Mostrar resultados con el área de cada una de las formas
echo "RESULTADOS DE LAS ÁREAS DE LAS DISTINTAS FORMAS" . "<br>";
echo "Se han creado tres objetos: Rectangulo, Circulo y Punto con ellos se realiza el siguiente ejercicio" . "<br>";
echo "Área del rectángulo: " . $rectangulo->getArea() . "<br>";
echo "Área del círculo: " . $circulo->getArea() . "<br>";
