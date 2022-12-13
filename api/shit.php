<?php

include 'config.php';

$sql2 = "SELECT MAX(id) as total_jams from jam";

$result2 = mysqli_query($conn,$sql2);

$total_jams = mysqli_fetch_assoc($result2);

$total_jams = $total_jams['total_jams']+1;

if(isset($_FILES['thumb']) && isset($_POST['title']) && isset($_POST['days']) && isset($_POST['desc']) && isset($_POST['prize']) && isset($_GET['creator'])){
    $file = $_FILES['thumb'];

    if($file['error'] == 0) {
        if($file['size'] > 5242880) {
            echo "Image size is bigger than 5MB";
            return 1;
        }
        if(!(pathinfo($file['name'], PATHINFO_EXTENSION) == "jpg")){
            echo "image format arent jpg, please convert your image to jpg via online tools or via photoshop";
            return 1;
        }

        list($width, $height) = getimagesize($file['tmp_name']);

        if($width == 1280 && $height == 720){
            $new_img_name = "Jam-". md5($_POST['title']) . ".jpg";
            $img_upload_path = '../thumbs/'. $new_img_name;
            //move_uploaded_file($tmp_name, $img_upload_path);
            if(move_uploaded_file($file['tmp_name'], $img_upload_path)){
                //The File Upload Is Seccuful LOL, my english sucks...
            }
            else {
                echo "Segment fault (core dumped) :D, Error happens";
            }
            
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $thumb = $img_upload_path;
            $days = mysqli_real_escape_string($conn, $_POST['days']);
            $desc = mysqli_real_escape_string($conn, $_POST['desc']);
            $prize = mysqli_real_escape_string($conn, $_POST['prize']);
            $creator = mysqli_real_escape_string($conn, $_GET['creator']);
            
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

            echo "Jam Created! Check It From <a href='../'>here</a>";

            $result = mysqli_query($conn,$sql4);
            return 0;
        } //check if the image is 1280*720
        else {
            echo "The image aren't 1280X720, please change your resolution";
        }
    }
    else {
        echo "Error Happend, Please report this...";
    }
}

?>