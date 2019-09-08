<!doctype html>

<html class="no-js" lang="en">

<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');
?>
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
                        <form id="nuevo" action = "form-producto.php" method="GET"> 
                        <input type="hidden" id="id" name="id" value=0>
                        <button>Agregar Producto</button>
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
                                <strong class="card-title">Productos</strong>
                            </div>
                            <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                           <!--
                                    <thead>   
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Codigo</th>
                                            <th>Precio</th>
                                            <th>Descuento</th>
                                            <th>Stock Minimo</th>
                                            <th>Stock Actual</th>
                                            <th>Categoria</th>
                                            <th>Foto</th>
                                            <th>Video</th>
                                            <th>Descripcion Corta</th>
                                            <th>Descripcion larga</th>
                                            <th>Destacado</th>
                                            <th>OnSale</th>
                                            <th>Mostrar Home</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                            <th>Ver</th>

                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td>Glock gen 5</td>
                                            <td>111111111</td>
                                            <td>$85000</td>
                                            <td>$400</td>
                                            <td>5</td>
                                            <td>12</td>
                                            <td>Arma Corta</td>
                                            <td> <a class="navbar-brand hidden" href="./"><img src="images/glock5.jpg"></a></td>
                                            <td><a href="prueba"><img src="images/video.png"></a></td>
                                            <td>Pistola </td>
                                            <td>Pistola semi-automatica </td>
                                            <td>Si</td>
                                            <td>Si</td>
                                            <td>No</td>
                                            <td><a href="prueba">Modificar</a></td>
                                            <td><a href="prueba">Eliminar</a></td>
                                            <td><a href="prueba">Ver</a></td>
                                        </tr>
                                        
                                    </tbody>
                                     -->
                                </table>
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
    


</body>
<script>
    (function ($) { 
                     
        $.ajax({
            async:true,
            type: "POST",
            url: "controller/productoController.php",                    
            data:"accion=ObtenerTodos",
            beforeSend:function(){
                alert('comienzo a procesar');
            },
            success:function(resultado) {
                var o = JSON.parse(resultado);//A la variable le asigno el json decodificado                
                
                var i;
                for (i=0; i < o.lenght; i++){
                        if (o[i].destacadoProducto == 1) {o[i].destacadoProducto="Si";} else {o[i].destacadoProducto="No";}
                        if (o[i].onSaleProducto == 1) {o[i].onSaleProducto="Si";} else {o[i].onSaleProducto="No";}
                        if (o[i].mostrarHomeProducto == 1) {o[i].mostrarHomeProducto="Si";} else {o[i].mostrarHomeProducto="No";}
                        
                }
                console.log(o);
                $('#bootstrap-data-table-export').DataTable( {
                    data : o,
                    columns: [
                        {data : "nombreProducto", title: "Nombre"},
                        {data : "codigoProducto", title: "Codigo"},
                        {data : "precioProdcuto", title: "Precio"},
                        {data : "descuentoProducto", title: "Descuento"},
                        {data : "stockMinimo", title: "Stock Minimo"},
                        {data : "stockActual", title: "Stock Actual"},
                        {data : "categoriaProducto", title: "Categoria"},
                        {data : "fotoProducto", title: "Foto"},
                        {data : "videoProducto", title: "Video"},
                        {data : "descripcionCortaProducto", title: "Descripcion Corta"},
                        {data : "descripcionLargaProducto", title: "Descripcion Larga"},
                        {data : "destacadoProducto"  ,  title: "Destacado"},
                        {data : "onSaleProducto" , title: "On Sale"},
                        {data : "mostrarHomeProducto", title: "Mostrar En Home"},
                        {
                            data: null,
                            title: 'Acciones',
                            className: "text-center",                            
                            render: function (data){
                                return '<a href="javascript:editar('+ data.idProducto +');">Editar</a><a href="javascript:eliminar('+ data.idProducto +');"> Eliminar</a>';
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
                    window.location="form-producto.php?id="+id;
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
									url: "controller/productoController.php",                    
									data:"accion=eliminar&idProducto="+id,
									//data: "nombre=martin&apellido=esses",
									beforeSend:function(){
										alert('comienzo a procesar');
														},
									success:function(resultado) {
                                        alert(resultado);
                                        window.location = "abm-productos.php";				
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
</html>
