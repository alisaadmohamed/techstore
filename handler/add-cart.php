<?php

require_once '../app.php';
use TechStore\Classes\Cart;

if ($request->postHas('submit')) {

    $id = $request->post('id');
    $name = $request->post('prodName');
    $price = $request->post('price');
    $desc = $request->post('desc');
    $img = $request->post('img');
    $qua = $request->post('qua');

    $productData = [
        "name" => $name,
        "price" => $price,
        "desc" => $desc,
        "img" => $img,
        "qua" => $qua,
    ];

    $cart = new Cart;

    $cart->add($id, $productData);
    $request->redirect('products.php');

}
