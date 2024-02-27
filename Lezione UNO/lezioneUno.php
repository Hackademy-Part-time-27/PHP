<?php
//! PRIMITIVI
// echo 'Ciao dall\'hackademy 27';
$name = 'giacomo'; //stringa
$lastName = 'curatella';
$is_student = true; //boolean
$age = 24; // integer
$float = 2.89;  //float

// echo 'ciao sono ' . $name . ' ' . $lastName . ' ed ho ' . $age . ' anni';
// echo gettype ($name) . "\n";
// var_dump($name);

//! COMPLESSI
//? oggetti
// $oggetto = {
//     "chiave" : "valore",
// };

// var_dump($array);
//? gli array
// $array = [
//     'cognome', //1
//     'nome',
//     'eta'
// ];

$assoc = [
    'lastname' => 'curatella',
    'name' => 'giacomo',
    'age' => 35,
    'coloriPreferiti' => [
        'rosso',
        'blue',
        'giallo',
        'marche' => [
            'fiat',
            'renault',
            'audi',
        ]
    ]
];

// var_dump($assoc['coloriPreferiti']['marche'][2]);

//! gli operatori matematici
//  + //somm
//  / //divisione
//  - // sottrazione
//  * // moltiplicazione
// % // modulo di

//! operatori di confronto
// > // maggiore
// >=  //maggiore o uguale
// <  //minore
// <= // minore o uguale
// == //uguale
// === // identico
// != //diverso
// !== // strettamente diverso
// <> // diverso in MySql

// $a = 2;
// $b = 4;
// $val = $a === $b;

// var_dump($val);

// $is_logged_in = true;

// if($is_logged_in){
//     echo "l'utente è loggato";
// }
//else {
//     echo "l'utente non è loggato";
// }

//! operatori logici
//? && AND
//? || OR
//? !

//! TRUTY E FALSY
//* FALSY
//? 0 -> falsy
//? NULL -> falsy
//? undefined -> falsy
//? false -> falsy
//? '' -> falsy
//* TRUTY
//? true -> 1
//? 'asdfasdf' ->  true
//? [array NON vuoto] -> true
//? {oggetto pieno} -> true
//? maggiore di -> true


$eta = 16;
$patentato = false;
// const NOME = 'giacomo';
// var_dump($NOME);

// $nome = 'giacomo' . "\n";
// echo $nome;
// $noMe= 'ciccio';
// echo $nome;
// if($eta >= 16 && !$patentato){
//     echo "Vai a prendere la patente";
// }else if($eta >= 18 && $patentato){
//     echo "Perfetto, sei maggiorenne e sei patentato!";
// }else {
//     echo "Non hai ancora l'eta e quindi non puoi prendere la patente!";
// }

