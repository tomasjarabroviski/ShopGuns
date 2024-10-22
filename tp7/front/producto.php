
<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/producto.php');  
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');                               
$accion = 'nuevo';
$id = 0;
if (isset($_GET["id"])&&$_GET["id"] != 0){
    $resultado = ProductoDao::ObtenerPorID($_GET["id"]);                                            
    $id = $_GET["id"];
   
} else {
    $resultado = new Producto();
    $resultado->destacadoProducto = 3;
    $resultado->onSaleProducto = 3;
    $resultado->mostrarHomeProducto = 3;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Producto</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">


</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

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

	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="/ShopGuns/tp7/images/<?php echo $resultado->fotoProducto ?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category"><?php echo $resultado->categoriaProducto;?></div>
						<div class="product_name"><?php echo $resultado->nombreProducto;?></div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p><?php echo $resultado->descripcionLargaProducto;?></p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									

								</div>

								<div class="product_price"><?php echo ($resultado->precioProdcuto *  ($resultado ->descuentoProducto / 100)) ?></div>
								<div class="button_container">
									<button type="button" class="button cart_button">Añadir al carro</button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--In Common-->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Productos Relacionados</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
						<?php foreach (ProductoDao::productosRelacionados($resultado->idProducto,$resultado->categoriaProducto) as $item)
                            {?>
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><a href="/ShopGuns/tp7/front/producto.php?id=<?php echo $item->idProducto ?>"> <img src="/ShopGuns/tp7/images/<?php echo $item->fotoProducto ?>"alt=""></a></div>
									<div class="viewed_content text-center">
										<div class="viewed_price"><?php echo $item->precioProdcuto ?><span><?php echo $item->precioProdcuto?></span></div>
										<div class="viewed_name"><a href="#"><?php echo $item->nombreProducto ?></a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-<?php echo $item->descuentoProducto  ?>%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>


							<?php
                            }
                        ?>

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



	<?php
    	include_once('referencias/script.html');
    	?>

</body>

</html>