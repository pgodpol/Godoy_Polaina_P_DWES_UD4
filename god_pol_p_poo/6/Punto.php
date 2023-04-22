<?php
/*
EJERCICIO 6. Alumno Pedro Godoy Polaina
Crea una función que reciba dos parámetros de entrada de tipo clase Punto 
(realizado en ejercicio 01) y que devuelva la distancia euclídea entre esos 
dos puntos. Ejecuta 3 llamadas de ejemplo de la función creada.
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

    // Función que realiza el cálculo de la distancia euclídea entre dos puntos
    // Lo hacemos public static para que pueda ser llamado sin terner que crear instancia
    // de la función
    public static function getDistanciaEuclidea(Punto $a, Punto $b)
    {
        return sqrt(pow($b->getX() - $a->getX(), 2) + pow($b->getY() - $a->getY(), 2));
    }
    
}

// Instanciando tres objetos
$punto1 = new Punto(10, 24);
$punto2 = new Punto(1, 12);
$punto3 = new Punto(8, 14);

// Calculamos la distancia euclídea entre los puntos. La llamada se hace anteponiendo 
// por ser un método static
echo 'Distancia euclídea entre Punto 1 y Punto 2 = '.Punto::getDistanciaEuclidea($punto1, $punto2).'<br>';
echo 'Distancia euclídea entre Punto 2 y Punto 3 = '.Punto::getDistanciaEuclidea($punto2, $punto3).'<br>';
echo 'Distancia euclídea entre Punto 1 y Punto 3 = '.Punto::getDistanciaEuclidea($punto1, $punto3).'<br>';
