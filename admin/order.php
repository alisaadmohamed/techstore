<?php   include_once('inc/header.php');?>

<?php

if($request->getHas('id')) {
  
  $orderId= $_GET['id'];
} else {

  $id = 1;
}




use TechStore\Classes\Models\Orders;
use TechStore\Classes\Models\OrderDetail;

 $orders = new Orders;
// 
$order =  $orders->selectId($orderId,'orders.*, SUM( qty * price) AS total');

$orderDeta = new OrderDetail;
$detailsOrd =  $orderDeta->selectWithProduct($orderId);







?>

    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Show Order : <?= $orderId?></h3>
                <div class="card">
                    <div class="card-body p-5">
                        <table class="table table-bordered">
                            <thead>
                                <th colspan="2" class="text-center">Customer</th>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Name</th>
                                <td><?= $order['name']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td><?= $order['email'] ?? "..." ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Phone</th>
                                <td><?= $order['phone']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Address</th>
                                <td><?= $order['address']?? "..." ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Time</th>
                                <td><?=  date("d M,Y h:i a " ,strtotime($order['created_at']))?></td>
                              </tr>
                              <tr>
                                <th scope="row">Status</th>
                                <td><?= $order['status']?></td>
                              </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
    
                            <tbody>

                             <?php  foreach($detailsOrd as $product):  ?> 

                              <tr>
                                <td><?= $product['name']?></td>
                                <td><?= $product['qty']?></td>
                                <td><?= $product['price']?></td>
                              </tr>
                              <?php endforeach;   ?> 
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Total</th>

                                    <?php  if($order['status'] == 'pending'): ?>

                                    <th>Change Status</th>

                                    <?php endif;?>

                                </tr>
                            </thead>
                            <tbody>


                              <tr>
                                <td><?= $order['total']?></td>

                                <?php  if($order['status'] == 'pending'): ?>

                                  <td>
                                      <a class="btn btn-success" href="<?= AURL . "handler/approve.php?id=". $orderId?>">Approve</a>
                                      <a class="btn btn-danger" href="<?= AURL . "handler/cancel.php?id=". $orderId?>">Cancel</a>
                                  </td>


                                      <?php endif;?>


                              </tr>


                            </tbody>
                        </table>

                        <a class="btn btn-dark" href="<?= AURL . "orders.php"?>">Back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php   include_once('inc/footer.php');?>