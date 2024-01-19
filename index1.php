<?php

//ESERCIZIO 1
$numbers = [5, 2, 4, 7, 10, 13, 8]; 
$evenNumbers = [];
$sum = 0;

foreach ($numbers as $number) {
  if ($number % 2 == 0) {
    $evenNumbers[] = $number;
    $sum += $number; 
  }
};
$count = count($evenNumbers);
if($count > 0) {
  $average = $sum / $count;
  echo "La media dei numeri pari è: " . $average . "\n"; 
} else {
  echo "Non ci sono numeri pari nell'array";
};


// ESERCIZIO 2
$users = [
    ['name' => 'Pippo', 
 'surname' => 'Pluto', 
 'gender' => 'M'], 
 [
   'name' => 'Carla',
   'surname' => 'Bianchi', 
   'gender' => 'F'
 ],
 [
   'name' => 'Paola',
   'surname' => 'Gregori', 
   'gender' => 'F'
 ],
 [
   'name' => 'Marta',
   'surname' => 'Rossi', 
   'gender' => 'F'
 ],
 [
   'name' => 'Marco',
   'surname' => 'Rossini', 
   'gender' => 'M'
 ],
 [
   'name' => 'Marco',
   'surname' => 'Rossini', 
   'gender' => 'M'
 ],
 ];
 
 foreach ($users as $user) {
   if($user['gender'] == 'M') {
     echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
   } else if ($user['gender'] == 'F') {
     echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n"; 
   } else {
     echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
   }
 };
 

//  ESERCIZIO 3
for($i = 1; $i <= 50; $i++) {

    if($i % 3 == 0 && $i % 5 == 0) {
      echo "HACKADEMY \n"; 
    }
    else if($i % 3 == 0) {
      echo "PHP \n";
    }
    else if($i % 5 == 0) {
     echo "JAVASCRIPT \n";
    }
    else {
      echo $i . "\n";
    }
  
  };

?>