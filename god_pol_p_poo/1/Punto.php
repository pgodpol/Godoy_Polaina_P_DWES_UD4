<?php
/*
EJERCICIO 1. Alumno Pedro Godoy Polaina
 Crea una clase llamada Punto con dos propiedades/atributos denominados x e y, con 
 constructor y con cuatro métodos (getter y setter), uno para obtener x, otro para 
 obtener y, otro para modificar x y otro método para modificar y. Crea 3 instancias/objetos 
 de la clase Punto y ejecuta en ellos los cuatro métodos creados.
*/

// Creación de la clase Punto
class Punto
{
    // Atributos privados
    private $x;
    private $y;

    // Método constructor con dos parámetros
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    // Implementación métodos Get
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
    // Implementación métodos Set
    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }
}

// Instanciando tres objetos
$punto1 = new Punto(10, 24);
$punto2 = new Punto(11, 12);
$punto3 = new Punto(8, 14);

// Ejecutanco cada uno de los métodos creados
$punto1->getX();
$punto2->getY();
$punto3->setX(7);
$punto3->setY(8);

echo 'Punto 1: X = ' . $punto1->getX() . ' Y = ' . $punto1->getY() . '<br>';
echo 'Punto 2: X = ' . $punto2->getX() . ' Y = ' . $punto2->getY() . '<br>';
echo 'Punto 3: X = ' . $punto3->getX() . ' Y = ' . $punto3->getY() . '<br>';
