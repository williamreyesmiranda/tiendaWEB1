<?php 
include "BaseDatos.php";
/* include "scriptUp.php"; */
if(isset($_POST['botonRegistro'])){
    //recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $img=$_POST['img'];

    //copia u objeto de clase BD
    $transaccion= new BaseDatos();
    
    //crear consulta
    $consultaSQL="INSERT INTO productos(nombre, marca, descripcion, precio, img) VALUES ('$nombre','$marca','$descripcion','$precio', '$img')";

    //llamo al metodo de la clase BD agregar datos()
    $transaccion->agregarDatos($consultaSQL);
   
    header('refresh: 2; formularioRegistrar.php');
   
    }
