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
    


  <!-- formulario para insertar prodcutos -->
  <div class="Formulario" id="producto_insertar">
    <h2>Formulario Informacion de Producto</h2>
    <form class="miFormulario" id="1">

      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre" /><br />

      <label for="descripcion">descripcion:</label>
      <textarea name="descripcion" id="descripcion"></textarea> <br> <br>

      <label for="id_categoria">Seleccionar Categoría:</label>
      <select id="id_categoria" name="id_categoria" class="select">
        <option selected disabled class="option-default">
          [id] - [nombre] - [descripcion]
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id, nombre, descripcion FROM categorias";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
          $id_categoria = $fila["id"];
          $nombre_categoria = $fila["nombre"];
          $descripcion_categoria = $fila["descripcion"];
          echo "<option value='$id_categoria'> [$id_categoria] - [$nombre_categoria] - [$descripcion_categoria] </option>";
        }
        $conexion->close();
        ?>
      </select><br /><br />

      <label for="precio">Precio ($):</label>
      <input type="number" step="0.01" name="precio" id="precio" /><br />


      <label for="rut_proveedor">ID Proveedor:</label>
      <select id="rut_proveedor" name="rut_proveedor" class="select">
        <option selected disabled class="option-default">
          [ID] - [nombre] - [direccion] - [contacto]
        </option>
        <?php
        $conexion = new mysqli("localhost", "root", "", "sistema");
        $consulta = "SELECT id,	nombre,	direccion,	contacto
                        FROM proveedores";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
          $rut = $fila["id"];
          $nombre = $fila["nombre"];
          $direccion = $fila["direccion"];
          $telefono = $fila["contacto"];

          echo "<option value='$rut'> [$rut] - [$nombre] - [$direccion] - [$telefono] </option>";
        }
        $conexion->close();
        ?>
      </select><br /><br />


      <label for="imagen">Imagen:</label>

      <input type="file" name="imagen" id="imagen"  accept="image/*"   onchange="previsualizarImagen()"> <br /><br />

      <center>

      <img    id="imagenPrevia" src="" alt=""> <br>

      </center>
      <button type="submit">Enviar</button>
    </form>

  
  </div>

  <div id="popup" class="popup">
  <div class="popup-content">
        <p> Tarea ejecutada con éxito <br> <span class="emoji">&#128578;</span></p>
    </div>
  </div>




  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.getElementById("imagenPrevia").style.display="none";

function previsualizarImagen() {
  document.getElementById("imagenPrevia").style.display="block";

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

        
    $(document).ready(function() {
      $("#1").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          type: "POST",
          url: "../insertar_producto.php",
          data: formData,

          processData: false, // Evitar el procesamiento automático de datos
          contentType: false, // Evitar el encabezado Content-Type por defecto
          success: function(response) {
            console.log(formData);
            console.log(response);
            $("#popup").fadeIn();
            setTimeout(function() {
              $("#popup").fadeOut();
            }, 2000);
            $("#1")[0].reset();
            document.getElementById("imagenPrevia").style.display="none";

          },
          error: function(xhr, status, error) {
            // Manejar errores si es necesario
            console.error(error);
          }
        });

      });
    });
  </script>



</body>
</html>