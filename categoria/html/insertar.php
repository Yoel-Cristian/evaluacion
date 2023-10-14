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
    
<div id="insertar" class="Formulario">
    <h2>Formulario Categoría</h2>
    <form id="1">
      <label for="nombre_categoria">Nombre:</label>
      <input type="text" name="nombre" id="nombre" /><br />
      <br />

      <label for="descripcion_categoria">Descripción:</label>
      <textarea name="descripcion" id="descripcion"></textarea><br />
      <button type="submit">Enviar</button>
      <!-- <button onclick="terminar()">Terminar Registro</button> -->
    </form>
  </div>




  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {
      $("#1").submit(function(event) {
        event.preventDefault();
        var nombre = $("#nombre").val();
        var descripcion = $("#descripcion").val();

        // Crea un objeto de datos
        var datos = {
          nombre: nombre,
          descripcion: descripcion
        };

        $.ajax({
          type: "POST",
          url: "../insertar_categoria.php", // Actualiza la URL según tu archivo PHP
          data: datos,
          success: function(response) {
            // Muestra la ventana emergente
            $("#popup").fadeIn();
            // Cierra la ventana emergente
            setTimeout(function() {
              $("#popup").fadeOut();
            }, 2000);
            $("#1")[0].reset();
            
          },
        });
      });
    });

</script>


</body>
</html>