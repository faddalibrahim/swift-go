<?php

require __DIR__."../model/student.model.php";

function login($email,$password){
    $student = new Student();
    $student->login($email, $password);
}

function register(){
    $student = new Student();
    $student->register($email, $password);
}

function forgotPassword($email){
    $student = new Student();
    $student->forgorPassword($email);
}

function resetPassword($new_password){
    $student = new Student();
    $student->register($email, $password);
}

?>