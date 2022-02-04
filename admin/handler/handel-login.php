<?php

require_once '../../app.php';


use TechStore\Classes\Validation\Validator;
use TechStore\Classes\Models\Admin;



if ($request->postHas('submit')) {

    $email = $request->post('email');
    $password = $request->post('password');

    $validator = new Validator;

    $validator->validate("email", $email, [ 'Required', 'Email', 'Max']);

    $validator->validate("password", $password, ['Required','Str','Max']);

    if ($validator->hasErrors()) {

        $session->set("errors", $validator->getErrors());
        $request->aredirect("login.php");

    } else {

        $ad = new Admin;

        $isLogin = $ad->login($email, $password, $session);

        if ($isLogin) {

            $request->aredirect('index.php');

        } else {

            $session->set('errors', ['credentials Are Not Correct']);
            $request->aredirect('login.php');
        }

    }

} else {

    $request->aredirect('login.php');
}
