<?php

require_once('./traits.php');

abstract class Animal {
    use Respira;
    public $paw;
    public $color;

    public function __construct($paw, $color){
        $this->paw = $paw;
        $this->color = $color;
    }

    public function corro(){
        echo "Sto correndo!!! \n";
    }

    public abstract function bevo();
}

class Dog extends Animal {
    public $name;
    public function __construct($paw, $color, $name){
        parent::__construct($paw, $color);
        $this->name = $name;
    }
    public function bevo(){
        echo "Prendo l'acqua con la bocca \n";
    }
}

class Monkey extends Animal{
    public function bevo(){
        echo "Prendo l'acqua con le zampine \n";
    }
}