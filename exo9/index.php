<?php 
    require("book.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- creation objet et affichage avec le getter -->
    <?php 
        $book1 = new Book(1,"Sweet Home");
        $titre = $book1->getTitle();
        echo $titre;
    ?>
</body>
</html>