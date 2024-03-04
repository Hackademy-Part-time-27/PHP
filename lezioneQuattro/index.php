<?php
//! le funzioni

// function saluta($nome = 'noname'){
//     return "Ciao a tutti sono $nome \n";
// }

// $frase = saluta('Agostino');
// $frase1 = saluta('Giacomo');
// $frase2 = saluta();

// echo $frase;
// echo $frase1;
// echo $frase2;
// var_dump($frase);

// $stringa = 'ciao';
// $stringa = 123;

//! come dichiarare una classe
// class Person {
//     public static $counter = 0;
//     public $name;
//     public $lastName;
//     public $eta;
//     public $preferredColor;
//     public $driverLicense; //!boolean

//     public function __construct($nome, $cognome, $anni, $colore, $patente = null){
//         $this->name = $nome;
//         $this->lastName = $cognome;
//         $this->eta = $anni;
//         $this->preferredColor = $colore;
//         $this->driverLicense = $patente;
//         self::$counter += 1; //! anche per di quà
//     }

//     public function presentati(){
//         echo "Ciao a tutti, mi chiamo $this->name $this->lastName, ho $this->eta anni e il mio colore preferito è $this->preferredColor \n";
//     }

//     public static function personeCreate(){
//         echo "Fino a questo momento sono state create " . self::$counter . " persone...";
//     }
// }

// $giacomo = new Person('Giacomo', 'Curatella', 35, 'Rosso', true);
// $mario = new Person('Mario', 'Rossi', 16, 'Verde', false);

// $mario->presentati();

// var_dump($giacomo);
// var_dump($mario);

// echo Person::personeCreate();
// $giacomo->name;
// $mario->presentati();

// $giacomo->name = 'Giacomo';
// $giacomo->lastName = "Curatella";
// $giacomo->eta = 35;
// $giacomo->preferredColor = "Rosso";
// $giacomo->driverLicense = true;

// var_dump($giacomo);
// var_dump($mario);

// $agostino = new Person();
// $agostino->name = 'Agostino';
// $agostino->eta = 22;

// var_dump($agostino);

// $mario = new Person();
// $mario->name = 'Mario';
// $mario->eta = 44;

// var_dump($mario);

// class Vassoio {
//     public $forma;
//     // public $ingrediente;
// }

// $tortaDiMele = new Vassoio();
// $tortaDiMele->forma = 'rettangolare';


// var_dump($tortaDiMele);


//! goal creare degli inviti per un matrimonio
class Biglietto {
    public static $counter = 0;
    public static $data;
    public static $indirizzo = 'Via le dita dal naso, 288';
    public $destinatario;

    public function __construct($destinatario, $data = '30/02/2024'){
        $this->destinatario = $destinatario;
        self::$data = $data;
        self::$counter++;
    }

    public function invita(){
        echo "Caro $this->destinatario, sei ufficialmente invitato il giorno " . self::$data . " al nostro matrimonio in " .  self::$indirizzo . " , mi raccomando non mancare! \n";
    }

    public static function numeroDiInvitati(){
        echo "Sono state invitate " . self::$counter . " persone al tuo matrimonio \n";
    }
}

$invito1 = new Biglietto('Famiglia Rossi');
$invito2 = new Biglietto('Famiglia Verdi');
$invito3 = new Biglietto('Famiglia Gialli');
$invito1->invita();
$invito2->invita();
$invito3->invita();

Biglietto::numeroDiInvitati();

