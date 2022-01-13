<?php
namespace TechStore\Classes\Validation;

Class Numeric implements ValidationRule
{

  public function check($name,$value) {

    if(! is_numeric($value)) {

      return "$name must be numeric";
    } return false;
  }

}