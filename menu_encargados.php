<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 28/06/2016
 * Time: 11:38 AM
 */
?>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'inc/head_common.php'; ?>

</head>
<body>
<?php include 'inc/header.php'; ?>
<div class="wrapper container-fluid" id="contenido">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">1. Sección de Encargados </h1>
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
                            <div class="huge">1.1</div>
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
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1.2</div>
                            <div>Registros</div>
                        </div>
                    </div>
                </div>
                <a href="./RegistroAlumnos.php">
                    <div class="panel-footer">
                        <span class="pull-left">Registro de alumnos</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-search fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1.3</div>
                            <div>Ingresos</div>
                        </div>
                    </div>
                </div>
                <a href="./ingresomat.php">
                    <div class="panel-footer">
                        <span class="pull-left">Búsqueda por matricula</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-blue">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-desktop fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1.4</div>
                            <div>Computadoras</div>
                        </div>
                    </div>
                </div>
                <a href="./interfaz.php">
                    <div class="panel-footer">
                        <span class="pull-left">Ir a estado de eqipos</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a class="btn btn-primary" href="indexEncargados.php">Salir</a>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
<?php include('inc/footer_common.php'); ?>
</body>
</html>
