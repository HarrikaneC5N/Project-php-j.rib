<?php 
$alphaUp =range('A', 'Z');
$alphaLow =range('a','z');

$texts = $_POST['text'] ;

$encrypt =[];

$finalWord =[];

for($i=0; $i<strlen($texts);$i++){
    // echo "<br>".$texts[$i];
    $encrypt [$i] = $texts[$i];

}

// foreach pour désassembler ma variable $encrypt
foreach($encrypt as $encArray){
    echo "<br> lettre ".$encArray;
    echo "<br>";
    // foreach($alphaUp as $alfUp){
    //     if($encArray === $alfUp){
    //         echo "<br>";
    //         $encrypted = $alphaUp+2;
    //     }
    // }
    foreach($alphaLow as $key => $alfLow){
        if($encArray === $alfLow){
            echo "<br>";
            $encrypted = $key+2;
            $finalWord[$key] = $alphaLow[$encrypted%26]; 
        }
    }
    // $encrypted = $alphaLow+2;
    // echo " encrypted $encrypted encrypted ";
    // echo "<br>".$encrypted."<br>";
}
echo " Le mot encrypté ".implode($finalWord);
