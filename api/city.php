<?php

$db_hostname = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'miniproject';

$cookie_name = 'city';
$cookie_value = $_POST['city'];
$city = $cookie_value;
setcookie($cookie_name, $cookie_value, time() + (60*60*24), "/");

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$conn){
    echo "something went wrong " . mysqli_connect_error();
    exit;
}

$sql = "SELECT id FROM cities WHERE name='$city';";

$result = mysqli_query($conn,$sql);

$Id = 0;
if(!$result)
{
    echo "error : " . mysqli_error($conn);
    exit; 
}

$row = mysqli_fetch_assoc($result);
$Id = (int)$row['id'];
// echo $Id;

$sql = "SELECT *FROM properties WHERE city_id = $Id;";
$result = mysqli_query($conn, $sql);
if(!$result)
{
    echo "erro : " . mysqli_error($conn);
    exit; 
}

$i = -1;
$v = array();
while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $v['name'] = $row['name'];
        $v['address'] = $row['address'];
        $v['price'] = $row['price'];
        $v['image'] = $row['image'];
        $v['map'] = $row['map'];
    $temp = strval($i);
        setcookie($temp, json_encode($v), time()+(60*60*24),"/");
    
}

    $cookie_name = 'count';
$temp = strval($i);
    setcookie($cookie_name, $temp, time() + (60*60*24), "/");
//     echo $_COOKIE['count'].$_COOKIE['count'];
//     $temp = strval($_COOKIE['count']);
//     $data = json_decode($_COOKIE[$temp], true);
//echo "task complete";
// echo $data['name'];     
    mysqli_close($conn);
?>