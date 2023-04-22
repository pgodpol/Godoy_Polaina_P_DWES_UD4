<?php

/*
EJERCICIO 2. Alumno Pedro Godoy Polaina
Crea una clase llamada Linea con cuatro propiedades/atributos denominados x1, x2, y1 e y2, 
con constructor y con un método que obtenga el punto medio del segmento usando dichas 
propiedades/atributos. Crea 3 instancias/objetos de la clase Linea y ejecuta en ellos 
el método creado.
*/
class Linea
{
    // Atributos privados
    private $x1;
    private $x2;
    private $y1;
    private $y2;

    // Método constructor con cuatro parámetros de entrada
    public function __construct($x1, $x2, $y1, $y2)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }

    // Método para calcular el punto medio de los segmentos
    public function getPuntoMedio()
    {
        return array(
            'x' => ($this->x1 + $this->x2) / 2,
            'y' => ($this->y1 + $this->y2) / 2
        );
    }
}

// Instanciación de tres objetos de la clase Linea
$linea1 = new Linea(1, 4, 2, 5);
$linea2 = new Linea(6, 9, 7, 10);
$linea3 = new Linea(11, 14, 12, 15);

// Asignación del punto medio para cada instancia de la clase Linea
$puntoMedio1 = $linea1->getPuntoMedio();
$puntoMedio2 = $linea2->getPuntoMedio();
$puntoMedio3 = $linea3->getPuntoMedio();

// Presentación en pantalla del resultado
echo 'Punto medio de la línea 1: (' . $puntoMedio1['x'] . ', ' . $puntoMedio1['y'] . ')<br>';
echo 'Punto medio de la línea 2: (' . $puntoMedio2['x'] . ', ' . $puntoMedio2['y'] . ')<br>';
echo 'Punto medio de la línea 3: (' . $puntoMedio3['x'] . ', ' . $puntoMedio3['y'] . ')<br>';
