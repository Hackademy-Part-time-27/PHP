<?php

//! la macchina di batnan


//*parte anteriore
abstract class ParteAnteriore {
    //! attacco
    abstract function attacca();
}

//? cannone
class Cannone extends ParteAnteriore {
    public function attacca(){
        echo "Attacco con il cannone \n";
    }
}

//? lanciafiamme
class Lanciafiamme extends ParteAnteriore {
    public function attacca(){
        echo "Attacco con il lancia fiamme \n";
    }
}


//* parte posteriore
//! movimento
abstract class PartePosteriore {
    abstract public function muoviti();
}

//? ruote
class Ruote extends PartePosteriore {
    public function muoviti(){
        echo "Mi sto muovendo con le ruote! \n";
    }
}

//? cingoli
class Cingoli extends PartePosteriore {
    public function muoviti(){
        echo "Mi muovo con i cingoli \n";
    }
}

//! la macchina di Batman
class BatMobile {
    public $parteAnteriore;
    public $partePosteriore;

    public function __construct(ParteAnteriore $parteAnteriore,PartePosteriore $partePosteriore){
        $this->parteAnteriore = $parteAnteriore;
        $this->partePosteriore = $partePosteriore;
    }
}

//! ho creato l'eggetto
$macchina1 = new BatMobile(new Cannone(), new Cingoli());
//! accendo le funzioni della parte anteriore dell'oggetto
$macchina1->parteAnteriore->attacca();
//! accendo le funzioni della parte posteriore dell'oggetto
$macchina1->partePosteriore->muoviti();