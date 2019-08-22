<?php

    require dirname(__DIR__, 3) . '/modelo/inventario.modelo.php';

    if($_POST){
        $inventario = new Inventario();

        switch($_POST["accion"]){
            case "CONSULTAR":
                echo json_encode($inventario->ConsultarTodo());
            break;
            case "CONSULTAR_ID":
                echo json_encode($inventario->ConsultarPorId($_POST["idInventario"]));
            break;
            case "GUARDAR":
                $listadeproductos = $_POST["listadeproductos"]; 
                $cantidadactual = $_POST["cantidadactual"];
                $cantidaddesalida = $_POST["cantidaddesalida"];
                $cantidaddeentrada = $_POST["cantidaddeentrada"];
                $respuesta = $inventario->Guardar($listadeproductos, $cantidadactual, $cantidaddesalida, $cantidaddeentrada);
                echo json_encode($respuesta);
            break;
            case "MODIFICAR":
                $listadeproductos = $_POST["listadeproductos"]; 
                $cantidadactual = $_POST["cantidadactual"];
                $cantidaddesalida = $_POST["cantidaddesalida"];
                $cantidaddeentrada = $_POST["cantidaddeentrada"];
                $idInventario = $_POST["idInventerio"];
                $respuesta = $inventario->Modificar($idInventario, $listadeproductos, $cantidadactual, $cantidaddesalida, $cantidaddeentrada);
                echo json_encode($respuesta);
            break;
            case "ELIMINAR":
                $idInventario = $_POST["idInventario"];
                $respuesta = $inventario->Eliminar($idInventario);
                echo json_encode($respuesta);
            break;
        }
    }
?>