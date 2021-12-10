<?php


function validateUserRegisteration(&$errors){


    $firstname = htmlspecialchars(strip_tags(trim($_POST['firstname'])));
    $lastname = htmlspecialchars(strip_tags(trim($_POST['lastname'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $password = htmlspecialchars(strip_tags(trim($_POST['password'])));
    $repeat_password = htmlspecialchars(strip_tags(trim($_POST['repeat_password'])));

    if(empty($firstname)){
        $errors['firstname'] = "required";
    }
    else if(!preg_match('/^[a-z]+$/i',$firstname)){
        $errors['firstname'] = "only letters required";
    }

    if(empty($lastname)){
        $errors['lastname'] = "required";
    }
    else if(!preg_match('/^[a-z]+$/i',$lastname)){
        $errors['lastname'] = "only letters required";
    }


    if(empty($email)){
        $errors['email'] = "required";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "not a valid email address";
    }

    if(empty($password)){
        $errors['password'] = "required";
    }
    else if(!preg_match('/^\w{8,}$/i',$password)){
        $errors['password'] = "password must be 8+ characters";
    }

    if(empty($repeat_password)){
        $errors['repeat_password'] = "required";
    }
    else if($password !== $repeat_password){
        $errors['repeat_password'] = "passwords don't match";
    }
}

?>