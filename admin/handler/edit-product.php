<?php
require_once '../../app.php';

use TechStore\Classes\Files;
use TechStore\Classes\Models\Product;
use TechStore\Classes\Validation\Validator;
if ($request->postHas('submit')) {

    $name = $request->post('name');
    $id = $request->post('id');
    $cat_id = $request->post('cat_id');
    $price = $request->post('price');
    $quantity = $request->post('quantity');
    $desc = $request->post('desc');
    $img = $request->files('img');

    $validator = new Validator;
    $validator->validate("name", $name, ['Required', 'Max', 'Str']);
    $validator->validate("cat_id", $cat_id, ['Required', 'Numeric']);
    $validator->validate("price", $price, ['Required', 'Numeric']);
    $validator->validate("quantity number", $quantity, ['Required', 'Numeric']);
    $validator->validate("description", $desc, ['Required', 'Str']);

    if($img['error'] == 0 ) {

      $validator->validate("image", $img, ['Image']);

    }

    if ($validator->hasErrors()) {
        $session->set('errors', $validator->getErrors());
        $request->aredirect('add-product.php');

    } else {

      $pro = new Product;
      $imgName = $pro->selectId($id,'img')['img'];
     

      if($img['error'] == 0) {

        unlink(PATH . "uploads/$imgName");

        $file = new Files($img);
       $imgName = $file->rename()->upload();
        

      }

      $pro->update("name = '$name' , `desc` = '$desc' , price = '$price' , quantity = '$quantity', cat_id = '$cat_id' , img = '$imgName'",$id);
        $session->set('success', 'product updated successfully');
        $request->aredirect('products.php');

    }

} else {
    $request->aredirect('add-product.php');

}
