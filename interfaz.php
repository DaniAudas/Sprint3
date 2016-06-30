<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 14/06/2016
 * Time: 10:32 AM
 */
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
            <?php $cont = 1; for($i = 0; $i <= 23; $i++){ ?>
                <div class="col-xs-6 col-sm-3 col-md-8a col-lg-8a computer" id="computer_<?php echo $cont;?>" data-id="computer_<?php echo $cont;?>">
                    <a class="thumbnail">
                        <?php echo '<p>'.$cont.'</p><img src="img/gray.png" id="matrix">'; ?>
                    </a>
                </div>
            <?php $cont++; }?>
            <?php $cont = 1; for($i = 0; $i <= 7; $i++){ ?>
                <div class="col-xs-6 col-sm-3 col-md-8a col-lg-8a laptop" id="laptop_<?php echo $cont;?>" data-id="laptop_<?php echo $cont;?>">
                    <a class="thumbnail">
                        <?php echo '<p>'.$cont.'</p><img src="img/lap_gray.png" id="laps">'; ?>
                    </a>
                </div>
                <?php $cont++; }?>
            <?php $cont = 25; for($i = 0; $i <= 15; $i++){ ?>
                <div class="col-xs-6 col-sm-3 col-md-8a col-lg-8a computer" id="computer_<?php echo $cont;?>" data-id="computer_<?php echo $cont;?>">
                    <a class="thumbnail">
                        <?php echo '<p>'.$cont.'</p><img src="img/gray.png" id="matrix">'; ?>
                    </a>
                </div>
            <?php $cont++; }?>
        </div>
    </div>
    <div id="contextMenu" class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
            style="display:block;position:static;margin-bottom:5px;">
            <li><h5 class="headerMenu"></h5></li>
            <li class="divider"></li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-red.png">
                        </div>
                        <div class="icon-menu-txt">
                            Dañada
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-yellow.png">
                        </div>
                        <div class="icon-menu-txt">
                            Reparación
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-green.png">
                        </div>
                        <div class="icon-menu-txt">
                            Disponible
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/icon-mini-gray.png">
                        </div>
                        <div class="icon-menu-txt">
                            Liberar
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- --------------------------------Area Laptop--------------------------- -->
    <div id="contextMenu" class="dropdown clearfix laps">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"
            style="display:block;position:static;margin-bottom:5px;">
            <li><h5 class="headerMenu"></h5></li>
            <li class="divider"></li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/lap_green_mini.png">
                        </div>
                        <div class="icon-menu-txt">
                            Disponible
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a tabindex="-1">
                    <div style="display: table">
                        <div class="icon-menu">
                            <img src="img/lap_gray_mini.png">
                        </div>
                        <div class="icon-menu-txt">
                            Liberar
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <img src="./img/pantalla2.png" class="imgcenter">
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
