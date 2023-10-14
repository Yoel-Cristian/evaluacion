<?php
$conexion = new mysqli("localhost", "root", "", "sistema");

$rut = $_POST["rut"];

$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$telefono = mysqli_real_escape_string($conexion, $_POST["telefono"]);
$direccion = mysqli_real_escape_string($conexion, $_POST["direccion"]);
if ($nombre && $telefono && $direccion and $rut != "") {
    $update_query = "UPDATE clientes SET nombre='$nombre', telefono='$telefono', direccion='$direccion' WHERE rut='$rut'";
    
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