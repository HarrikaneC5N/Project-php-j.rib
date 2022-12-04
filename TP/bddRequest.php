<?php
require('connectionBdd.php');

//creation de ma requete
$userQuery = ('
SELECT * FROM tp_jri_.courses INNER JOIN tp_jri_.users ON courses.id = `id_user`'
);
//execution et recup des données
$stmt = $connection->prepare($userQuery);
$stmt -> execute();
$users = $stmt -> fetchAll();


if(array_key_exists('id_user',$_GET) && is_numeric($_GET['id_user'])){
    $userId = $_GET['id_user'];

//execution et recup des données
    $stmt2 = $connection->prepare('
    SELECT * FROM tp_jri_.users WHERE `id_user`=?;'
    );
    $stmt2 -> execute([$userId]);
    $users_info = $stmt2 -> fetch();
}

if(array_key_exists('id',$_GET) && is_numeric($_GET['id'])){
    $courseId = $_GET['id'];

//execution et recup des données ainsi qu'une connection entre les deux tables pour simplifier l'acc_s aux donnés
    $stmt3 = $connection->prepare('
    SELECT * FROM tp_jri_.courses INNER JOIN tp_jri_.users ON courses.id = `id_user` WHERE `id` = ?;'
    );
    $stmt3 -> execute([$courseId]);
    $course_info = $stmt3 -> fetch();
}