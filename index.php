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

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Qué Hacemos???</h2>
                <hr>
                <p>Nuestros productos son 100% frescos, recien cosechados del campo directamente a tu casa..</p>
                <p>Serivicio a domicilio gratis. Cumplimos todos los protocolos de bioseguridad.</p>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Integrantes</h2>
                <hr>
                <address>
                    <strong>William Reyes M.</strong>
                    <br>
                    <abbr title="Phone">Cel:</abbr>
                    301 508 4623
                    <br>
                    <abbr title="Email">Correo:</abbr>
                    <a href="mailto:willyremi1990@gmail.com">willyremi1990@gmail.com</a>
                    <br><br>
                    <strong>Andrea del Socorro Ardila.</strong>
                    <br>
                    <abbr title="Phone">Cel:</abbr>
                    318 413 9319
                    <br>
                    <abbr title="Email">Correo:</abbr>
                    <a href="mailto:@gmail.com">0@gmail.com</a>
                    <br>


                </address>
            </div>
            <div class="col-md-8 mb-5">
                <h2>Registro de productos</h2>
                <hr>
                <a class="btn btn-dark btn-lg" href="formularioRegistrar.php">Registrar &raquo;</a>
            </div>

        </div>
        <div class=" ">
                <h2 class="text-center">Nuestros Productos</h2>
                <hr>
               
            </div>
        <!-- /.row -->
        <?php
    include("BaseDatos.php");

    //1. Crear un objeto de la base de datos
    $transaccion = new BaseDatos();
    //2. Definir la consulta para buscar datos
    $consultaSQL = "SELECT * FROM productos";
    //3. ejecutar el metodo de consulta y almacenar la respuesta en una variable
    $productos = $transaccion->consultarDatos($consultaSQL);

    ?>
        <div class="row">
        <?php foreach($productos as $producto): ?>
           

            <div class="col-md-4 mb-5 ">
                <div class="card h-100 border border-dark rounded">
                    <img class="card-img-top" src="https://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center text-uppercase"><?php echo($producto['nombre']);?></h4>
                        <p class="card-text text-capitalize"><b>marca: </b> <?php echo($producto['marca']);?></p>
                        <p class="card-text text-capitalize"><b>precio: </b> <?php echo("$".number_format($producto['precio'],2) );?></p>
                        <p class="card-text text-capitalize"><b>descripcion: </b> <?php echo($producto['descripcion']);?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-secondary px-5 mb-2">Editar</a>
                        <a href="eliminarProducto.php?id=<?php echo($producto['idProducto']);?>" class="btn btn-danger px-5  mb-2">Eliminar</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <?php include("footer.php") ?>

    <?php include("scriptDown.php") ?>

</body>

</html>