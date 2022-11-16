<?php 
    $hiWlc= nl2br(" Bonjour, c'est moi. \n T'es le bien venu sur mon site");
    $name = "Nicklaus";
    $toFind = "moi";
    function helloYou($hiWlc, $toFind, $name){
        if(str_contains($hiWlc, $toFind)){
            $res = str_replace($toFind,$name, $hiWlc);
            echo $res;
        } else{
            echo "pas trouvé dsl";
        }
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7 </title>
</head>
<body>
    <div>
        <p>
            <?php
                helloYou($hiWlc, $toFind, $name);
            ?>
        </p>
    </div>
</body>
</html> 

