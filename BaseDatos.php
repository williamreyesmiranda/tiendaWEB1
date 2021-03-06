<?php
include "scriptUp.php";

class BaseDatos
{

    //atributos
    public $usuarioDB = "root";
    public $passwordDB = "";

    //constructor
    public function __construct()
    {
    }
    //metodos
    public function conectarBD()
    {

        try {
            $datosDB = "mysql:host=localhost;dbname=db_tiendaweb1";
            $conexionBD = new PDO($datosDB, $this->usuarioDB, $this->passwordDB);
            return ($conexionBD);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
    //agregar
    public function agregarDatos($consultaSQL)
    {
        //establecer una conexion
        $conexionBD = $this->conectarBD();

        //preparar consulta
        $insertarDatos = $conexionBD->prepare($consultaSQL);

        //ejecutar la consulta
        $resultado = $insertarDatos->execute();

        //verifico el resultado
        if ($resultado) {
            echo "  . <script>
            Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Producto Ingresado Correctamente',
        showConfirmButton: false,
        timer: 2000,
        backdrop: '#000000c5',
        allowOutsideClick:'false',
        allowEscapeKey:'false',
        allowEnterKey:'false'
        });
        </script>";
        } else {
            echo ". <script>
            Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Error al Registrar el Producto',
        showConfirmButton: false,
        timer: 2000,
        backdrop: '#000000c5',
        allowOutsideClick:'false',
        allowEscapeKey:'false',
        allowEnterKey:'false'
         });
        </script>";
        }
    }

    public function consultarDatos($consultaSQL)
    {
        //establecer una conexion
        $conexionBD = $this->conectarBD();
        //preparar consulta
        $consultarDatos = $conexionBD->prepare($consultaSQL);
        //establacer el método de consulta
        $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);
        //ejecutar la operacion en la base de datos
        $consultarDatos->execute();

        //obtener todos los datos
        return ($consultarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL)
    {
        //establecer una conexion
        $conexionBD = $this->conectarBD();
        //preparar consulta
        $eliminarDatos = $conexionBD->prepare($consultaSQL);
        //ejecutar la consulta
        $resultado = $eliminarDatos->execute();

        //verifico el resultado
        if ($resultado) {
            echo "  . <script>
            Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Producto Eliminado Correctamente',
        showConfirmButton: false,
        timer: 2000,
        backdrop: '#000000c5',
        allowOutsideClick:'false',
        allowEscapeKey:'false',
        allowEnterKey:'false'
         });
        </script>";
        } else {
            echo ". <script>
            Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Error al Eliminar el Producto',
        showConfirmButton: false,
        timer: 2000,
        backdrop: '#000000c5',
        allowOutsideClick:'false',
        allowEscapeKey:'false',
        allowEnterKey:'false'
         });
        </script>";
        }
    }
    
    public function editarDatos($consultaSQL)
    {
        //establecer una conexion
        $conexionBD = $this->conectarBD();
        //preparar consulta
        $editarDatos = $conexionBD->prepare($consultaSQL);
        //ejecutar la consulta
        $resultado = $editarDatos->execute();

        //verifico el resultado
        if ($resultado) {
            echo "  . <script>
            Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Producto Editado Correctamente',
        showConfirmButton: false,
        timer: 2000,
        backdrop: '#000000c5',
        allowOutsideClick:'false',
        allowEscapeKey:'false',
        allowEnterKey:'false'
         });
        </script>";
        } else {
            echo ". <script>
            Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Error al Editar el Producto',
        showConfirmButton: false,
        timer: 2000,
        backdrop: '#000000c5',
        allowOutsideClick:'false',
        allowEscapeKey:'false',
        allowEnterKey:'false'
         });
        </script>";
        }
    }
}
