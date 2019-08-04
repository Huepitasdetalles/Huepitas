<?php
    require_once 'configuracion.php';

    $conection = mysqli_connect(servidor, usuario, '', base_datos);

    if (!$conection) {
        echo "
        <script>
            alert('No se ha podido conectar a la base de datos');
            window.location = '../vista/iniciarsesion.php';
        </script>";
        die();
    }


    $cantidaddeentrada = $_POST["cantidad de entrada"];
    $cantidaddesalida = $_POST["cantidad de salida"];
    $cantidadactual = $_POST["cantidad actual"];

    $result = $conection->query("INSERT INTO 'cantidaddeentrada', 'cantidaddesalida', 'cantidadactual') VALUES (:cantidaddeentrada, :cantidaddesalida, :cantidadaactual)");
    var_dump($result);
    die;
    if($result){
        echo "<script>
            alert('Registro almacenado con éxito');
            window.location = '../vista/agregar_productos.php';
        </script>";
    }else{
        echo "<script>
            alert('Ha ocurrido un error al ingresar el registro');
            window.location = '../vista/agregar_productos.php';
        </script>";
    }
    
?>