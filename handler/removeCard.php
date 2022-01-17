<?php

require_once '../app.php';
use TechStore\Classes\Cart;


if (isset($request)) {
    if($request->getHas('id')) {

      $id =   $request->get('id');

            $cart = new Cart;
            $cart->remove($id);
        $request->redirect('cart.php');
    }
}


