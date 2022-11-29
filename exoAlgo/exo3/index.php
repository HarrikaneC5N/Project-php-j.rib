<?php
session_start();
$alphaLow = range('a','z');
$alphaUp = range('A','Z');

$word = $_SESSION['word'] ='Autruche';
// $arrayToFind [] = $_SESSION['toFind'] = $toFind;
$toFind = [];
$found = [];

if(isset($_POST['letter'])){
    $letter = $_SESSION['letter'] = $_POST['letter'];
    $wordArray []= $_SESSION['wordArray']= [];
    $try = $_SESSION['try'] = 10;

    foreach($word as $wordLetter){
        var_dump($wordLetter);
    }
    if($_POST['letter'] == )

        for($i = 0; $i < strlen($word); $i++){
            $wordArray = $word[$i];
            $toFind[] = "_ ";
        }

        for($i=0; $i<strlen($texts);$i++){
            // echo "<br>".$texts[$i];
            $encrypt [$i] = $texts[$i];

        }


    // initialisation du tableau
    // foreach sur la longueur du mot, pour chaque lettre j'ajoute un "_" dans mon tableau
    for($i = 0; $i < strlen($word); $i++){
        $wordArray = $word[$i];
        $toFind[] = "_ ";
    }

    foreach ($toFind as $underLetter){
        echo $underLetter;
    }
    echo "<br>";
}

?>

<form action="" method="post" >
    <label for="letter"> Essayez une lettre : </label>
    <input type="text" name="letter" id="letter" maxlength="1" onkeypress="return /[a-z]/i.test(event.key)" required>
    <input type="submit" value=" Essayer ">
</form>
