<?php

require_once '../app.php';

use TechStore\Classes\Cart;
use TechStore\Classes\Models\OrderDetail;
use TechStore\Classes\Models\Orders;
use TechStore\Classes\Validation\Validator;
$cart = new Cart;
if ($request->postHas('submit') && $cart->count() !== 0 ) {

    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $address = $request->post('address');

    $validator = new Validator;
    $validator->validate("name", $name, ['Required', 'Max', 'Str']);
    if (!empty($email)) {
        $validator->validate("email", $email, ['Email']);
        $email = "'$email'";
    } else {
      $email = "null";
    }

    $validator->validate("phone", $phone, ['Required', 'Max', 'Str']);

    if (!empty($address)) {

        $validator->validate("address", $address, ['Max', 'Str']);
        $address = "'$address'";
    } else {
      $address = "null";
    }

    if ($validator->hasErrors()) {

        $session->set("errors", $validator->getErrors());
        $request->redirect("cart.php");

    } else {

        
        $order = new Orders;
        $orderDetail = new OrderDetail;
        $orderId = $order->insertAndGetId("name, email, phone, address", " '$name', $email , '$phone',  $address ");
        
        foreach ($cart->all() as $id => $products) {
            $qty = $products['qua'];
            $res = $orderDetail->insert("order_id, products_id, qty", " '$orderId', '$id', '$qty' ");

        }
          $cart->empty();
        $request->redirect("products.php");
    }

} else {

  $request->redirect("products.php");
}
