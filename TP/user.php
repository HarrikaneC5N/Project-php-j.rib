<?php 
require('connectionBdd.php');
$query = $connection -> prepare('
    SELECT
    `firstName`,
    `lastName`,
    `address`,
    `phone`
    FROM
    `users`
    ORDER BY
    `users`.`id` ASC'
);

$query -> execute();
$users = $query -> fetchAll();

foreach($users as $user){
    echo $user['firstName'];
    echo $user['lastName'];
    echo $user['phone'];
};