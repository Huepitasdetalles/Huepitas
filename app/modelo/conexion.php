<?php

class Conexion extends PDO{
    public function __construct(){
        try{
            parent::__construct("mysql:host=localhost;dbname=RBA", "root", "");
            parent::exec("set names utf8");
        }catch(PDOException $e){
            echo "La conexión no se pudo realizar, revise la instancia de la conexión" . $e->getMessage();
            exit;
        }
    }
}

?>