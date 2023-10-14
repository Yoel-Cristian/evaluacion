<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Inventario</title>
<link rel="stylesheet" href="../../css/formulario.css">

</head>
<body>


  <div class="Formulario">

    <h2>DATOS DE NOMBRE A MODIFICAR</h2>  

    <form action="BDmodificar.php" method="POST">

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

      <div class="texto">
        <label for="id_producto">Nuevo ID Producto: <select name="id_producto" id="id_producto" >
        <option selected disabled class="option-default" >
          [ID] - [Nombre] - [Descripcion] - [Precio]
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id ,nombre ,descripcion, precio  FROM productos";
        $resultado = $conexion->query($consulta);

      while ($fila = $resultado->fetch_assoc()) {
      $id = $fila["id"];
      $nombre = $fila["nombre"];
      $descripcion = $fila["descripcion"];
      $precio = $fila["precio"];
      echo "<option value='$id'> [$id] - [$nombre] - [$descripcion] - [$precio] </option>";
     }
     $conexion->close();?>
      </select></label>
      </div>


      <div class="texto">
      <label for="id_ubicacion">Nuevo ID Ubicacion: <select name="id_ubicacion" id="id_ubicacion" >
        <option selected disabled class="option-default" >
        [ID] - [Nombre] - [Direccion]
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id ,nombre ,direccion  FROM tiendas";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
        $id = $fila["id"];
        $nombre = $fila["nombre"];
        $direccion = $fila["direccion"];
        echo "<option value='$id'> [$id] - [$nombre] - [$direccion]  </option>";
        }
        $conexion->close();?>
        </select>
      </label>
       </div>

      <div class="texto">
        <label for="Nexist">Nuevo Nivel Existencias:</label>
        <input type="number" id="Nexist" name="Nexist" required>
      </div>

      <div class="texto">
        <label for="UActualizacion">Nuevo Ultima Actualizacion:</label>
        <input type="date" name="UActualizacion" id="UActualizacion" required>
      </div>  
      <button type="submit">Enviar</button>
      
    </form>
  </div>
</body>
</html>
