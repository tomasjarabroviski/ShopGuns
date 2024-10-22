<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');
?>

<?php $resultado = $_GET["categoria"]; ?> 
<?php $resultado2 = $_GET["TextoBuscar"]; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<?php
    	include_once('referencias/topbar.html');
    	?>

		<!-- Header Main -->

		<?php
    	include_once('referencias/up-panel.html');
    	?>
		
		<!-- Main Navigation -->

		<?php
 
    	?>


							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Armas & Accesorios</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categoria</div>
							<ul class="sidebar_categories">

									


						<?php foreach (CategoriaDao::obtenerTodos() as $cat)
                            {
                            $params["id"] = $cat->idCategoria;
                            $params["nombre"] = $cat->nombreCategoria;  
								?>
								
								<button style="background: none!important; 
								  border: none; 
                                            padding: 0!important;
                                            font-family: roboto, sans-serif;
											cursor: pointer;" class="text-muted"
											 onclick=<?php echo "filtrarPorCategoria(" . json_encode($params) . ");"; ?>
                                            id=<?php echo "btn" . $cat->idCategoria ?>>
                                            <?php echo $cat->nombreCategoria; ?>
								</button>
										
				
                                
								
								
                                <?php
                            }
								?>
							
							</ul>
						</div>
					
						
						
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->
					<button class="btn-danger" style='width:120px; height:25px' onclick="restrablecer()" >Restablecer Filtros</button>
					<button class="btn-primary" style='width:120px; height:25px' onclick="cambiar()" >Cambiar Marco</button>
					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> Productos Encontrados</div>
							<div class="shop_sorting">
								<span>Mostrarlo Por:</span>
								<div class="product_bar_single">
										<select class="wide" onchange="cambiarOrden(event);">
                                            <option value="1" data-display="Orden alfabético">Orden alfabético</option>
                                            <option value="2">Precio</option>
                                            <option value="3">Orden alfabético (desc)</option>
                                            <option value="4">Precio (desc)</option>
                                        </select>
                                    </div> 
							</div>
						</div>

						<div class="product_grid"  id="productos">
							<div class="product_grid_border"></div>

							
						
				

						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">...</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- Newsletter -->

	<?php
    	include_once('referencias/newslatter.html');
    	?>


	<!-- Footer -->

	<footer class="footer">
		<?php
    	include_once('referencias/footer.html');
    	?>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>
</body>

</html>

<script>
	
	
	var modo = 0;

var categoria =  '<?php echo ($resultado); ?>';
var porPrecio = 0;
var dec = 0;
var palabra = '<?php echo ($resultado2); ?>';

console.log(palabra);
console.log(categoria);
function restrablecer(){
	console.log("Toque El boton Restablecer");
	categoria = 'No';
	palabra = 'No';
	 $.ajax({
            async:true,
            type: "POST",
			url: "/ShopGuns/tp7/controller/productoController.php",                 
			data:"accion=Filtrar&categoria=" + categoria + "&ordenPrecio=" + porPrecio + "&ordenDesc=" + dec + "&palabra=" + palabra,
			success:function(resultado){
				var arrayproductos = JSON.parse(resultado);
				cambiarproductos(arrayproductos);
				if (modo == 1){
					console.log("voy a cambir el modo de vista");
					cambiarModo();
					
				} 
			}

});

	
}

$.ajax({
            async:true,
            type: "POST",
			url: "/ShopGuns/tp7/controller/productoController.php",                 
			data:"accion=Filtrar&categoria=" + categoria + "&ordenPrecio=" + porPrecio + "&ordenDesc=" + dec + "&palabra=" + palabra,
			success:function(resultado){
				var arrayproductos = JSON.parse(resultado);
				cambiarproductos(arrayproductos);
			}

});

function cambiarproductos(productos){
	$("#productos").html("");
	productos.forEach(function(producto){
		
		var nuevoProducto = '<div class="product_item is_new prod prod2"  style="float:left;"> <div class="product_border"></div> <div class="product_image d-flex flex-column align-items-center justify-content-center"> <a href="/ShopGuns/tp7/front/producto.php?id=' +  producto.idProducto   +'"><img src="/ShopGuns/tp7/images/' + producto.fotoProducto + ' " alt=""> </a> </div> <div class="product_content"> <div class="product_price">' + producto.precioProdcuto  + '</div> <div class="product_name"><div><a href="#" tabindex="0">' + producto.nombreProducto + '</a></div></div> </div> <div class="product_fav"><i class="fas fa-heart"></i></div> <ul class="product_marks"> <li class="product_mark product_discount">' + producto.descuentoProducto + '</li> <li class="product_mark product_new">new</li> </ul></div>';
		$("#productos").append(nuevoProducto);
	});
}

function cambiarModo(){
	$(".prod").toggleClass('w-100');
	$(".prod2").toggleClass('');


	
}

function cambiar(){
	if (modo == 1) {
		modo = 0;
	} else {
		modo = 1;
	}
	cambiarModo();
}


const filtrarPorCategoria = (cat) => {

		
	

	
			console.log("LLegue");
			//palabra = 'No';
        const {
            id,
            nombre
        } = cat;
		console.log(nombre);
		categoria = nombre;
		$.ajax({
            async:true,
            type: "POST",
            url: "/ShopGuns/tp7/controller/productoController.php",                    
            data:"accion=Filtrar&categoria=" + categoria + "&ordenPrecio=" + porPrecio + "&ordenDesc=" + dec + "&palabra=" + palabra,
			success:function(resultado){
				var arrayproductos = JSON.parse(resultado);
				console.log(arrayproductos);
				cambiarproductos(arrayproductos);
				console.log("voy a cambir el modo de vista X1");
				if (modo == 1){
					console.log("voy a cambir el modo de vista");
					cambiarModo();
					
				} 
			}

});
      
    };

	const cambiarOrden = (e) => {
        const select = e.target;
        const selected = select.options[select.selectedIndex].value;
        console.log(selected);
		switch (selected){
		case "1":
              porPrecio = 0;
			  dec = 0;
                
                break;

		case "2":
		porPrecio = 1;
		dec = 0;
               
                break;

		case "3":
		porPrecio  = 0;
		dec = 1;
               
                break;
		case "4":
		porPrecio  = 1;
		dec = 1;
                
                break;

			


		}
		console.log("Orden precio: " + porPrecio + " Orden DESC: " + dec + " Categoria: " + categoria);
		$.ajax({
            async:true,
            type: "POST",
            url: "/ShopGuns/tp7/controller/productoController.php",                    
            data:"accion=Filtrar&categoria=" + categoria + "&ordenPrecio=" + porPrecio + "&ordenDesc=" + dec + "&palabra=" + palabra,
			success:function(resultado){
				var arrayproductos = JSON.parse(resultado);
				console.log(arrayproductos);
				cambiarproductos(arrayproductos);
				if (modo == 1){
					console.log("voy a cambir el modo de vista");
					cambiarModo();
					
				} 
			}

});



	}

</script>