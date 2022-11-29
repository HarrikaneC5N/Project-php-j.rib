<?php

session_start();

$word = $_SESSION['word'] ='Autruche';

// $arrayToFind [] = $_SESSION['toFind'] = $toFind;
$toFind[] = [];

if(isset($_POST['letter'])){
    $letter = $_SESSION['letter'] = $_POST['letter'];
    $wordArray []= $_SESSION['wordArray']= [];
    $try = $_SESSION['try'] = 10;

    // initialisation du tableau
    for($i = 0; $i < strlen($word); $i++){
        $wordArray = $word[$i];
        $toFind[] = "_ ";
    }
}

?>
<form action="" method="post" >
        <label for="letter"> Essayez une lettre : </label>
        <input type="text" name="letter" id="letter" minlength="1" maxlength="2" required>
        <input type="submit" value=" verifier ">
</form>
