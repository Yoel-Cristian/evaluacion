<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- <link rel="stylesheet" type="text/css" href="http://localhost/parte/css/formulario.css" /> -->
  <link rel="stylesheet" href="../../css/formulario.css">

</head>
<body>
    
  <!-- Formulario para eliminar producto -->
  <div id="producto_delete" class="Formulario">
    <h2>Formulario Eliminar Datos</h2>

    <form id="3" class="miFormulario" method="post" action="../producto_delete.php">
      <label for="id_producto2">Seleccionar Producto a Eliminar:</label>
      <select id="id_producto2" name="id_producto" class="select">
        <option selected disabled class="option-default">
          [id] - [nombre] - [precio]
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id, nombre, precio FROM productos";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
          $id_producto = $fila["id"];
          $nombre_producto = $fila["nombre"];
          $precio_producto = $fila["precio"];
          echo "<option value='$id_producto'> [$id_producto] - [$nombre_producto] - [$precio_producto] </option>";
        }
        $conexion->close();
        ?>
      </select><br /><br />
      <button type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>