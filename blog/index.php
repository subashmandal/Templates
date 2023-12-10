<?php
include '../inc/dbconnection.php';
$dir="../";

if(isset($_GET['title'])){
    $my_blog_url = $_GET['title'];
}
else{
    $my_blog_url = $_GET['value'];
}

$query_blog = "SELECT * FROM `blogs` WHERE `canonical_url`='$my_blog_url'";
//echo $query_blog;
$res_blog = mysqli_query($link, $query_blog);
$row_blog = mysqli_fetch_assoc($res_blog);

$the_email = $row_blog['email_id'];
//echo $the_email;

$query_user_email = "SELECT * FROM `user_details` WHERE `email`='$the_email'";
$res_email = mysqli_query($link, $query_user_email);
$row_email = mysqli_fetch_assoc($res_email);
$row_user_info = $row_email;
$userEmailID = $the_email;
$username = $row_email['username'];


$compressed_img = $row_user_info['compressed_image'];
$primary_color = $row_user_info['primary_color'];
$secondary_color = $row_user_info['secondary_color'];

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




$full_name = $row_email['field_1'];
$profile_pic = $row_email['profile_pic'];
$theme = $row_email['theme'];
$username = $row_user_info['username'];
$theme = "my_blog_".$theme.".php";

$home_url = "https://wooble.org/".$row_user_info['username'];
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
