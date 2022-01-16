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
        if (isset($_SESSION['cart'])) {
            return count($_SESSION['cart']);

        } else {
            return 0;
        }

    }

    public function total()
    {

        $total = 0;

        if (isset($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $id => $productData) {

                $total += $productData['qua'] * $productData['price'];

            }

        }

        return $total;

    }

    public function has($id)
    {

        if(!empty($id)) {

            return array_key_exists($id, $_SESSION['cart']);

        } 

        return ;

    }

}
