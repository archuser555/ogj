<?php

include_once 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $usernam = mysqli_real_escape_string($conn, $_POST['username']);
    $userpwd = mysqli_real_escape_string($conn, md5($_POST['password']));

    $sql = "SELECT * FROM users where username = '$usernam' AND password = '$userpwd'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_fetch_assoc($result) !== NULL) {
        echo md5($_POST['password']. ' ' . $_POST['username']);
        echo "\n User Found!";
    }

    else {
        echo "no user found";
    }
    mysqli_close($conn);
}

?>