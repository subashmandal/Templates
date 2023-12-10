<!DOCTYPE html>
<html lang="en">
<?php
$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
$compressed_img = $row_user_info['compressed_image'];
$userEmailID = $row_user_info['email'];
?>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $row_user_info['seo_title'] ?></title>
    <meta name="description" content="<?php echo $row_user_info['seo_description'] ?>">
    <meta name="keywords" content="<?php echo $row_user_info['seo_keywords'] ?>">
    <link rel="icon" type="image/x-icon" href="app/home/ico-master/files/<?php echo $email_id ?>.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="robots" content="all">
    <meta name="publisher" content="<?php echo $row_user_info['field_1'] ?>">
    <meta name="author" content="<?php echo $row_user_info['field_1'] ?>">
    <?php

    $profile_pic = $row_user_info['profile_pic'];
    $compressed_img = $row_user_info['compressed_image'];
    $seo_img = $row_user_info['seo_img'];
    ?>

    <link rel="canonical" href="<?php echo $root_canonical_url ?>">
    <meta property="og:title" content="<?php echo $row_user_info['field_1'] ?>"/>
    <meta property="og:description" content="<?php echo $row_user_info['field_2'] ?>"/>
    <?php
        $og_image = "https://app.wooble.org/home/images/".$seo_img;
        list($width, $height, $type, $attr) = getimagesize($og_image);
    ?>
    <meta property="og:image" content="<?php echo $og_image ?>">
    <meta property="og:image:width" content="<?php echo $width ?>">
    <meta property="og:image:height" content="<?php echo $height ?>">

    <!--    Dynamic font loading Starts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>
    <!--    Dynamic font loading Ends-->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="https://wooble.org/css/mdb.min.css"/>
    <link rel="stylesheet" href="https://wooble.org/plugins/css/multi-carousel.min.css">
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
        .glassism {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);*/
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 10px solid rgba(255, 255, 255, 0.3);
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
        .nav_21:hover {
            color: white !important;
        }
        /* card slider start */
        .f_card{
            width: 400px;
            background: rgba(200, 200, 200, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
            border-radius: 10px;
        }
        .f_content{
            min-height: 50px;
            overflow-y:scroll;
            scrollbar-width: none;
            -ms-overflow-style: none; /* IE and Edge */
        }
        .slider {
            padding: 20px;
            overflow: hidden;
            max-width: 100vw;
            width: 100%;
            margin: 0 auto;
            position: relative;
            display: flex;
            overflow-x: scroll;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
            /* margin-bottom: 20px; */
        }
        .slider::-webkit-scrollbar {
            display: none;
        }
        .slider:hover div {
            animation-play-state: paused;
        }
        .slider .academic_card {
            display: flex;
            position: relative;
            animation: marquee 250s linear infinite;
            /*justify-content: space-around;*/
        }

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        /* card slider end */
    </style>
</head>
<body style="background-color:<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden">
<!-- Start your project here-->

<div class="justify-content-center" style="min-height: 100vh;">
    <?php
        $background_color1 = $row_user_info['background'];
        if($background_color1[0]=='#'){
            //$background_color1 = substr($background_color1, 0,6);
            $background_color1 = $background_color1.'98';
        }
        else{
            //Remove the last parenthesis
            $background_color1 = substr($background_color1,0,-1);
            $background_color1 = $background_color1.', 0.6)';
        }
    ?>
    <div>
        <?php
            if($row_user_info['hero_video']!=""){?>
                <video autoplay muted loop style="right: 0; bottom: 0;z-index: -1; min-width: 100%;  " class="position-relative justify-content-center m-0">
                    <source src="https://wooble.org/app/videos/<?php echo $row_user_info['hero_video'] ?>" type="video/mp4" >
                </video>
            <?php }
            else{
                $hero_img = $row_user_info['hero_img'];
        ?>
        <div style="min-height:100vh; background-image:url('https://app.wooble.org/hero_img/<?php echo $hero_img ?>'); background-size:cover">
            <div style="height:100vh; width:100vw; background-color: <?php echo $background_color1 ?>"></div>
        </div>

        <?php } ?>
    <!--    main part code-->
    <div class="container-fluid position-absolute top-0 g-0" style="z-index: 1;">
        <!--Nav Bar Code Start-->
        <?php include 'header/'.$row_user_info["header_type"].'.php'; ?>
        <!--Nav Bar Code End-->
        <!--Main code start-->
        <div class="d-flex align-items-center justify-content-center flex-column" style="min-height: 100vh;">
            <!--Profile Name-->

            <h1 id="quotee"
                class="fw-bolder text-center mx-3" style="white-space: nowrap; font-size: 8vw; max-font-size: 120px!important; color:<?php echo $text_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['field_1'] ?></h1>
            <!--            Designation-->
            <center>
            <h3 style="font-family:<?php echo $row_fonts['font_2'] ?>; color:<?php echo $text_color ?>" class="my-3"><?php echo $row_user_info['field_2'] ?></h3>
            </center>
            <!--            Social Links-->
            <div class="d-flex pt-2 mt-3">
                <?php
                $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$userEmailID' ORDER BY `position`";
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
                            <a target="_blank" class="m-3" href="<?php echo $link1 ?>" style="color:<?php echo $text_color ?>">
                                <i style="font-size: 32px; color: <?php echo $text_color ?>; important"
                                   class="fab fa-<?php echo $first ?>"></i>
                            </a>
                        </center>
                    </div>
                <?php } ?>
            </div>
            <!--            Social Links code end-->
            <?php
                if($row_user_info['cta_link']=="Works"){
                    $url = str_replace('#directory#', 'works', $custom_url);
                }
                else if($row_user_info['cta_link']=="Gallery"){
                    $url = str_replace('#directory#', 'gallery', $custom_url);
                }
                else if($row_user_info['cta_link']=="Blogs"){
                    $url = str_replace('#directory#', 'blogs', $custom_url);
                }
            ?>
            <a href="<?php echo $url ?>"><button type="button" class="btn btn-lg my-5 nav_21" style="background: <?php echo $primary_color?>; font-family:<?php echo $row_fonts['font_2'] ?>;"><span style="color:<?php echo $text_color ?>"><?php echo $row_user_info['cta_name'] ?></span></button></a>
            <br><br><br><br><br><br>
        </div>
    </div>

    <!--for desktop device-->
    <div class="d-none d-md-block" style="background-color: <?php echo $background_color ?>;margin-top: -10px;">
        <div class="d-flex justify-content-center" >
            <div class="row flex-row container" style="margin-top: -10vh">
                <div class="col-lg-5 d-flex align-items-center my-3">
                    <img src="https://wooble.org/app/home/images/<?php echo $compressed_img ?>" width="100%" style="object-fit: cover"
                         onerror="if (this.src != 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png') this.src = 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.webp';">
                </div>
                <div style="background-color:<?php echo $primary_color ?>" class="col-lg-7 d-flex align-items-center" id="my_dynamic_text">
                    <p class="text-wrap m-3"
                       style="text-align: justify; font-size: 2rem;color:<?php echo $text_color ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>"><?php echo $row_user_info['field_3'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!--    for mobile device-->
    <div class=" d-flex justify-content-center d-block d-md-none" style="margin-top: -10px;">
        <div class="row flex-row container">
            <div class="col-lg-5 d-flex align-items-center my-3">
                <img width="100%" src="https://wooble.org/app/home/images/<?php echo $compressed_img ?>" style="object-fit: cover"
                     onerror="if (this.src != 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png') this.src = 'https://wooble.org/app/home/images/<?php echo $userEmailID ?>.png';">
            </div>
            <div class="col-lg-7 d-flex align-items-center" id="my_dynamic_text">
                <p class="my_font text-black text-wrap m-3"
                   style="text-align: justify;color:<?php echo $text_color ?>!important; "><?php echo $row_user_info['field_3'] ?></p>
            </div>
        </div>
    </div>

<!--featured article start-->
        <?php  if($row_user_info['article_summary']){ ?>
        <div class="position-relative justify-content-center d-flex"
             style="min-height: 20vh; z-index: -1; background-color: <?php echo $row_user_info['background'] ?>">
            <div class="flex-column d-flex align-items-center justify-content-center" style="z-index: -1"
                 data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                 data-mdb-animation="slide-in-up">
                <div style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>" class="fs-1 fw-bolder fr-highlighted"><?php echo $row_user_info['custom_featured_article_name'] ?></div>
                <div class="container">
                    <p class="fw-light text-center ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['featured_article_description'] ?></p>
                </div>
            </div>
        </div>
        <?php } ?>

        <div>
            <div class="slider">
                <div class="academic_card">
                    <!-- card_1 -->

                    <?php
                    $i='';
                    function truncateTitle($str, $maxLength) {
                        if (strlen($str) > $maxLength) {
                            return substr($str, 0, $maxLength) . "...";
                        } else {
                            return $str;
                        }
                    }
                    for($i=0; $i<5; $i++){
                        $query_articles = "SELECT * FROM `articles_db` WHERE `email_id`='$userEmailID'";
                        $res_articles = mysqli_query($link, $query_articles);
                        while($row_articles = mysqli_fetch_assoc($res_articles)){
                            $article_image = $row_articles['article_image'];
                            $article_title = $row_articles['article_title'];
                            $maxLength = 50;
                            $truncatedTitle = truncateTitle($article_title, $maxLength);
                    ?>
                                <a target="_blank" href="<?php echo $row_articles['article_link'] ?>">
                    <div class="m-3 f_card">
                        <div class="row d-flex align-items-center bg-image hover-zoom rounded-0">
                            <img src="https://app.wooble.org/featured_article/image/<?php echo $article_image ?>" onerror="this.onerror=null;this.src='<?php echo $article_image ?>'" class="width-100" height="250" style="object-fit: cover;"/>
                        </div>
                        <hr class="text-white">
                        <div class="f_content">
                            <p class="text-wrap fw-lighter" style="color: <?php echo $text_color?>">
                                <?php echo $truncatedTitle ?>
                            </p>
                        </div>
                    </div>
                                </a>
                    <?php } }?>
                </div>
            </div>
        </div>
<!--featured article end-->


<!--Blog Summary-->
        <?php
            if($row_user_info['blog_summary']){?>
                <div class="position-relative justify-content-center d-flex"
                     style="min-height: 50vh; z-index: -1; background-color: <?php echo $row_user_info['background'] ?>">
                    <div class="flex-column d-flex align-items-center justify-content-center" style="z-index: -1"
                         data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                         data-mdb-animation="slide-in-up">
                        <div style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>" class="fs-1 fw-bolder fr-highlighted"><?php echo $row_user_info['custom_blog_name'] ?></div>
                        <div class="container">
                            <p class="fw-light text-center ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['blog_description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: -10vh; background-color:<?php echo $primary_color ?>">
                    <div class="row justify-content-center">
                        <?php
                        $count = 0;
                        $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `time_created` DESC LIMIT 4";
                        $res_blogs = mysqli_query($link, $query_blogs);
                        while ($row_blogs = mysqli_fetch_assoc($res_blogs)) {
                            $blog_content = $row_blogs['content'];
                            $blog_title = $row_blogs['title'];
                            $last_updated = $row_blogs['last_updated'];
                            $date_created = $row_blogs['time_created'];
                            $blog_id = $row_blogs['blog_id'];
                            $blog_pic = $row_blogs['cover_image'];
                            $count++;
                            preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                            $post_image = $image['src'];
                            ?>
                            <div class="col-lg-6 col-md-6 mt-4 mb-lg-0" data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                                 data-mdb-animation="slide-in-up">
                                <a href="https://wooble.org/blog/?title=<?php echo $row_blogs['canonical_url'] ?>">
                                    <!-- Image with no mask -->
                                    <div class="bg-image rounded-0">
                                        <img style="width: 100%; height: 320px; object-fit:cover" src="<?php echo $post_image ?>" onerror="this.src ='https://app.wooble.org/blogs/upload/<?php echo $blog_pic ?>'" alt="<?php echo $blog_title ?>"/>
                                        <!-- Mask -->
                                        <div class="mask" style="background: linear-gradient(180deg, rgba(255,255,255,0) 35%, <?php echo $bg_color ?> 100%);">

                                            <div class="bottom-0 position-absolute w-100">
                                                <p style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" class="mx-4"><span class="fw-lighter"><i class="far fa-calendar"></i> </span><span class="fw-lighter" style="font-size: small;"><?php $newDate = date("M, d Y", strtotime($date_created)); echo $newDate ?></span></p>
                                                <h6 style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" class="pb-2 mx-4"><b><?php echo $blog_title ?></b></h6>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--Grid row-->
                        <?php } ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!--            Social Links code end-->
                        <a href="<?php  echo str_replace('#directory#', 'blogs', $custom_url )  ?>"><button type="button" class="btn primary_color border  my-5 shadow-0 nav_21" style="background-color: <?php echo $background_color ?>"><apan style="color:<?php echo $text_color ?>">Read More</apan></button></a>
                    </div>
                </div>
            <?php }
        ?>

        <!--Blog Summary-->
        <?php
        if($row_user_info['work_summary']){?>
            <div class="position-relative justify-content-center d-flex"
                 style="min-height: 50vh; z-index: -1; background-color: <?php echo $background_color ?>">
                <div class="flex-column d-flex align-items-center justify-content-center" style="z-index: -1"
                     data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                     data-mdb-animation="slide-in-up">
                    <div style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>" class="fs-1 fw-bolder fr-highlighted"><?php echo $row_user_info['custom_work_name'] ?></div>
                    <div class="container">
                        <p class="fw-light text-center ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['work_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: -10vh; background-color:<?php echo $primary_color ?>">
                <div class="row justify-content-center">
                    <?php
                    $count = 0;
                    $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `added_date` DESC LIMIT 4";
                    $res_works = mysqli_query($link, $query_works);
                    while ($row_works= mysqli_fetch_assoc($res_works)) {
                        $work_content = $row_works['work_description'];
                        $work_title = $row_works['work_title'];
                        $last_updated = $row_works['last_updated'];
                        $date_created = $row_works['added_date'];
                        $work_id = $row_works['work_id'];
                        $count++;
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_content, $image);
                        $post_image = $image['src'];
                        ?>
                        <div class="col-lg-6 col-md-6 mt-4 mb-lg-0" data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                             data-mdb-animation="slide-in-up">
                            <a href="https://wooble.org/work/?title=<?php echo $row_works['canonical_url'] ?>">
                                <!-- Image with no mask -->
                                <div class="bg-image rounded-0">
                                    <img style="width: 100%; height: 320px; object-fit:cover" src="https://wooble.org/app/work/upload/<?php echo $row_works['cover_pic'] ?>" onerror="this.onerror=null;this.src='<?php echo $post_image ?>'; alt="<?php echo $work_title ?>"/>
                                    <!-- Mask -->
                                    <div class="mask" style="background: linear-gradient(180deg, rgba(255,255,255,0) 35%, <?php echo $bg_color ?> 100%);">

                                        <div class="bottom-0 position-absolute w-100">
                                            <p style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" class="mx-4"><span class="fw-lighter"><i class="far fa-calendar"></i> </span><span class="fw-lighter" style="font-size: small;"><?php $newDate = date("M, d Y", strtotime($date_created)); echo $newDate ?></span></p>
                                            <h6 style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" class="pb-2 mx-4"><b><?php echo $work_title ?></b></h6>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--Grid row-->
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <!--            Social Links code end-->
                    <a href="<?php  echo str_replace('#directory#', 'works', $custom_url )  ?>"><button type="button" class="btn primary_color border  my-5 shadow-0 nav_21" style="background-color: <?php echo $background_color ?>"><apan style="color:<?php echo $text_color ?>">Read More</apan></button></a>
                </div>
            </div>
        <?php }
        ?>




<!--        gallery section start-->
        <?php
        if($row_user_info['gallery_summary']){?>
            <div class="position-relative justify-content-center d-flex"
                 style="min-height: 50vh; z-index: -1; background-color: <?php echo $background_color ?>">
                <div class="flex-column d-flex align-items-center justify-content-center" style="z-index: -1"
                     data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                     data-mdb-animation="slide-in-up">
                    <div style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>" class="fs-1 fw-bolder fr-highlighted"><?php echo $row_user_info['custom_gallery_name'] ?></div>
                    <div class="container">
                        <p class="fw-light text-center ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['gallery_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: -10vh; margin-bottom: 10vh; background-color:<?php echo $primary_color ?>">
                <div class="row justify-content-center">

                    <?php
                        $query_gallery = "SELECT * FROM `gallery_db`  WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `file_created` DESC";
                        $res_gallery = mysqli_query($link, $query_gallery);
                        while($row_gallery = mysqli_fetch_assoc(($res_gallery))){
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-4 mb-lg-0" data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                             data-mdb-animation="slide-in-up">
                            <a href="<?php  echo str_replace('#directory#', 'gallery', $custom_url )  ?>/<?php echo $row_works['canonical_url'] ?>">
                                <!-- Image with no mask -->
                                <div class="bg-image hover-zoom rounded-0">
                                    <img style="width: 100%; height: 320px; object-fit:cover" src="https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>" alt=""/>
                                    <!-- Mask -->
                                    <div class="mask" style="background: linear-gradient(180deg, rgba(255,255,255,0) 35%, <?php echo $bg_color ?> 100%);"></div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4 mb-lg-0" data-mdb-animation-start="onScroll" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                        <!--Grid row-->
                </div>
                <div class="d-flex justify-content-center">
                    <!--            Social Links code end-->
                    <a href="<?php echo str_replace('#directory#', 'gallery', $custom_url ) ?>"><button type="button" class="btn primary_color border  my-5 shadow-0 nav_21" style="background-color: <?php echo $background_color ?>"><apan style="color:<?php echo $text_color ?>">see more</apan></button></a>
                </div>
            </div>
        <?php }
        ?>

<!--        gallery section end-->


</body>
</div>
</div>
</div>
</div>
<!--footer section start-->
<div style="overflow-x: hidden">
    <?php
    include 'footer/'.$row_user_info["footer_type"].'.php';
    ?>
</div>
<!--footer section end-->
<!-- MDB -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script type="text/javascript">
    // var multiplexador = 3;
    // initial_div_height = document.getElementById("my_dynamic_text").scrollHeight;
    // Adequar_Frase = setInterval(function () {
    //     var div = document.getElementById("my_dynamic_text");
    //     var frase = document.getElementById("quotee");
    //     var message = "WIDTH div " + div.scrollWidth + "px. " + frase.scrollWidth + "px. frase \n";
    //     message += "HEIGHT div " + initial_div_height + "px. " + frase.scrollHeight + "px. frase \n";
    //
    //     if (frase.scrollHeight < initial_div_height - 170) {
    //         multiplexador += 1;
    //         $("#quotee").css("font-size", multiplexador);
    //     } else {
    //         clearInterval(Adequar_Frase);
    //     }
    // }, 1);
</script>
</body>
</html>