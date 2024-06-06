<?php
session_start();
$db_hostname = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'miniproject';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$conn){
    echo "something went wrong " . mysqli_connect_error();
    exit;
}

$password = $_POST['password'];
$email = $_POST['email'];

$check = "SELECT * FROM users WHERE email = '$email';";
$result = mysqli_query($conn, $check);
if(!$result){
    //$response = array("success" => false, "message" => "Something went wrong!");
    $response['success'] = false;
    $response['message'] = "something went wrong ";
    echo json_encode($response);
    return;
}


$sql="SELECT *FROM users WHERE email='$email' AND password='$password' ; ";
    $result=mysqli_query($conn,$sql);
    $row_count = mysqli_num_rows($result);
    if($row_count == 0){

        //echo "Login failed". mysqli_errno($conn);
        $response['success'] = false;
        $response['message'] = "Login failed!";
        echo json_encode($response);
        return;
        
    }
    else{
        $raw=mysqli_fetch_assoc($result);
        $name = $raw['fullName'];
        //echo " hello ". $raw['name']. "<br/>";

        //session
        $_SESSION['user_id'] = $raw['id'];
        $_SESSION['email']= $raw['email'];
        $_SESSION['name'] = $raw['fullName'];
        $_SESSION['gender']= $raw['gender'];
        $_SESSION['phone'] = $raw['phoneNumber'];
        $_SESSION['college'] = $raw['college'];

        $response['success'] = true;
        $response['message'] = "welcome $name";
        echo json_encode($response);
        mysqli_close($conn);
    return;
        //setcookie("user_id", $raw['id'],time()+3600);
        //setcookie("name", $raw['name'],time()+3600);
    }

?>