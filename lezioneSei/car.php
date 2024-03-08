<?php


//! padre
class Car
{
    private $num_telaio;
    
    //! set
    protected function setCarTelaio($numTelaio){
        $this->num_telaio = $numTelaio;
    }
    
    //! get
    protected function getCarTelaio(){
        return $this->num_telaio;
    }
}

//! figlio
class MyCar extends Car
{
    protected $license;
    protected $name;
    
    public function __construct($license, $name, $telaio){
        $this->license = $license;
        $this->name = $name;
        $this->setCarTelaio($telaio);
    }
    
    //! set
    // public function setTelaio($nuovoTelaio){
    //     return $this->setCarTelaio($nuovoTelaio);
    // }
    
    // //! get
    // public function leggiTelaio(){
    //     return $this->getCarTelaio();
    // }

    public function printMessage(){
        echo "La mia macchia è $this->name con targa $this->license e numero di telaio" . $this->getCarTelaio() . "\n";
    }
}

$fiat = new MyCar('AB765XX', 'Fiat', 'çLKJSçLKDJSD');
$fiat->printMessage();


//! “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“.
