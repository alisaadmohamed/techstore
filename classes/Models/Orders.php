<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\Db;

class Orders extends Db
{

    public function __construct()
    {

        $this->table = 'orders';
        $this->connect();

    }

    public function selectAll($col = "*")
    {
        $sql = "SELECT $col FROM $this->table JOIN orders_details JOIN products
        On $this->table.id = orders_details.order_id
        AND orders_details.products_id = products.id
        GROUP BY $this->table.id;";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    public function selectId($id, $col = "*")
    {
        $sql = "SELECT $col FROM $this->table JOIN orders_details JOIN products
                  On $this->table.id = orders_details.order_id
                  AND orders_details.products_id = products.id
                  WHERE $this->table.id =$id";                  
                $res = mysqli_query($this->conn, $sql);
                return mysqli_fetch_assoc($res);
    }

}

// SELECT orders.*,orders_details.qty,products.name As productName,products.price FROM `orders` JOIN orders_details JOIN products
// ON orders.id = orders_details.order_id
// AND orders_details.products_id = products.id
// WHERE orders.id=18;
