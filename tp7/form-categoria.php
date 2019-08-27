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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="jquery-3.4.1.js" type="text/javascript"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <?php
    include_once('referencias/estilos.html');
    ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="jquery-3.4.1.js" type="text/javascript"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
 
    <?php
    include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');
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
                        <h1>Categoria</h1>
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
                                <strong>Formulario De Categorias</strong> 
                            </div>
                            <div class="card-body card-block">


                                <form  id="formulario" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Categoria</label></div>
                                        
                                      <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Categoria" class="form-control" value=                                     
                                        "<?php 
                                        

                                        if ($_POST["id"] != 0){

                                            $resultado = CategoriaDao::ObtenerPorID($_POST["id"]);
                                            echo $resultado->nombreCategoria;
                                        } else {
                                            echo "";
                                        }

                                        
                                        ?>"  >
                                        
                                        <small class="form-text text-muted"></small></div>
                                        <input type="hidden" id="accion" name="accion" value=<?php echo $_POST["accion"]?> >
                                        <input type="hidden" id="idCategoria" name="idCategoria" value=<?php echo $_POST["id"]?> >
                                        <label id="ErrorCategoria"></label>
                                        <button value="Enviar" onclick="Validar();" type="button" class="btn btn-primary btn-sm" <?php  if ($_POST["accion"] == "Ver") echo "disabled" ?>>
                                        <i class="fa fa-dot-circle-o"  ></i> Enviar
                                        </button>
                                      
                                    </div>
                                   
                                </form>


                                
                            </div>
                           
                        </div>
                     



                    </div>
                </div>


            <script>
				function Validar(){
                    alert('Entre al validar ');
					var categoria = $('#nombre').val();
								$('#ErrorCategoria').html('');

					if(categoria==''){
						// alert('Debe completar ambos campos');
						$('#ErrorCategoria').html('Debe comentar el campo');
					}
					else{
						
								//$('#ErrorAmbos').html('');
								//$('#ErrorNombre').html('');
								//$('#ErrorClave').html('');
								$.ajax({
									async:true,
									type: "POST",
									url: "controller/categoriaController.php",                    
									data:$('#formulario').serialize(),
									//data: "nombre=martin&apellido=esses",
									beforeSend:function(){
										alert('comienzo a procesar');
														},
									success:function(resultado) {
                                        alert(resultado);
									var errores = JSON.parse(resultado);
									//alert(resultado);
									if(errores.errorNombre == null){
										window.location = "abm-categorias.php";
									}
									if(errores.errorNombre != null)
									{
										$('#ErrorCategoria').html(errores.errorNombre);
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
                               


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
