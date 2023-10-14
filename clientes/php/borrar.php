
<?php
$rut = $_POST['rut'];
    $mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
    if (mysqli_connect_errno())
    {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
    $delete_query = "DELETE FROM clientes WHERE `rut` = $rut";
 If (mysqli_query($mysqli_link, $delete_query)) {
    header("location:interfaz_borrar.php");
}
    mysqli_close($mysqli_link);
?>
<div style="width:800px; margin:0 auto;">
<a href="javascript:window.history.go(-2)">Regresar a la pagina anterior</a>
</div>