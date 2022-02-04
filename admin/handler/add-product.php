<?php
require_once '../../app.php';

use TechStore\Classes\Files;
use TechStore\Classes\Models\Product;
use TechStore\Classes\Validation\Validator;
if ($request->postHas('submit')) {

    $name = $request->post('name');
    $cat_id = $request->post('cat_id');
    $price = $request->post('price');
    $pieces = $request->post('pieces');
    $desc = $request->post('desc');
    $img = $request->files('img');

    $validator = new Validator;
    $validator->validate("name", $name, ['Required', 'Max', 'Str']);
    $validator->validate("cat_id", $cat_id, ['Required', 'Numeric']);
    $validator->validate("price", $price, ['Required', 'Numeric']);
    $validator->validate("pieces number", $pieces, ['Required', 'Numeric']);
    $validator->validate("description", $desc, ['Required', 'Str']);
    $validator->validate("image", $img, ['RequiredFile', 'Image']);

    if ($validator->hasErrors()) {
        $session->set('errors', $validator->getErrors());
        $request->aredirect('add-product.php');

    } else {

        $files = new Files($img);
       $imageName = $files->rename()->upload();

       $prod = new Product;
       $prod->insert("name,`desc`,price,quantity,img,cat_id" , "'$name','$desc','$price','$pieces','$imageName', '$cat_id'");
       
        $session->set('success', 'product added successfully');
        $request->aredirect('products.php');

    }

} else {
    $request->aredirect('add-product.php');

}
