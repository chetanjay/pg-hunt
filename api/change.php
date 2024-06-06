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
if($_POST['name'])
{
    $changed_name = $_POST['name'];
    $sql = "UPDATE users set fullName= '$changed_name' WHERE email ='$check_email';";
    $result = mysqli_query($conn, $sql);
}
else if($_POST['number'])
{
    $changed_number = $_POST['number'];
    $sql = "UPDATE users set phoneNumber= '$changed_number' WHERE email ='$check_email';";
    $result = mysqli_query($conn, $sql);
}
else if($_POST['college'])
{
    $changed_college = $_POST['college'];
    $sql = "UPDATE users set college= '$changed_college' WHERE email ='$check_email';";
    $result = mysqli_query($conn, $sql);
}
else
{
    $response['success'] = false;
    $response['message'] = "not getting the value from post['key]";
    echo json_encode($response);
    return;
}
if(!$sql){
    // $response = array("success" => false, "message" => "Something went wrong!");
     $response['success'] = false;
     $response['message'] = "Something went wrong while changint the information ";
     echo json_encode($response);
     return;
 }
if($_POST['name'])
{
  $_SESSION['name'] = $_POST['name']; 
}
else if($_POST['number'])
{
    $_SESSION['phone'] = $_POST['number']; 
}
else if($_POST['college'])
{
    $_SESSION['college'] = $_POST['college']; 
}
 $response['success'] = true;
 $response['message'] = "informatino updated ";
 echo json_encode($response);
 
 mysqli_close($conn);
 return;

?>