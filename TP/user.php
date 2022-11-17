<?php 
require('connectionBdd.php');
$query = ('
    SELECT * FROM tp_jri_.users '
);

$stmt = $connection->prepare($query);
$stmt -> execute();
$users = $stmt -> fetchAll();

foreach($users as $user){
    echo $user['firstName']."<br>";
    echo $user['lastName']."<br>";
    echo $user['phone']."<br>";
};