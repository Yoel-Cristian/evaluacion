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

    <!-- Formulario para actualizar datos de los productos -->
    <div class="Formulario" id="producto_actualizar">
        <h2>Modificar Datos De Producto</h2>
        <form class="miFormulario" id="2" action="../actualizar_producto.php" method="post" enctype="multipart/form-data">
            <label for="id_producto">Seleccionar Producto a Actualizar:</label>
            <select id="id_producto1" name="id_producto" class="select">
                <option selected disabled class="option-default">
                    [id] - [nombre] - [precio]
                </option>
                <?php
                $conexion = new mysqli("localhost", "root", "", "sistema");
                $consulta = "SELECT id, nombre, precio FROM productos";
                $resultado = $conexion->query($consulta);

                while ($fila = $resultado->fetch_assoc()) {
                    $id_producto = $fila["id"];
                    $nombre_producto = $fila["nombre"];
                    $precio_producto = $fila["precio"];
                    $stock_producto = $fila["stock"];
                    echo "<option value='$id_producto'> [$id_producto] - [$nombre_producto] - [$precio_producto] </option>";
                }
                $conexion->close();
                ?>
            </select><br /><br />


            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre1" /><br />

            <label for="descripcion">descripcion:</label>
            <textarea name="descripcion" id="descripcion"></textarea> <br> <br>

            <label for="precio">Precio ($):</label>
            <input type="number" step="0.01" name="precio" id="precio1" /><br />


            <label for="rut_proveedor">ID Proveedor:</label>
            <select id="rut_proveedor1" name="rut_proveedor" class="select">

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

            <label for="id_categoria1">Seleccionar Categoría:</label>
            <select id="id_categoria1" name="id_categoria" class="select">
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
            <label for="imagen">Imagen:</label>

            <input type="file" name="imagen" id="imagen" accept="image/*" onchange="previsualizarImagen()"> <br /><br />

            <center>

                <img id="imagenPrevia" src="" alt=""> <br>

            </center>

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