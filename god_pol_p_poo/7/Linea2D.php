<?php
/*
EJERCICIO 7. Alumno Pedro Godoy Polaina
Crea una clase llamada Linea2D con dos propiedades/atributos denominados p1 y p2 
de tipo clase Punto (realizado en ejercicio 01) y con dos métodos, uno que 
obtenga el punto medio del segmento y otro que obtenga la distancia euclídea, 
ambos usando dichas propiedades/atributos. Crea 3 instancias/objetos de la clase 
Linea2D y ejecuta en ellos los dos métodos creado.
*/


// Importamos la clase Punto
require_once 'Punto.php';

// Creación de la clase Linea2D
class Linea2D
{
    // Atributos privados de la clase Linea2D, que son dos puntos
    private $p1;
    private $p2;

    // Constructor de la clase Linea2D, que recibe dos parámetros que son objetos Punto
    public function __construct(Punto $p1, Punto $p2)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
    }

    // Devuelve el punto medio de la línea en forma de objeto de la clase Punto
    public function getPuntoMedio()
    {
        $x = ($this->p1->getX() + $this->p2->getX()) / 2;
        $y = ($this->p1->getY() + $this->p2->getY()) / 2;
        // Con los parámetros creo un objeto Punto que será el punto medio.
        $pMedio = new Punto($x, $y);
        // Devuelvo el objeto creado
        return $pMedio;
    }

    // Función que devuelve la distancia euclídea entre los dos puntos de la línea
    public function getDistanciaEuclidea()
    {
        return Punto::getDistanciaEuclidea($this->p1, $this->p2);
    }
}

// Creación de tres objetos Linea2D con diferentes puntos
$linea1 = new Linea2D(new Punto(-1, 7), new Punto(3, 6));
$linea2 = new Linea2D(new Punto(1, 5), new Punto(5, 9));
$linea3 = new Linea2D(new Punto(0, 0), new Punto(3, 0));

// Ejecución de las funciones y mostrado en pantalla
echo "RESULTADO DE LAS OPERACIONES:" . "<br>";
echo "Punto medio de línea 1: (" . $linea1->getPuntoMedio()->getX() . ", " . $linea1->getPuntoMedio()->getY() . ")<br>";
echo "Distancia euclídea de línea 1: " . $linea1->getDistanciaEuclidea() . "<br>";
echo "-------------------------------------------". "<br>";
echo "Punto medio de línea 2: (" . $linea2->getPuntoMedio()->getX() . ", " . $linea2->getPuntoMedio()->getY() . ")<br>";
echo "Distancia euclídea de línea 2: " . $linea2->getDistanciaEuclidea() . "<br>";
echo "-------------------------------------------" . "<br>";
echo "Punto medio de línea 3: (" . $linea3->getPuntoMedio()->getX() . ", " . $linea3->getPuntoMedio()->getY() . ")<br>";
echo "Distancia euclídea de línea 3: " . $linea3->getDistanciaEuclidea() . "<br>";
