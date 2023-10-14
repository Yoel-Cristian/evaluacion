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

  <!-- formulario actualizar categoria -->
  <div id="actualizar" class="Formulario">
    <h2>Actualizar Informacion De Categoria</h2>
    <form id="2" action="../actualizar_categoria.php" method="post" >
      <label for="id">Seleccionar categoria:</label>
      <select id="id" name="id_categoria" class="select">
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
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre1" /><br />
      <br />

      <label for="descripcion_categoria">Descripción:</label>
      <textarea name="descripcion" id="descripcion1"></textarea><br />
      <button type="submit">Enviar</button>
    </form>
  </div>

    <script>
      document.getElementById("imagenPrevia").style.display = "none";

      function previsualizarImagen() {
        document.getElementById("imagenPrevia").style.display = "block";

        var input = document.getElementById('imagen');
        var imagenPrevia = document.getElementById('imagenPrevia');
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            imagenPrevia.src = e.target.result;
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
  </div>







</body>

</html>