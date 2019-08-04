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

    $codigodelproducto = $_POST["codigo del producto"];
    $nombredelproducto = $_POST["nombre del producto"];
    $valordelproducto = $_POST["valor del producto"];

    $result = $conection->query("INSERT INTO `codigodelproducto`, `nombredelproducto`, `valorunitario`) VALUES (01,'pelucheoso',35000.00)");
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

    mysqli_free_result($result);
    mysqli_close($connection);

?>