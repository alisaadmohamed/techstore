<?php

include "app.php";

// $v = new Validator;
// $v->Validation('age', '', [
//     'requierd',
//     'numeric',

// ]);

// echo "<pre>";
// print_r($v->getError());
// echo "</pre>";

// $prod = new Products;

// $res = $prod->insert();

// echo "<pre>";
// print_r($res);
// echo "</pre>";

//  $order = new Orders;
// $res= $order->delete(3);

// echo "<pre>";
// var_dump($res);
// echo "</pre>";

echo $request->get("name");