<?php

class Conexion extends PDO{
    function __constructor(){
        try{
            parent::__constructor("mysql:host=localhost;dbname=nombre_bd", "root", "");
            parent::exec("set names utf8");
        }catch(\exception $e){
            echo "La conexión no se pudo realizar, revise la instancia de la conexión";
            exit;

        }
    }
}

?>