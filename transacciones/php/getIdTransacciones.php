<?php
function obtenerOpciones() {

    $conn = new mysqli("localhost", "root", "", "sistema");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // seleccionando para clientes
    $query = "SELECT id, id cliente, id producto, cantidad, fecha FROM transacciones";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $opciones[] = $row['id'];
        $opciones2[] = $row['cliente'];
        $opciones3[] = $row['producto'];
        $opciones4[] = $row['cantidad'];
        $opciones5[] = $row['fecha'];
    }
    // $query = "SELECT nombre FROM clientes";
    // $result = $conn->query($query);
    // while ($row = $result->fetch_assoc()) {
    //     $opciones2[] = $row['id'];
    // }
    // $query = "SELECT nombre FROM productos";
    // $result = $conn->query($query);
    // while ($row = $result->fetch_assoc()) {
    //     $opciones3[] = $row['id'];
    // }

    $aa=[
        // 'a1'=>$opciones,
        'a1'=>$opciones,
        'a2'=>$opciones2,
        'a3'=>$opciones3,
        'a4'=>$opciones4,
        'a5'=>$opciones5
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
