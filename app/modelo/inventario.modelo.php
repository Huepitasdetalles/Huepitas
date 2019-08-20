<?php

    require 'conexion.php';

    class Inventario{

        public function ConsultarTodo(){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM inventario");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function ConsultarPorId($idInventario){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM inventario WHERE idInventario = :idInventario");
            $stmt->bindValue("idInventario", $idInventario, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);

        } 

        public function Guardar ($listadeproductos, $cantidadactual, $cantidaddesalida, $cantidaddeentrada){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("INSERT INTO `Inventario`
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

        public function Modificar ($idInventario, $listadeproductos, $cantidadactual, $cantidaddesalida, $cantidaddeentrada){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE `inventario`
                                        SET `listadeproductos` = :listadeproductos,
                                        `cantidadactual` = :cantidadactual,
                                        `cantidaddesalida` = :cantidaddesalida,
                                        `cantidaddeentrada` = :cantidaddesalida
                                        WHERE `idInventario` = :idInventario;");
            $stmt->bindValue(":listadeproductos", $listadeproductos, PDO::PARAM_STR);
            $stmt->bindValue(":cantidadactual", $cantidadactual, PDO::PARAM_STR);
            $stmt->bindValue(":cantidaddesalida", $cantidaddesalida, PDO::PARAM_STR);
            $stmt->bindValue(":cantidaddeentrada", $cantidaddeentrada, PDO::PARAM_STR);
            $stmt->bindValue(":idPersona", $idInventario, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al modificar la información";
            }
        }

        public function Eliminar ($idInventario){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("DELETE FROM inventario WHERE idInventario = :idInventario");
            $stmt->bindValue(":idPersona", $idInventario, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al eliminar la información";
            }
        }
    }

?>
