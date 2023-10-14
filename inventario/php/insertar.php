<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/formulario.css">
  <title>Insertar Inventario</title>
</head>

<body>


  <div class="Formulario">

    <h2>INSERTAR DATOS AL INVENTARIOS</h2>
    <form action="BDinsertar.php" method="POST">

      <div class="texto">
        <label for="id_producto">ID Producto: <select name="id_producto" id="id_producto" >
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
      <label for="id_ubicacion">ID Ubicacion: <select name="id_ubicacion" id="id_ubicacion" >
        <option selected disabled class="option-default" >
        [ID] - [Nombre] - [Direccion] 
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id ,nombre ,direccion  FROM tiendas";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
        $id = $fila["id"];
        $nombre = $fila["nombre"];
        $direccion = $fila["direccion"];
        echo "<option value='$id'> [$id] - [$nombre] - [$direccion] </option>";
        }
        $conexion->close();?>
        </select>
      </label>
       </div>

      <div class="texto">
        <label for="Nexist">Nivel Existencias:</label>
        <input type="texto" id="Nexist" name="Nexist" required>
      </div>

      <div class="texto">
        <label for="UActualizacion">Ultima Actualizacion:</label>
        <input type="date" name="UActualizacion" id="UActualizacion" required>
      </div>

      <button type="submit">Enviar</button>
    </form>

  </div>
</body>

</html>