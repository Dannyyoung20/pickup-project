<?php

include 'class/_customer.php';

$msg = '';

// RIDERS LOGIN CONTROLLER

if(isset($_POST['login-sub'])) {
    if(!empty($_POST['username']) && !empty($_POST['password'])) {

        $bool = $user->login($_POST['username'], $_POST['password']);
        if(!$bool) {
            $msg = "<i class='text-danger'>Invalid Username or Password. Try Again</i>";
        }
    }else{
        $msg = "<i class='text-danger'>Please fill all fields</i>";
    }
}

// DRIVER LOGIN CONTROLLER

if(isset($_POST['d_submit'])) {
    if(!empty($_POST['d_uname']) && !empty($_POST['d_pass'])) {

        $bool = $user->driver_login($_POST['d_uname'], $_POST['d_pass']);
        if(!$bool) {
            $msg = "<i class='text-danger'>Invalid Username or Password. Try Again</i>";
        }
    }else{
        $msg = "<i class='text-danger'>Please fill all fields</i>";
    }
}

// RIDER'S REGISTER CONTROLLER

if(isset($_POST['register-btn'])) {
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['phone']) && !empty($_POST['email'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        $phone = $_POST['phone'];
        $res = $_POST['resident'];
        $email = $_POST['email'];

        if($pass == $pass2) {
            $user->register($username,$pass,$email,$phone,$res);
        }else{
            $msg = '<p class="alert alert-danger">Password does not match.</p>';
        }
    }else{
        $msg = '<p class="alert alert-danger">Please fill all * fields</p>';
    }    

    }

// DRIVER'S REGISTRATION CONTROLLER

if(isset($_POST['driver-reg-btn'])) {
    if(!empty($_POST['fname']) && !empty($_POST['lnamename']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        $phone = $_POST['phone'];
        $res = $_POST['resident'];
        $email = $_POST['email'];

        if($pass == $pass2) {
            $user->driver_reg($fname,$lname,$username,$pass,$email,$phone,$res);
        }else{
            $msg = '<p class="alert alert-danger">Password does not match.</p>';
        }

    }else{
        $msg = '<p class="alert alert-danger">Please fill all * fields</p>';
    }
}




?>