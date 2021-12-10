<?php

require __DIR__."/../model/student.model.php";

function login($email,$password){
    $student = new Student;
    return $student->login($email, $password);
}

function book($fullname, $email, $pickup, $payment, $moving){
    $student = new Student;
    return $student->book($fullname, $email, $pickup, $payment, $moving);
}

function updateBooking($fullname, $email, $pickup, $payment, $moving){
    $student = new Student;
    return $student->updateBooking($fullname, $email, $pickup, $payment, $moving);
}

function checkUserBooking($email){
    $student = new Student;
    return $student->checkUserBooking($email);
}

function cancelBooking($email){
    $student = new Student;
    return $student->cancelBooking($email);
}

function register($firstname, $lastname, $email, $password){
    $student = new Student;
    return $student->register($firstname, $lastname, $email, $password);
}

function forgotPassword($email){
    $student = new Student;
    $student->forgorPassword($email);
}

function resetPassword($new_password){
    $student = new Student;
    $student->register($email, $password);
}

?>