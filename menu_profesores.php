<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 11/06/2016
 * Time: 01:13 PM
 */
require_once('./inc/Session.php');

//confirm_logged_in();
?>
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'inc/head_common.php'; ?>

</head>
<body>
<?php include 'inc/header.php'; ?>
    <div class="wrapper container-fluid" id="contenido">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">3. Sección de Profesores </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">3.1</div>
                                <div>Registros</div>
                            </div>
                        </div>
                    </div>
                    <a href="./RegistroProfesores.php">
                        <div class="panel-footer">
                            <span class="pull-left">Registro de profesores</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">3.2</div>
                                <div>Ingresos</div>
                            </div>
                        </div>
                    </div>
                    <a href="./profesores_quejas.php">
                        <div class="panel-footer">
                            <span class="pull-left">Reporte de quejas</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a class="btn btn-primary" href="dashboard.php">Salir</a>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>
<?php include('inc/footer_common.php'); ?>
</body>
</html>
