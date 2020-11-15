<?php 

include("BaseDatos.php");
$id=$_GET['id'];
if(isset($_POST['btnEditar'])){
   
    $nombre=$_POST['nombreEditar'];
    $marca=$_POST['marcaEditar'];
    $precio=$_POST['precioEditar'];
    $desc=$_POST['descEditar'];
    $img=$_POST['imgEditar'];

    $transaccion= new BaseDatos();
//3. Crear la consulta
$consultaSQL=("UPDATE productos SET nombre='$nombre', marca='$marca', precio='$precio', descripcion='$desc', img='$img' WHERE idProducto='$id'");

//4. Utilizar el metodo para eliminar datos
$transaccion->editarDatos($consultaSQL);

header('refresh: 2; index.php');
}



?>