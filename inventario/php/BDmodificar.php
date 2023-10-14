<?php
$id_inventario = $_POST["id_inventario"];
$id_producto = $_POST["id_producto"];
$id_ubicacion = $_POST["id_ubicacion"];
$Nexist = $_POST["Nexist"];
$UActualizacion = $_POST["UActualizacion"];

$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");

if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}

if ($id_producto && $id_ubicacion && $Nexist && $UActualizacion && $id_inventario != "") {
    $update_query = "UPDATE inventario SET
    id_producto = '$id_producto',
    id_ubit = '$id_ubicacion',
    nivex = '$Nexist',
    ultac = '$UActualizacion'
    WHERE id = '$id_inventario'";

    if (mysqli_query($mysqli_link, $update_query)) {
        header("location:modificar.php");
    } else {
        echo 'Error al actualizar el registro: ' . mysqli_error($mysqli_link);
    }

    mysqli_close($mysqli_link);
} else {
    exit;
}
?>

