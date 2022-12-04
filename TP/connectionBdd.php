<?php
// connection à la bdd
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'tp_jri_';

  $connection = new PDO(
      'mysql:host=' . $db_host . ';dbname =' . $db_db .';charset=utf8' ,
    $db_user,
    $db_password
  );
?>