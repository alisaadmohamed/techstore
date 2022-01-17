<?php



include "app.php";
// use TechStore\classes\Validation\Validator;
// $v = new Validator;
// $v->Validation('age', '', [
//     'required',
//     'numeric',

//  ]);

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