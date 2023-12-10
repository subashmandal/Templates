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

        .glass_box {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.5);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(6px);
            border: 1px solid rgba(100, 100, 104, 0.3);
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
<body style="<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden">
<!-- Start your project here-->
<div style="min-height: 100vh;">
    <!--Nav Bar Code Start-->
    <?php include 'inc/header_h31.php'; ?>
    <!--Nav Bar Code End-->
    <div>
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column" style="height: 90vh;">
                <img src="https://wooble.org/app/home/images/<?php echo $compressed_img ?>" style="object-fit: cover; height: 500px; width: 500px" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="zoom-in" class="slower"
                     onerror="if (this.src != 'https://wooble.org/app/home/images/<?php echo $compressed_img ?>') this.src = 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png';">
                <h1 id="quotee"  class="my_font primary_color text-center slower" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in" style="font-size: 90px; margin-top: -100px; white-space: nowrap "><?php echo $row_user_info['field_1'] ?></h1>
                <p class="my_font secondary_color text-center slower" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in" style="font-size: 30px;"><?php echo $row_user_info['field_2'] ?></p>
            </div>
            <div class="col-lg-6 slower" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="zoom-in" style="height: 90vh; background-image: url(https://static.wixstatic.com/media/c837a6_8b04b968202c4a9dbb164459fb894b7c~mv2.jpg/v1/fill/w_2012,h_1918,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/c837a6_8b04b968202c4a9dbb164459fb894b7c~mv2.jpg); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div>
        <strong><h1 style="max-width: 1800px;" class="container my_font secondary_color delay-0.7s" data-mdb-toggle="animation" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">Projects</h1></strong>
        <br><br>
        <div class="container-fluid mb-4" style="min-height: 50vh; width: 80vw;">
<!--            <div class="bg-fixed" id="parallax" style="background-image: url('https://static.wixstatic.com/media/c837a6_98793bd523ee4439afb7e49a7a15fdb0~mv2.jpg/v1/fill/w_980,h_1109,al_b,q_85,usm_0.66_1.00_0.01,enc_auto/c837a6_98793bd523ee4439afb7e49a7a15fdb0~mv2.jpg'); background-repeat: no-repeat; background-size: cover; height: 50vh;">-->
            <div id="parallax">
                <?php
                $count_query = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!=''";
                $count_res_gallery = mysqli_query($link, $count_query);
                $count_photos = mysqli_num_rows($count_res_gallery);
                $photo_in_one_column = round($count_photos / 3, 0);
                $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT 5";
                $res_gallery = mysqli_query($link, $query_gallery);
                while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                    ?>
                    <div class="container-fluid mb-4" style="min-height: 50vh; width: 80vw;">
                        <div class="bg-fixed" style="background-image: url('https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>'); background-repeat: no-repeat; background-size: cover; height: 50vh; background-position: center; margin-bottom: 20vh;">
                        </div>
                <?php } ?>
            </div>
        </div>
        </div>
    <!--    about section-->
    <div class="container-fluid" style="min-height: 50vh; width: 80vw;">
        <h1 class="my_font secondary_color ps-5 pt-5 delay-0.7s" data-mdb-toggle="animation" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left" style="letter-spacing: 5px;">About Me</h1>
        <hr>
        <div class="row flex-row">
            <div class=" my_font col-lg-6 col-12 p-5 gx-5 lh-lg align-items-center d-flex text-black fs-5" data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                 data-mdb-animation="zoom-in" data-mdb-animation-on-scroll="repeat"><?php echo $row_user_info['field_3'] ?></div>
            <div class="col-lg-6 col-12 p-5 d-flex justify-content-center align-items-center"><img src="" style="object-fit: cover" onerror="if (this.src != 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png') this.src = 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png';" data-mdb-animation-start="onScroll" data-mdb-toggle="animation"
                                                                                                   data-mdb-animation="zoom-in" data-mdb-animation-on-scroll="repeat"></div>
        </div>
    </div>
<!--        my code ends-->
    <script type="text/javascript">
        const parallax = document.getElementById("parallax");
        window.addEventListener("scroll", function()
        {
            let offset=window.pageYOffset;
            parallax.style.backgroundPositionY=offset*0.7+"px";
        })


    //    SCROLL SPEED
        function changeWheelSpeed(container, speedY) {
            var scrollY = 0;

            var handleScrollReset = function() {
                scrollY = container.scrollTop;
            };
            var handleMouseWheel = function(e) {
                e.preventDefault();
                scrollY += speedY * e.deltaY
                if (scrollY < 0) {
                    scrollY = 0;
                } else {
                    var limitY = container.scrollHeight - container.clientHeight;
                    if (scrollY > limitY) {
                        scrollY = limitY;
                    }
                }
                container.scrollTop = scrollY;
            };

            container.addEventListener('mouseup', handleScrollReset, false);
            container.addEventListener('mousedown', handleScrollReset, false);
            container.addEventListener('mousewheel', handleMouseWheel, false);

            var removed = false;

            return function() {
                if (removed) {
                    return;
                }

                container.removeEventListener('mouseup', handleScrollReset, false);
                container.removeEventListener('mousedown', handleScrollReset, false);
                container.removeEventListener('mousewheel', handleMouseWheel, false);

                removed = true;
            };
        }


        // Usage example:

        var element = document.querySelector('body');

        changeWheelSpeed(element, 0.2);  // 0.5 * default_scroll_speed  // 2 times slower


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
