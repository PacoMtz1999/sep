<?php

$hostname_db = "localhost";
$username_db = "root";
$password_db = "root";
$database_db = "see";
$port = 8889;

$conexion = mysqli_connect($hostname_db, $username_db, $password_db, $database_db, $port)
    or die("No pudo realizar conexión");

?>
<!-- <H1>Conectado</H1> -->