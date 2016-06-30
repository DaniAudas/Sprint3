<?php

?>
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'inc/head_common.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<div class="wrapper container-fluid" id="contenido">
    <div class="container">
        <div class="row">
            <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i>
                            <h3>Iniciar Sesión</h3>
                        </i>
                    </div>
                    <div class="panel-body">
                        <form id="login" method="POST">
                            <div id="response"></div>
                            <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            </span>
                                <input id="userName" class="form-control transparent-input" type="text"
                                       placeholder="Nombre de usuario" required="" autocomplete="off" name="userName">
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input id="pswdUser" class="form-control transparent-input" type="password" required=""
                                       placeholder="Contraseña" name="pass">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Acceder">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include('inc/footer_common.php'); ?>
</body>
</html>
<script>
    var root = './inc/';
</script>
