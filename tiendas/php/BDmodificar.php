<?php
$id_tienda = $_POST["id_tienda"];
$Nnombre = $_POST["Nnombre"];
$Ndireccion = $_POST["Ndireccion"];

$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");

if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}

if ($Nnombre && $Ndireccion && $id_tienda != "") {
    $update_query = "UPDATE tiendas SET
    nombre = '$Nnombre',
    direccion = '$Ndireccion'

    WHERE id = '$id_tienda'";

    if (mysqli_query($mysqli_link, $update_query)) {
        header("location:../html/modificar.php");
    } else {
        echo 'Error al actualizar el registro: ' . mysqli_error($mysqli_link);
    }

    mysqli_close($mysqli_link);
} else {
    exit;
}
?>
