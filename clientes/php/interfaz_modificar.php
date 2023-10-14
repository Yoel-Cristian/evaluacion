<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Cliente</title>
<link rel="stylesheet" href="../../css/formulario.css">

</head>
<body>


  <div  class="Formulario">

    <h2>MODIFICAR CLIENTE</h2> 
    
    <form action="modificar.php" method="POST">

    <div class="texto">
        <select id="rut" name="rut" class="select">
          <option selected disabled class="option-default">
            [ID] - [Nombre] - [Direccion] - [Teléfono]
          </option>

          <?php
          $conexion = new mysqli("localhost", "root", "", "sistema");
          $consulta = "SELECT rut ,nombre ,direccion, telefono  FROM clientes";
          $resultado = $conexion->query($consulta);
  
          while ($fila = $resultado->fetch_assoc()) {
            $rut = $fila["rut"];
            $nombre = $fila["nombre"];
            $direccion = $fila["direccion"];
            $telefono = $fila["telefono"];
            echo "<option value='$rut'> [$rut] - [$nombre] - [$direccion] - [$telefono] </option>";
          }
          $conexion->close();
          ?>    </select><br /><br /> </div>
      
      <div class="texto">
        <label for="nuevo">Nuevo Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div class="texto">
        <label for="Ndireccion">Nueva Direccion:</label>
        <input type="text" id="direccion" name="direccion"  required>
      </div>

      <div class="texto">
        <label for="Ntelefono">Nuevo telefono:</label>
        <input type="text"  id="telefono" name="telefono" required>
      </div> 

      <button type="submit">Enviar</button>

    </form>
  </div>
</body>
</html>
