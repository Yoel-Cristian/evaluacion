<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/formulario.css">
<title>Insertar Categoria</title>
</head>
<body>


  <div class="Formulario">

    <h2>RELLENAR SUS DATOS</h2> 

    <form action="../php/BDinsertar.php" method="POST">

      <div class="texto">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div class="texto">
        <label for="direccion">Direccion:</label>
        <input type="texto" id="direccion" name="direccion" required>
      </div>

      <button type="submit">Enviar</button>


    </form>
  </div>
</body>
</html>
