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

}
