<?php

$name = 'msg';
$val = 'Welcome';
setcookie($name, $val, time() + (60*60*24));

?>