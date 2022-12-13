<?php

//Delete the auth cookie
echo "You have been Sign Out, Login from <a href='../login'>Here</a>";
echo "<script> document.cookie = 'auth=; expires=Thu, 01 Jam 1970 00:00:00 UTC; path=/;'; </script>";
?>