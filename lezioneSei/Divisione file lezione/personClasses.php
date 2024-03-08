<?php

require_once('./traits.php');

abstract class Person {
    use Respira;
    public $name;
    public $lastName;
    public $age;

    public function __construct($name, $lastName, $age){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function saluta(){
        echo "Ciao a tutti sono $this->name $this->lastName \n";
    }

    public abstract function battiLeMani ();
    //! quando si dichiara un metodo astratto tutte le classi figlie lo dovranno avere obbligatoriamente
}

class Teacher extends Person {
    public $salary;
    public function __construct($name, $lastName, $age, $salary){
        parent::__construct($name, $lastName, $age);
        $this->salary = $salary;
    }

    public function battiLeMani(){
        echo "Sto battendo le mani \n";
    }
}

$docente = new Teacher('Mario', 'Rossi', 44, 4000);




//! introduciamo le interfacce o tratti
