<?php
namespace TechStore\Classes\Validation;

class Image implements ValidationRule
{

    public function check($name, $value)
    {
        $allawedExt = ['jpg', 'png', 'jpeg', 'gif'];
        $ext = pathinfo($value['name'], PATHINFO_EXTENSION);

        if (!in_array($ext, $allawedExt)) {

            return "$name  extension is not allowed, please upload jpg,png,jpeg,gif";
        }

        return false;

    }

}
