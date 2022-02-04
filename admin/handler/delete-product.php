<?php

require_once '../../app.php';

use TechStore\Classes\Models\Product;

if ($request->getHas('id')) {

    $id = $request->get('id');

    $prod = new Product;
    $imgName = $prod->selectId($id, 'img')['img'];
    unlink(PATH."uploads/$imgName");
    $prod->delete($id);

    $session->set('success', "product deleted successfully");
    $request->aredirect("products.php");

}
