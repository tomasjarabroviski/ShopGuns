<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <?php
    include_once('referencias/estilos.html');
    ?>

</head>

<body>
 
    <?php
    include_once('referencias/leftPanel.html');
    // Left Panel
    ?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
    <?php
    include_once('referencias/header.html');
    // Left Panel
    ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Usuario</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                    
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Formulario De Usuarios</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre Usuario</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="NombreUsuarioPedido" name="text-input" placeholder="Nombre Usuario" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Apellido Usuario</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="ApellidoUsuarioPedido" name="text-input" placeholder="Apellido Usuario" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Producto</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                                    <option value="0">Por favor selecciona una</option>
                                                    <option value="1">Glock 5</option>
                                                    <option value="2">Beretta 9mm</option>
                                                    <option value="3">Bersa TPR 9</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Estado</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label ">
                                                            <input type="radio" id="Si" name="radios" value="Si" class="form-check-input">Activo
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label ">
                                                            <input type="radio" id="No" name="radios" value="No" class="form-check-input">Inactivo
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Enviar
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Resetear
                                </button>
                            </div>
                        </div>
                     



                    </div>
                </div>
                               


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
