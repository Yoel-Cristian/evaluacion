
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/formulario.css">
<title>Borrar Inventario</title>
</head>
<body>

  <div class="Formulario">

    <h2>BORRAR INVENTARIO</h2>  

    <form action="BDborrar.php" method="POST">

      <div class="texto">
        <label for="id_inventario">ID Inventario: <select name="id_inventario" id="id_inventario" >
        <option selected disabled class="option-default">
          [id] - [id_producto] - [id_ubit] - [nivex] - [ultac]
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id, id_producto, id_ubit, nivex, ultac FROM inventario";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
          $id = $fila['id'];
          $id_producto = $fila['id_producto'];
          $id_ubit = $fila['id_ubit'];
          $nivex = $fila['nivex'];
          $ultac = $fila['ultac'];
          echo "<option value='$id'>[$id] - [$id_producto] - [$id_ubit] - [$nivex]- [$ultac]</option>";
        }
        $conexion->close();
        ?>
      </select></label>
      </div>


      <button type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>
