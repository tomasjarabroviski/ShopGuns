<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/slider.php');                               

$accion = 'nuevo';
$id = 0;
if (isset($_GET["id"])&&$_GET["id"] != 0){
    $resultado = sliderDao::ObtenerPorID($_GET["id"]);                                            
    $id = $_GET["id"];
    $accion = 'modificar';
} else {
    $resultado = new Slider();
}

?>



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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="jquery-3.4.1.js" type="text/javascript"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
                        <h1>Slider</h1>
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
                                <strong>Formulario Slider</strong> 
                            </div>
                            <div class="card-body card-block">

                                <form id="formulario" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Texto</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="TextoSlider" name="TextoSlider" placeholder="Texto Slider" class="form-control" value="<?php echo $resultado->textoSlider; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrorTexto"></label>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Imagen</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="fotoSlider" name="fotoSlider" class="form-control-file" value="<?php echo $resultado->fotoSlider; ?>"></div>
                                            <label id="ErrorFoto"></label>
                                            <input type="hidden" id="accion" name="accion" value=<?php echo $accion; ?> >
                                            <input type="hidden" id="idSlider" name="idSlider" value=<?php echo $id; ?> >
                                            <button value="Enviar" onclick="Validar();" type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Enviar
                                             </button>
                                    </div>
                                   
                                </form>
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

                            <script>

				function Validar(){
                    alert('Entre al validar ');
					var texto = $('#TextoSlider').val();
                    var foto = $('#fotoSlider').val();
                    var hayErrores = false;

								$('#ErrorFoto').html('');
                                $('#ErrorTexto').html('');
                        console.log(texto,foto);
					if(!texto){
						// alert('Debe completar ambos campos');
						$('#ErrorTexto').html('Debe comentar el campo');
                        hayErrores = true;
					} 
                        if (!foto)
                        {
	                        // alert('Debe completar ambos campos');
                            hayErrores = true;
                            $('#ErrorFoto').html('Debe comentar el campo');
                        }

                        if (!hayErrores){
                            $.ajax({
									async:true,
									type: "POST",
									url: "controller/sliderController.php",                    
									data:$('#formulario').serialize(),
									//data: "nombre=martin&apellido=esses",
									beforeSend:function(){
										alert('comienzo a procesar');
														},
									success:function(resultado) {
                                        alert(resultado);
									var errores = JSON.parse(resultado);
									alert(resultado);
                                    console.log(errores);
									if(errores.errorFoto == null && errores.errorTexto == null){
										window.location = "abm-slider.php";
									}
									if(errores.errorFoto != null)
									{
										$('#ErrorFoto').html(errores.errorFoto);
									}
                                    if(errores.errorTexto != null)
									{
										$('#ErrorTexto').html(errores.errorTexto);
									}
									},
									timeout:8000,
									error:function(){
									alert('mensaje de error');
									return false;
									}
									});		

                        }

                    
							
						
                }
						
				
							
				
			</script>
</body>
</html>
