<?php

/*
EJERCICIO 5. Alumno Pedro Godoy Polaina
Crea una clase llamada Estudiante con dos propiedades/atributos denominados 
nombre y notas (array/lista), con constructor y con métodos que obtenga el nombre,
 modifique el nombre, obtenga las notas, modifique las notas y, por último, que 
 obtenga la media de esas notas y las muestre. Crea 3 instancias/objetos de la 
 clase Estudiante y ejecuta en ellos el método creado..
*/

// Creación de la Clase Estudiante
class Estudiante
{
    private $nombre;
    private $notas;

    // Método constructor con dos parámetros de entrada
    public function __construct($nombre, $notas)
    {
        $this->nombre = $nombre;
        $this->notas = $notas;
    }

    // Método GET para el nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    // Método SET para modificar el nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Método GET para obtener las notas
    public function getNotas()
    {
        return $this->notas;
    }

    // Método SET para modificar las notas
    public function setNotas($notas)
    {
        $this->notas = $notas;
    }

    // Método que obtendrá la media de las notas
    public function getMediaNotas()
    {
        $sumaNotas = 0;
        foreach ($this->notas as $nota) {
            $sumaNotas += $nota;
        }
        return $sumaNotas / count($this->notas);
    }
}

// Instanciando 3 objetos de la clase Estudiante
$estudiante1 = new Estudiante('Pedro Godoy', array(8, 9, 7));
$estudiante2 = new Estudiante('María Sánchez', array(7, 5, 10));
$estudiante3 = new Estudiante('Pablo López', array(9, 8, 5));

// Imprimimos el nombre y la nota media de cada estudiante
echo 'El nombre del estudiante 1 es: ' . $estudiante1->getNombre() . ' y su nota media es: ' . $estudiante1->getMediaNotas() . '<br>';
echo 'El nombre del estudiante 2 es: ' . $estudiante2->getNombre() . ' y su nota media es: ' . $estudiante2->getMediaNotas() . '<br>';
echo 'El nombre del estudiante 3 es: ' . $estudiante3->getNombre() . ' y su nota media es: ' . $estudiante3->getMediaNotas() . '<br>';
