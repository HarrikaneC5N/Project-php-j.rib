<?php

session_start();

$word = $_SESSION['word'] = 'Autruche';
// $arrayToFind [] = $_SESSION['toFind'] = $toFind;
$toFind[] = [];

    $letter = $_SESSION['letter'] = $_POST['letter'];
    $wordArray [] = $_SESSION['wordArray'] = [];
    $try = $_SESSION['try'] = 10;

    echo "Le mot : ";
    // initialisation du tableau
    for ($i = 0; $i < strlen($word); $i++) {
        $wordArray = $word[$i];
        $toFind = "_ ";
    }
?>