<?php

require_once 'conexion.php';

class RegistroNuevoUsuario{
    function RegistrarUsuario($nombre, $apellido, $email){
        try{
            $conexion= new Conexion();
            $stmt = $conexion->prepare("");
            $stmt->bindValue("", $nombre, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR: No ha sido posible realizar la solicitud intente de nuevo";
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}

?>