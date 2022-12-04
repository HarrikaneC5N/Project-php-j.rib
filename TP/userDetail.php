<?php
require('bddRequest.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Cours</title>
</head>
<body>
    <div>
        <div class="btn-header">
            <a href="index.php">Accueil</a>
            <a href="courses.php">Liste des cours</a>
        </div>
        <div class="teacher">
            <!-- AFFICHAGE INFO BDD -->
            <h1><?= $users_info['firstName']." ".$users_info['lastName']; ?> </h1>
            <img src="img/<?= $users_info['image'] ?>" alt="image de profile de <?= $users_info['firstName'] ?>">
            <p><?= $users_info['phone']?></p>
            <p><?= $users_info['address']?></p>
        </div>
    </div>
</body>
</html>
