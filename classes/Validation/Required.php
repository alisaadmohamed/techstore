<?php

namespace TechStore\Classes\Validation;


class  Required implements ValidationRule
{

    public function check($name,$value)
    {
        if (empty($value)) {
            return "$name is requierd ";
        }return false;
    }
}
