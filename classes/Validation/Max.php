<?php
namespace TechStore\Classes\Validation;

class Max implements ValidationRule 
{

  public function check($name,$value) {
    if(strlen($value) > 255) {

      return "$name must be less than 255 ";
    }
    
    return false;

  }

}