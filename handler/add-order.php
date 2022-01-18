<?php

require_once '../app.php';
require_once '../classes/Validation/Required.php';
require_once '../classes/Validation/Email.php';
require_once '../classes/Validation/Max.php';
require_once '../classes/Validation/Str.php';

use TechStore\Classes\Models\OrderDetails;
use TechStore\Classes\Models\Orders;
use TechStore\Classes\Validation\Cart;
use TechStore\Classes\Validation\Validator;

if ($request->postHas('submit')) {

    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $address = $request->post('address');

    $validator = new Validator;
    $validator->validate('name', $name, ['required', 'Str', 'max']);

    if (!empty($email)) {
        $validator->validate('email', $email, ['email', 'Max']);
    }

    $validator->validate('phone', $phone, ['required', 'Str']);

    if (!empty($address)) {
        $validator->validate('address', $address, ['Str', 'max']);
    }

    if ($validator->hasErrors()) {

        $session->set("errors", $validator->getErrors());

        $request->redirect('cart.php');

    } else {

        $order = new Orders;
        $orderDetails = new OrderDetails;
        $cart = new Cart;

        $orderId = $order->insertAndGetId("name , email , phone , address", "'$name' , '$email' , '$phone' , '$address'");

        foreach ($cart->all() as $prodId => $products) {
            $qty = $products['qty'];
            $orderDetails->insert("order_id ,products_id , qty", "'$orderId' , '$prodId' , '$qty' ");
        }

        $request->redirect('products.php');

    }

}
