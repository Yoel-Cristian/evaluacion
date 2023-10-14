<?php
function obtenerOpciones() {

    $conn = new mysqli("localhost", "root", "", "sistema");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // seleccionando para clientes
    $query = "SELECT rut, nombre FROM clientes";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $opciones[] = $row['rut'];
        $opciones2[] = $row['nombre'];
    }

    // seleccionando para productos
    $query = "SELECT id, nombre FROM productos";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $opciones3[] = $row['id'];
        $opciones4[] = $row['nombre'];
    }

    $aa=[
        'a1'=>$opciones,
        'a2'=>$opciones2,
        'a3'=>$opciones3,
        'a4'=>$opciones4
    ];

    // echo("//////".$opciones);

    // Cerrar la conexión a la base de datos
    $conn->close();

    // return $opciones;
    // echo $aa;
    return $aa;
}

// Llamar a la función y devolver las opciones como JSON
$options = obtenerOpciones();
header('Content-Type: application/json');
echo json_encode($options);
?>
