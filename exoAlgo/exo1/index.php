<?php 
//creation tableau
$notes = [15,12,19,8,9,-5,2,1];
$smaller = $notes[0];

function minNote($notes,$smaller){
    echo "Calcule chiffre le bas haut de la liste";
    for($i = 0; $i < sizeof($notes); $i++){
        if($notes[$i] <= $smaller){
            $smaller = $notes[$i];
            echo "<p> $smaller est le plus petit nombre du tableau </p>";
        }
    }
}

minNote($notes, $smaller);

$higher = $notes[0];

function maxNote($notes,$higher){
    echo "<br><br><br><br><br>";
    echo "Calcule chiffre le plus haut de la liste";
    for($i = 0; $i < sizeof($notes); $i++){
        if($notes[$i] >= $higher){
            $higher = $notes[$i];
            echo "<p> $higher est le plus grand nombre du tableau </p>";
        }
    }
}
maxNote($notes, $higher);


