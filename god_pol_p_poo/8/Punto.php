<?php

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