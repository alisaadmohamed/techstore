<?php

require_once '../app.php';
require_once '../classes/Validation/Required.php';
require_once '../classes/Validation/Email.php';
require_once '../classes/Validation/Max.php';
require_once '../classes/Validation/Str.php';


use TechStore\Classes\Validation\Validator;

if (!empty($request)) {
    if ($request->postHas('submit')) {

        $name = $request->post('name');
        $email = $request->post('email');
        $phone = $request->post('phone');
        $address = $request->post('address');

        $validator = new Validator;
        $validator->validate('name', $name, ['required', 'Str', 'max']);

        if (!empty($email)) {
            $validator->validate('email', $email, ['email', 'Max']);
        }

        $validator->validate('phone', $phone, ['required', 'Str']);



        if (!empty($address)) {
            $validator->validate('address', $address, ['Str', 'max']);
        }


        if($validator->hasErrors()) {

            if (!empty($session)) {
                $session->set("errors", $validator->getErrors());
            }
            $request->redirect('cart.php');
        }




    }
}

