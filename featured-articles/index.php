<?php
session_start();
include '../inc/dbconnection.php';
if(isset($_GET['id'])){
    $username = $_GET['id'];
}
else {
    echo 'Sample Design';
}

$query_user_info = "SELECT * FROM `user_details` WHERE `username`='$username'";
$res_user_info = mysqli_query($link, $query_user_info);
$row_user_info = mysqli_fetch_assoc($res_user_info);
$email_id = $row_user_info['email'];
$userEmailID = $email_id;
$theme = $row_user_info['theme'];
$theme = 'featured_articles_'.$theme.'.php';
$compressed_img = $row_user_info['compressed_image'];
$background = $row_user_info['background'];
$tertiary_color = $row_user_info['tertiary_color'];
$background_color = $row_user_info['background'];

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




if(isset($_GET['tt'])){
    $theme = $_GET['tt'];
}

$premium_domain = $row_user_info['premium_domain'];
if($premium_domain==''){
    $root_canonical_url = "https://wooble.org/".$username;
    $custom_url = "https://wooble.org/#directory#/".$username;
}
else{
    $root_canonical_url = "https://".$premium_domain;
    $custom_url = "https://".$premium_domain."/#directory#";
}

$exp_date = $row_user_info['expiry_date'];
$current_date = date('Y-d-m');
$payment_status = $row_user_info['payment_status']; ?>
<?php require $theme;
?>
<div style="z-index:9999!important;" id="google_translate_element"></div>

<!--<script type="text/javascript" src="js/mdb.min.js"></script>-->
<!--<script type="text/javascript" src="plugins/js/multi-carousel.min.js"></script>-->
<script type="text/javascript"
        src=
        "https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
</script>
