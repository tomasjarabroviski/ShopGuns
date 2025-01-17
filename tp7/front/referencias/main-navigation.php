<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/shopguns/tp7/dao/categoria.php');
?>

<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">Categorias</div>
                        </div>

                        <ul class="cat_menu">
                            
                        <?php foreach (CategoriaDao::obtenerTodos() as $item)
                            {?>
                                

                                <li><a href="/ShopGuns/tp7/front/shop.php?TextoBuscar=No&categoria=<?php echo $item->nombreCategoria ?>"><?php echo $item->nombreCategoria ?><i class="fas fa-chevron-right ml-auto"></i></a></li>
                
        
                                <?php
                            }
                        ?>
                            
                        
                        </ul>
                    </div>

                    <!-- Main Nav Menu -->

                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown">
                            <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                        
                            <li><a href="/ShopGuns/tp7/front/shop.php?categoria=No&TextoBuscar=No">Productos<i class="fas fa-chevron-down"></i></a></li>
                            <li><a href="/ShopGuns/tp7/front/QuienesSomos.php">Quienes Somos<i class="fas fa-chevron-down"></i></a></li>
                            
                            <li><a href="contact.html">Contacto<i class="fas fa-chevron-down"></i></a></li>
                        </ul>
                    </div>