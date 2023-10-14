<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sistema";

$mysqli_link = new mysqli($hostname, $username, $password, $database);

if ($mysqli_link->connect_error) {
    die("La conexión a la base de datos falló: " . $mysqli_link->connect_error);
}
?>
<!-- no funciono la conexion con requiere................. -->