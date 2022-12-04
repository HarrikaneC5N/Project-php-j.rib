<?php
require('bddRequest.php');
$tabTri = [];
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
            <h1><?= $course_info['course_name']; ?> </h1>
            <img src="img/<?= $course_info['course_image'] ?>" alt="image  du cours  <?= $course_info['course_name'] ?>">
            <p><?= $course_info['course_content']?></p>
            <p><?= $course_info['course_code']?></p>
            <?php $tabTri = substr($course_info['firstName'], 0 , 1);  ?>
            <?php $tabTri = substr($course_info['lastName'], 0 , 2);  ?>
            <p><?= $course_info['firstName']." ".$course_info['lastName']; ?> </p>
            <?= print_r($tabTri); ?>
        </div>
    </div>
</body>
</html>
