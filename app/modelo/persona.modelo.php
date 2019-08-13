<?php

    require 'conexion.php';

    class Persona{

        public function Guardar ($listadeproductos, $cantidadactual, $cantidaddesalida, $cantidaddeentrada){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("INSERT INTO `persona`
                                                (`listadeproductos`,
                                                `cantidadactual`,
                                                `cantidaddesalida`,
                                                `cantidaddeentrada`)
                                    VALUES (:listadeproductos,
                                            :cantidadactual,
                                            :cantidaddesalida,
                                            :cantidaddeentrada);");
            $stmt->bindValue(":listadeproductos", $listadeproductos, PDO::PARAM_STR);
            $stmt->bindValue(":cantidadactual", $cantidadactual, PDO::PARAM_STR);
            $stmt->bindValue(":cantidaddesalida", $cantidaddesalida, PDO::PARAM_STR);
            $stmt->bindValue(":cantidaddeentrada", $cantidaddeentrada, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al guardar la información";
            }
        }
    }

?>
