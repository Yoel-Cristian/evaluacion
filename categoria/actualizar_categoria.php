<?php
require("../conexion_base.php");
$id = $_POST["id_categoria"];
$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$descripcion = mysqli_real_escape_string($conexion, $_POST["descripcion"]);
if ($nombre && $descripcion and $id != "") {
    $update_query = "UPDATE categorias SET nombre='$nombre', descripcion='$descripcion' WHERE id='$id'";
    
    if ($conexion->query($update_query)) {
        echo 'Registro actualizado exitosamente.';
    } else {
        echo 'Error al actualizar el registro: ' . $conexion->error;
    }

    $conexion->close();
    header("location: html/actualizar.php");
} 
?>
