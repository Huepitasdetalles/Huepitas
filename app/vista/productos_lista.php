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
 
<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4>Listado de Productos</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Codigo</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


 
<script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>