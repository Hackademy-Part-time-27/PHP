<?php
//! astrazione
//! incapsulamento
//!invocazione

//! declaration
// function saluta(){
//     echo "Buonasera a tutti!";
// }
//! invocation
// saluta(); //! user function

//! codice libero
//! count(); //! built-in function

//! cuociamo la pasta
// function pentolaSulFornello(){
//     echo "Ho messo la pentola sul fornello \n";
// }

// function saliamoAcqua(){
//     echo "Ho messo del sale nell'acqua \n";
// }

// function buttaLaPasta(){
//     echo "Ho messo la pasta nell'acqua \n";
// }

// function scola(){
//     echo "Scolo la pasta \n";
// }

// function impiatta(){
//     echo "Impiatto la pasta \n";
// }

// function cuoco(){
//     echo "Sto cuocendo la pasta... \n";
//     pentolaSulFornello();
//     saliamoAcqua();
//     buttaLaPasta();
//     scola();
//     impiatta();
// }

// cuoco();

// function sum(){
//     return 1 + 3;
// }

// function mul(){
//     return sum() * 2;
// }



// $numero = 12; //! global

// //! parametri per riferimento
// function changeNumber(&$int){
//     return "Il valore interno della funzione è: " . $int = 100;
// }

// //! parametri formali -> reali
// function sum($num = 20 valore di default){
//     return $num * 2;
// }

// var_dump(changeNumber($numero));
// echo $numero;

//! (base * h) / 2
// function base($c, $d){
//     return $c * $d;
// }

// function calcolaArea($a, $b){
//     return base($a, $b) / 2;
// }

// var_dump(calcolaArea(10,20));

// function sum($a){
//     return $a + 10;
// }

// function divideAndSum($a){
//     return sum($a) / 100;
// }

// function calculator($operation, $numero){
//     if($operation === 'somma'){
//         return sum($numero);
//     }else if($operation === 'dividi'){
//         return divideAndSum($numero);
//     }else {
//         echo "Tipo di operazione non supportata!";
//     }
// }

// var_dump(calculator('ciccio', 12));

// $marco = ['marco', 'verdi', 25];

// $giovanni = ['giovanni', 'gialli', 40];

// $rosa = ['rosa', 'viola', 18];

// echo "ciao a tutti sono $marco[0] $marco[1] ed ho $marco[2] anni \n";
// echo "ciao a tutti sono $giovanni[0] $giovanni[1] ed ho $giovanni[2] anni \n";
// echo "ciao a tutti sono $rosa[0] $rosa[1] ed ho $rosa[2] anni \n";

// function creaPersona($name, $lastName, $age){
//     echo "Ciao a tutti, mi chiamo $name $lastName ed ho $age anni \n";
//     echo "me ne mancano ancora " . 100 - $age . " per compiere 100 anni! \n";
// }

// // creaPersona('giovanni', 'verdi', 35);
// // creaPersona('marco', 'rossi', 44);
// // creaPersona('rosa', 'fucsia', 22);
// $nome = readline('come ti chiami?: ');
// $cognome = readline('cognome?: ');
// $anni = readline('anni?: ');
// creaPersona($nome, $cognome, $anni);

//! raggio * raggio * 3.14

// function calcolaArea($r){
//     return round(($r * $r) * pi(), 2);
// }

// $cerchio = calcolaArea(15);

// echo "L'area del cerchio è: $cerchio";

// function reversMyName($name){
//     echo "Il tuo nome al contrario è " . strrev($name);
// }

// reversMyName('giacomo');

// $numero = 13;

// $numero = 'ciao';

// echo 12 + 12;
// echo "12" + "12";
