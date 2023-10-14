<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../css/tablas.css">
</head>
<body>
    <h1>Lista del Inventario</h1>
</body>

<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
$select_query = "SELECT * FROM inventario LIMIT 10";
$result = mysqli_query($mysqli_link, $select_query);

   echo "<table>";
   echo "<tr><th>ID</th><th>ID Prod.</th><th>ID Ubi.</th><th>Nivel Exis.</th><th>Ultima Act.</th></tr>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['id_producto'] . "</td>";
    echo "<td>" . $row['id_ubit'] . "</td>";
    echo "<td>" . $row['nivex'] . "</td>";
    echo "<td>" . $row['ultac'] . "</td>";
    echo "<tr>";
    
}
    echo "</table>";
// close the db connection
mysqli_close($mysqli_link);
