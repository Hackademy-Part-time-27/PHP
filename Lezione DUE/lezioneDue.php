<?php

//! sequenza
// $stringa = 'ciao';
// echo $stringa;

// //! la selezione
// $num = 18;
// if ($num < 20) {
//     //! fai questo....
// } else if ($num > 20) {
//     //! blocco di codice
// } else {
//     //! in tutti gli altri casi esegui questo blocco di codice
// }

// $age = readline('Quanti anni hai: ');
// //! echo gettype($age);
// $finalAge = intval($age);

// //? condizione e valuto
// // se l'utente è maggiorenne
// if($finalAge >= 18){
//     echo "Sei maggiorenne";
// }else{
//     echo "Devi ancora compiere 18";
// }


// $role = strtolower('ADMIN');

// switch ($role) {
//     case 'admin':
//         //? Benvenuto admin!
//         echo "Benvenuto admin";
//         break;

//     case 'user':
//         //? Benvenuto utente!
//         echo "Benvenuto utente!";
//         break;

//     default:
//         //? Per favore crea un account!
//         echo "Per favore registrati!";
//         break;
// }




//! ripetizione
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// for ($i = 0; $i < count($array); $i++) {
//     //! stampami il valore di $i fino a che esaursci gli elementi dentro $array

//     if($array[$i] % 2 == 0){
//         echo "Il numero " . $array[$i] . " è pari \n"; //! \n new line -> a capo
//         // break;
//     }else{
//         // continue;
//         echo "Il numero " . $array[$i] . " è dispari! \n"; //! warning error -> non è bloccante
//     }
// }

// $persone = [
//     ['nome' => 'giacomo'],
//     ['ciao' => 'carlo'],
//     ['ciao' => 'filippo'],
//     ['ciao' => 'genoveffa'],
// ];

// $rubrica = [
//     $giacomo = [
//         'name' => 'giacomo',
//         'surname' => 'curatella',
//         'age' => 35,
//     ],
//     $marco = [
//         'name' => 'marco',
//         'surname' => 'rossi',
//         'age' => 22,
//     ],
// ];


// foreach ($numbers as $chiave => $valore) {
//     //! non posso usare break and continue
//     echo "Il numero $valore ha come indice $chiave \n";
// }

// foreach ($rubrica as $persona) {
//     echo $persona['surname'] . "\n";
// }

//! mi sfogli un foglio excel?
// $rows = [1,2,3,4,5,6,7,8,9,10];
// $columns = ["A","B","C","D","E","F","G",];

// //! cicliamo le righe del foglio
// foreach($rows as $riga){
//     //! se il numero di riga è pari(fai partire il secondo foreach, altrimenti vai avanti)
//     if($riga % 2 === 0){
//         //! per ogni riga
//         echo "Mi trovo a riga $riga \n";
//         foreach ($columns as $colonna) {
//             //! per ogni colonna
//             //! stampo il nome della colonna ed aggiungo il nome della riga
//             //! per capire a che posizine della tabella mi trovo
//             echo "Le colonne della riga sono: " . $colonna . $riga . "\n";
//         }
//     }
//     //! altrimenti niente
// }

//! expected output 
//? 1a 1b 1c
//? 2a 2b 2c

//! while -> mi fai questa cosa fin quando la condizione è vera?
// $i = 0;

// while($i < 10){
//     echo "Sono al ciclo $i \n";
//     $i++;
// }

//! do while -> tu intanto falla, se dopo che l'hai fatta la condizione non è vera -> smetti

// $i = 0;

// do{
//     echo "Sono al ciclo $i \n";
//     $i++;
// }while($i < 10);

//! login
// digita un password_algos
// $lanostraPassword;

// finquando (la nostra pass è !== alla pass inserita dall'utente){
//      continua a chiedergli di inserire la password
// }