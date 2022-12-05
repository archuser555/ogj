<?php

include_once 'config.php';
$sql = "SELECT MAX(id) as total_users from users";
$result = mysqli_query($conn,$sql);
$a = mysqli_fetch_assoc($result);

function totalusers(){
    return $a['total_users'];
}

?>