<?php
function get_clean_excerpt($string)
{

    $excerpt_string = get_excerpt($string);
    $excerpt_string = str_replace(' ', '-', $excerpt_string); // Replaces all spaces with hyphens.
    $excerpt_string = preg_replace('/[^A-Za-z0-9\-]/', '', $excerpt_string); // Removes special chars.
    return str_replace('-', ' ', $excerpt_string);
}

function get_excerpt($content, $length = 30, $more = '...')
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
<?php
$query = "SELECT * FROM `user_details` WHERE `email` = '$email_id'";
$res_query = mysqli_query($link, $query);
$row_user_details = mysqli_fetch_assoc($res_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1'] ?> portfolio</title>

    <meta name="description" content="<?php echo $row_user_info['seo_description']; ?>">
    <meta name="keywords" content="<?php echo $row_user_info['seo_keywords']; ?>">
    <meta name="author" content="<?php echo $row_user_info['field_1']; ?>">

    <meta property="og:image" content="<?php echo $og_image ?>">
    <meta property="og:image:width" content="<?php echo $width ?>">
    <meta property="og:image:height" content="<?php echo $height ?>">

    <!-- Wooble icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
    <!-- Google Fonts poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .title_hover:hover{
            color: <?php echo $secondary_color ?> !important;
        }
        .glassism{
            background: rgba(200, 200, 200, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
        }
        @media (max-width:1440px) {
            nav{
                min-width: 40% !important;
            }
            .hello{
                font-size:8rem !important;
            }
        }
        @media (max-width:2240px) {
            nav{
                min-width: 25% !important;
            }
            .hello{
                font-size:8rem !important;
            }
        }
        @media (max-width:850px) {
            nav{
                min-width: 75% !important;
            }
            .hello{
                font-size:8rem !important;
            }
            .blog_img .img{
                height: 50vh !important;
            }
        }
        @media (max-width:600px) {
            nav{
                min-width: 75%;
            }
            .hello{
                font-size:xx-large !important;
            }
            .featured, .recent, .featured2{
                font-size: 10vw !important;
            }
            .works, .photos, .blogs{
                font-size: 5vw !important;
            }
            .blog_img .img{
                height: 50vh !important;
            }
        }
        .work_img .img{
            cursor: pointer;
        }
        .blog_img .img{
            cursor: pointer;
        }
        .lightbox img{
            transition: 2s;
        }
        .lightbox img:hover{
            box-shadow: 0px -1px 10px 0px rgba(255,255,255,1);
            transform: scale(1.05);
        }
        section .btn{
            transition: 0.5s;
        }
        section .btn:hover{
            transform: translateY(-15px) !important;
        }
        .title {
            font-weight: 600;
            display: flex;
        }
        .next::before {
            content: "";
            background-color: rgba(160, 52, 50, 1);
            opacity: 1;
            height: 4px;
            width: 80%;
            margin-top: 20px;
            margin-right: 1rem;
        }
    </style>
</head>
<?php
$home_url = "https://wooble.org/".$row_user_info['username'];
$gallery_url = "https://wooble.org/gallery/".$row_user_info['username'];
$works_url = "https://wooble.org/works/".$row_user_info['username'];
$blogs_url = "https://wooble.org/blogs/".$row_user_info['username'];
$feature_article_url = "https://wooble.org/featured-articles/".$row_user_info['username'];
$resume_url = "https://wooble.org/my_resume/".$row_user_info['username'];
?>
<?php
$font_combo_id = $row_user_info['font_id'];
$query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
$res_fonts = mysqli_query($link, $query_fonts);
$row_fonts = mysqli_fetch_assoc($res_fonts);
echo $row_fonts['font_1_link'];
echo $row_fonts['font_2_link'];
$font_family1 = $row_fonts['font_1'];
$font_family2 = $row_fonts['font_2'];
?>
<body style="overflow-x:hidden !important; background: <?php echo $bg_color?>;">
<!--header start-->
<?php include 'header/'.$row_user_info["header_type"].'.php'; ?>
<!--header end-->
<div id="smooth-wrapper" style="overflow-x: hidden!important;">
    <div id="smooth-content" style="overflow-x: hidden!important;">
        <!-- Start your project here-->
        <!-- main section start -->
        <div class="container-fluid g-0" style="font-family: 'Poppins', sans-serif;">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-lg-6">
                    <div class="container g-5">
                        <p class="text-uppercase fw-bold hello" style="font-family: <?php echo $font_family2 ?>;  font-size: 20rem; color: <?php echo $secondary_color ?>;
                    margin-top: 10%;">hello</p>
                        <h1 class="text-capitalize fw-bold name" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>; ">i'm</h1>
                        <div class="name"><span class="text-capitalize fs-1 fw-bold" style="color: <?php echo $text_color ?>; text-underline-offset: 0.5em; font-family: <?php echo $font_family1 ?> "><?php echo $row_user_info['field_1'] ?></span></div>
                        <hr class="name" style="position: relative; border: none; height: 5px; background: <?php echo $secondary_color ?>; opacity: 1; width: 5vw;">
                        <p class="text-capitalize fs-1 fw-lighter designation" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?> ; line-height: 100%;"><?php echo $row_user_info['field_2'] ?></p><br>
                        <p class="text-capitalize fs-4 fw-light mb-5 about" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>; "><?php echo $row_user_info['field_3'] ?></p>
                        <!--Cta start-->
                        <div>
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
                            <a class="title_hover about" target="_self" href="<?php echo $url ?>" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; text-decoration: underline;"><?php echo $row_user_info['cta_name'] ?></a>
                        </div>
                        <!--cta end-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shadow-1-strong mb-4 profile_img" style="background-image:url('https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-position-x: center; background-position-y: top; background-size: cover; height: 60vh; width: 100%; border-bottom-left-radius: 50px;">
                    </div>
                    <!--social media links start-->
                    <div class="d-flex justify-content-lg-end justify-content-center my-lg-5 my-3">
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

//                    $path =$parse['path'];
//                    $path = str_ireplace('www.', '', $path);
//                    $second = strtok($path, '.');
                            ?>
                            <!-- social links -->
                            <a target="_blank" class="btn shadow-0 rounded-0 m-1 btn-sm social" style="color: <?php echo $text_color?>; background: <?php echo $primary_color?>; clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);" href="<?php echo $link1; ?>" role="button">
                                <i class="fab fa-<?php echo $first ?> fa-2x title_hover" style="z-index: 10;"></i>
                            </a>
                        <?php }?>
                    </div>
                    <!--social media links end-->
                </div>
            </div>
        </div>
        <!-- main section end -->
        <!-- work section start-->
        <?php if ($row_user_details['work_summary'] == 1){?>
        <div class="container-fluid g-0 mt-5" style="background: <?php echo $primary_color ?>">
            <div class="row" style="font-family: 'Poppins', sans-serif;">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span class="text-capitalize fw-bold featured opacity-35" style="font-family: <?php echo $font_family2 ?>; font-size: 10rem; color: <?php echo $secondary_color ?>;
                    ">featured</span>
                    <span class="position-absolute text-capitalize fw-bold works" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_info['custom_work_name'] ?></span>
                </div>
                <div class="container mt-lg-0 mt-5">
                    <div class="d-flex align-items-center justify-content-center px-3" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;">
                        <span style="font-size: large;"><?php echo $row_user_info['work_description'] ?></span>
                    </div>
                </div>
                <div class="container-fluid g-5">
                    <div class="row work_img">
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
                        <div class="col-lg-4 py-3 skew_anim">
                            <div class="img img-fluid rounded-6 mb-3 position-relative" style="background-image:url('<?php echo $work_image ?>'), url('https://app.wooble.org/work/upload/<?php echo $work_cover_pic ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%; background-position-x: center; background-position-y: top;">
                                <div class="position-absolute bottom-0 text-start w-100" style="min-height: 15%; background: linear-gradient(0deg, <?php echo $bg_color ?> 20%, rgba(0,0,0,0) 100%); border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                    <p onclick="window.open('https://app.wooble.org/work/<?php echo $work_link ?>', '_self')" class="text-capitalize fw-bold mx-3 mb-4 lh-sm title_hover" style="font-size: large; color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $work_title ?></p>
                                    <p class="text-capitalize mx-3" style="font-size: smaller; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $clean_work_content ?>...</p>
                                </div>
                            </div>
                        </div>
                        <?php }}?>

                    </div>

                    <div class="text-center">
                        <p onclick="window.open('<?php echo $works_url ?>', '_self')" class="text-capitalize text-decoration-underline fs-4 my-5 title_hover d-inline-block" style="text-underline-offset: 8px; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>; cursor: pointer;">view all</p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- work section end -->
        <!-- gallery section start -->
        <?php if ($row_user_details['gallery_summary'] == 1){?>

        <div class="row" style="font-family: 'Poppins', sans-serif;">
            <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold recent opacity-35" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $secondary_color ?>; font-size: 10rem; ">recent</span>
                <span class="position-absolute text-capitalize fw-bold photos" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_details['custom_gallery_name'] ?></span>
            </div>
            <div class="container mt-lg-0 mt-5">
                <div class="d-flex align-items-center justify-content-center px-3" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;">
                    <span style="font-size: large;"><?php echo $row_user_info['gallery_description'] ?></span>
                </div>
            </div>
        </div>

        <div class="container-fluid g-0 mt-5">
            <div class="row lightbox">
                <?php
                $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 6";
                $res_gallery = mysqli_query($link, $query_gallery);
                while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                $pic_url = $row_gallery['file_name'];
                $pic_title = $row_gallery['title'];
                $pic_description = $row_gallery['description'];
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 skew_anim">
                    <img src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp'" class="img-fluid rounded-9 w-100" alt="<?php echo $pic_title ?>" style="height: 45vh; object-fit: cover;">
                </div>
                <?php }?>
            </div>
            <div class="text-center">
                <p onclick="window.open('<?php echo $gallery_url ?>', '_self')" class="d-inline-block text-capitalize text-decoration-underline fs-4 my-5 title_hover" style=" text-underline-offset: 8px; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>; cursor: pointer;">view all</p>
            </div>
        </div>
        <?php }?>
        <!-- gallery section end -->
        <!-- blog section start -->
        <?php if ($row_user_details['blog_summary'] == 1){?>
        <div class="container-fluid " style="background: <?php echo $primary_color ?>">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold featured2 opacity-35" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $secondary_color ?>; font-size: 10rem;
                    ">featured</span>
                <span class="position-absolute text-capitalize fw-bold blogs" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_details['custom_blog_name']?></span>
            </div>
            <div class="container mt-lg-0 mt-5">
                <div class="d-flex align-items-center justify-content-center px-3" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;">
                    <span style="font-size: large;"><?php echo $row_user_info['blog_description'] ?></span>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 mt-5">
            <div class="row blog_img">
                <?php
                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created` DESC LIMIT 6";
                $res_blogs = mysqli_query($link, $query_blogs);
                while($row_blogs = mysqli_fetch_assoc($res_blogs)){
                $blog_title = $row_blogs['title'];
                $blog_content = $row_blogs['content'];
                $blog_cover_pic = $row_blogs['cover_image'];
                $clean_blog_content = get_clean_excerpt($row_blogs['content']);
                $originalDate = $row_blogs['time_created'];
                $newDate = date("F, d, Y", strtotime($originalDate));
                $blog_link = $row_blogs['canonical_url'];
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                $post_image = $image['src'];
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 position-relative skew_anim">
                    <div class="img img-fluid rounded-9 mb-3 position-relative" style="background-image:url('<?php echo $post_image ?>'), url('https://app.wooble.org/blogs/upload/<?php echo $blog_cover_pic ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%; background-position-x: center; background-position-y: top;">
                        <div class="position-absolute bottom-0 text-start w-100" style="min-height: 15%; background: linear-gradient(0deg, <?php echo $bg_color ?> 20%, rgba(0,0,0,0) 100%); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                            <p onclick="window.open('../blog/<?php echo $blog_link ?>','_self')" class="text-capitalize fw-bold mx-3 mb-4 lh-sm title_hover" style="font-size: large; color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $blog_title ?></p>
                            <p class="text-capitalize mx-3 mb-1 ls-widest" style="font-size: small; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $clean_blog_content ?>...</p>
                            <div class="mx-3 mb-2" style="color: <?php echo $text_color ?>;"><span class="fw-bold" style="font-family: <?php echo $font_family1 ?>; font-size: small;">Published on: </span><span style="font-size: small; font-family: <?php echo $font_family2 ?>;"><?php echo $newDate ?></span></div>
                        </div>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>
        <div class="text-center">
            <p onclick="window.open('<?php echo $blogs_url ?>', '_self')" class="d-inline-block text-capitalize text-decoration-underline fs-4 my-5 title_hover" style="text-underline-offset: 8px; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>; cursor: pointer;">view all</p>
        </div>
        </div>
        <?php }?>
        <!-- blog section end -->
        <!--feature article start-->
        <?php if ($row_user_details['article_summary'] == 1){?>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold featured2 opacity-35" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $secondary_color ?>; font-size: 10rem;
                    ">featured</span>
                    <span class="position-absolute text-capitalize fw-bold blogs" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_details['custom_featured_article_name']?></span>
                </div>
            </div>
            <div class="container-fluid mt-5 g-0">
                <div class="row blog_img">
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
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                        $fallback_blog_pic = $image['src'];
                        $maxLength = 50;
                        $truncatedTitle = truncateTitle($article_title, $maxLength);
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-3 position-relative skew_anim">
                            <div class="img img-fluid rounded-9 mb-3 position-relative" style="background-image:url('https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%; background-position-x: center; background-position-y: top;">
                                <div class="position-absolute bottom-0 text-start w-100" style="min-height: 15%; background: linear-gradient(0deg, <?php echo $primary_color ?> 20%, rgba(0,0,0,0) 100%); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                    <p onclick="window.open('<?php echo $article_link ?>','_self')" class="text-capitalize fw-bold mx-3 mb-3 lh-sm title_hover" style="font-size: medium; color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $truncatedTitle?></p>
                                    <a class="title_hover mx-3 mb-3" href="<?php echo $article_link ?>" target="_self" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $text_color?>"><u>Media Link <i class="fas fa-link"></i></u></a>
                                </div>
                            </div>
                        </div>
                    <?php }}?>

                </div>
            </div>
            <div class="text-center">
                <p onclick="window.open('<?php echo $feature_article_url ?>', '_self')" class="d-inline-block text-capitalize text-decoration-underline fs-4 my-5 title_hover" style="text-underline-offset: 8px; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>; cursor: pointer;">view all</p>
            </div>
        <?php }?>
        <!--feature article end-->
        <!-- footer code start -->
        <?php
        include 'footer/'.$row_user_info["footer_type"].'.php';
        ?>
        <!-- footer code end -->
        <!-- End your project here-->
    </div>
</div>
<!-- MDB -->
<!--<script type="text/javascript" src="../../js/mdb.min.js"></script>-->
<!-- Gsap -->
<script src="https://wooble.org/gsap/minified/gsap.min.js"></script>
<script src="https://wooble.org/gsap/minified/ScrollTrigger.min.js"></script>
<script src="https://wooble.org/gsap/minified/ScrollSmoother.min.js"></script>
<script src="https://wooble.org/gsap/minified/SplitText.min.js"></script>
<!-- gsap Script -->
<script>
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, gsap);
    // text animation
    $('.hello').each(function(){
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='_text3'>$&</span>"));
    });
    var $text5 = $(".hello span"),
        tl_5 = new TimelineMax({repeat:0});

    tl_5.staggerFrom($text5, 0.5, {alpha: 0, x: 40, ease: Power1.easeOut}, 0.2,'+=1.2');
    // text animation end

    gsap.from(".profile_img", {x: "100%",y:"-100%", ease: "power2.out", duration: 2});

    gsap.from(".featured", {scale: 0,y:"-50%", duration: 5, scrollTrigger: {trigger: ".featured",start: "top 100%",end: "+=60%", markers:false, scrub : true,}});

    gsap.from(".recent", {scale: 0,y:"-50%", duration: 5, scrollTrigger: {trigger: ".recent",start: "top 100%",end: "+=60%", markers:false, scrub : true,}});

    gsap.from(".featured2", {scale: 0,y:"-50%", duration: 5, scrollTrigger: {trigger: ".featured2",start: "top 100%",end: "+=60%", markers:false, scrub : true,}});

    gsap.from(".works", {opacity: 0, scrollTrigger: {trigger: ".works",start: "top 100%",end: "+=60%", markers:false, scrub : true,}})

    gsap.from(".photos", {opacity: 0, scrollTrigger: {trigger: ".photos",start: "top 100%",end: "+=60%", markers:false, scrub : true,}})

    gsap.from(".blogs", {opacity: 0, scrollTrigger: {trigger: ".blogs",start: "top 100%",end: "+=60%", markers:false, scrub : true,}})

    gsap.from(".name", {x: "-100%",opacity:0, duration: 2, delay: 0.8});

    gsap.from(".social", {x: "100%",opacity:0, duration: 2, delay: 0.8});

    gsap.from(".designation", {x: "-100%",opacity:0, duration: 2, delay: 1.2});

    gsap.from(".about", {x: "-100%",opacity:0, duration: 2, delay: 1.5});

    var sections = gsap.utils.toArray('.skew_anim');
    sections.forEach((section) => {
        gsap.to(section, {skewX:"10", scale:0.8,
            scrollTrigger: {
                trigger: section,
                start: 'top 0%',
                scrub: 2,
                end: 'bottom 0%',
                markers: false,
            }
        });
    })


    // function animateFrom(elem, direction) {
    //     direction = direction || 1;
    //     var x = 0,
    //         y = direction * 100;
    //     if(elem.classList.contains("work_details")) {
    //         x = 0;
    //         y = "50%";
    //     } else if (elem.classList.contains("photo")) {
    //         x = 100;
    //         y = 0;
    //     }
    //     else if (elem.classList.contains("blog")) {
    //         x = -100;
    //         y = 0;
    //     }
    //     elem.style.transform = "translate(" + x + "px, " + y + "px)";
    //     elem.style.opacity = "0";
    //     gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
    //         duration: 1.25,
    //         x: 0,
    //         y: 0,
    //         autoAlpha: 1,
    //         ease: "expo",
    //         overwrite: "auto"
    //     });
    // }

    function hide(elem) {
        gsap.set(elem, {autoAlpha: 0});
    }

    document.addEventListener("DOMContentLoaded", function() {
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
            hide(elem);

            ScrollTrigger.create({
                trigger: elem,
                markers: false,
                onEnter: function() { animateFrom(elem) },
                onEnterBack: function() { animateFrom(elem, -1) },
                onLeave: function() { hide(elem) }
            });
        });
    });
</script>

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
    })
</script>
</body>
</html>