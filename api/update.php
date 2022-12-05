<?php

//I Know... this code is a huge mess... So please try to know what you are doing :D

include_once 'config.php';

$queries = array();

parse_str($_SERVER['QUERY_STRING'], $queries);

$sql1 = "SELECT MAX(id) as total_users from users";

$result1 = mysqli_query($conn,$sql1);

$total_users = mysqli_fetch_assoc($result1);

$total_users = $total_users['total_users']+1;

$sql2 = "SELECT MAX(id) as total_jams from jam";

$result2 = mysqli_query($conn,$sql2);

$total_jams = mysqli_fetch_assoc($result2);

$total_jams = $total_jams['total_jams']+1;

if(isset($queries['username']) && isset($queries['userpass'])){
    $username = mysqli_real_escape_string($conn, $queries['username']);
    $userpass = md5(mysqli_real_escape_string($conn, $queries['userpass']));
    $sql3 = "INSERT INTO
    users (id, username, password)
      VALUES
    ('$total_users', '$username', '$userpass');";
    
    $result = mysqli_query($conn,$sql3);
    mysqli_close($conn);
    return 0;
}

elseif(isset($queries['title']) && isset($queries['days']) && isset($queries['desc']) && isset($queries['thumb']) && isset($queries['prize'])){
    $title = mysqli_real_escape_string($conn, $queries['title']);
    $days = mysqli_real_escape_string($conn, $queries['days']);
    $desc = mysqli_real_escape_string($conn, $queries['desc']);
    $thumb = mysqli_real_escape_string($conn, $queries['thumb']);
    $prize = mysqli_real_escape_string($conn, $queries['prize']);
    
    $sql4 = "INSERT INTO
    jam (id, name, days, descr, thumb, prize)
  VALUES
    (
      '$total_jams',
      '$title',
      '$days',
      '$desc',
      '$thumb',
      '$prize'
    );";
    
    $result = mysqli_query($conn,$sql4);
    mysqli_close($conn);
    return 0;
}

else {
    echo "Check the github page for the api documentation";
}
?>