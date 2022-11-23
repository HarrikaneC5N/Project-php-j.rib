<?php 
// Création de mes tableaux pour l'encryptage de mes données
$alphaUp =range('A', 'Z');
$alphaLow =range('a','z');

$texts = $_POST['text'] ;
$encrypt =[];
$finalWord =[];

for($i=0; $i<strlen($texts);$i++){
    // echo "<br>".$texts[$i];
    $encrypt [$i] = $texts[$i];

}
// foreach pour recuperer mes lettres dans ma variable
foreach($encrypt as $encArray){
    // je compare ma lettre au tableau en majuscule puis je l'encrypte et la stock dans une variable
    foreach($alphaUp as $key => $alfUp){
        if($encArray === $alfUp){
            echo "<br>";
            $encrypted = $key+2;
            $finalWord[$key] = $alphaUp[$encrypted%26];
        }
    }
    // je compare ma lettre au tableau en minuscule puis je l'encrypte et la stock dans une variable
    foreach($alphaLow as $key => $alfLow){
        if($encArray === $alfLow){
            echo "<br>";
            $encrypted = $key+2;
            $finalWord[$key] = $alphaLow[$encrypted%26]; 
        }
    }
}
echo " Le mot encrypté : ".implode($finalWord)."<br>";
// Affichage mot décrypté
echo " Le mot décrypté : ".$texts."<br>";