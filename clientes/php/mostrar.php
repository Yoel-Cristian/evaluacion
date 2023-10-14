<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../css/tablas.css">

</head>
<body>
    <h1>Lista de los Clientes</h1>
</body>

<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "sistema");
if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
$select_query = "SELECT * FROM clientes";
$result = mysqli_query($mysqli_link, $select_query);

   echo "<table class='tabla'>";
   echo "<tr><th>RUT</th><th>Nombre</th><th>Direccion</th><th>Teléfono</th></tr>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['rut'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['direccion'] . "</td>";
    echo "<td>" . $row['telefono'] . "</td>";
    echo "<tr>";
    
}
    echo "</table>";
// close the db connection
mysqli_close($mysqli_link);

