<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
 }
  $nombre = $_POST["nombre"];
  $direccion = $_POST["direccion"];

    $insert_query = "INSERT INTO `tiendas`(`nombre`,`direccion`) 
    VALUES ('". mysqli_real_escape_string($mysqli_link, $nombre)."',
    '".mysqli_real_escape_string($mysqli_link, $direccion)."')";
 
If (mysqli_query($mysqli_link, $insert_query)) {
    header("location:../html/insertar.php");
}

mysqli_close($mysqli_link);


?>


