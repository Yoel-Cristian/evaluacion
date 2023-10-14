<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $c2 = $_POST['c'];
        $e=explode("-",$c2);
        $c=$e[0];
        $c = substr($c, 1, -1);
    } else {
        echo "Solicitud no válida.";
    }
    $mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
    if (mysqli_connect_errno())
    {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
    $delete_query = "DELETE FROM transacciones WHERE `id` = '$c'";
    If (mysqli_query($mysqli_link, $delete_query)) {
        echo 'Record deleted successfully.';
    }
    mysqli_close($mysqli_link);
?>