<?php
    require_once '../modelo/registro.php';

    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        if($nombre==""){
            echo "<script>window.location = './../vista/registro.php?respuesta=MAL&mensaje=Falta%20Registrar%20El%20Nombre'</script>";
        }

        if($apellido=""){
            echo "<script>window.location = './../vista/registro.php?respuesta=MAL&mensaje=Falta%20Registrar%20El%20Apellido'</script>";
        }

        if($email=""){
            echo "<script>window.location = './../vista/registro.php?respuesta=MAL&mensaje=Falta%20Registrar%20El%20Email'</script>";
        }

        $controlador = new RegistroNuevoUsuario();
        $respuesta = $controlador->RegistrarUsuario($nombre, $apellido, $email);
        if($respuesta == "OK"){
            echo "<script>window.location = './../vista/'</script>";
        }else{
            echo "<script>window.location = './../vista/registro.php?respuesta=MAL&mensaje=$respuesta'</script>";
        }
        
    }

?>