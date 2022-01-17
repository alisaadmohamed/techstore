<?php
namespace TechStore\Classes\Validation;

class Validator
{
    private $errors = [];

    public function validate(string $name, $value, array $rules)
    {
        foreach ($rules as $rule) {

            $className = "TechStore\\Classes\\Validation\\" . $rule;
         
    // echo "BEFORE";

            $obj = new $className;
    // echo "AFTER";
           
            //  var_dump($obj);die;

           

            $error = $obj->check($name, $value);
            if ($error !== false) {
                $this->errors[] = $error;
                break;
            }

        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {

        return !empty($this->errors);
    }

}
