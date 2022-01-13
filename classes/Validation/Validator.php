<?php
namespace TechStore\Classes\Validation;

class Validator
{
    private $errors = [];

    public function Validation($name, $value, array $rules)
    {
        foreach ($rules as $rule) {

            $obj = new $rule;

            // if ($rule == 'requierd') {
            //     $obj = new Requierd;

            // } elseif ($rule == 'numeric') {
            //     $obj = new Numeric;

            // } elseif ($rule == 'email') {
            //     $obj = new Email;

            // } elseif ($rule == 'max') {
            //     $obj = new Max;

            // } elseif ($rule == 'str') {
            //     $obj = new Str;

            // }

            $error = $obj->check($name, $value);
            if ($error !== false) {
                $this->errors[] = $error;
                break;
            }

        }
    }

    public function getError()
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {

        if (empty($this->error)) {
            return false;
        } else {
            return true;
        }

    }

}
