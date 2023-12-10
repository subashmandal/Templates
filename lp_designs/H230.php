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

<?php
//$bg_color  = "linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "#19b88f";
//$secondary_color = "#2f3239";
//$text_color = "#000000";
//$font_family1 = $row_fonts['font_1'];
//$font_family2 = $row_fonts['font_2'];
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
    $font_family1 = $row_fonts['font_1'];
    $font_family2 = $row_fonts['font_2'];
    ?>

<!--    --><?php
//    $seo_img = $row_user_info['seo_img'];
//    $og_image = "https://app.wooble.org/home/images/".$seo_img;
//    list($width, $height, $type, $attr) = getimagesize($og_image);
//    ?>
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
        @import url('https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;600;700;800;900&display=swap');
        .btn_hover:hover{
            background: <?php echo $secondary_color ?> !important;
            color: <?php echo $text_color?> !important;
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
<body style="user-select: none;">
<!-- Start -->
<!--header start-->
<?php include 'header/'.$row_user_info["header_type"].'.php'; ?>
<!--header end-->
<div class="container-fluid" style="background: <?php echo $bg_color?>;">

<?php
if($row_user_info['video_resume_active']){
    ?>

    <button data-mdb-toggle="modal" data-mdb-target="#videoModal" class="btn btn-floating text-white btn-lg" style="background: <?php echo $text_color ?>; position:fixed; bottom:20px; right: 30px; z-index: 999999">
        <i style="color:<?php echo $bg_color?>" class="fas fa-play"></i>
    </button>
<?php } ?>

<!--1st section start-->
<div class="container py-lg-5 py-5">

    <div class="row flex-sm-row flex-column-reverse" style="border: 1px solid <?php echo $secondary_color ?>;">
        <div class="col-lg-6 col-12 g-0 d-flex align-items-center">
            <div class="my-lg-5 my-3 mx-lg-3 mx-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left">
                <div class="text-uppercase fw-bolder my-3" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1?>; font-size: xx-large;"><?php echo $row_user_info['field_1'] ?></div>
                <div class="text-uppercase fw-bold my-5" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1?>; font-size: xxx-large"><?php echo $row_user_info['field_2'] ?></div>
<!--                social media links start-->
                <div class="d-flex ">
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
                        <a target="_blank" class="btn shadow-0 rounded-0 m-1" style="color: <?php echo $text_color?>; border: 1px solid <?php echo $text_color ?>;" href="<?php echo $link1; ?>" role="button">
                        <i class="fab fa-<?php echo $first ?> fa-2x"></i>
                    </a>
                    <?php }?>
                </div>
<!--                social media links end-->
            </div>
        </div>
        <div class="col-lg-6 col-12 g-0 lightbox" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
                <img data-mdb-caption="<?php echo $row_user_info['field_1'] ?>" src="https://app.wooble.org/hero_img/<?php echo $row_user_info['hero_img'] ?>"
                     data-mdb-img="https://app.wooble.org/hero_img/<?php echo $row_user_info['hero_img'] ?>"
                     onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                     alt="<?php echo $row_user_info['field_1'] ?>"
                     class="w-100" style="height: 400px; object-fit: cover; "/>
        </div>
    </div>
</div>
<!--1st section end-->
<!--about me section start-->
<div class="container my-lg-5 my-3" style="border: 1px solid <?php echo $secondary_color ?>">
    <div class="mt-lg-5 mt-3 mx-lg-3 pt-lg-5 pt-3">
        <div class="text-capitalize fw-bolder fs-1" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>">About me</div>
    </div>

    <div class="row pt-lg-3 pt-3 mt-lg-3 mt-3" >
        <?php $image_new = "https://app.wooble.org/home/images/".$row_user_info['dp'] ?>
        <div style="background-image:<?php echo $image_new ?>" class="col-lg-6 col-12 g-0 lightbox" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left">
                <img data-mdb-caption="<?php echo $row_user_info['field_1'] ?>" src="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>"
                     data-mdb-img="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>"
                     onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                     alt="<?php echo $row_user_info['field_1'] ?> image"
                     class="w-100" style="height: 60vh; object-fit: cover; "/>
        </div>
        <div class="col-lg-6 col-12 g-0 d-flex align-items-center" style="background: <?php echo $primary_color ?>;">
            <div class="my-3 mx-2">
                <div class="mx-lg-4 fs-4 fw-light" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?> " data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
                    <?php echo $row_user_info['field_3']?>
                </div>
                <div class="mx-lg-4 my-5" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
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
                        <a target="_self" href="<?php echo $url ?>" style="color: <?php echo $bg_color?> !important;"><button type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $row_user_info['cta_name'] ?></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--about me section end-->
<!--work section start-->
    <?php if ($row_user_details['work_summary'] == 1){?>
<div class="container mt-lg-5 mt-3">
<div class="fs-2 text-capitalize my-lg-5 mt-5" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color?>">
    <span style="font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_info['custom_work_name'] ?></span><i class="fas fa-arrow-down-long mx-2"></i><span class="fw-lighter fs-4" style="font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_info['work_description'] ?></span>
</div>
    <div class="container">
<div class="lightbox">
        <?php
        $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$email_id' ORDER BY position";
        $res_works = mysqli_query($link, $query_works);
        $work_count = mysqli_num_rows($res_works);
        if ($work_count>0){
            $i=0;
            $work_title = array();
            $work_link = array();
            $work_image = array();
            $clean_work_content = array();
        while($row_works = mysqli_fetch_assoc($res_works)){

        $work_id = $row_works['work_id'];
        $work_title[] = $row_works['work_title'];
        $work_content = $row_works['work_description'];
        $work_link[] = $row_works['canonical_url'];
        $work_cover_pic[] = $row_works['cover_pic'];

        $clean_work_content[] = get_clean_excerpt($work_content);
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_content, $image);
        $work_image[] = $image['src'];

        }
        ?>

            <?php
            if($work_count>3){
                $work_count=3;
            }
            for ($i=0; $i<$work_count; $i++){
            if ($i %2 == 0){ ?>

                <div class="row flex-sm-row flex-column-reverse my-5" style="border: 1px solid <?php echo $secondary_color ?>">
                    <div class="col-lg-5 col-12 g-0 d-flex align-items-center">
                        <div class="mx-lg-4 mx-3 my-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                            <h1 class="text-capitalize" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>"><?php echo $work_title[$i]?></h1>
                            <p class="opacity-75 my-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $clean_work_content[$i] ?>...</p>
                            <div class="mt-5">
                                <button onclick="window.open('work/<?php echo $work_link[$i]?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 g-0" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                        <img data-mdb-caption="<?php echo $work_title[$i]?>" src="<?php echo $work_image[$i] ?>"
                             data-mdb-img="<?php echo $work_image[$i] ?>"
                             onerror="this.src = 'https://app.wooble.org/work/upload/<?php echo $work_cover_pic[$i] ?>';"
                             alt="<?php echo $work_title[$i]?>"
                             class="w-100" style="height: 400px; object-fit: cover; "/>
                    </div>
                </div>

                <?php } else{ ?>

                <div class="row my-5" style="border: 1px solid <?php echo $secondary_color ?>">

                    <div class="col-lg-7 col-12 g-0" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                        <img data-mdb-caption="<?php echo $work_title[$i] ?>" src="<?php echo $work_image[$i] ?>"
                             data-mdb-img="<?php echo $work_image[$i] ?>"
                             onerror="this.src = 'https://app.wooble.org/work/upload/<?php echo $work_cover_pic[$i] ?>';"
                             alt="<?php echo $work_title[$i] ?>"
                             class="w-100" style="height: 400px; object-fit: cover; "/>
                    </div>

                    <div class="col-lg-5 col-12 g-0 d-flex align-items-center">
                        <div class="mx-lg-4 mx-3 my-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                            <h1 class="text-capitalize" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>"><?php echo $work_title[$i] ?></h1>
                            <p class="opacity-75 my-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $clean_work_content[$i] ?>...</p>
                            <div class="mt-5">
                                <button onclick="window.open('work/<?php echo $work_link[$i]?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                    <?php }} ?>

<?php }?>
</div>

        <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
            <button onclick="window.open('<?php echo $works_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>">Read All</button>
        </div>

    </div>
</div>
    <?php }?>
<!--work section end-->


<!--media focus start-->
    <?php if ($row_user_details['article_summary'] == 1){?>
    <div class="container my-5">
        <div class="fs-2 text-capitalize mt-lg-5 mt-3" style="color: <?php echo $text_color?>">
            <span style="font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_featured_article_name']?></span><i class="fas fa-arrow-down-long mx-2"></i>
        </div>
        <div class="p-lg-5 p-3" style="background: <?php echo $primary_color ?>">
            <i class="fas fa-quote-right fa-6x" style="color: <?php echo $text_color?>"></i>
            <div class="lightbox">
            <?php
            $query_article = "SELECT * FROM `articles_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 2";
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


                <div class="row">
                    <div class="col-lg-6 p-lg-5 p-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                            <img data-mdb-caption="<?php echo $article_title?>" src="https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>"
                                 data-mdb-img="https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>"
                                 onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                                 alt="<?php echo $article_title?>"
                                 class="w-100" style="height: 250px; object-fit: cover; "/>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <div data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                            <h1 onclick="window.open('<?php echo $article_link ?>','_self')" class="my-3" style="color: <?php echo $text_color?>; font-size: xxx-large; font-family: <?php echo $font_family1 ?>; font-weight: bold; cursor: pointer;"><?php echo $truncatedTitle?></h1>
                            <p class="my-3" style="color: <?php echo $text_color?>; font-size: xx-large; font-family: <?php echo $font_family2 ?>; font-weight: lighter; text-transform: capitalize;"><?php echo $row_user_details['field_1']?></p>
                            <a class="" href="<?php echo $article_link ?>" target="_self" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $text_color?>"><u>Media Link <i class="fas fa-link"></i></u></a>
                        </div>
                    </div>

                </div>
            <?php }}?>
            </div>

            <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
                <button onclick="window.open('<?php echo $feature_article_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read All</button>
            </div>

        </div>
    </div>
<?php }?>
<!--media focus end-->
<!--blog section start-->
    <?php if ($row_user_details['blog_summary'] == 1){?>
<div class="container py-5">
    <div class="fs-2 text-capitalize mt-lg-5 mt-3" style="color: <?php echo $text_color?>">
        <span style="font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_blog_name']?></span><i class="fas fa-arrow-down-long mx-2"></i><span class="fw-lighter fs-4" style="font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['blog_description']?></span>
    </div>
<div class="lightbox">
    <?php
    $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created` DESC LIMIT 2";
    $res_blogs = mysqli_query($link, $query_blogs);
    while($row_blogs = mysqli_fetch_assoc($res_blogs)){
    $blog_title = $row_blogs['title'];
    $blog_content = $row_blogs['content'];
    $clean_blog_content = get_clean_excerpt($row_blogs['content']);
    $originalDate = $row_blogs['time_created'];
    $newDate = date("F, d, Y", strtotime($originalDate));
    $blog_link = $row_blogs['canonical_url'];
    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
    $post_image = $image['src'];
    ?>

    <div class="row my-5" style="border: 1px solid <?php echo $secondary_color ?>">
        <div class="col-lg-7 col-12 g-0" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                <img data-mdb-caption="<?php echo $blog_title ?>" src="<?php echo $post_image ?>"
                     data-mdb-img="<?php echo $post_image ?>" alt="<?php echo $blog_title ?>"
                     onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                     class="w-100" style="height: 400px; object-fit: cover; " />
        </div>

        <div class="col-lg-5 col-12 g-0 d-flex align-items-center">
            <div class="mx-lg-4 mx-3 my-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                <p style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; text-transform: capitalize;"><?php echo $newDate?></p>
                <h1 onclick="window.open('blog/<?php echo $blog_link ?>','_self')" class="text-capitalize" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>; font-weight: lighter; cursor: pointer;"><?php echo $blog_title ?></h1>
                <p class="opacity-75 my-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $clean_blog_content ?></p>
                <div class="mt-3">
                    <button onclick="window.open('blog/<?php echo $blog_link ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read More</button>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>

    <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
        <button onclick="window.open('<?php echo $blogs_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read All</button>
    </div>

</div>
    <?php }?>
    <!--blog section end-->
    <!-- gallery section start-->
    <?php if ($row_user_details['gallery_summary'] == 1){?>
    <div class="container py-5">
        <div class="fs-2 text-capitalize mt-lg-3 mt-3" style="color: <?php echo $text_color?>">
            <span style="font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_gallery_name'] ?></span><i class="fas fa-arrow-down-long mx-2"></i><span class="fw-lighter fs-4" style="font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['gallery_description'] ?></span>
        </div>
        <div class="lightbox">
            <div class="row my-5 d-flex justify-content-center">

                <?php
                $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 6";
                $res_gallery = mysqli_query($link, $query_gallery);
                while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                $pic_url = $row_gallery['file_name'];
                $pic_title = $row_gallery['title'];
                $pic_description = $row_gallery['description'];
                ?>

                <div class="col-lg-4 g-0 p-2" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in">
                    <img data-mdb-caption="<?php echo $pic_title?>" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>"
                         data-mdb-img="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>"
                         onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                         alt="<?php echo $pic_title?>"
                         class="w-100 hover-shadow" style="height: 400px; object-fit: cover; "/>
                    <div class="text-center">
                        <small class="text-truncate d-inline-block" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; max-width: 90%"><?php echo $pic_title?></small>
                    </div>
                </div>

                <?php }?>

            </div>
        </div>

        <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
            <button onclick="window.open('<?php echo $gallery_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">view All</button>
        </div>

    </div>
    <?php }?>
    <!--gallery section end-->
</div>

<!--footer section start-->
<?php
include 'footer/'.$row_user_info["footer_type"].'.php';
?>
<!--footer section end-->


<!-- End -->
<!-- MDB -->
<!--<script type="text/javascript" src="../js/mdb.min.js"></script>-->

<!-- video Modal start -->

<?php
if($row_user_info['video_resume_active']){
    ?>
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true" data-mdb-backdrop="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background:<?php echo $bg_color; ?>;">
                <div class="modal-header border-bottom-0" style="background: <?php echo $bg_color; ?>; color: <?php $text_color?>;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: <?php echo $text_color ?>">Video resume</h5>
                    <button type="button" class="btn shadow-0" data-mdb-dismiss="modal" aria-label="Close" style="background: transparent;">
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