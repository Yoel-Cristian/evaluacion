<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/formulario.css">

<title>Borrar Proveedor</title>
</head>
<body>

  <div class="Formulario">

    <h2>SELECCIONAR UN DATO A BORRAR PROVEEDOR</h2>

    <form action="borrar.php" method="POST">

    <div class="texto">
        <select id="id" name="id" class="select">
          <option selected disabled class="option-default">
            [ID] - [Nombre] - [Direccion] - [Contacto]
          </option>

          <?php
          $conexion = new mysqli("localhost", "root", "", "sistema");
          $consulta = "SELECT id ,nombre ,direccion, contacto  FROM proveedores";
          $resultado = $conexion->query($consulta);
  
          while ($fila = $resultado->fetch_assoc()) {
            $id = $fila["id"];
            $nombre = $fila["nombre"];
            $direccion = $fila["direccion"];
            $contacto = $fila["contacto"];
            echo "<option value='$id'> [$id] - [$nombre] - [$direccion] - [$contacto] </option>";
          }
          $conexion->close();
          ?>    </select><br /><br /> </div>

      <button type="submit">Enviar</button>
    </form>
  </div>
  
</body>
</html>
