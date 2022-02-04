<?php



require_once '../../app.php';

use TechStore\Classes\Models\Orders;

if($request->getHas('id')) {

  $id = $request->get('id');
  
  $order = new Orders;
  $order->update("status = 'canceled'" , $id);

  $session->set('success', 'order canceled');
  $request->aredirect('order.php?id='.$id);



}