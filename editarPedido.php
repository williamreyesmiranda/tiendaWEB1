<?php 

include("BaseDatos.php");

//1.recibo el id que voy a eliminar por URL (GET)
$idEliminar=($_GET['id']);
//2. crear un objeto
$transaccion= new BaseDatos();
//3. Crear la consulta
$consultaSQL=("DELETE FROM productos WHERE idProducto='$idEliminar'");

//4. Utilizar el metodo para eliminar datos
$transaccion->eliminarDatos($consultaSQL);

header('refresh: 2; index.php');
?>