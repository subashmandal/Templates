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
    <meta property="og:image" content="https://app.wooble.org/home/images/<?php echo $compressed_img ?>.png"/>
    <!--    Dynamic font loading Starts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">
    <!--    Dynamic font loading Ends-->
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

        .glass_box {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.5);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(6px);
            border: 1px solid rgba(100, 100, 104, 0.3);
        }

        .glassism{
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);*/
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
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
        .hov_h30:hover{
            color: <?php echo $secondary_color ?> !important;
        }

    </style>
</head>
<body style="<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden;">
<!-- Start your project here-->
<div class="" style="overflow-x: hidden">

    <div class=" text-center text-light">
        <div class=" position-relative "  style="background-image: url('https://static.wixstatic.com/media/82fcd3_a1a4a4fd8e2b4b0295b547356b038220~mv2_d_6405_4048_s_4_2.jpg/v1/fill/w_4478,h_2072,al_t,q_90,usm_0.66_1.00_0.01,enc_auto/82fcd3_a1a4a4fd8e2b4b0295b547356b038220~mv2_d_6405_4048_s_4_2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; width: 100vw; height: 100vh;">
            <!--Nav Bar Code Start-->
            <?php include 'inc/header_h30.php'; ?>
            <!--Nav Bar Code End-->
            <div class="ms-5 d-flex align-items-center w-50" style="height: 90vh">
                <h1 class=" text-wrap w-50 text-start" style="font-size: 3.5rem">I Help Organizations Reshape Their Workplace Culture</h1>
            </div>

        </div>




    </div>
<!--    about section-->
    <div style="background-color: white; min-height: 80vh; width: 100vw">
        <h4 class="my_font text-muted ps-5 pt-5" style="letter-spacing: 5px;">About</h4>
    <div class="container">

<br>
        <div class="row flex-row" >
            <div class="col-lg-6 col-12 p-5 d-flex justify-content-center align-items-center"><img src="" style="object-fit: cover" onerror="if (this.src != 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png') this.src = 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png';" data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                                                           data-mdb-animation="fade-in-left"></div>
            <div class="col-lg-6 col-12 p-5 gx-5 lh-lg align-items-center d-flex text-black fs-5 text-black my_font" data-mdb-animation-start="onScroll" data-mdb-toggle="animation"
                 data-mdb-animation="fade-in-right"><bold><h1><?php echo $row_user_info['field_3'] ?></h1></bold></div>
        </div>
    </div>
    </div>

<!--    fix background scroll design-->
    <div class="" style="min-height: 40vh;">
        <div id="parallax">
            <?php
            $count_query = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY RAND() LIMIT 1";
            $count_res_gallery = mysqli_query($link, $count_query);
            $count_photos = mysqli_num_rows($count_res_gallery);
            $photo_in_one_column = round($count_photos / 3, 0);
            $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT 1";
            $res_gallery = mysqli_query($link, $query_gallery);

            while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                ?>
                <div class="" style="min-height: 20vh;">
                        <div class="bg-fixed"  style="background-image: url('https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 40vh;">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<!--Gallery section-->
    <?php
    if ($count_photos > 0) {
    ?>
    <h4 class="my_font primary_color ps-5 pt-5" style="letter-spacing: 5px;">Gallery</h4>

        <div class="container">

        <div class="row flex-column-reverse flex-sm-row">
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <button type="button" class="btn btn-outline-dark my-5" data-mdb-ripple-color="dark">View More Images</button>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4 d-flex justify-content-center p-5 lightbox">
                <div class="multi-carousel" data-mdb-interval="3000" data-mdb-items="1">
                    <div class="multi-carousel-inner">

                            <?php
                            $count_query = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!=''";
                            $count_res_gallery = mysqli_query($link, $count_query);
                            $count_photos = mysqli_num_rows($count_res_gallery);
                            $photo_in_one_column = round($count_photos / 1, 0);
                            $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT $photo_in_one_column ";
                            $res_gallery = mysqli_query($link, $query_gallery);
                            while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                                ?>
                                <div class="multi-carousel-item h-50">
                                    <img src="https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>" alt="<?php echo $row_gallery['title'] ?>" class="w-100" style="min-height: 420px; object-fit: cover"/>
                                </div>
                            <?php } ?>

                    </div>
                    <button class="carousel-control-prev" type="button" tabindex="0" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" tabindex="0" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>

<!--Recent Blogs-->
    <div class="container-fluid" style="background-color: black;">
    <?php
    if ($count_blogs != 0) {
    ?>
        <strong><h4 class="my_font primary_color ps-5 pt-5" style="letter-spacing: 5px;">Recent Blogs</h4></strong><br><br>
        <div class="row justify-content-around d-flex">
            <?php
            $count = 0;
            $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY `time_created` DESC LIMIT 3";
            $res_blogs = mysqli_query($link, $query_blogs);
            while ($row_blogs = mysqli_fetch_assoc($res_blogs)) {
                $blog_content = $row_blogs['content'];
                $blog_title = $row_blogs['title'];
                $last_updated = $row_blogs['last_updated'];
                $date_created = $row_blogs['time_created'];
                $blog_id = $row_blogs['blog_id'];
                $count++;
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                $post_image = $image['src'];
                ?>
                <div class="col-lg-3 col-md-4 m-1">
                    <a target="_blank" href="https://wooble.org/blog/<?php echo $row_blogs['canonical_url'] ?>">
                        <!-- Image with no mask -->
                        <div class="bg-image rounded-0">
                            <img style="width: 100%; height: 320px; object-fit:cover" src="<?php echo $post_image ?>" alt="<?php echo $blog_title ?>"/>
                        </div>
                        <div class="my-3">
                            <h2 class="fw-bolder mx-4 my_font primary_color nav_21"><?php echo $blog_title ?></h2>
                            <p class="primary_color mx-4"><b>Last Updated: </b><?php echo $last_updated ?></p>
                        </div>
                    </a>
                </div>
                <!--Grid row-->
            <?php } ?>
        </div>

        <div class="justify-content-center d-flex">
        <button type="button" class="btn btn-primary my-5">Read Blogs</button>
        </div>
    <?php } ?>
    </div>
</body>
</div>
</div>
</div>
</div>

<?php include 'inc/footer_h30.php'; ?>
<!-- MDB -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='plugins/js/multi-carousel.min.js'></script>
<!--<script type="text/javascript">-->
<!--    var multiplexador = 3;-->
<!--    initial_div_height = document.getElementById ("my_dynamic_text").scrollHeight;-->
<!--    Adequar_Frase = setInterval(function(){-->
<!--        var div = document.getElementById ("my_dynamic_text");-->
<!--        var frase = document.getElementById ("quotee");-->
<!--        var message = "WIDTH div " + div.scrollWidth + "px. "+ frase.scrollWidth+"px. frase \n";-->
<!--        message += "HEIGHT div " + initial_div_height + "px. "+ frase.scrollHeight+"px. frase \n";-->
<!---->
<!--        if (frase.scrollHeight < initial_div_height-70) {-->
<!--            multiplexador += 1;-->
<!--            $("#quotee").css("font-size", multiplexador);-->
<!--        }else{-->
<!--            clearInterval(Adequar_Frase);-->
<!--        }-->
<!--        -->
<!--    }, 1);-->
<!--</script>-->
</body>
</html>
