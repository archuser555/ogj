<?php

include_once 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $d = [$_POST['username'], md5($_POST['password'])];
    $q = json_encode($d);
    $usernam = mysqli_real_escape_string($conn, $_POST['username']);
    $userpwd = mysqli_real_escape_string($conn, md5($_POST['password']));
    $name="auth";
    $expire = time() + 60*55;
    $sql = "SELECT id FROM users where username = '$usernam' AND password = '$userpwd'";

    $result = mysqli_query($conn,$sql);
    if(mysqli_fetch_assoc($result) !== NULL) {
        $l = mysqli_fetch_assoc($result);
        print_r($l);
        echo "User Found, Now Go Make A Jam! <a href='../'>Here</a>";
        echo "<script> document.cookie = 'auth=$q; expires=Sun, 11 Dec 2024 21:06:32 GMT; path=/';
        document.cookie = 'id=$l; expires=Sun, 11 Dec 2024 21:06:32 GMT; path=/'; 
        </script>";
    }

    else {
        echo "no user found";
    }
    mysqli_close($conn);
}

?>