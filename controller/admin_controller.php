<?php

require __DIR__."/../model/admin.model.php";

function login($email,$password){
    $admin = new Admin();
    return $admin->login($email, $password);

}

function register(){
    $admin = new Admin();
    $admin->register($email, $password);
}

function forgotPassword($email){
    $admin = new Admin();
    $admin->forgorPassword($email);
}

function resetPassword($new_password){
    $admin = new Admin();
    $admin->register($email, $password);
}

?>