<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/fruver.png" type="image/x-icon">

    <title>LOS CORONAVIRUS</title>
    <?php include("scriptUp.php") ?>

</head>

<body>

    <?php include("navbar.php") ?>

    <!-- Page Content -->
    <div class="container">
        <div style= "font-family: comfortaa;">
            <h2 class="mx-auto d-block mt-5 px-3">Registro de Productos</h2>
            <h6 class="px-3">Campos Obligatorios (*) </h6>
            <hr>
            <form action="registrarProducto.php" class="needs-validation mt-4 p-2" method="POST" novalidate>
                <div class="form-group ">
                    <label for="nombre">Nombre: (*)</label>
                    <input type="t ext" class="form-control" id="nombre" placeholder="Ingrese el Nombre del Producto" name="nombre" required>
                    <!-- <div class="valid-feedback">Listo</div> -->
                    <div class="invalid-feedback">Por Favor Ingrese el Nombre del Producto</div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="marca">Proveedor: (*)</label>
                        <input type="text" class="form-control" id="marca" placeholder="Ingrese la Marca del Producto" name="marca" required>
                        <!-- <div class="valid-feedback">Listo</div> -->
                        <div class="invalid-feedback">Por Favor Ingrese la Marca del Producto</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="precio">Precio: (*)</label>
                        <input type="number" class="form-control" id="precio" placeholder="Ingrese el Precio del Producto" name="precio" required>
                        <!-- <div class="valid-feedback">Listo</div> -->
                        <div class="invalid-feedback">Por Favor Ingrese el Precio del Producto</div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="descripcion">Descripción: (*)</label>
                    <textarea class="form-control" id="descripcion" rows="2" name="descripcion" required></textarea>
                    <div class="invalid-feedback">Por Favor Ingrese el Precio del Producto</div>
                </div>
                <div class="form-group ">
                    <label for="img">Url Imagen: (*)</label>
                    <textarea class="form-control" id="img" rows="1" name="img" required></textarea>
                    <div class="invalid-feedback">Por Favor Ingrese el Precio del Producto</div>
                </div>

                <button type="submit" 
                style="background-color:#4d1b47;
                                color: #FFFFFF; 
                                font-family:sketchy; 
                                border-radius: 20px;
                                border: none;
                                font-size:20px;
                                letter-spacing: 3px;
                                display: inline-block;
                                padding: 8px;
                                margin-top: 20px;"
                                name="botonRegistro">Registrar Producto</button>
            </form>
        </div>



    </div>
    <!-- /.container -->
    <?php include("footer.php") ?>

    <?php include("scriptDown.php") ?>
    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>