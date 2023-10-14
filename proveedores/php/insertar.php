<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$contacto = $_POST['contacto'];

$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}

$insert_query = "INSERT INTO `proveedores`(`nombre`,`direccion`,`contacto`) 
VALUES ('". mysqli_real_escape_string($mysqli_link, $nombre)."','". mysqli_real_escape_string($mysqli_link, $direccion)."','". mysqli_real_escape_string($mysqli_link, $contacto)."')";
If (mysqli_query($mysqli_link, $insert_query)) {
  header("location:../html/insertar.html");
  }
mysqli_close($mysqli_link);

?>
<div style="width:800px; margin:0 auto;">
<a href="javascript:window.history.go(-2)">Regresar a la pagina anterior</a>
</div>