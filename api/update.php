<?php

//I Know... this code is a huge mess... So please try to know what you are doing
//before touch anything :D

include_once 'config.php';

$queries = array();

parse_str($_SERVER["QUERY_STRING"], $queries);

$sql1 = "SELECT MAX(id) as total_users from users";

$result1 = mysqli_query($conn,$sql1);

$total_users = mysqli_fetch_assoc($result1);

$total_users = $total_users['total_users']+1;

$sql2 = "SELECT MAX(id) as total_jams from jam";

$result2 = mysqli_query($conn,$sql2);

$total_jams = mysqli_fetch_assoc($result2);

$total_jams = $total_jams['total_jams']+1;

  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $userpass = mysqli_real_escape_string($conn, md5($_POST['password']));
      $mail = mysqli_real_escape_string($conn, $_POST['email']);
      $sql3 = "INSERT INTO
      users (id, username, password, email)
        VALUES
      ('$total_users', '$username', '$userpass', '$mail');";

      $result = mysqli_query($conn,$sql3);
      echo "User Created!!!!!!!!!!!!";
      mysqli_close($conn);
      return 0;
  }

  if(isset($_FILES['thumb']) && $_POST(['title']) && isset($_POST['days']) && isset($_POST['desc']) && isset($_POST['prize']) && !empty($queries['creator'])){
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $days = mysqli_real_escape_string($conn, $_POST['days']);
      $desc = mysqli_real_escape_string($conn, $_POST['desc']);
      $prize = mysqli_real_escape_string($conn, $_POST['prize']);
      $creator = mysqli_real_escape_string($conn, $queries['creator']);

      echo "<pre>"; print_r($_FILES['thumb']); echo "</pre>";
      
      $sql4 = "INSERT INTO
      jam (id, name, days, descr, thumb, prize, creator)
    VALUES
      (
        '$total_jams',
        '$title',
        '$days',
        '$desc',
        '$thumb',
        '$prize',
        '$creator'
      );";
      
      $result = mysqli_query($conn,$sql4);
      mysqli_close($conn);
      return 0;
  }

  else {
      echo "Check the github page for the api documentation";
  }
?>