<?php
include '../inc/dbconnection.php';

$user_id = $_GET['id'];
$query_user_email = "SELECT * FROM `user_details` WHERE `username`='$user_id'";
$res_email = mysqli_query($link, $query_user_email);
$row_email = mysqli_fetch_assoc($res_email);
$row_user_info = $row_email;
$userEmailID = $row_email['email'];
$primary_color = $row_user_info['primary_color'];
$secondary_color = $row_user_info['secondary_color'];
$compressed_img = $row_user_info['compressed_image'];

$full_name = $row_email['field_1'];
$profile_pic = $row_email['profile_pic'];
$theme = $row_email['theme'];
$theme = strtolower($theme);

$username = $user_id;
$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
<!--    <title>--><?php //echo $full_name; echo $profile_pic; ?><!-- | Wooble</title>-->
    <!-- Wooble icon -->
<!--    <link rel="icon" href="https://test.wooble.org/home/upload/--><?php //echo rawurlencode($profile_pic); ?><!--" type="image/x-icon" />-->
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link href="../blog/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">

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

        .glassism{
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
        }

    </style>
</head>
<body style="height: 100vh; <?php echo $row_email['background'] ?>; background-repeat: no-repeat; background-size: cover; overflow-x: hidden!important;">
<?php include '../inc/header_'.$theme.'.php'; ?>
    <div class="container mt-4">
        <div class="row">
        <div class="col-lg-5"
             data-mdb-toggle="animation"
             data-mdb-animation="fade-in-up"
             data-mdb-animation-duration="2000"
             data-mdb-animation-on-scroll="repeat"
             data-mdb-animation-start="onLoad">
            <img width="100%" src="../app/home/images/<?php echo $compressed_img ?>" style="object-fit: cover"
                 onerror="if (this.src != 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png') this.src = 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png';"
            >
            <div class="d-flex align-content-center justify-content-center pt-2 glassism">
                <?php
                $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$userEmailID' LIMIT 5";
                $res_link = mysqli_query($link, $query_link);
                while ($row_link = mysqli_fetch_assoc($res_link)) {
                    $link1 = $row_link['link'];
                    $brand = $row_link['brand'];
                    $url = $link1;
                    $parse = parse_url($url);
                    $host = $parse['host'];
                    $host = str_ireplace('www.', '', $host);
                    $short_host = $host;
                    $first = strtok($short_host, '.');
//            echo $first; // home
                    ?>
                    <div class="cols" align="center">
                        <center>
                        <a target="_blank" class="m-2" href="<?php echo $link1 ?>">
                            <i style="font-size: 20px" class="fab fa-<?php echo $first ?> primary_color"></i>
                        </a>
                        </center>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-7 primary_color my_font" id="my_dynamic_text">
            <p style="font-size: 20px" id="quotee"><?php echo $row_user_info['field_3'] ?></p>
        </div>
        </div>
    </div>

<script type="text/javascript" src="../js/mdb.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script>
    var multiplexador = 3;
    initial_div_height = document.getElementById ("my_dynamic_text").scrollHeight;
    Adequar_Frase = setInterval(function(){
        var div = document.getElementById ("my_dynamic_text");
        var frase = document.getElementById ("quotee");
        var message = "WIDTH div " + div.scrollWidth + "px. "+ frase.scrollWidth+"px. frase \n";
        message += "HEIGHT div " + initial_div_height + "px. "+ frase.scrollHeight+"px. frase \n";

        if (frase.scrollHeight < initial_div_height-70) {
            multiplexador += 1;
            $("#quotee").css("font-size", multiplexador);
        }else{
            clearInterval(Adequar_Frase);
        }
        //console.log(message);
    }, 75);
</script>
</body>
<?php include '../inc/footer_'.$theme.'.php'; ?>
<?php mysqli_close($link) ?>
</html>
