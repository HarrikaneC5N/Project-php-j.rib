<?php 
    function hello(){
        // variable contenant du text dans la fonction nl2br permettant l'utilisation du \n
        $hiWlc= nl2br(" Bonjour, c'est moi.\n T'es le bien venu sur mon site");
        echo $hiWlc;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
</head>
<body>
    <div>
        <p>
            <!-- call the function -->
            <?php 
                hello();
            ?>
    </div>
</body>
</html>