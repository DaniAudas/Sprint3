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
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <form>
                    <div id="contact-form" class="form-container" data-form-container>
                        <div class="row">
                            <div class="form-title">
                                <span>INGRESE SUS DATOS</span>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo."> </span>
						<input type="text" data-min-length="8" placeholder="Nombre completo">
					</span>
                            </div>
                            <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Porfavor ingrese su Email."> </span>
						<input type="email" placeholder="Email">
					</span>
                            </div>
                            <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Porfavor ingrese su número telefonico."> </span>
						<input type="tel" placeholder="Numero de telefono">
					</span>
                            </div>
                            <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo."> </span>
						<input type="text" data-min-length="6" placeholder="Nombre de usuario (minimo 6 caracteres)">
					</span>
                            </div>
                            <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo."> </span>
						<input type="password" data-min-length="8" placeholder="Contraseña (minimo 8 caracteres)">
					</span>
                            </div>
                            <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo."> </span>
						<input type="password" data-min-length="8" placeholder="Comfirme su contraseña">
					</span>
                            </div>
                            <div class="row submit-row">
                                <button type="button" class="btn btn-block submit-form">Submit</button>
                            </div>
                        </div>
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
</script>
