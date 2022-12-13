<?php

include_once 'config.php';

$_SESSION['auth'] = $_COOKIE['auth'];
$usernam = mysqli_real_escape_string($conn, json_decode($_SESSION['auth'])[0]);
$userpwd = mysqli_real_escape_string($conn, json_decode($_SESSION['auth'])[1]);

$sql7 = "SELECT * FROM users where username = '$usernam' AND password = '$userpwd'";

$result7 = mysqli_query($conn,$sql7);
if(mysqli_fetch_assoc($result7) !== NULL) {
    echo 1;
}

else {
    echo 3;
}

?>