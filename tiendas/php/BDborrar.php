<?php
    $id_tienda = $_POST["id_tienda"];
    $mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
    if (mysqli_connect_errno())
    {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
   
    $delete_query = "DELETE FROM tiendas WHERE `id` = $id_tienda";// esta funcion es para borrar
    
    // run the update query 
    if (mysqli_query($mysqli_link, $delete_query)) {
        header("location:../html/borrar.php");
    }
    else{
        echo "No se encontro";
    }
    
    // close the db connection 
    mysqli_close($mysqli_link);
?>