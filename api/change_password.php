<?php

session_start();
$db_hostname = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'miniproject';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$conn){
    // echo "something went wrong " . mysqli_connect_error();
    // exit;
    $response['success'] = false;
    $response['message'] = "can't connect to database please contract to admin ";
    echo json_encode($response);
    return;
}

$check_email = $_SESSION['email'];
$check = "SELECT * FROM users WHERE email ='$check_email';";
$result = mysqli_query($conn, $check);
if(!$result){
    //$response = array("success" => false, "message" => "Something went wrong!");
    $response['success'] = false;
    $response['message'] = "something went wrong ";
    echo json_encode($response);
    return;
}
$sql="";

if($_POST['current_password']==$_POST['new_password'])
{
    $response['success'] = false;
    $response['message'] = "new password can't be same as old password";
    echo json_encode($response);
return;
}
else if($_POST['new_password']!=$_POST['confirm_password'])
{
    $response['success'] = false;
    $response['message'] = "new password and confirm password are not same please retry";
    echo json_encode($response);
    return;
}
$currentP = $_POST['current_password'];
$sql = "SELECT password FROM users WHERE email='$check_email';"; 
$result = mysqli_query($conn, $sql);
if(!$result){
    //$response = array("success" => false, "message" => "Something went wrong!");
    $response['success'] = false;
    $response['message'] = "something went wrong ";
    echo json_encode($response);
    return;
}
$raw=mysqli_fetch_assoc($result);
if($raw['password']!= $_POST['current_password'])
{
    $response['success'] = false;
    $response['message'] = "entered wrong password";
    echo json_encode($response);
    return;
}
$newP = $_POST['new_password'];
$sql = "UPDATE users set password= '$newP' WHERE email ='$check_email';";
$result = mysqli_query($conn, $sql);

$response['success'] = true;
$response['message'] = "password changed";
echo json_encode($response);

mysqli_close($conn);
return;
?>