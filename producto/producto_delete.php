<?php
require("../conexion_base.php");
$id= mysqli_real_escape_string($conexion, $_POST["id_producto"]);
if ($id != "") {
    $update_query = " DELETE FROM productos WHERE id='$id'";
    
    if ($conexion->query($update_query)) {
        echo 'Tupla eliminada  exitosamente.';
    } else {
        echo 'Error al eliminar el registro: ' . $conexion->error;
    }

    $conexion->close();
} 

header("Location: html/delete.php");
?>
