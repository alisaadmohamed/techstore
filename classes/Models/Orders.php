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

}
