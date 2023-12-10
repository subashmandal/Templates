<?php
include '../inc/dbconnection.php';
$dir="../";

$user_id = $_GET['id'];

$query_user_email = "SELECT * FROM `user_details` WHERE `username`='$user_id'";
$res_email = mysqli_query($link, $query_user_email);
$row_email = mysqli_fetch_assoc($res_email);
$row_user_info = $row_email;
$userEmailID = $row_email['email'];


$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
$compressed_img = $row_user_info['compressed_image'];
$primary_color = $row_user_info['primary_color'];
$secondary_color = $row_user_info['secondary_color'];


$full_name = $row_email['field_1'];
$profile_pic = $row_email['profile_pic'];
$theme = $row_email['theme'];
$username = $row_user_info['username'];
$theme = "my_journey_".$theme.".php";

$gallery_url = "https://wooble.org/gallery/".$row_user_info['username'];
$works_url = "https://wooble.org/works/".$row_user_info['username'];
$blogs_url = "https://wooble.org/blogs/".$row_user_info['username'];
$home_url = "https://wooble.org/".$row_user_info['username'];
?>

<!DOCTYPE html>
<html lang="en">

<style>
    .primary_color{
        color: <?php echo $row_user_info['primary_color']?>!important;
    }
    .secondary_color {
        color: <?php echo $row_user_info['secondary_color']?> !important;
    }
    .my_font{
        font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
    }
</style>
<?php include $theme;?>
<?php mysqli_close($link) ?>
</html>
