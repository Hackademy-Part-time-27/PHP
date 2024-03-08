<?php

require_once('./animalClasses.php');
require_once('./personClasses.php');


$docente = new Teacher('Mario', 'Rossi', 44, 4000);
$fido = new Dog(4, 'brown', 'Fido' );
$scimmia = new Monkey(4, 'Cimmia');
// $persona = new Person('Maria', 'Verdi', 55); //! se la classe è astratta non può istanziare oggetti

// var_dump($docente);
$scimmia->bevo();
$fido->bevo();


// $docente->respira();
// $fido->respira();
