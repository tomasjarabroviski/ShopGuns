<!DOCTYPE html>
<html lang="en">
<head>
<title>ShopGun</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/slider.php');                               
?>
		
	<?php
		include_once('referencias/stylesheet.html');
	 
    	?>

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
    	include_once('referencias/main-navigation.php');
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
		
	
	
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/imagenportada.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">

						<div class="button banner_button"><a href="#">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">

			<?php foreach (SliderDao::obtenerTodos() as $item)
                            {?>
                                

								<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
								
										<div class="banner_2_title"><?php echo $item->textoSlider ?></div>
										<div class="button banner_2_button"><a href="#">Ver Mas Productos</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/<?php echo $item->fotoSlider ?>" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
                
        
                                <?php
                            }
                        ?>
                            
				<!-- Banner 2 Slider Item -->
		

			

			
			</div>
		</div>
	</div>
<!-- Most Popular -->

<div class="viewed">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="viewed_title_container">
					<h3 class="viewed_title">Populares</h3>
					<div class="viewed_nav_container">
						<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
					</div>
				</div>

				<div class="viewed_slider_container">
					
					<!-- Recently Viewed Slider -->

					<div class="owl-carousel owl-theme viewed_slider">
						
						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
								<div class="viewed_content text-center">
									<div class="viewed_price">$225<span>$300</span></div>
									<div class="viewed_name"><a href="#">Beoplay H7</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">-25%</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>

						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
								<div class="viewed_content text-center">
									<div class="viewed_price">$379</div>
									<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">-25%</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>

						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
								<div class="viewed_content text-center">
									<div class="viewed_price">$225</div>
									<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">-25%</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>

						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
								<div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
								<div class="viewed_content text-center">
									<div class="viewed_price">$379</div>
									<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">-25%</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>

						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
								<div class="viewed_content text-center">
									<div class="viewed_price">$225<span>$300</span></div>
									<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">-25%</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>

						<!-- Recently Viewed Item -->
						<div class="owl-item">
							<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
								<div class="viewed_content text-center">
									<div class="viewed_price">$375</div>
									<div class="viewed_name"><a href="#">Speedlink...</a></div>
								</div>
								<ul class="item_marks">
									<li class="item_mark item_discount">-25%</li>
									<li class="item_mark item_new">new</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	
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
					

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
    	include_once('referencias/script.html');
    	?>

</body>

</html>