<?php

/*
EJERCICIO 9. Alumno Pedro Godoy Polaina
crea una función que reciba un parámetro de entrada de tipo array/lista, con identificador
 "grupos", de tamaño 3 cuyos elementos sean de tipo array/lista de clase Estudiante
  (realizado en ejercicio 05). La función tiene que devolver el índice del array/lista 
  "grupos" cuyo promedio de notas del grupo de estudiantes sea el más alto. 
  Ejecuta 1 llamada de ejemplo de la función creada.
*/

// Importamos la clase Estudiante
require_once 'Estudiante.php';

function promedioMayor($grupos)
{
    $promedioMasAlto = null;
    $indiceMasAlto = null;

    // Iterardor de estudiantes
    for ($i = 0; $i < count($grupos); $i++) {
        $promedioGrupo = 0;
        $estudiantes = $grupos[$i];

        // Iterador de grupos
        for ($j = 0; $j < count($estudiantes); $j++) {
            $promedioGrupo += $estudiantes[$j]->getMediaNotas();
        }

        // cálculo del promedio del grupo
        $promedioGrupo /= count($estudiantes);

        // Guarda el índice más alto encontrado
        if ($promedioGrupo > $promedioMasAlto) {
            $promedioMasAlto = $promedioGrupo;
            $indiceMasAlto = $i;
        }
    }

    // Devuelve el índice mayor hallado
    return $indiceMasAlto;
}


// Introducción de datos en array de grupos mediante la instanciación de estudiantes

$grupoA = [
    new Estudiante("Estudiante 1", [5, 3, 9]),
    new Estudiante("Estudiante 2", [2, 9, 6]),
    new Estudiante("Estudiante 3", [4, 0, 6]),
];
$grupoB = [
    new Estudiante("Estudiante 4", [8, 9, 7]),  // pongo aquí las mejores notas
    new Estudiante("Estudiante 5", [9, 10, 8]),
    new Estudiante("Estudiante 6", [5, 9, 10]),
];
$grupoC = [
    new Estudiante("Estudiante 7", [3, 4, 5]),
    new Estudiante("Estudiante 8", [4, 5, 6]),
    new Estudiante("Estudiante 9", [6, 5, 7]),
];

// carga del array grupos con los arrays de estudiantes
$grupos = [$grupoA, $grupoB, $grupoC];

// El indice se calcula sumando 1 a la posición en el array
$indice = promedioMayor($grupos);
echo "El mejor promedio de notas lo tiene el grupo cuyo índice es: " . ($indice + 1) . "\n";
