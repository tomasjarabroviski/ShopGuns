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


 
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


    <?php
    include_once('referencias/estilos.html');
    ?>

</head>

<body>
    
    <?php
    include_once('referencias/leftPanel.html');
    // Left Panel
    ?>
    <div id="right-panel" class="right-panel">

    <?php
    include_once('referencias/header.html');
    ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <form id="nuevo" action = "form-slider.php" method="GET"> 
                        <input type="hidden" id="id" name="id" value=0>
                        <button>Agregar Slider</button>
                        </form>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
              
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Slider</strong>
                            </div>
                            <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                           <!--
                                    <thead>   
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Foto</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                            <th>Ver</th>

                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td>Glock 5</td>
                                            <td><a href="prueba"><img src="images/glock5prueba.png"></a></td>
                                            <td><a href="prueba">Modificar</a></td>
                                            <td><a href="prueba">Eliminar</a></td>
                                            <td><a href="prueba">Ver</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                  -->
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  
    <script>
    (function ($) {                
        $.ajax({
            async:true,
            type: "POST",
            url: "controller/sliderController.php",                    
            data:"accion=ObtenerTodos",
            beforeSend:function(){
                alert('comienzo a procesar');
            },
            success:function(resultado) {
                var o = JSON.parse(resultado);//A la variable le asigno el json decodificado                
                
                $('#bootstrap-data-table-export').DataTable( {
                    data : o,
                    columns: [
                        {data : "textoSlider", title: "Texto"},
                        {data : "fotoSlider", title: "Foto"},
                        {
                            data: null,
                            title: 'Acciones',
                            className: "text-center",                            
                            render: function (data){
                                return '<a href="javascript:editar('+ data.idSlider +');">Editar</a><a href="javascript:eliminar('+ data.idSlider +');"> Eliminar</a>';
                            }
                        }                        
                    ],
                });
                return true;
            },
            timeout:8000,
            error:function(){
                alert('mensaje de error');
                return false;
            }
        });        
        
        
    })(jQuery);

            function editar(id){
                    window.location="form-slider.php?id="+id;
                }

                function eliminar(id){
                    jQuery(function($){

                    alert('Entre al Eliminar ');
					
								//$('#ErrorAmbos').html('');
								//$('#ErrorNombre').html('');
								//$('#ErrorClave').html('');
								$.ajax({
									async:true,
									type: "POST",
									url: "controller/sliderController.php",                    
									data:"accion=eliminar&idSlider="+id,
									//data: "nombre=martin&apellido=esses",
									beforeSend:function(){
										alert('comienzo a procesar');
														},
									success:function(resultado) {
                                        alert(resultado);
                                        window.location = "abm-slider.php";				
									},
									timeout:8000,
									error:function(){
									alert('mensaje de error');
									return false;
									}
									});		
                                });
                    	
							
							
                }



    </script>


</body>

</html>
