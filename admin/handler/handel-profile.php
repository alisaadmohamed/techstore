<?php

require_once '../../app.php';

use TechStore\Classes\Models\Admin;
use TechStore\Classes\Validation\Validator;

if ($request->postHas('submit')) {

    $name = $request->post('name');
    $email = $request->post('email');
    $password = $request->post('password');
    $confirm_password = $request->post('confirm_password');

    $validator = new Validator;
    $validator->validate("name", $name, ['Required', 'Str', 'Max']);
    $validator->validate("email", $email, ['Required', 'Email', 'Max']);

    if (!empty($password) and ! $password == $confirm_password) {

        $validator->validate("password", $password, ['Required', 'Str', 'Max']);
    }

    if ($validator->hasErrors()) {

        $session->set("errors", $validator->getErrors());
        $request->aredirect("login.php");

    } else {

        $ad = new Admin;

        if (!empty($password)) {

            //update with password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $ad->update("name = '$name', email = '$email', `password` ='$hashedPassword'", $session->get('adminId'));

        } else {

            //update without password
            $ad->update("name = '$name', email = '$email'", $session->get('adminId'));

        }

          $session->set('success' , 'profile updated successfly ');

        $request->aredirect('handler/handel-logout.php');

    }

} else {

    $request->aredirect('login.php');
}
