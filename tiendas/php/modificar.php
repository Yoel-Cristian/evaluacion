<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/formulario.css">
<title>Modificar Categoria</title>
</head>
<body>

<div class="Formulario">

    <h2>DATOS DEL NOMBRE A MODIFICAR</h2>  

    <form action="BDmodificar.php" method="POST">

      <div class="texto">
        <label for="id_tienda">ID Tienda: <select name="id_tienda" id="id_tienda" >
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
        echo "<option value='$id'> [$id] - [$nombre] - [$direccion]  </option>";
        }
        $conexion->close();?>
        </select></label>
      </div>

      <div class="texto">
        <label for="Nnombre">Nuevo Nombre:</label>
        <input type="text" id="Nnombre" name="Nnombre" required>
      </div>

     <div class="texto">
        <label for="Ndireccion">Nueva Direccion:</label>
        <input type="text" id="Ndireccion" name="Ndireccion" required>
      </div> 

      <button type="submit">Enviar</button>

    </form>
  </div>
</body>
</html>
