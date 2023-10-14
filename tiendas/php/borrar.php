<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/formulario.css">
<title>Borrar Tienda</title>
</head>
<body>


<div class="Formulario">

    <h2>RELLENAR EL DATOS A BORRAR</h2>  

    <form action="BDborrar.php" method="POST">

      <div class="texto">
        <label for="id_tienda">ID Tienda: <select name="id_tienda" id="id_tienda">
        <option selected disabled class="option-default">
          [id] - [nombre] - [direccion] 
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id, nombre, direccion FROM tiendas";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
          $id = $fila['id'];
          $nombre = $fila['nombre'];
          $direccion = $fila['direccion'];
          echo "<option value='$id'>[$id] - [$nombre] - [$direccion] </option>";
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
