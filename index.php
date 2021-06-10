<?php
include "modelo/config.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesión</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="vista/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="vista/plugins/iCheck/square/blue.css">
    <link rel="icon" href="vista/dist/img/logo3.png">
</head>

<div class="cintillo">

    <img src="vista/dist/img/encabezado.png" width="100%" height="100">

</div>
<body class="hold-transition login-page" style="background-image: url(vista/dist/img/back.png);
background-size: cover; ">
<div class="login-box" style="margin-top: 30px">
    <div align="center"><img style="width: 50%;" src="vista/dist/img/logo3.png" class="img-rounded"></div>
    <div class="login-logo">
        <b>SisCor</b>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><center>Iniciar sesion</center></div>
        <div class="panel-body">
            <form role="form" method="post" action="controlador/login.php" id="mensajeac">
                <div class="form-group has-feedback">
                    <input type="text" name="usu" class="form-control" placeholder="Nombre de usuario" required="">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                 <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                <div class="row">
                        <div class="col-xs-4" style="margin-left: 35%">
                            <button type="submit" class="btn btn-primary btn-flat">Ingresar</button>
                        </div>
                    </div>
                <br>
            </form>
        </div>
    </div>



</div>
</body>
<script src="vista/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="vista/bootstrap/js/bootstrap.min.js"></script>
<script src="vista/plugins/iCheck/icheck.min.js"></script>

</html>
