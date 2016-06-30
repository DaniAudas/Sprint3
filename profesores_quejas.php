<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'inc/head_common.php'; ?>
    <?php include 'inc/Session.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<div class="wrapper container-fluid">
    <div class="container">
        <h3>Quejas de Profesores</h3>
        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <form id="queja1" method="POST">
                    <select type="text" id="problema" class="selectpicker" name="problema">
                        <option value="teclado">Teclado</option>
                        <option value="mouse">Mouse</option>
                        <option value="monitor">Monitor</option>
                        <option value="cpu">CPU</option>
                        <option value="cables">Cables de red</option>
                        <option value="mobiliario">Mobiliario</option>
                    </select>
                    <br>
                    <br>
                    <div class="row">
                        <textarea id="descripcion" type="text" class="form-control" cols="6" rows="10" name="descripcion"></textarea>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-md-offset-1 col-sm-5">
                <form id="queja2" method="POST">
                    <select id="problema" class="selectpicker" name="problema">
                        <option type="text" value="escandalo">Hacen demasiado escandalo</option>
                        <option type="text" value="noresuelven">No resuelven los problemas</option>
                        <option type="text" value="noatencion">No prestan atención cuando se les necesita</option>
                    </select>
                    <br>
                    <br>
                    <div class="row">
                        <textarea id="descripcion" type="text" class="form-control" cols="6" rows="10" name="descripcion"></textarea>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                </form>
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

    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
</script>