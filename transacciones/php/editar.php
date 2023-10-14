<?php
// require "";
echo "555555555555555";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    $c2 = $_POST['c'];
    $e=explode("-",$c2);
    $c=$e[0];
    $c = substr($c, 1, -1);
} else {
    echo "Solicitud no válida.";
}

$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
echo "555555555555555";
$update_query = "UPDATE `transacciones` SET
    `cantidad` = '". mysqli_real_escape_string($mysqli_link, $a) ."',
    `fecha` = '". mysqli_real_escape_string($mysqli_link, $b) ."'
    WHERE `id` = '$c'";

if (mysqli_query($mysqli_link, $update_query)) {
    echo 'Record updated successfully.';
}
echo "555555555555555";
mysqli_close($mysqli_link);
?>