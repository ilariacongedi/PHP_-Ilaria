<?php

class Restaurant{
    public $piatti;
    public $bevande;

    public function __construct(array $piatti,array $bevande){
        $this->piatti = $piatti;
        $this->bevande = $bevande;

    }

//menu 
  public function primiPiatti(){
    echo "Menu dei piatti: \n";
    foreach($this->piatti as $piatto)
    echo $piatto->name . " " . $piatto->price . "\n";
  }

//bevande
public function Bevande(){
    echo "Menu delle bevande: \n";
    foreach($this->bevande as $bevanda)
    echo $bevanda->name . " " . $bevanda->price . "\n";
  }
}

//inserimento oggetti
class Piatto{
    public $name,$price;

    public function __construct($_name,$_price){
        $this->name = $_name;
        $this->price = $_price;
    }
}

$collezionePiatti = [
    new Piatto('Carbonara', 13),
    new Piatto('Amatriciana', 14),
    new Piatto('Pasta al forno', 13),  
];

class Bevanda {
    public $name,$price;

    public function __construct($_name,$_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
}

$collezioneBevande = [
    new Bevanda('Vino', 20),
    new Bevanda('Birra', 7),
    new Bevanda('Acqua', 2),
];

$daAlessio = new Restaurant($collezionePiatti, $collezioneBevande);
$daIlaria->primiPiatti();
$daIlaria->Bevande();