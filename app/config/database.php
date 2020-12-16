<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$user_name = "root";
$password = "";
$database = "phpdb";
$port = 3306;

// Create Connection
$conn = mysqli_connect($host, $user_name, $password, $database, $port);

if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}else{
   // die("Connected");
    // exit();

}
// $username = $_POST['username'];
// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirm_password'];
// $gender= $_POST['gender'];
// $dob = $_POST['dob'];
// $mobile = $_POST['mobile'];
// $city = $_POST['city'];
// $address = $_POST['address'];
// $course = implode(',',$_POST['course']);


// $query = " INSERT INTO student (username, firstname, lastname,email,password,confirm_password,gender,dob,mobile,city,address,course) VALUES('$username', '$firstname', '$lastname','$email','$password','$confirm_password','$gender','$dob','$mobile','$city','$address','$course')";

// $result = mysqli_query($conn, $query);

// if($result){
//     echo " <script>alert('Data has been inserted.');</script>";
// }else{
//     die("Something has been wrong.");
// }


?>