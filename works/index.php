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
$background_color = $row_user_info['background'];
$background = $row_user_info['background'];
$primary_color = $row_user_info['primary_color'];
$secondary_color = $row_user_info['secondary_color'];
$text_color = $row_user_info['secondary_color'];
$username = $row_user_info['username'];


$full_name = $row_email['field_1'];
$profile_pic = $row_email['profile_pic'];
$theme = $row_email['theme'];
$theme = 'works_'.$theme.'.php';

$premium_domain = $row_user_info['premium_domain'];
if($premium_domain==''){
    $root_canonical_url = "https://wooble.org/".$username;
    $custom_url = "https://wooble.org/#directory#/".$username;
}
else{
    $root_canonical_url = "https://".$premium_domain;
    $custom_url = "https://".$premium_domain."/#directory#";
}
if(isset($_GET['color1']) && isset($_GET['color2']) && isset($_GET['color3']) && isset($_GET['color4'])){
    $bg_color = $_GET['color1'];
    $primary_color = $_GET['color2'];
    $secondary_color = $_GET['color3'];
    $text_color = $_GET['color4'];
    echo "Colors Defined in get method";
}
else{
    $bg_color = $row_user_info['background'];
    $primary_color = $row_user_info['primary_color'];
    $secondary_color = $row_user_info['secondary_color'];
    $text_color = $row_user_info['tertiary_color'];
}

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
</html>
