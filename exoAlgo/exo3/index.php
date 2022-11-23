<?php

session_start();

$word = $_SESSION['word'] ='Autruche';

if(isset($_POST['letter'])){
    $letter = $_SESSION['letter'] = $_POST['letter'];
    $wordArray []= $_SESSION['wordArray']= [];
    $try = $_SESSION['try'] = 10;
    
    echo "Le mot : ";
    for($i = 0; $i < strlen($word); $i++){
        $wordArray = $word[$i];
        echo "_ "; 
    }
    







    }


elseif(!isset($_POST)){
    echo "yo";
}
























?>

<form action="" method="post" >
        <label for="letter"> Essayez une lettre : </label>
        <input type="text" name="letter" id="letter" required>
        <input type="submit" value=" verifier ">
</form>
