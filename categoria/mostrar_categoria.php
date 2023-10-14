
<!-- <link rel="stylesheet" type="text/css" href="http://localhost/sistema_2/css/tablas.css"> -->
<link rel="stylesheet" href="../css/tablas.css">
<h1>LISTA DE PRODUCTOS</h1>
<?php

require("../conexion_base.php");

$sql2 = "SELECT * FROM categorias";
$result = $conexion->query($sql2);
if ($result->num_rows > 0) {
    echo "<table >";
    echo "<tr><th>ID</th><th>Nombre</th><th>Descripcion</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["descripcion"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>