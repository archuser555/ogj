<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./static/style.css" >

    <title>OGJ: game jam's platform</title>
  </head>
  <body style="background-color: #332f63;">
    <nav>
      <div class="logo">
      <h2><strong style="color: red;">Open</strong><strong style="color: blue;">Game</strong><strong style="color: green;">Jams</strong></h2>
    </div>

<ul>
<li class="anim"><a href="./">Home</a></li>
<li class="anim"><a href="./aboutus/">About us</a></li>
<?php 
//include_once './api/itcitd.php';

include_once './api/config.php';

if(isset($_COOKIE['auth'])){
  $usernam = mysqli_real_escape_string($conn, json_decode($_COOKIE['auth'])[0]);
  $userpwd = mysqli_real_escape_string($conn, json_decode($_COOKIE['auth'])[1]);

  $sql7 = "SELECT * FROM users where username = '$usernam' AND password = '$userpwd'";

  $result7 = mysqli_query($conn,$sql7);
  $result7 = mysqli_fetch_assoc($result7);
  if(json_encode($result7) == "null") {
    $htuac = 0;
  }

  else {
    $htuac = 1;
  }
}
else {
  $htuac = 0;
}

if($htuac == 1){
    echo "<li class='anim'><a href='./cgj.php'>Create Jam</a></li>";
    echo "<li class='anim'><a href='./api/signout.php'>Sign Out</a></li>";
}

if($htuac == 0){
  echo "<li class='anim'><a href='./login/'>log in</a></li>";
  echo "<li class='anim'><a href='./register/'><strong>Sign up</strong></a></li>";
}

?>
</ul>
<div class="menu-bars">
  <input type="checkbox">
<span></span>
<span></span>
<span></span>
</div>
</nav>

<div class="container">
  <?php include_once './api/jams.php'; 
  shuffle($colors);
  for($i=1; $i < $a['total_jams']+1; $i++) 
  { 
    $sql2 = "SELECT thumb as jams_thumbs from jam where id = '$i'";
    $result2 = mysqli_query($conn,$sql2);
    $b = mysqli_fetch_assoc($result2);
    $b = $b['jams_thumbs'];

    $sql3 = "SELECT name as jams_names from jam where id = '$i'";
    $result3 = mysqli_query($conn,$sql3);
    $c = mysqli_fetch_assoc($result3);
    $c = $c['jams_names'];
    $color = $colors[$i];

    echo "<div class='box box$i' style='background-color:$color;'><h3 class='gg'>$c</h3><br><img src='$b'></div>\n"; 
  } 
?>
</div>

<script src="./static/app.js"></script>
  </body>
</html>
