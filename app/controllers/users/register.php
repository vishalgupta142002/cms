<?php
session_start();
include_once("../../config/database.php");

$token = $_SESSION['token'];
$form_token = $_POST['token'];
//echo $_SESSION['token'].'<br>';

//echo "<pre>";print_r($_REQUEST);die;
//echo "$token === $form_token";die;

//if($token == $form_token) // check only value
//if($token === $form_token) // check value and data type both

if($token == $form_token) {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender= $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $course = implode(',',$_POST['course']);
    unset($_SESSION['token']);
    //echo $_SESSION['token'].'<br>';
    ///echo "<pre>";print_r($_REQUEST);
    if (isset($username) && isset($first_name) && isset($last_name)) {
        $query = "  INSERT INTO student (username, firstname, lastname,email,password,confirm_password,gender,dob,mobile,city,address,course) VALUES('$username', '$firstname', '$lastname','$email','$password','$confirm_password','$gender','$dob','$mobile','$city','$address','$course')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo " <script>alert('Data has been inserted.');</script>";
        } else {
            die("Something has been wrong: " . $query);
        }

        // echo "<pre>";print_r($_REQUEST);die;
    }
}else{
    ///echo "$token === $form_token";
    die("You are not allowed to do this action.");
}




?>