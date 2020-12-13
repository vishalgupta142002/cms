<?php

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
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$address = $_POST['address'];



$query = " INSERT INTO student (username, firstname, lastname,email,password,confirm_password,dob,mobile,city,address) VALUES('$username', '$firstname', '$lastname','$email','$password','$confirm_password','$dob','$mobile','$city','$address')";

$result = mysqli_query($conn, $query);

if($result){
    echo " <script>alert('Data has been inserted.');</script>";
}else{
    die("Something has been wrong.");
}


?>