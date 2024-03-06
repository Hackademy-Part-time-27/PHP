<?php
//! DRY -> don't repeat your self
//! classe person -> classe padre
//? una classe che estende un'altra eredita TUTTI i metodi e le proprietà di quella classe
//! ambiti di visibilità
//* public tutte le classi figlie possono accedere a quel metodo o proprietà e posso accedere anche dall'esterno
//* protected tutte le classi figlie posso leggere ed accedere a quel metodo o proprietà ma NON da fuori
//* private SOLO LA CLASSE PADRE e quindi quella che la possiede potrà accedere a quella proprietà o metodo e non possiamo accedere ovviamente a queste dall'esterno
class Person {
    public static $cf = 'CFpadre';
    public $name;
    protected $lastName;
    protected $age;
    //! metodo private SOLO della classe person
    private $password;
    public function __construct($nome, $cognome, $anni){
        $this->name = $nome;
        $this->lastName = $cognome;
        $this->age = $anni;
    }

    public function saluta(){
        echo "Buonasera a tutti, sono $this->name $this->lastName ed ho $this->age anni \n";
    }

    //! getter della password
    public function tellmeyourpassword(){
        echo $this->password;
    }

    //! setter della password
    public function setMyPassword($newPassword){
        $this->password = $newPassword;
    }
}

//! classe teacher che estende persona
class Teacher extends Person {
    public static $cf = 'CFTeacher';
    public $salary;

    public function __construct($nome, $cognome, $anni, $stipendio){
        //! passiamo i parametri in ingresso al costruttore padre
        parent::__construct($nome, $cognome, $anni);
        //! valorizziamo la proprietà di QUESTA classe
        $this->salary = $stipendio;
    }

    public function saluta(){
        echo "Salve a tutti sono l'insegnante $this->name $this->lastName e percepisco un salario pari a $this->salary euro \n";
    }

    public function setMyAge($nuovaEta){
        if($nuovaEta >= 18){
            $this->age = $nuovaEta;
        }
    }

    public function tellMeMyLastName(){
        echo $this->lastName;
    }
}

//! classe student che estende persona
class Student extends Person {
    public $average;
    public function __construct($nome, $cognome, $anni, $mediaVoti){
        //! passiamo i parametri in ingresso al costruttore padre
        parent::__construct($nome, $cognome, $anni);
        //! valorizziamo la proprietà di QUESTA classe
        $this->average = $mediaVoti;
    }
    public function saluta(){
        echo "Bella tutti regà sono $this->name $this->lastName e la mia media voti è di $this->average \n";
    }
};

//! creiamo le istanze delle classi
$giacomo = new Person('Giacomo', 'Curatella', 35,);
$insegnante = new Teacher('Marco', 'rossi', 24, 1500);
$studente = new Student('Giovanni', 'debolino', 44, 7.5);

//! accesiamo ai metodi statici delle classi
echo Person::$cf;
echo Teacher::$cf;

//! accediamo ai metodi dell'istanza (oggetto creato dalla classe)
var_dump($giacomo);
var_dump($insegnante);


//! setter
$insegnante->setMyAge(44);
var_dump($insegnante);
//! getter
$insegnante->tellMeMyLastName();
$studente->saluta();