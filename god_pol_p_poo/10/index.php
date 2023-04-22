<?php
/*
EJERCICIO 10. Alumno Pedro Godoy Polaina
Crea una clase C que herede de una clase B y que la clase B herede de A. 
La clase C heredará todos los métodos y atributos de B y B de A. Como mínimo, 
una función de A, de B y de C tienen que tener el mismo nombre pero que hagan 
cosas distintas. Crea 3 instancias/objetos de las clases A, B y C y 
ejecuta todos los métodos que hayas creado.
*/


// Importamos la clase A y B y C
require_once 'A.php';
require_once 'B.php';
require_once 'C.php';


// Creando los objetos
$a = new A("Seres vivos");
$b = new B("Invertebrados", 6);
$c = new C("Insectos", 6, "tacto y vibración");

// Ejecutando todos los métodos
$a->respirar(); // Seres vivos respiran.
$a->reproducirse(); // Seres vivos -asexual.

$b->respirar(); // Invertebrados está respirando.
$b->andar(); // Invertebrados se está moviendo con 6 patas.
$b->reproducirse(); // Invertebrados resproduccion mediante huevos.

$c->respirar(); // Insectos respiran.
$c->andar(); // Insectos andan con con 6 patas.
$c->interactuar(); // Insectos se está comunicando con sus antenas.
$c->reproducirse(); // Insectos resproduccion por fecundación.



