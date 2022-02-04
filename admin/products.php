<?php include_once 'inc/header.php';?>


<?php

use TechStore\Classes\Models\Product;

$prod = new Product;

$products = $prod->selectAlll("products.id AS prodId,products.name AS prodName,cats.name AS catName,img,quantity,price,products.created_at AS prodCreatedAt");
//  echo "<pre>";
//  print_r($products);die;

?>




    <div class="container-fluid py-5">
        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>All Products</h3>
                    <a href="<?= AURL . "add-product.php"?>" class="btn btn-success">
                        Add new
                    </a>
                </div>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Pieces</th>
                        <th scope="col">Price</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($products as $index => $produ): ?>

                      <tr>
                        <th scope="row"><?=$index + 1?></th>
                        <td><?=$produ['prodName']?></td>
                        <td><?=$produ['catName']?></td>
                        <td>
                            <img src="<?=URL . "uploads/" . $produ['img'];?>" height="60px">
                        </td>
                        <td><?=$produ['quantity']?></td>
                        <td><?=$produ['price']?></td>
                        <td><?= date("d M,Y h:i a ",strtotime($produ['prodCreatedAt']))?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?= AURL . "edit-product.php?id=" . $produ['prodId']; ?>">
                                <i class="fas fa-eye"></i>
                            </a>
                            <!-- <a class="btn btn-sm btn-info" href="#">
                                <i class="fas fa-edit"></i>
                            </a> -->
                            <a class="btn btn-sm btn-danger" href="<?= AURL . "handler/delete-product.php?id=" . $produ['prodId']; ?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                      </tr>

                        <?php endforeach;?>



                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <?php include_once 'inc/footer.php';?>