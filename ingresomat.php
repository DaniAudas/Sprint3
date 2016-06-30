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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i>
                            <h3>Ingreso de alumnos</h3>
                        </i>
                    </div>
                    <div class="panel-body">
                        <form id="login" method="POST">
                            <div id="response"></div>
                            <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            </span>
                                <input id="matricula" class="form-control transparent-input" type="text"
                                       placeholder="Matricula" required="" autocomplete="off" name="matricula">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="form-group">
                                <a href="./menu_panel.php">
                                <input class="btn btn-success" type="submit" value="Buscar">
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
