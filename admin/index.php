
<?php   include_once('inc/header.php');?>

<?php

use TechStore\Classes\Models\Cats;
use TechStore\Classes\Models\Orders;
use TechStore\Classes\Models\Product;


$product = new Product;

$productCount = $product->getCount();

$categories = new Cats;
$categCount = $categories->getCount();

$order = new Orders;
$orderCount= $order->getCount();

// echo "<pre>";
// print_r($orders);die;




?>







    <div class="container py-5">
        <div class="row">

            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $productCount['cnt'];?></h5>
                          <a href="<?= AURL;?>products.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $categCount['cnt'];?></h5>
                          <a href="<?= AURL;?>categories.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Orders</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $orderCount['cnt'];?></h5>
                          <a href="<?= AURL;?>orders.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php   include_once('inc/footer.php');?>