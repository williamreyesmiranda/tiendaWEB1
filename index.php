<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logofruver.png" type="image/x-icon">

    <title>LOS CORONAVIRUS</title>
    <?php include("scriptUp.php") ?>
</head>




<body>

    <?php include("navbar.php") ?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h1 style="font-family: sketchy;letter-spacing: 3px; color: #ed1c24;">No te arriegues a salir de casa
                    Llego tu fruver virtual</h1>
                <br>
                <p style="font-family: comfortaa;">Aquí encontraras todas las frutas y verduras 100% frescas</p>
                <ul style="font-family: comfortaa;">
                    <li>Precios justos.</li>
                    <li>Servicio amable y a tiempo.</li>
                    <li>Gran variedad, del campo a tu casa.</li>
                    <li>Entrega a domicilio dentro del rango de tiempo conveniente y Gratis</li>
                </ul>
                <a style="background-color:#4d1b47;
                                color: #FFFFFF; 
                                font-family:sketchy; 
                                border-radius: 20px;
                                border: none;
                                font-size:20px;
                                letter-spacing: 3px;
                                display: inline-block;
                                padding: 8px;
                                margin-top: 20px;" href="formularioRegistrar.php">¿Quieres Registrar un producto?
                    &raquo;</a>
            </div>
            <div class="col-md-4 mb-5;">
                <img src="https://i.pinimg.com/736x/25/e9/98/25e9980b6e8dc372dfc7717af3d96bca.jpg" style="height:400px;"
                    alt="">
            </div>

        </div>

        <div class=" ">
            <h2 style="font-family: sketchy; text-align: center; letter-spacing: 3px;color: #ed1c24; margin-top:80px;">
                Nuestros Productos</h2>
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
                    <img class="card-img-top" src="<?php echo($producto['img']);?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center text-uppercase"><?php echo($producto['nombre']);?></h4>
                        <p class="card-text text-capitalize"><b>marca: </b> <?php echo($producto['marca']);?></p>
                        <p class="card-text text-capitalize"><b>precio: </b>
                            <?php echo("$".number_format($producto['precio'],2) );?></p>
                        <p class="card-text text-capitalize"><b>descripcion: </b>
                            <?php echo($producto['descripcion']);?></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-info px-5  mb-2" data-toggle="modal"
                            data-target="#editar<?php echo($producto['idProducto']);?>">
                            Editar
                        </button>
                        <a href="eliminarProducto.php?id=<?php echo($producto['idProducto']);?>"
                            class="btn btn-danger px-5  mb-2">Eliminar</a>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="editar<?php echo($producto['idProducto']);?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="editarProducto.php?id=<?php echo($producto['idProducto']);?>" method="POST">
                                <div class="form-group">
                                    <label for="nombreEditar">Nombre:</label>
                                    <input type="text" class="form-control" id="nombreEditar" name="nombreEditar"value="<?php echo($producto['nombre']);?>">
                                </div>
                                <div class="form-group">
                                    <label for="marcaEditar">Proveedor:</label>
                                    <input type="text" class="form-control" id="marcaEditar" name="marcaEditar"value="<?php echo($producto['marca']);?>">
                                </div>
                                <div class="form-group">
                                    <label for="precioEditar">Precio:</label>
                                    <input type="text" class="form-control" id="precioEditar" name="precioEditar" value="<?php echo($producto['precio']);?>">
                                </div>
                                <div class="form-group">
                                    <label for="descEditar">Descripción:</label>
                                    <textarea class="form-control" name="descEditar" id="descEditar" rows="3"><?php echo($producto['descripcion']);?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="imgEditar">Url Imagen</label>
                                    <input type="text" class="form-control" id="imgEditar" name="imgEditar"value="<?php echo($producto['img']);?>">
                                </div>
                                <div class="modal-footer">
                            <button type="submit" class="btn btn-info px-5  mb-2" name="btnEditar">Editar</button>

                        </div>

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>
        <!-- /.row -->

    </div>

    <?php include("footer.php") ?>

    <?php include("scriptDown.php") ?>

</body>



</html>