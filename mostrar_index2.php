<link rel="stylesheet" href="css/tablas.css">


<?php

require('conexion_base.php');
$consulta = "SELECT id_producto, SUM(cantidad) AS cantidad_vendida
FROM transacciones
GROUP BY id_producto
ORDER BY cantidad_vendida DESC";

$resultado = $conexion->query($consulta);
$arrar_id = array();
$arrar_cantidad = array();
if ($resultado->num_rows > 0) {

    while ($row = $resultado->fetch_assoc()) {
        $arrar_id[] = $row["id_producto"];
        $arrar_cantidad[] = $row["cantidad_vendida"];
    }
}
$i = 0;
while ($i < count($arrar_id)) {
    $sql2 = "SELECT * FROM productos where id='$arrar_id[$i]'";

    $result = $conexion->query($sql2);
    if ($result->num_rows > 0) {
        echo "<table class='tabla'  id='miTabla'>";
        echo "<tr><th>ID</th><th>Nombre</th><th >Descripcion</th><th>Precio</th><th>ID_Proveedor</th><th>ID_Categoría</th><th>Cantidad Vendida</th> <th>Imagen</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $ruta = str_replace("../", '', $row['imagen']);
            $ca = $row["id_categoria"];
            $sql3 = "SELECT nombre FROM categorias where id='$ca'";
            $result1 = $conexion->query($sql3);
            $row1 = $result1->fetch_assoc();



            $pr = $row["id_proveedor"];
            $sql4 = "SELECT nombre FROM proveedores where id='$pr'";
            $result2 = $conexion->query($sql4);
            $row2 = $result2->fetch_assoc();



            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td >" . $row["descripcion"] . "</td>";
            echo "<td>" . $row["precio"] . "</td>";
            echo "<td>" . $row2["nombre"] . "</td>";
            echo "<td>" . $row1["nombre"] . "</td>";
            echo "<td>" . $arrar_cantidad[$i] . "</td>";
            echo "<td> <img src='" . $ruta . " ' width=150px height=auto></td>";
            echo "</tr>";
        }
        echo "</table>";
        $i++;
    }
}

$conexion->close();


?>