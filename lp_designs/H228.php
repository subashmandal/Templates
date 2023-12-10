<?php
function get_clean_excerpt($string)
{

    $excerpt_string = get_excerpt($string);
    $excerpt_string = str_replace(' ', '-', $excerpt_string); // Replaces all spaces with hyphens.
    $excerpt_string = preg_replace('/[^A-Za-z0-9\-]/', '', $excerpt_string); // Removes special chars.
    return str_replace('-', ' ', $excerpt_string);
}

function get_excerpt($content, $length = 40, $more = '...')
{
    $excerpt = strip_tags(trim($content));
    $words = str_word_count($excerpt, 2);
    if (count($words) > $length) {
        $words = array_slice($words, 0, $length, true);
        end($words);
        $position = key($words) + strlen(current($words));
        $excerpt = substr($excerpt, 0, $position) . $more;
    }
    return $excerpt;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $query = "SELECT * FROM `user_details` WHERE `email` = '$email_id'";
    $res_query = mysqli_query($link, $query);
    $row_user_details = mysqli_fetch_assoc($res_query);
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['seo_title']; ?></title>
    <meta name="description" content="<?php echo $row_user_info['seo_description']; ?>">
    <meta name="keywords" content="<?php echo $row_user_info['seo_keywords']; ?>">
    <meta name="author" content="<?php echo $row_user_info['field_1']; ?>">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- ubuntu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <?php
        $font_combo_id = $row_user_info['font_id'];
        $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
        $res_fonts = mysqli_query($link, $query_fonts);
        $row_fonts = mysqli_fetch_assoc($res_fonts);
        echo $row_fonts['font_1_link'];
        echo $row_fonts['font_2_link'];
    ?>
    <!-- Font Awesome -->

    <?php
    $seo_img = $row_user_info['seo_img'];
    $og_image = "https://app.wooble.org/home/images/".$seo_img;
    list($width, $height, $type, $attr) = getimagesize($og_image);
    ?>
    <meta property="og:image" content="<?php echo $og_image ?>">
    <meta property="og:image:width" content="<?php echo $width ?>">
    <meta property="og:image:height" content="<?php echo $height ?>">


    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="https://wooble.org/css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
        .center{
            display: grid;
            place-content: center;
        }
        .bg{
            background-size: cover; background-repeat: no-repeat; background-position: center;
        }
        svg {
            fill: currentColor;
            height: 20vh;
            max-width: 66vmin;
            transform-origin: center;
            width: 18vh;
            color: white;
        }

        .hua {
            display: inline-block;
            position: relative;
        }

        .hua:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: <?php echo $text_color ?>;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hua:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
    <style>
        .marquee {
            white-space: nowrap;
            position: absolute;
        }

        .marquee span {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 20s linear infinite;
        }

        .marquee2 span {
            animation-delay: 10s;
        }

        @keyframes marquee {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(-100%, 0);
            }
        }
        @media (max-width:600px){
            .align{
                min-height: 35vh;
                scroll-padding-top: 2vh;
            }
            .align2{
                margin-bottom: 0px !important;
            }
            .align3{
                min-height: 30vh !important;
                min-width: 30vh !important;
            }
        }
        .text_hover:hover{
            opacity: 80% !important;
        }
    </style>
</head>

<?php
    $home_url = "https://wooble.org/".$row_user_info['username'];
    $gallery_url = "https://wooble.org/gallery/".$row_user_info['username'];
    $works_url = "https://wooble.org/works/".$row_user_info['username'];
    $blogs_url = "https://wooble.org/blogs/".$row_user_info['username'];
    $resume_url = "https://wooble.org/my_resume/".$row_user_info['username'];
    $featured_article_url = "https://wooble.org/featured-articles/".$row_user_info['username'];
?>

<body style="background-color:<?php echo $bg_color; ?>; user-select: none;">
<!-- Start -->

<?php
if($row_user_info['video_resume_active']){
?>

    <button data-mdb-toggle="modal" data-mdb-target="#videoModal" class="btn btn-floating text-white btn-lg" style="background-color: <?php echo $text_color ?>; position:fixed; bottom:20px; right: 30px; z-index: 999999">
        <i style="color:<?php echo $primary_color ?>" class="fas fa-play"></i>
    </button>
<?php } ?>


<div id="smooth-wrapper">

    <div id="smooth-content">
        <div style="overflow-x: hidden;">

            <!-- Button trigger modal -->

            <?php include 'header/'.$row_user_info["header_type"].'.php'; ?>

            <div class="row" style="background-color:<?php echo $bg_color; ?>; overflow: hidden;">
                <div class="col-lg-6 center" style="min-height: 95vh; padding-left: 10vw;padding-right: 10vw;">
                    <div class="anim">
                        <p style="color: <?php echo $secondary_color ?>;font-family: <?php echo $row_fonts['font_2'] ?>, sans-serif; font-weight: bold;">Hey, my name is</p>
                        <h2 class="text" style="color: <?php echo $text_color ?>;font-family:<?php echo $row_fonts['font_1'] ?>, sans-serif; font-size: 5.5vh;"><?php echo $row_user_info['field_1'] ?></h2>
                        <h2 class="text2" style="color: <?php echo $text_color ?>;font-family: <?php echo $row_fonts['font_2'] ?>, sans-serif; font-weight: bolder; font-size: 5.5vh;"><?php echo $row_user_info['field_2'] ?></h2>
                        <div class="pb-4 mt-2">
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
                            <a href="<?php echo $url ?>"><button type="button" class="btn btn-lg btn-rounded" style="min-width: 15vh; background-color:<?php echo $text_color ?>; color: <?php echo $bg_color ?>"><?php echo $row_user_info['cta_name'] ?></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 center" style="height: 95vh;">
                    <div class="bg position-relative img_container align3" style="background-image: url(https://app.wooble.org/hero_img/<?php echo $row_user_info['hero_img'] ?>); min-height: 60vh; min-width: 60vh; border-radius: 30px;">

                        <div class="position-absolute top-100 start-0 translate-middle">
                            <svg id="KS" viewBox="0 0 100 100" width="100" height="100">
                                <defs>
                                    <path id="circle"
                                          d="
                              M 50, 50
                              m -37, 0
                              a 37,37 0 1,1 74,0
                              a 37,37 0 1,1 -74,0"/>
                                </defs>
                                <text font-size="11" color="<?php echo $text_color ?>">
                                    <textPath xlink:href="#circle">
                                        SCROLL TO EXPLORE * SCROLL TO EXPLORE *
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
            <?php
                if($row_user_info['scrolling_text']!=""){?>
                    <div class="d-flex align-items-center text-black" style="min-height: 10vh; font-size: 4vh; background-color: #FFFFFF;">
                        <p class="marquee" style="font-family: <?php echo $row_fonts['font_2'] ?>">
                            <span><?php echo $row_user_info['scrolling_text'] ?></span>
                        </p>
                        <p class="marquee marquee2" style="font-family: <?php echo $row_fonts['font_2'] ?>">
                            <span><?php echo $row_user_info['scrolling_text'] ?></span>
                        </p>
                    </div>
               <?php }
            ?>

            <!-- <embed src="img/a-small-miracle-132333.mp3" loop="true" autostart="true" width="2" height="0"> -->
<!--            about section start-->
            <div class="row flex-column-reverse flex-lg-row" style="background-color:<?php echo $bg_color; ?>; overflow: hidden;" id="about_me_section">
                <div class="col-lg-6 center" style="height: 95vh; padding-left: 10vw;padding-right: 10vw; ">
                    <div class="anim">
                        <h1 style="color:<?php echo $text_color ?>; padding-left: 0vw; padding-top: 5vh; font-family:<?php echo $row_fonts['font_1'] ?>">ABOUT</h1>
                        <p style="color: <?php echo $text_color ?>;font-family: <?php echo $row_fonts['font_2'] ?>, sans-serif;font-size: 3vh;"><?php echo $row_user_info['field_3'] ?></p>
                        <div class="d-flex" style="padding-top: 7vh;">
                            <?php
                                $query_links = "SELECT * FROM `user_links` WHERE `email_id`='$email_id' ORDER BY `position`";
                                $res_links = mysqli_query($link, $query_links);
                                while($row_links = mysqli_fetch_assoc($res_links)){
                                    $link1 = $row_links['link'];
                                    $brand = $row_links['brand'];
                                    $url = $link1;
                                    $parse = parse_url($url);
                                    $host = $parse['host'];
                                    $host = str_ireplace('www.', '', $host);
                                    $short_host = $host;
                                    $first = strtok($short_host, '.');
                            ?>
                                    <a target="_blank" href="<?php echo $link1; ?>"><i style="color:<?php echo $text_color ?>" class="fab fa-<?php echo $first ?> fa-lg pe-3"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div id="CS" class="col-lg-6 center" data-lag="0.2" style="height: 95vh; background-image: url(lp_designs/img/Element1.svg); background-position: center; background-repeat: no-repeat; background-size: contain;">
                    <div class="bg position-relative" data-lag="0.3" style=" border-radius: 30px;">
                        <!-- background-image: url(img/image\ 1.svg); min-height: 40vh; min-width: 30vw; -->
                        <img src="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>" class="img-fluid rounded-4" style="min-height: 40vh; min-width: 30vw;" alt="" srcset="">
                    </div>
                </div>
            </div>
<!--            about section end-->

<!--            blog section start-->
            <?php if ($row_user_details['blog_summary'] == 1){?>
                <hr>
            <div style="min-height: 50vh; background-color: <?php echo $bg_color; ?>">
                <h1 style="color:<?php echo $text_color ?>; padding-left: 10vw; padding-top: 5vh; font-family:<?php echo $row_fonts['font_1'] ?>"><span><?php echo $row_user_info['custom_blog_name'] ?></span></h1>
                <div class="container">
                    <p class="fw-light text-start ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['blog_description'] ?></p>
                </div>
                <div class="row" style="min-height: 30vh;">
                    <div class="col-lg-1"></div>
                    <?php
                    $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created` DESC LIMIT 3";
                    $res_blogs = mysqli_query($link, $query_blogs);
                    while($row_blogs = mysqli_fetch_assoc($res_blogs)){
                        $blog_title = $row_blogs['title'];
                        $blog_content = $row_blogs['content'];
                        $clean_blog_content = get_clean_excerpt($row_blogs['content']);
                        $originalDate = $row_blogs['time_created'];
                        $blog_link = $row_blogs['canonical_url'];
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                        $post_image = $image['src'];
                    ?>

                    <div class="col-lg text-light p-5" style="border-left: 9px solid <?php echo $bg_color ?>; overflow: hidden;">
                        <div class="col-12 rounded-5 shift" style="background-image: url('<?php echo $post_image ?>'), url('http://via.placeholder.com/400x400'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 40vh; width: 100%;"></div>

                        <a href="https://wooble.org/blog/<?php echo $blog_link ?>"><p class="shift text_hover" style="font-size: 3vh; font-family: <?php echo $row_fonts['font_1'] ?>; color:<?php echo $text_color ?>"><?php echo $blog_title ?></p></a>

                        <p class="shift" style="font-family: <?php echo $row_fonts['font_2'] ?>; color: <?php echo $text_color ?>"><span class="fw-bolder">Published on:</span> <?php
                            $newDate = date("M, d Y", strtotime($originalDate)); echo $newDate ?></p>
                    </div>
                    <?php }?>


                    <div class="col-lg-1"></div>
                </div>
                <div class="py-5 text-center">
                    <button onclick="window.open('<?php echo $blogs_url ?>','_self')" type="button" class="btn btn-lg btn-light btn-rounded shadow-0" style="min-width: 15vh; background-color:<?php echo $text_color ?>; color:<?php echo $bg_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>">View Blogs</button>
                </div>

            </div>
            <?php }?>
<!--blog section end -->
<!--work section start-->
            <?php if ($row_user_details['work_summary'] == 1){?>
                <hr>
                <div style="min-height: 50vh; background-color: <?php echo $bg_color; ?>">
                    <h1 style="color:<?php echo $text_color ?>; padding-left: 10vw; padding-top: 5vh; font-family:<?php echo $row_fonts['font_1'] ?>"><span><?php echo $row_user_info['custom_work_name'] ?></span></h1>
                    <div class="container">
                        <p class="fw-light text-start ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['work_description'] ?></p>
                    </div>
                    <div class="row" style="min-height: 30vh;">
                        <div class="col-lg-1"></div>
                        <?php
                        $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 3";
                        $res_works = mysqli_query($link, $query_works);
                        $work_count = mysqli_num_rows($res_works);
                        if ($work_count>0){
                            while($row_works = mysqli_fetch_assoc($res_works)){

                                $work_id = $row_works['work_id'];
                                $work_title = $row_works['work_title'];
                                $work_content = $row_works['work_description'];
                                $work_link = $row_works['canonical_url'];
                                $work_cover_pic = $row_works['cover_pic'];

                                $clean_work_content = get_clean_excerpt($work_content);
                                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_content, $image);
                                $work_image = $image['src'];

                            ?>

                        <div class="col-lg text-light p-5" style="border-left: 9px solid <?php echo $bg_color ?>; overflow: hidden;">
                            <div class="col-12 rounded-5 shift" style="background-image: url('<?php echo $work_image ?>'), url('https://app.wooble.org/work/upload/<?php echo $work_cover_pic?>'), url('http://via.placeholder.com/400x400'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 40vh; width: 100%;"></div>

                            <a href="https://wooble.org/work/?title=<?php echo $work_link ?>"><p class="shift text_hover" style="font-size: 3vh; font-family: <?php echo $row_fonts['font_1'] ?>; color:<?php echo $text_color ?>"><?php echo $work_title ?></p></a>

                        </div>
                        <?php }}?>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="py-5 text-center">
                        <a href="<?php echo $works_url ?>" style="color: <?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" ><button type="button" class="btn btn-lg btn-light btn-rounded shadow-0" style="min-width: 15vh; background-color:<?php echo $text_color ?>; color:<?php echo $bg_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>">View work</button></a>
                    </div>

                </div>

            <?php }?>
<!--work section end-->
<!--featured article section start-->
            <?php  if($row_user_details['article_summary']){ ?>
                <div style="min-height: 50vh; background-color: <?php echo $bg_color; ?>">
                    <h1 style="color:<?php echo $text_color ?>; padding-left: 10vw; padding-top: 5vh; font-family:<?php echo $row_fonts['font_1'] ?>"><span><?php echo $row_user_info['custom_featured_article_name'] ?></span></h1>
                    <div class="row" style="min-height: 30vh;">
                        <div class="col-lg-1"></div>
                        <?php
                        $query_article = "SELECT * FROM `articles_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 3";
                        $res_articles = mysqli_query($link, $query_article);

                        function truncateTitle($str, $maxLength) {
                            if (strlen($str) > $maxLength) {
                                return substr($str, 0, $maxLength) . "...";
                            } else {
                                return $str;
                            }
                        }
                        $count = mysqli_num_rows($res_articles);
                        if ($count>0){
                            while($row_articles = mysqli_fetch_assoc($res_articles)){
                                $article_id = $row_articles['article_id'];
                                $article_link = $row_articles['article_link'];
                                $article_title = $row_articles['article_title'];
                                $article_pic = $row_articles['article_image'];
                                //                                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                                //                                $fallback_blog_pic = $image['src'];
                                $maxLength = 50;
                                $truncatedTitle = truncateTitle($article_title, $maxLength);
                                ?>

                                <div class="col-lg text-light p-5" style="border-left: 9px solid <?php echo $bg_color ?>; overflow: hidden;">
                                    <div class="col-12 rounded-5 shift" style="background-image: url('https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 40vh; width: 100%;"></div>

                                    <a href="<?php echo $article_link ?>"><p class="shift text_hover" style="font-size: 3vh; font-family: <?php echo $row_fonts['font_1'] ?>; color:<?php echo $text_color ?>"><?php echo $truncatedTitle ?></p></a>

                                </div>
                            <?php }}?>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="py-5 text-center">
                        <a href="<?php echo $featured_article_url ?>" style="color: <?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" ><button type="button" class="btn btn-lg btn-light btn-rounded shadow-0" style="min-width: 15vh; background-color:<?php echo $text_color ?>; color:<?php echo $bg_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>">View articles</button></a>
                    </div>

                </div>
            <?php }?>
<!--featured article section end-->
<!--gallery section start-->
            <?php if ($row_user_details['gallery_summary'] == 1){?>
            <div style="background-color:<?php echo $bg_color; ?>">
                <div class="position-relative" style="min-height: 100vh;">

                    <div class="position-absolute top-0 end-0">
                        <img  data-lag="0.5" src="lp_designs/img/element2.svg" class="img-fluid" style="height: 30vh;" alt="" srcset="">
                    </div>
                    <hr>

                    <h1 style="color:<?php echo $text_color ?>; padding-left: 10vw; padding-top: 5vh; font-family:<?php echo $row_fonts['font_1'] ?>"><span><?php echo $row_user_info['custom_gallery_name'] ?></span></h1>
                    <div class="container">
                        <p class="fw-light text-start ls-wider" style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['gallery_description'] ?></p>
                    </div>

                    <div class="row lightbox">
                        <div class="col-lg-1"></div>
                        <?php
                        $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 3";
                        $res_gallery = mysqli_query($link, $query_gallery);
                        while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                            $pic_url = $row_gallery['file_name'];
                            $pic_title = $row_gallery['title'];
                            $pic_description = $row_gallery['description'];
                        ?>

                        <div class="col-lg" style="overflow: hidden;">
                            <img class="shift my-3 rounded-4" style="height: 50vh; width: 100%; object-fit:cover; object-position: 50% 0%;" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';" alt="<?php echo $pic_title ?>" srcset="">
                        </div>
                        <?php  }?>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="py-5 text-center">
                        <a href="<?php echo $gallery_url ?>"><button type="button" class="btn btn-lg btn-light btn-rounded shadow-0" style="min-width: 15vh; background-color:<?php echo $text_color ?>; color:<?php echo $bg_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>">View Gallery</button></a>
                    </div>
                    <div class="position-absolute bottom-0 start-0">
                        <img  data-lag="0.5" src="lp_designs/img/element3.svg" class="img-fluid" style="height: 25vh;" alt="" srcset="">
                    </div>
                </div>
            </div>
            <?php }?>
<!--            gallery section end-->

<?php
include 'footer/'.$row_user_info["footer_type"].'.php';
?>

        </div>
    </div></div>






<!-- End -->
<!-- MDB -->
<!--<script type="text/javascript" src="../js/mdb.min.js"></script>-->
<script src='https://wooble.org/gsap/minified/gsap.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollToPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/SplitText.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollTrigger.min.js'></script>
<script src='https://wooble.org/gsap/minified/MotionPathPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollSmoother.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    gsap.from("#KS",{
        rotation:720,
        scrollTrigger: {trigger: "#KS",start: "top 100%",end: "bottom",markers:false,scrub : true,
        }
    })
    // Mouse position
    let mouseX, mouseY;
    document.addEventListener("mousemove", e => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        // Add GSAP Effect
        gsap.to(".img_container", {
            // The '30' value bellow corresponds to the effect power, change it as you want
            y: (mouseX / window.innerWidth - 0.5) * 60,
            x: (mouseY / window.innerHeight - 0.5) * 60,
            delay: 0.1,
            ease: "power2.out",
            overwrite: "auto"
        });
    });

    let mouseK, mouseS;
    document.addEventListener("mousemove", e => {
        mouseK = e.clientX;
        mouseS = e.clientY;
        // Add GSAP Effect
        gsap.to("#KS", {
            // The '30' value bellow corresponds to the effect power, change it as you want
            x: (mouseK / window.innerWidth - 0.5) * 30,
            y: (mouseS / window.innerHeight - 0.5) * 30,
            delay: 0.2,
            ease: "power2.out",
            overwrite: "auto"
        });
    });
</script>

<script>

    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
        smoothTouch:0.1,effects:true
    })

    gsap.from(".text",{
        onStart:function(){
            $('.text').textillate({ in: { effect: 'bounceInDown' } });
        }
    })
    gsap.from(".text2",{
        onStart:function(){
            $('.text2').textillate({ in: { effect: 'fadeInRightBig' } });
        }
    })
    var sections = gsap.utils.toArray('.anim');
    sections.forEach((section) => {
        gsap.to(section, {
            y:"50%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
            }
        });
    })
    var sections = gsap.utils.toArray('.shift');
    sections.forEach((section) => {
        gsap.to(section, {
            x:"-100%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers:false,
            }
        });
    })
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
        gsap.from(".gallery",{
            y:"-20%",
            scrollTrigger: {trigger: ".gallery",start: "top 70%",end: "bottom 70%",scrub : 2,
            }
        })
    });

    mm.add("(max-width: 799px)", () => {
        gsap.from(".gallery",{
            y:"-20%",
            scrollTrigger: {trigger: ".gallery",start: "top 130%",end: "bottom 130%",scrub : 2,
            }
        })
    });

</script>

<!-- video Modal start -->

<?php
    if($row_user_info['video_resume_active']){
?>
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true" data-mdb-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:<?php echo $bg_color; ?>;">
            <div class="modal-header border-bottom-0" style="background-color: <?php echo $bg_color; ?>; color: <?php $text_color?>;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: <?php echo $text_color ?>">Video resume</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal" aria-label="Close" style="background-color: transparent;">
                    <i class="fas fa-xmark fa-lg" style="color: <?php echo $text_color?>;"></i>
                </button>
            </div>

            <div class="modal-body">
                <?php
                $query_video_resume = "SELECT * FROM `resume` WHERE `file_type`='mp4' AND `status`=1 AND `email`='$email_id'";
                $res_video_resume = mysqli_query($link, $query_video_resume);
                $row_resume = mysqli_fetch_assoc($res_video_resume);
                ?>
                <center>
                    <embed style="border-radius:30px; object-fit:cover" src="https://app.wooble.org/home/video_files/<?php echo $row_resume['content'] ?>" height="550"></embed>
                </center>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<!-- video Modal end -->


<script>
    const myModalEl = document.getElementById('exampleModal')
    myModalEl.addEventListener('hidden.mdb.modal', (e) => {
        console.log("Modal Hidden");
    })


</script>


</body>
</html>