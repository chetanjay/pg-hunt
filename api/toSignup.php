<?php

$db_hostname = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'miniproject';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$conn){
    echo "something went wrong " . mysqli_connect_error();
    exit;
}

$full_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$check = "SELECT * FROM users WHERE email = '$email';";
$result = mysqli_query($conn, $check);
if(!$result){
    //$response = array("success" => false, "message" => "Something went wrong!");
    $response['success'] = false;
    $response['message'] = "something went wrong ";
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    //$response = array("success" => false, "message" => "This email id is already registered with us!");
    $response['success'] = false;
    $response['message'] = "This email id is already registered with us!";
    echo json_encode($response);
    return;
}
$sql = "INSERT INTO  users (fullName, email, password, college, phoneNumber, gender) VALUES 
        ('$full_name','$email', '$password', '$college', '$phone', '$gender');";
$result = mysqli_query($conn, $sql);

if(!$sql){
   // $response = array("success" => false, "message" => "Something went wrong!");
    $response['success'] = false;
    $response['message'] = "Something went wrong!";
    echo json_encode($response);
    return;
}

//$response = array("success" => true, "message" => "Your account has been created successfully!");
//echo json_encode($response);
$response['success'] = true;
$response['message'] = "Your account has been created successfully!";
echo json_encode($response);

mysqli_close($conn);
return;

?>