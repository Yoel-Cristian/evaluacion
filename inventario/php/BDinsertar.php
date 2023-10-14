<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
 }
  $id_producto = $_POST["id_producto"];
  $id_ubicacion = $_POST["id_ubicacion"];
  $Nexist = $_POST["Nexist"];
  $UActualizacion = $_POST["UActualizacion"];


    $insert_query = "INSERT INTO `inventario`(`id_producto`,`id_ubit`,`nivex`, `ultac`) 
    VALUES ('". mysqli_real_escape_string($mysqli_link, $id_producto)."',
             '".mysqli_real_escape_string($mysqli_link, $id_ubicacion)."',
             '".mysqli_real_escape_string($mysqli_link, $Nexist) ."', 
            '". mysqli_real_escape_string($mysqli_link, $UActualizacion)."')";
 
If (mysqli_query($mysqli_link, $insert_query)) {
   header("location:insertar.php");
}

mysqli_close($mysqli_link);


?>


