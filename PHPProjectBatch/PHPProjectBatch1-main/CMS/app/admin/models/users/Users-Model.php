<?php

include_once("app/config/database.php");

function getUsers($start_limit, $end_limit) {
    $result = false; // login error
    $dbConn = getDBConnection();
    $query = " SELECT * FROM users LIMIT $start_limit, $end_limit";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
            $result = $res_query;
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $result;
}

function getUsersCount() {
    $dbConn = getDBConnection();
    $query = " SELECT COUNT(1) total_rows FROM users";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        $result = mysqli_fetch_row($res_query);
        $count = $result[0];
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $count;
}

function getProfile(){
    $result = null;
    $dbConn = getDBConnection();
    $id = $_GET["id"];
    $query = "SELECT * FROM users WHERE id = $id";
    $query = mysqli_query($dbConn, $query);
    mysqli_close($dbConn);
    if (mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
    }
    return $result;

}
function setProfile()
{
    $status = false;
    // $today = date("Y-m-d H:i:s");
    $dbConn = getDBConnection();
    $id = $_SESSION["id"];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $state= $_POST['state'];
 
    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email'
    ,address = '$address', mobile = '$mobile',country = '$country',gender='$gender',state = '$state' WHERE id = $id";
        if(mysqli_query($dbConn, $query)){
            $status = true;
        }
        mysqli_close($dbConn);
    
        return $status;
    }

    // function deleteUser() {
    //     $status = true;
    //     $dbConn = getDBConnection();
    //     $today = date("Y-m-d H:i:s");
    //     $record = @$_GET['record'];
    //     $loggedin_id = $_SESSION['id'];
    //     $query = "UPDATE users SET deleted = 1, modified = '$today', modified_by = $loggedin_id where id = $record";
    //     $res_query = mysqli_query($dbConn, $query);
    //     if(!$res_query){
    //         $msg = mysqli_error($dbConn);
    //         file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
    //         echo mysqli_error($dbConn);die;
    //     }
    //     mysqli_close($dbConn);
    
    //     return $status;
    // }
       
?>