<?php
session_start();
include 'inc/dbconnection.php';
if(isset($_GET['id'])){
    $username = $_GET['id'];
}
else {
    echo 'Sample Design';
}

function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: '.$url);
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
    }
    exit;
}

$query_user_info = "SELECT * FROM `user_details` WHERE `username`='$username'";
$res_user_info = mysqli_query($link, $query_user_info);
$row_user_info = mysqli_fetch_assoc($res_user_info);
$check_user = mysqli_num_rows($res_user_info);
if($check_user==0){
    redirect('user_not_found');
}
$email_id = $row_user_info['email'];

if(isset($_GET['tt'])){
    $theme = $_GET['tt'];
}
else{
    $theme = $row_user_info['theme'];
}
//$theme = strtolower($theme);
$exp_date = $row_user_info['expiry_date'];
$current_date = date('Y-d-m');
$payment_status = $row_user_info['payment_status'];
$premium_domain = $row_user_info['premium_domain'];

if(isset($_GET['color1'])){
    $color1 = $_GET['color1'];
    $color2 = $_GET['color2'];
    $color3 = $_GET['color3'];
    $color4 = $_GET['color4'];
    $color1_prefix = substr($color1,0, 3);
    $color2_prefix = substr($color2,0, 3);
    $color3_prefix = substr($color3,0, 3);
    $color4_prefix = substr($color4,0, 3);

    if($color1_prefix=="rgb"){
        $bg_color = $color1;
    }
    else{
        $bg_color = '#'.$_GET['color1'];
    }

    if($color2_prefix=="rgb"){
        $primary_color = $color2;
    }
    else{
        $primary_color = '#'.$_GET['color2'];
    }

    if($color3_prefix=="rgb"){
        $secondary_color = $color3;
    }
    else{
        $secondary_color = '#'.$_GET['color3'];
    }

    if($color4_prefix=="rgb"){
        $text_color = $color4;
    }
    else{
        $text_color = '#'.$_GET['color4'];
    }
}
else{
//    echo "Colors not Defined in get method";
    $bg_color = $row_user_info['background'];
    $primary_color = $row_user_info['primary_color'];
    $secondary_color = $row_user_info['secondary_color'];
    $text_color = $row_user_info['tertiary_color'];
    $userEmailID = $row_user_info['email'];
}

//echo "Premium-domain=".$premium_domain;
if($premium_domain==''){
    $root_canonical_url = "https://wooble.org/".$username;
    $custom_url = "https://wooble.org/#directory#/".$username;
}
else{
    $root_canonical_url = "https://".$premium_domain;
    $custom_url = "https://".$premium_domain."/#directory#";
}
?>

<?php require 'lp_designs/'.$theme.'.php';
?>
<!--<div style="z-index:9999!important;" id="google_translate_element"></div>-->


<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<script type="text/javascript" src=""></script>
<script type="text/javascript" src="https://wooble.org/plugins/js/multi-carousel.min.js"></script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
</script>
