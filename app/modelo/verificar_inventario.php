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

    $result = $conection->query("SELECT * FROM inventario");

    if(mysqli_num_rows($result) > 0){
        while($row=$result->fetch_object()){
            echo json_encode($row);
        }
    }else{
        echo json_encode("No existe inventario");
    }

    mysqli_free_result($result);
    mysqli_close($conection);
?>
