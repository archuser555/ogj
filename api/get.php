<?php

include_once 'config.php';

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

if (isset($queries['userid']) && isset($queries['jamid']) != true){
    $userid = mysqli_real_escape_string($conn, $queries['userid']);

    $sql = "SELECT * FROM users where id = '$userid'";

    $result = mysqli_query($conn,$sql);

    $a = mysqli_fetch_assoc($result);
    $a['password'] = "0";

    echo json_encode($a);
    mysqli_free_result($result);
    mysqli_close($conn);
}

elseif (isset($queries['userid']) != true && isset($queries['jamid'])){
    $jamid = mysqli_real_escape_string($conn, $queries['jamid']);

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