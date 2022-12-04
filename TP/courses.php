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
    <title>Document</title>
</head>
<body>
<div>
    <div class="btn-header">
        <a href="index.php">Accueil</a>
        <a href="courses.php">Liste des cours</a>
    </div>

    <div class="mainBloc">

        <?php
        echo"<div class='cards3'>";
        foreach($users as $key => $user){
            if($key != 0 && $key %3 == 0){
                echo "</div><div class='cards3'>";
            }
            ?>
            <a href="courseDetail.php?id=<?= $user['id'] ?>">
                <div class="teacher">
                    <!-- AFFICHAGE INFO BDD -->
                    <p> <?= $user['course_name'] ?> </p>
                    <?php $tabTri = substr($user['firstName'], 0 , 1);  ?>
                    <?php $tabTri = substr($user['lastName'], 0 , 2);  ?>
                    <?= print_r($tabTri); ?>
                    <p> <?= $small = substr($user['course_content'], 0, 100);  ?> </p>
                    <p> <?= $user['course_code'] ?> </p>
                    <img src="img/<?= $user['course_image'] ?>" alt="image de profule de <?= $user['firstName'] ?>">
                </div>
            </a>
        <?php };
        echo"</div>";
        ?>

    </div>
</div>
</body>
</html>
