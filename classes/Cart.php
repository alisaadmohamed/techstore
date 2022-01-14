<?php

namespace TechStore\Classes;

class Cart
{

    public function add(string $id, array $productData)
    {

        $_SESSION['cart'][$id] = $productData;

    }

    public function count()
    {

        return count($_SESSION['cart']);
    }

    public function total()
    {

        $total = 0;

        foreach ($_SESSION['cart'] as $id => $productData) {

            $total += $productData['qua'] * $productData['price'];

        }

        return $total;

    }



    public function has($id) {

         return array_key_exists($id,$_SESSION['cart']);
    }

}
