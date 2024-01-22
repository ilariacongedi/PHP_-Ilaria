<?php
abstract class Autosalone{
    // Attributi
    public $Marchio;
    public $Modello;
    public $Tipologia;
    private $Prezzo;

    // Funzione costruttore
    public function __construct($_Marchio, $_Modello, $_Tipologia, $_Prezzo)
{
    $this->Marchio = $_Marchio;
    $this->Modello = $_Modello; 
    $this->Tipologia = $_Tipologia;
    $this->Prezzo = $_Prezzo;
}

    abstract public function preventivo();

}

class Automobile extends Autosalone{
    public $Km;
    public function __construct($_Marchio, $_Modello, $_Tipologia, $_Prezzo, $_Km){
        parent::__construct($_Marchio, $_Modello, $_Tipologia, $_Prezzo);
        $this->Km =$_Km;
    }

    public function preventivo(){
        echo"Chiedi un preventivo \n";
    }
    use DriveTest;
}


$macchina1 = new Automobile("Ford", "Mondeo", "Berlina", 1000, "25,000");
var_dump($macchina1);
$macchina1->DriveTest();
$macchina1->preventivo();



class Moto extends Autosalone{
    public $Condizioni;
    public function __construct($_Marchio, $_Modello, $_Tipologia, $_Prezzo, $_Condizioni)
    {
        parent::__construct($_Marchio, $_Modello, $_Tipologia, $_Prezzo);
        $this->Condizioni = $_Condizioni;
    }
    
    public function preventivo(){
        echo"Chiedi un preventivo \n";
    }
    use DriveTest;
}

$moto1 = new Moto("Honda", "Cbr-650", "Sport", 5000, "ottime");
var_dump($moto1);
$moto1->DriveTest();
$moto1->preventivo();


trait DriveTest {
    public function DriveTest(){
        echo"Fai ora il tuo Test-Drive \n";   
    }
    
}

?>