<?php include "inc/header.php";?>


<?php

use TechStore\Classes\Models\Product;

$produ = new Product;
$pro = $produ->selectAll("id,name,price,img");

?>


    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/images/shop_background.jpg"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">All Products</h2>
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
                            <div class="sidebar_title">Categories</div>
                            <ul class="sidebar_categories">


                                         <?php foreach ($allCategory as $cat): ?>

                                <li><a href="category.php?id=<?=$cat['id'];?>"> <?=$cat['name'];?></a></li>

                                <?php endforeach;?>
                                <!-- <li><a href="#">Cameras & Photos</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Smartphones & Tablets</a></li>
                                <li><a href="#">TV & Audio</a></li>
                                <li><a href="#">Gadgets</a></li>
                                <li><a href="#">Car Electronics</a></li>
                                <li><a href="#">Video Games & Consoles</a></li>
                                <li><a href="#">Accessories</a></li> -->
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">

                        <div class="product_grid">
                            <div class="product_grid_border"></div>

                       <?php  foreach($pro as $products): ?>
                        
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= URL . 'uploads/' . $products['img']?>" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">$<?= $products['price']?></div>
                                    <div class="product_name"><div><a href="product.php?id=<?= $products['id'];?>" tabindex="0"><?=$products['name']?></a></div></div>
                                </div>
                                

                            </div>

                          <?php endforeach; ?>  

                          




                        </div>

                        <!-- Shop Page Navigation -->

                        <div class="shop_page_nav d-flex flex-row">
                            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
                            <ul class="page_nav d-flex flex-row">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">21</a></li>
                            </ul>
                            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include "inc/footer.php";?>