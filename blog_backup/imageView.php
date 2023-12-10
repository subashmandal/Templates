<?php
// include database connection
include "../inc/dbconnection.php";

// select the image
$file_id = $_GET['id'];
$query = "select * from `gallery_db` WHERE `file_id` = '$file_id'";
$res = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($res);



    // specify header with content type,
     header("Content-type: image/jpg");
    // header("Content-type: image/gif"); for gif, etc.
    //header("Content-type: image/png");

    //display the image data
    print $row['file_content'];
    exit;