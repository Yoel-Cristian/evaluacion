<?php
    $id_inventario = $_POST["id_inventario"];
    $mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
    if (mysqli_connect_errno())
    {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
   
    $delete_query = "DELETE FROM inventario WHERE `id` = $id_inventario";// esta funcion es para borrar
    
    // run the update query 
    If (mysqli_query($mysqli_link, $delete_query)) {
        header("location:borrar.php");
    }
    else{
        echo "No se encontro";
    }
    
    // close the db connection 
    mysqli_close($mysqli_link);
?>