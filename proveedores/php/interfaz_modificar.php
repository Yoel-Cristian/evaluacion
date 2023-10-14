<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Proveedor</title>
<link rel="stylesheet" href="../../css/formulario.css">

</head>
<body>


  <div class="Formulario" >

    <h2>MODIFICAR PROVEEDOR</h2> 
    
    <form action="modificar.php" method="POST">

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
      
      <div class="texto">
        <label for="nuevo">Nuevo Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div class="texto">
        <label for="Ndireccion">Nueva Direccion:</label>
        <input type="text" id="direccion" name="direccion"  required>
      </div>

      <div class="texto">
        <label for="Ntelefono">Nuevo Contacto:</label>
        <input type="number" id="contacto" name="contacto" required>
      </div> 

      <button type="submit">Enviar</button>

    </form>
  </div>
</body>
</html>
