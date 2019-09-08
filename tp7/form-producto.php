<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');  
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');                               

$accion = 'nuevo';
$id = 0;
if (isset($_GET["id"])&&$_GET["id"] != 0){
    $resultado = ProductoDao::ObtenerPorID($_GET["id"]);                                            
    $id = $_GET["id"];
    $accion = 'modificar';
} else {
    $resultado = new Producto();
    $resultado->destacadoProducto = 3;
    $resultado->onSaleProducto = 3;
    $resultado->mostrarHomeProducto = 3;
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
                        <h1>Producto</h1>
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
                                <strong>Formulario De Productos</strong> 
                            </div>
                            <div class="card-body card-block">


                                <form id="formulario"  class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nombreProducto" name="nombreProducto" placeholder="Nombre" class="form-control"value="<?php echo $resultado->nombreProducto; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrorNombreProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Codigo</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="codigoProducto" name="codigoProducto" placeholder="Codigo" class="form-control" value="<?php echo $resultado->codigoProducto; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrorcodigoProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Precio</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="precioProducto" name="precioProducto" placeholder="Precio" class="form-control" value="<?php echo $resultado->precioProdcuto; ?>"><small class="form-text text-muted" ></small></div>
                                        <label id="ErrorprecioProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Descuento</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="descuentoProducto" name="descuentoProducto" placeholder="Descuento" class="form-control"value="<?php echo $resultado->descuentoProducto; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrordescuentoProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock Minimo</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="stockMinimo" name="stockMinimo" placeholder="Stock Minimo" class="form-control"value="<?php echo $resultado->stockMinimo;?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrorstockMinimo"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock Actual</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="stockActual" name="stockActual" placeholder="Stock Actual" class="form-control"value="<?php echo $resultado->stockActual; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrorstockActual"></label>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Categoria</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="categoriaProducto" id="categoriaProducto" class="form-control-sm form-control">
                                            
                                                <?php foreach (CategoriaDao::obtenerTodos() as $item)
                                            {?>
                                               

                                                <option value="<?php echo $item->nombreCategoria  ?>" 
                                                <?php if ($item->nombreCategoria == $resultado->categoriaProducto) {echo "selected";}  
                                                 ?>

                                                ><?php echo $item->nombreCategoria ?> 
                                                
                                                </option>
                             
                        
                                                <?php
                                            }
                                            ?>
                                                    <!-- <option value="0">Por favor selecciona una</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>  -->
                                                </select>
                                                <label id="ErrorcategoriaProducto"></label>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Imagen</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="fotoProducto" name="fotoProducto" class="form-control-file" value="<?php echo $resultado->fotoProducto; ?>"></div>
                                            <label id="ErrorfotoProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">URL Video</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="videoProducto" name="videoProducto" placeholder="URL Video" class="form-control" value="<?php echo $resultado->videoProducto; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrorvideoProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Descripcion Corta</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="descripcionCortaProducto" name="descripcionCortaProducto" placeholder="Descripcion Corta" class="form-control"value="<?php echo $resultado->descripcionCortaProducto; ?>"><small class="form-text text-muted"></small></div>
                                        <label id="ErrordescripcionCortaProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripcion Larga</label></div>
                                        <div class="col-12 col-md-9"><textarea name="descripcionLargaProducto" id="descripcionLargaProducto" rows="9" placeholder="Contenido..." class="form-control"><?php echo $resultado->descripcionLargaProducto; ?></textarea></div>
                                        <label id="ErrordescripcionLargaProducto"></label>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Destacado</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label ">
                                                            <input type="radio" id="destacadoProducto" name="destacadoProducto" value=1 class="form-check-input" <?php  if ($resultado->destacadoProducto == 1) {echo "checked";} ?>>Si
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label ">
                                                            <input type="radio" id="destacadoProducto" name="destacadoProducto" value=0 class="form-check-input" <?php  if ($resultado->destacadoProducto == 0) {echo "checked";} ?>>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label id="ErrordestacadoProducto"></label>
                                    </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">On Sale</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label ">
                                                            <input type="radio" id="onSaleProducto" name="onSaleProducto" value=1 class="form-check-input" <?php  if ($resultado->onSaleProducto == 1) {echo "checked";} ?>>Si
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label ">
                                                            <input type="radio" id="onSaleProducto" name="onSaleProducto" value=0 class="form-check-input"<?php  if ($resultado->onSaleProducto == 0) {echo "checked";} ?>>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <label id="ErroronSaleProducto"></label>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Mostrar en Home</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label ">
                                                            <input type="radio" id="mostrarHomeProducto" name="mostrarHomeProducto" value=1 class="form-check-input" <?php  if ($resultado->mostrarHomeProducto == 1) {echo "checked";} ?>>Si
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label ">
                                                            <input type="radio" id="mostrarHomeProducto" name="mostrarHomeProducto" value=0 class="form-check-input"<?php  if ($resultado->mostrarHomeProducto == 0) {echo "checked";} ?>>No
                                                        </label>
                                                    </div>
                                                </div>
                                                <label id="ErrormostrarHomeProducto"></label>
                                            </div>
                                           
                                        <input type="hidden" id="accion" name="accion" value=<?php echo $accion; ?> >
                                        <input type="hidden" id="idProducto" name="idProducto" value=<?php echo $id; ?> >
                                        <button value="Enviar" onclick="Validar();" type="button" class="btn btn-primary btn-sm" >
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
					var nombreProducto = $('#nombreProducto').val();
                    var codigoProducto = $('#codigoProducto').val();
                    var precioProducto = $('#precioProducto').val();
                    var descuentoProducto = $('#descuentoProducto').val();
                    var stockMinimo = $('#stockMinimo').val();
                    var stockActual = $('#stockActual').val();
                    var categoriaProducto = $('#categoriaProducto').val();
                    var fotoProducto = $('#fotoProducto').val();
                    var videoProducto = $('#videoProducto').val();
                    var descripcionCortaProducto = $('#descripcionCortaProducto').val();
                    var descripcionLargaProducto = $('#descripcionLargaProducto').val();
                    var destacadoProducto = $('#destacadoProducto').val();
                    var onSaleProducto = $('#onSaleProducto').val();
                    var mostrarHomeProducto = $('#mostrarHomeProducto').val();
                    var hayErrores = false;

								$('#ErrorNombreProducto').html('');
                                $('#ErrorcodigoProducto').html('');
                                $('#ErrorprecioProducto').html('');
                                $('#ErrordescuentoProducto').html('');
                                $('#ErrorstockMinimo').html('');
                                $('#ErrorstockActual').html('');
                                $('#ErrorcategoriaProducto').html('');
                                $('#ErrorfotoProducto').html('');
                                $('#ErrorvideoProducto').html('');
                                $('#ErrordescripcionCortaProducto').html('');
                                $('#ErrordescripcionLargaProducto').html('');
                                $('#ErrordestacadoProducto').html('');
                                $('#ErroronSaleProducto').html('');
                                $('#ErrormostrarHomeProducto').html('');
                                
                                console.log(nombreProducto);
                               
                                if (!nombreProducto){
                                    console.log("Voy a mostrar error nombre");
                                    $('#ErrorNombreProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                console.log(codigoProducto);
                                if (!codigoProducto){
                                    $('#ErrorcodigoProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                if (!precioProducto || precioProducto <= 0){
                                    if (!precioProducto){
                                    $('#ErrorprecioProducto').html('Debe comentar el campo');
                                    } else {
                                        $('#ErrorprecioProducto').html('El precio no puede ser menor o igual a 0');
                                    }
                                    hayErrores = true;
                                }
                                console.log(descuentoProducto);
                               
                                if (!descuentoProducto || descuentoProducto < 0){
                                    console.log("Voy a mostrar error documento");
                                    if (!descuentoProducto){
                                    $('#ErrordescuentoProducto').html('Debe comentar el campo');
                                    } else {
                                        $('#ErrordescuentoProducto').html('El descuento no puede ser negativo');
                                    }
                                    hayErrores = true;
                                }
                                if (!stockMinimo || stockMinimo <= 0){
                                    if (!stockMinimo){
                                    $('#ErrorstockMinimo').html('Debe comentar el campo');
                                    } else {
                                        $('#ErrorstockMinimo').html('El stock minimo no puede ser igual o menor a 0');
                                    }
                                    hayErrores = true;
                                }
                                if (!stockActual || stockActual < 0){
                                    if (!stockActual){
                                    $('#ErrorstockActual').html('Debe comentar el campo');
                                    } else {
                                        $('#ErrorstockActual').html('El stock minimo no puede ser menor a 0');
                                    }
                                    hayErrores = true;
                                }
                                if (!categoriaProducto){
                                    $('#ErrorcategoriaProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                if (!fotoProducto){
                                    $('#ErrorfotoProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                if (!videoProducto){
                                    $('#ErrorvideoProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                if (!descripcionCortaProducto){
                                    $('#ErrordescripcionCortaProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                console.log(descripcionLargaProducto);
                                if (!descripcionLargaProducto){
                                    $('#ErrordescripcionLargaProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                console.log(destacadoProducto);
                                if(!document.querySelector('input[name="destacadoProducto"]:checked')){
                                  
                                 
                                    $('#ErrordestacadoProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                if(!document.querySelector('input[name="onSaleProducto"]:checked')){
                                
                                    $('#ErroronSaleProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                if(!document.querySelector('input[name="mostrarHomeProducto"]:checked')){
                                    $('#ErrormostrarHomeProducto').html('Debe comentar el campo');
                                    hayErrores = true;
                                }
                                





                            if (!hayErrores){              
                                alert('Voy a entrar al AJAX');
                                $.ajax({
                                async:true,
                                type: "POST",
                                url: "controller/productoController.php",                    
                                data:$('#formulario').serialize(),
                                //data: "nombre=martin&apellido=esses",
                                beforeSend:function(){
                                alert('comienzo a procesar en producto');
                                },
                                success:function(resultado) {
                                alert(resultado);
                                var errores = JSON.parse(resultado);
                                alert(resultado);
                                if(errores.errornombreproducto == null && errores.errorcodigoProducto == null
                                && errores.errorprecioProducto == null && errores.errordescuentoProducto == null && 
                                 errores.errorstockMinimo == null && errores.errorstockActual == null &&
                                errores.errorcategoriaProducto == null && errores.errorfotoProducto  == null &&
                                errores.errorvideoProducto  == null && errores.errordescripcionCortaProducto  == null &&
                                errores.errordescripcionLargaProducto  == null &&  errores.destacadoProducto == null 
                                && errores.erroronSaleProducto == null && errores.errormostrarHomeProducto == null){
                                window.location = "abm-productos.php";
                                }
                                if(errores.errornombreproducto != null)
                                {
                                    $('#ErrorNombreProducto').html(errores.errornombreproducto);
                                }
                                if( errores.errorcodigoProducto != null)
                                {
                                    $('#ErrorcodigoProducto').html(errores.errorcodigoProducto);
                                }
                                if(errores.errorprecioProducto != null)
                                {
                                    $('#ErrorprecioProducto').html(errores.errorprecioProducto);
                                }
                                if(errores.errordescuentoProducto != null)
                                {
                                    $('#ErrordescuentoProducto').html(errores.errordescuentoProducto);
                                }
                                if(errores.errorstockMinimo != null)
                                {
                                    $('#ErrorstockMinimo').html(errores.errorstockMinimo);
                                }
                                if(errores.errorstockActual != null)
                                {
                                    $('#ErrorstockActual').html(errores.errorstockActual);
                                }
                                if(errores.errorcategoriaProducto != null)
                                {
                                    $('#ErrorcategoriaProducto').html(errores.errorcategoriaProducto);
                                }
                                if(errores.errorfotoProducto != null)
                                {
                                    $('#ErrorfotoProducto').html(errores.errorfotoProducto);
                                }
                                if(errores.errorvideoProducto != null)
                                {
                                    $('#ErrorvideoProducto').html(errores.errorvideoProducto);
                                }
                                if(errores.errordescripcionCortaProducto != null)
                                {
                                    $('#ErrordescripcionCortaProducto').html(errores.errordescripcionCortaProducto);
                                }
                                if(errores.errordescripcionLargaProducto != null)
                                {
                                    $('#ErrordescripcionLargaProducto').html(errores.errordescripcionLargaProducto);
                                }
                                if (errores.destacadoProducto != null){
                                    $('#ErrordestacadoProducto').html(errores.destacadoProducto);
                                }
                                if (errores.erroronSaleProducto != null){
                                    $('#ErroronSaleProducto').html(errores.erroronSaleProducto);
                                }
                                if (errores.errormostrarHomeProducto != null){
                                    $('#ErrormostrarHomeProducto').html(errores.errormostrarHomeProducto);
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
