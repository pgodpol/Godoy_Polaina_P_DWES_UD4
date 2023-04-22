<?php

/*
EJERCICIO 4. Alumno Pedro Godoy Polaina
Crea una clase llamada Circulo con una propiedad/atributo denominado radio, con constructor 
y con dos métodos que calculen el area del círculo y la circunferencia del círculo 
usando dichas propiedades/atributos. Crea 3 instancias/objetos de la clase Circulo y 
ejecuta en ellos los dos métodos creados.
*/

// Creación de la Clase Circulo
class Circulo
{
    // Atributos privados
    private $radio;

    // Método constructor con un parámetro de entrada
    public function __construct($radio)
    {
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

// Instanciando tres objetos de la clase Circulo
$circulo1 = new Circulo(4);
$circulo2 = new Circulo(6);
$circulo3 = new Circulo(8);

// Mostrando en pantalla los cálculos para cada instancia
echo 'Área del circulo 1: ' . $circulo1->getArea() . ' Circunferencia: ' . $circulo1->getCircunferencia() . '<br>';
echo 'Área del circulo 2: ' . $circulo2->getArea() . ' Circunferencia: ' . $circulo2->getCircunferencia() . '<br>';
echo 'Área del circulo 3: ' . $circulo3->getArea() . ' Circunferencia: ' . $circulo3->getCircunferencia() . '<br>';
