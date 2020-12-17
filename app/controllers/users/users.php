<?php
session_start();

include_once("../../config/database.php");

$method = @$_SERVER['REQUEST_METHOD'];
$action = @$_POST['submit']; // through form submit
$method = strtolower($method);
$action = strtolower($action);

//echo "$method => $action";die;

if($_SERVER['QUERY_STRING']) {
    $action = $_SERVER['QUERY_STRING']; // through get call
}

//echo "<pre>"; print_r($_SESSION);die;
if(!registered()){
    if($action !== 'login'){
        $action = 'register';
        register($method, $action);
    }
} else {
    die("user has been registed");
}

if(!isLoggedIn()){
    if($action !== 'register') {
        $action = 'login';
        //$method = 'get';
        login($method, $action);
    }
}else{
    die("User has been loggedin");
}

if($method === 'get' && ($action === '' || $action === 'login')){
    login($method, $action);
}else if(($method === 'get' || $method === 'post') && $action === 'register'){
    register($method, $action);
}/*else if($method === 'post' && $action === 'register'){
    register($method, $action);
}*/

function login($method, $action) {
    if($method === 'get' && ($action === 'login' || $action === '')) {
        include_once("../../views/users/login-view.php");
        exit();
    }else if($method === 'post' && $action === 'login') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        die("Successfully loggedin.");
    }
}


function register($method, $action){
    if($method === 'get' && $action === 'register') {
        include_once("../../views/users/registration-view.php");
        exit();
    }else if($method === 'post' && $action === 'register') {
        // Logic for registration
     $username = $_POST['username'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_password = $_POST['confirm_password'];
     $mobile = $_POST['mobile'];
     
     $_SESSION['username'] = $username;
     $_SESSION['firstname'] = $firstname;
     $_SESSION['lastname'] = $lastname;
     $_SESSION['email'] = $email;
     $_SESSION['password'] = $password;
     $_SESSION['confirm_password'] = $confirm_password;
     $_SESSION['mobile'] = $mobile;
     $_SESSION['city'] = $city;
     $_SESSION['address'] = $address;
        echo "<pre>"; print_r($_REQUEST);die;
    }
}

function registered(){
    $status = false;
    if(@$_SESSION['username']) {
        $status = true;
    }
    return $status;
}


function isLoggedIn() {
    $status = false;
    if(@$_SESSION['username']) {
        $status = true;
    }
    return $status;
}
  ?>