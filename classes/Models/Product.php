<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\Db;

class Product extends Db
{

    public function __construct()
    {

        $this->table = 'products';
        $this->connect();

    }

    public function selectId($id, $col = "products.*")
    {
        $sql = "SELECT $col FROM $this->table
        JOIN cats on
         $this->table.cat_id = cats.id
          WHERE  $this->table.id =$id";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);
    }

    public function selectAlll($col = "*")
    {
        $sql = "SELECT $col FROM $this->table JOIN cats ON $this->table.cat_id = cats.id
          ORDER BY $this->table.id DESC";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }



}
