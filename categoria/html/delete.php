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
    

  <!-- formulario opara eliminar categoria -->
  <div id="eliminar" class="Formulario">
    <h2> Eliminar Categoria</h2>

    <form id="3" action="../delete_categoria.php" method="post">
      <label for="id">Seleccionar Categoria:</label>
      <select id="id1" name="id" class="select">
        <option selected disabled class="option-default">
          [id] - [nombre] - [descripcion]
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id, nombre, descripcion FROM categorias";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
          $rut = $fila['id'];
          $nombre = $fila['nombre'];
          $descripcion = $fila['descripcion'];

          echo "<option value='$rut'>[$rut] - [$nombre] - [$descripcion] </option>";
        }
        $conexion->close();
        ?>
      </select><br /><br />

      <button type="submit">Enviar</button>
    </form>
  </div>

</body>
</html>