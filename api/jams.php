<?php

include_once 'config.php';
$sql = "SELECT MAX(id) as total_jams from jam";
$result = mysqli_query($conn,$sql);
$a = mysqli_fetch_assoc($result);

$sql2 = "SELECT thumb as jams_thumbs from jam";
$result2 = mysqli_query($conn,$sql2);
$b = mysqli_fetch_assoc($result2);

//SOME COLORS I LIKED LOL
$colors = ["#888888","#810CA8", "#C147E9", "#E5B8F4", "#432C7A", "#80489C", "#FF8FB1", "FCE2DB"];
//CECAR CHOOSE A RANDOM COLORS FOR EACH JAM, SO WE SHOULD MAKE THIS LIST BIGGER OR USE ANOTHER ALGORITHM LIKE GENERATE RANDOM COLORS

?>