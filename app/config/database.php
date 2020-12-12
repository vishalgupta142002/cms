<?php

$host = "localhost";
$user_name = "root";
$password = "";
$database = "";
$port = 3306;

// Create Connection
$conn = mysqli_connect($host, $user_name, $password, $database, $port);

if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}else{
   // die("Connected");
    // exit();
}
$username = $_POST['user_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$query = " INSERT INTO employee (user_name, first_name, last_name) VALUES('$username', '$first_name', '$last_name')";

$result = mysqli_query($conn, $query);

if($result){
    echo " <script>alert('Data has been inserted.');</script>";
}else{
    die("Something has been wrong.");
}


?>