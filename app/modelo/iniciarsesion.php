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

    $usuario = $_POST["usuario"];
    $pass = $_POST["contrasena"];

    $result = $conection->query("SELECT * FROM usuario WHERE Nombreusuario = '$usuario'");

    if(mysqli_num_rows($result) > 0){
        $row = $result->fetch_object();
        if($row->Contrasena != $pass){ 
            echo "<script>
                alert('Las contraseñas no coinciden');
                window.location = '../vista/iniciarsesion.php';
            </script>"; 
        }

        if($row->estado != 1){
            echo "<script>
                alert('El usuario se encuentra inactivo');
                window.location = '../vista/iniciarsesion.php';
            </script>";
        }
        echo "<script>
            window.location = '../vista/home.php';
        </script>";
    }else{
        echo "<script>
            alert('El usuario no existe');
            window.location = '../vista/iniciarsesion.php';
        </script>";
    }

    mysqli_free_result($result);
    mysqli_close($connection);
?>