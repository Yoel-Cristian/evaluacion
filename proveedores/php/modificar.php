<?php
$conexion = new mysqli("localhost", "root", "", "sistema");

$id = $_POST["id"];

$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$direccion = mysqli_real_escape_string($conexion, $_POST["direccion"]);
$contacto = mysqli_real_escape_string($conexion, $_POST["contacto"]);
if ($nombre && $direccion && $contacto and $id != "") {
    $update_query = "UPDATE proveedores SET nombre='$nombre', direccion='$direccion', contacto='$contacto' WHERE id='$id'";
    
    if ($conexion->query($update_query)) {
        header("location:interfaz_modificar.php");
    } else {
        echo 'Error al actualizar el registro: ' . $conexion->error;
    }

    $conexion->close();
} else {

    exit;
}
?>
<div style="width:800px; margin:0 auto;">
<a href="javascript:window.history.go(-2)">Regresar a la pagina anterior</a>
</div>