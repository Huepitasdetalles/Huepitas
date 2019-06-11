<html>
<head>
<meta charset="utf-8">
<title>Huepitas</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="img/bg-img/logo1.png">
<link rel="stylesheet" href="../../css/font-awesome.min.css">
  <style>
  body{
    background: url('../../img/bg-img/tienda.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-clip: inherit;
    background-size: cover;
  }
  .container{
    text-align: center;
  }

  .login-box{
    height: 400px;
    width: 300px;
    display: inline-block;
    background-color: white;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 11px 15px -7px;
  }
  </style>

</head>
 
<body>
  <div class="container">
    <div class="login-box">
      <form action="../controlador/registro.php" method="POST">
        <div class="">
          <h3>HUEPITAS</h3>
        </div>
        <div class="body-box">
          <div class="container">
            <div class="form-group">
   
            </div>
            
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-user"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Usuario">
            </div>

            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-lock"></i>
                 
                  
                </div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Contraseña">
            </div>

            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-envelope"></i>
                 
                  
                </div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email">
            </div>

            
            
            
            <input class="btn btn-info" name="enviar" type="submit" value="Registrarse" />
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>