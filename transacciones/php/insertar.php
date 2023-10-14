<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
} else {
    echo "Solicitud no válida.";
}

$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
 }
//   $idcliente = $_POST["nombre"];
//   $idproducto = $_POST["precio"];
//   $cantidad = $_POST["stock"];
//   $fecha = $_POST["categoria"];
echo "ddddddddddddd";

    $insert_query = "INSERT INTO `transacciones`(`id cliente`,`id producto`,`cantidad`, `fecha`) 
    VALUES ('". mysqli_real_escape_string($mysqli_link, $a)."',
             '".mysqli_real_escape_string($mysqli_link, $b)."',
             '".mysqli_real_escape_string($mysqli_link, $c) ."', 
            '". mysqli_real_escape_string($mysqli_link, $d)."')";
 
If (mysqli_query($mysqli_link, $insert_query)) {
    echo 'exitoso';
}

mysqli_close($mysqli_link);


?>
