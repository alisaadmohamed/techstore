<?php
namespace TechStore\Classes\Models;

use TechStore\Classes\Db;

class OrderDetail extends Db
{

    public function __construct()
    {
        $this->table = 'orders_details';
        $this->connect();

    }



    public function selectWithProduct($orderId) {

        $sql = "SELECT qty , name , price FROM $this->table JOIN products 
        
            ON $this->table.products_id = products.id
            WHERE order_id = $orderId";
              $res = mysqli_query($this->conn, $sql);
              return mysqli_fetch_all($res, MYSQLI_ASSOC);
          

    }

}
