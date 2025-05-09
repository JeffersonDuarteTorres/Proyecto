<?php
require_once "app/modelos/registro.modelo.php";
class ControladorRegistro{

    static public function ctrRegistro(){

        if(isset($_POST["nombre"])){

            $tabla = "personas";

            $datos = array(
                "pers_nombre" => $_POST["nombre"],
                "pers_telefono" => $_POST["numeroTelefonico"],
                "pers_correo" => $_POST["correo"],
                "pers_clave" => $_POST["clave"]            

            );

            $respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

            return $respuesta;

        }

    }

  
}