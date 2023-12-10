
<!DOCTYPE html>
<html lang="en">

<?php
$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
$compressed_img = $row_user_info['compressed_image'];
$primary_color = $row_user_info['primary_color'];
$secondary_color = $row_user_info['secondary_color'];
$userEmailID = $row_user_info['email'];
?>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $row_user_info['field_1'] ?> - <?php echo $row_user_info['field_2'] ?> | Wooble</title>
    <meta name="description" content="<?php echo $row_user_info['field_3'] ?>">
    <link rel="icon" type="image/x-icon" href="app/home/ico-master/files/<?php echo $email_id ?>.ico">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <?php
    $profile_pic = $row_user_info['profile_pic'];
    $compressed_img = $row_user_info['compressed_image'];
    ?>


    <meta property="og:title" content="<?php echo $row_user_info['field_1'] ?>"/>
    <meta property="og:description" content="<?php echo $row_user_info['field_2'] ?>"/>
    <?php
    $og_image = "https://wooble.org/app/home/images/".$compressed_img;
    list($width, $height, $type, $attr) = getimagesize($og_image);
    ?>
    <meta property="og:image" content="<?php echo $og_image ?>">
    <meta property="og:image:width" content="<?php echo $width ?>">
    <meta property="og:image:height" content="<?php echo $height ?>">


    <!--    Dynamic font loading Starts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">
    <!--    Dynamic font loading Ends-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="../css/mdb.min.css"/>
    <link rel="stylesheet" href="../plugins/css/multi-carousel.min.css">
    <style>

        html {
            scroll-behavior: smooth;
        }

        @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap');

        *{
            margin: 0;
            padding:0;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background:#0a2a43 !important;
            min-height: 1500px;
        }
        section{
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: start;
        }
        section::before{
            content: '';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, #0a2a43, transparent);
            z-index: 10000;
        }
        section::after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #0a2a43;
            z-index: 10000;
            mix-blend-mode: color;
        }
        section img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
        }
        #text{
            position: relative;
            color: #fff;
            font-size: 10em;
            z-index: 1;
        }
        #road{
            z-index: 2;
        }
        .my_font {
            font-family: <?php echo $row_fetch_font['font_family'] ?> !important;
        }

        .module {
            background: <?php echo $secondary_color ?>;
            position: relative;
            border: 5px solid<?php echo $primary_color ?>;
            margin: 20px;
            border-radius: 40px;
        }

        .primary_color {
            color: <?php echo $row_user_info['primary_color']?> !important;
        }

        .secondary_color {
            color: <?php echo $row_user_info['secondary_color']?> !important;
        }

    </style>
</head>
<body>
<section>
    <img src="img/h33_bg.jpg" id="bg">
    <img src="img/h33_moon.png" id="moon">
    <img src="img/h33_mountain.png" id="mountain">
    <img src="img/h33_road.png" id="road">
    <div id="text"  class="my_font primary_color text-center" style="margin-top:20vh; line-height: 1; font-size: 4rem!important;">


        <?php echo $row_user_info['field_1'] ?>
    <br>
        <span style="font-size: 1rem; line-height: 1" class="my_font primary_color"> <?php echo $row_user_info['field_2'] ?> </span>
        <div class="d-flex justify-content-center text-center">

    </div>
    </div>

    <br>





</section>



<script type="text/javascript">
    let bg = document.getElementById("bg");
    let moon = document.getElementById("moon");
    let mountain = document.getElementById("mountain");
    let road = document.getElementById("road");
    let text = document.getElementById("text");

    window.addEventListener('scroll',function(){
        var value = window.scrollY;

        bg.style.top=value * 0.5 +'px';
        moon.style.left=-value * 0.5 +'px';
        mountain.style.top=-value * 0.15 +'px';
        road.style.top=value * 0.5 +'px';
        text.style.top=value * 1 +'px';
    })
</script>
</body>
</div>
<!-- Wooble link for desktop start-->
<!-- Wooble link for desktop  end-->
<!-- Wooble link for mobile start-->
<!-- Wooble link for mobile end-->
</div>
</div>
</div>

<?php include 'inc/footer_h31.php'; ?>
<!-- MDB -->
</body>
</html>
