<?php 
    function imgPerLine($imgVar){
        $maxImgs = 3;
        $nmbOfLines = ceil($imgVar / $maxImgs);
        echo "<p>il y'a $nmbOfLines  lignes <br></p>";
        $nmbOfImgs = $imgVar%$maxImgs;
        echo "<p>il y'a $nmbOfImgs images sur la derniere ligne<br></p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <div>
        <p>
            <?php 
            imgPerLine(8);
            imgPerLine(3);
            imgPerLine(144);
            imgPerLine(152);
            ?>
    </div>
</body>
</html>