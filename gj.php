<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./static/style.css" >

    <title>Cecar: game jam's platform</title>
  </head>
  <body style="background-color: #332f63;">
    <nav>
      <div class="logo">
      <h2>Cecar</h2>
    </div>

<ul>
<li class="anim"><a href="./">Home</a></li>
<li class="anim"><a href="./aboutus/">About us</a></li>
<?php 
include_once './api/isthiscookieinthedb.php';

if($htuac = 0){
echo "<li class='anim'><a href='./login/'>Log in</a></li>";
echo "<li class='anim'><a href='./register/'><strong>Sign up</strong></a></li>";
}
else if($htuac = 1){
  echo "<li class='anim'><a href='./login/'>Create Jam</a></li>";
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

<?php

//show game jams details and join shit etc...

?>

<script src="./static/app.js"></script>
  </body>
</html>
