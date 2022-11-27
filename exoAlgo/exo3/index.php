<?php

session_start();

$word = $_SESSION['word'] ='Autruche';
// $arrayToFind [] = $_SESSION['toFind'] = $toFind;
$toFind[] = [];

if(isset($_POST['letter'])){
    $letter = $_SESSION['letter'] = $_POST['letter'];
    $wordArray []= $_SESSION['wordArray']= [];
    $try = $_SESSION['try'] = 10;
    
    echo "Le mot : ";
    // initialisation du tableau
    for($i = 0; $i < strlen($word); $i++){
        $wordArray = $word[$i];
        $toFind = "_ ";
    }
    
}
elseif(!isset($_POST['letter'])){
    echo "yo";
}
var_dump($_SESSION);

?>

<form action="" method="post" >
        <label for="letter"> Essayez une lettre : </label>
        <input type="text" name="letter" id="letter" minlength="1" maxlength="2" required>
        <input name="letter" type="text"  minlength="1" maxlength="2" required>
        <input type="submit" value=" verifier ">
</form>
