<?php

include_once 'config.php';

if (isset($_POST['userid'])){
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);

    $sql = "SELECT * FROM users where id = '$userid'";

    $result = mysqli_query($conn,$sql);

    $a = mysqli_fetch_assoc($result);
    $a['password'] = "secret";
    $a['email'] = "secret";

    echo json_encode($a);
    mysqli_free_result($result);
    mysqli_close($conn);
}

elseif (isset($_POST['jamid'])){
    $jamid = mysqli_real_escape_string($conn, $_POST['jamid']);

    $sql = "SELECT * FROM users where id = '$jamid'";

    $result = mysqli_query($conn,$sql);

    echo json_encode(mysqli_fetch_assoc($result));
    mysqli_free_result($result);
    mysqli_close($conn);
}

else {
    echo "Welcome To Cecar API!";
}

?>