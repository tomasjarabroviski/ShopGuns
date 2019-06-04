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
    include_once('/referencias/estilos.html');
?>
</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo_principal.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Correo electronico o Telefono</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Recuerdame
                            </label>
                                    <label class="pull-right">
                                <a href="#">Olvidaste la contraseña?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Iniciar</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Iniciar con Faceboock</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Iniciar con Twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>No Tienes Cuenta? <a href="#"> Registrate Aca</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once('/referencias/scripts.html');
?>
  

</body>

</html>
