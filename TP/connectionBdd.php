<?php
// connection à la bdd
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'tp_jri_';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	// affichage messages d'erreur
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }
  $mysqli->close();
?>