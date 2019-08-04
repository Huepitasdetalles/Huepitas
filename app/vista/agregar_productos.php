<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio | HUEPITAS</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<style type="text/css">
    body{ 
        margin: 0;
        padding: 0; 
        background: url(../../img/bg-img/fondo3.jpg) no-repeat center;
        background-size:cover;               
        height: 100vh;
    }
</style>
<body>
    <?php
    include 'menu_home.php';
    ?>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                            
                                <form action="../controlador/productos_insertar.php"></form>
                                <h1 class="card-title"><strong>Agregar Productos</strong></h1><br>
                                <div class="row">
                                    <div class="group"> 
                                        <div class="col"><label class="label-control">Categoria</label><input type="text" name="codigo" id="codigo" placeholder="" class="form-control" style="width: 302px;"></div>
                                        <div class="col"><label class="label-control">Nombre</label><input type="text" name="nombre" id="nombre" placeholder="" class="form-control" style="width: 302px;"></div>
                                        <div class="col"><label class="label-control">Precio</label><input type="text" name="valor" id="valor" placeholder="" class="form-control" style="width: 302px;"></div>
                                    </div><br>
                                </div>
                            </div>
                            <button class="btn btn-primary" onclick="guardar();"name="guardar" id="guardar" type="button">Guardar</button>&nbsp;
                            <button class="btn btn-danger" type="reset">Borrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    
</body>
</html>