<?php include_once 'inc/header.php';?>

<?php

use TechStore\Classes\Models\Product;

if ($request->getHas('id')) {

    $id = $request->get('id');
} else {

    $id = 1;
}


use TechStore\Classes\Models\Cats;

$category = new Cats;

$categ =  $category->selectall("id,name");



    $prod = new Product;
   $product= $prod->selectId($id,"products.name AS prodName,cats.name AS catName,img,`desc`,quantity,price,cat_id");
   

?>


    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Edit Product : <?= $product['prodName']?></h3>
                <div class="card">
                    <div class="card-body p-5">
                        <form method="POST"  action="<?= AURL . "handler/edit-product.php"?>"   enctype="multipart/form-data" >
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" name = "name" value="<?= $product['prodName']?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select  name = "cat_id"  class="form-control">


                             <?php foreach($categ as $cat):  ?>

                                  <option value="<?= $cat['id'];?>" <?php  if($cat['id']==$product['cat_id']){echo "selected";}?> ><?= $cat['name'];?></option>
                                 
                                  <?php endforeach;  ?>
    
                                 
                                </select>


                            </div>

                                <input type="hidden" name="id" value="<?= $id;?>">

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number"  name = "price" value="<?= $product['price']?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Pieces</label>
                                <input type="number"  name ="quantity" value="<?= $product['quantity']?>"   class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name = "desc" rows="3"><?= $product['desc']?>  </textarea>
                            </div>
                                <div class="mb-3 d-flex justify-content-center" >

                                    <img src="<?= URL ."uploads/". $product['img']; ?>" height="100px" alt="">

                                </div>
                                
                            <div class="custom-file">
                                <input type="file" name = "img" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose Image</label>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="#">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include_once 'inc/footer.php';?>