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
$font_combo_id = $row_user_info['font_id'];
$query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
$res_fonts = mysqli_query($link, $query_fonts);
$row_fonts = mysqli_fetch_assoc($res_fonts);
echo $row_fonts['font_1_link'];
echo $row_fonts['font_2_link'];
$font_family1 = $row_fonts['font_1'];
$font_family2 = $row_fonts['font_2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1']; ?></title>

    <meta name="description" content="<?php echo $row_user_info['seo_description']; ?>">
    <meta name="keywords" content="<?php echo $row_user_info['seo_keywords']; ?>">
    <meta name="author" content="<?php echo $row_user_info['field_1']; ?>">

    <meta property="og:image" content="<?php echo $og_image ?>">
    <meta property="og:image:width" content="<?php echo $width ?>">
    <meta property="og:image:height" content="<?php echo $height ?>">

    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- ubuntu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
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
        @import url('https://fonts.googleapis.com/css2?family=Aladin&display=swap');

        .text_hover:hover{
            color: <?php echo $bg_color?> !important;
        }
        .link_hover:hover{
            color: <?php echo $secondary_color ?> !important;
            opacity: 70% !important;
        }

        .btn_hover:hover{
            background: <?php echo $secondary_color ?> !important;
            color: <?php echo $bg_color ?> !important;
            border: 1px solid <?php echo $secondary_color ?> !important;
        }
        .row>*
        {
            padding-right: 0;
        }
        .center{
            display: grid;
            place-content: center;
        }
        .bg{
            background-size: cover; background-repeat: no-repeat; background-position: center;
        }
        .hua {
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .hua:after {
            content: '';
            position: absolute;
            width: 70%;
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
        @media (max-width: 768px) {
            #img6{
                height: 50vh !important;
            }
            .responsive_img{
                width: 100% !important;
            }
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
<body style="background-color: <?php echo $bg_color?>;">
<!-- Start -->
<div id="smooth-wrappe">
    <div id="smooth-conten">
        <div style="overflow-x: hidden;">
            <!--header start-->
            <?php include 'header/'.$row_user_info["header_type"].'.php'; ?>
            <!--header end-->
<!--            main section start-->
            <div style="min-height: 100vh; ">
                <div class="container-fluid d-flex align-items-center" style="min-height: 100vh; background: <?php echo $bg_color?>; ">
                    <div class="position-absolute top-0 end-0 text-light ">
                        <img src="https://app.wooble.org/hero_img/<?php echo $row_user_info['hero_img'] ?>"
                             onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                             alt=""
                             style="height: 100vh; width: 100vw; object-fit: cover; opacity: 0.1"/>
                    </div>
                    <div class="row flex-column-reverse flex-sm-row" style="z-index: 1;">
                        <div class="col-lg-6 col-12 px-lg-5 px-1 textAnim">
                               <div class="my-4">
                                   <h1 class="fw-bolder mb-0" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>"><?php echo $row_user_info['field_1']?></h1>
                                   <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                               </div>
                            <h3 class="fw-light" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_info['field_2']?></h3>
                            <p class="mt-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2?>;"><?php echo $row_user_info['field_3']?></p>
                            <!--CTA start-->
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
                                <button onclick="window.open('<?php echo $url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover my-3" style="background: transparent; color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; border: 1px solid <?php echo $text_color?>; z-index:100;"><?php echo $row_user_info['cta_name'] ?></button>
                            </div>
                            <!--CTA end-->
                            <!--social media links start-->
                            <div class="d-flex my-5">
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
                                    <a target="_blank" class="btn shadow-0 rounded-0 m-1 link_hover" style="color: <?php echo $text_color?>;" href="<?php echo $link1; ?>" role="button">
                                        <i class="fab fa-<?php echo $first ?> fa-2x"></i>
                                    </a>
                                <?php }?>
                            </div>
                            <!--social media links end-->
                        </div>
                        <div class="col-lg-6 col-12 lightbox d-flex justify-content-center align-items-center textAnim">
                            <img data-mdb-caption="<?php echo $row_user_info['field_1'] ?>" src="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>"
                                 data-mdb-img="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>"
                                 onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                                 alt="<?php echo $row_user_info['field_1'] ?>"
                                 class="responsive_img px-2"
                                 style="height: 50vh; width: 500px; object-fit: cover; "/>
                        </div>
                    </div>
                </div>
            </div>
<!--main section end-->
<!--Gallery section start-->
            <?php if ($row_user_details['gallery_summary'] == 1){?>
            <div class="bg position-relative overflow-hidden" style="min-height: 100vh; background:<?php echo $primary_color ?> ">

                <div class="text-light ps-5 pt-4 textAn">
                    <h1 style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_gallery_name'] ?></h1>
                    <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                    <p class="textAn" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['gallery_description'] ?></p>
                </div>

                <div class="d-none d-sm-block">
                    <div class="d-flex justify-content-around align-items-center" style="min-height:80vh">
                        <div class="multi-carousel">
                            <div class="multi-carousel-inner d-flex lightbox">
                        <?php
                        $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$email_id' ORDER BY `position`";
                        $res_gallery = mysqli_query($link, $query_gallery);
                        while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                        $pic_url = $row_gallery['file_name'];
                        $pic_title = $row_gallery['title'];
                        $pic_description = $row_gallery['description'];
                        ?>
                        <div id="B1" class="p-5 multi-carousel-item" style="height: 400px; width: 400px; overflow: hidden;">
                            <img  class="para bg" style="height: 400px; width: 400px;" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';" alt="<?php echo $pic_title ?>" srcset="">
                        </div>
                        <?php }?>
                            </div>
                            <button class="carousel-control-prev" type="button" tabindex="0" data-mdb-slide="prev">
                                <span aria-hidden="true" style="color: <?php echo $text_color?>;"><i class="fas fa-caret-left fa-4x"></i></span>
                            </button>
                            <button class="carousel-control-next" type="button" tabindex="0" data-mdb-slide="next">
                                <span aria-hidden="true" style="color: <?php echo $text_color?>;"><i class="fas fa-caret-right fa-4x"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
                        <button onclick="window.open('<?php echo $gallery_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-uppercase btn_hover" style="background: transparent; color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; border: 1px solid <?php echo $text_color ?>">view All</button>
                    </div>
                </div>
                <!-- for mobile view -->
                <div class="d-block d-sm-none">

                    <div class="row ps-2 pe-4 lightbox">
                        <?php
                        $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 4";
                        $res_gallery = mysqli_query($link, $query_gallery);
                        while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                        $pic_url = $row_gallery['file_name'];
                        $pic_title = $row_gallery['title'];
                        $pic_description = $row_gallery['description'];
                        ?>
                        <div class="col-lg-3 col-12 textAn" style="height: 100%;">
                            <img  class="para bg w-100 my-3" style="height: 50vh;" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';" alt="img" srcset="">
                        </div>
                        <?php }?>
                    </div>
                    <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
                        <button onclick="window.open('<?php echo $gallery_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-uppercase btn_hover" style="background: transparent; color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; border: 1px solid <?php echo $text_color ?>">view All</button>
                    </div>

                </div>
            </div>
            <?php }?>
            <!-- Gallery section end-->
            <!-- blog section start -->
            <?php if ($row_user_details['blog_summary'] == 1){?>
            <div class="container-fluid" style="background: <?php echo $bg_color ?>">
                <div class="text-light ps-5 pt-4 textAn">
                    <h1 style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_blog_name'] ?></h1>
                    <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                    <p class="textAn" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['blog_description'] ?></p>
                </div>

            <div class="container py-5 lightbox">

                <?php
                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created` DESC LIMIT 3";
                $res_blogs = mysqli_query($link, $query_blogs);
                while($row_blogs = mysqli_fetch_assoc($res_blogs)){
                $blog_title = $row_blogs['title'];
                $blog_content = $row_blogs['content'];
                $clean_blog_content = get_clean_excerpt($row_blogs['content']);
                $originalDate = $row_blogs['time_created'];
                $newDate = date("F, d, Y", strtotime($originalDate));
                $blog_link = $row_blogs['canonical_url'];
                $blog_pic = $row_blogs['cover_image'];
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                $post_image = $image['src'];
                ?>

                <div class="row flex-sm-row flex-column-reverse my-4 p-3" style="color: <?php echo $text_color?>; border: 1px solid <?php echo $text_color?>">
                    <div class="col-lg-6 col-12 fw-bolder">
                        <div class="position-relative d-flex align-items-center"  style="min-height: 500px;">
                            <div class="overflow-hidden textAn">

                                <h1 onclick="window.open('blog/?title=<?php echo $blog_link ?>','_self')" class="hua fw-lighter" style="font-family: <?php echo $font_family1 ?>;"><?php echo $blog_title ?></h1>
                                <p class="mt-4 fw-light" style="font-family: <?php echo $font_family2 ?>;"><?php echo $clean_blog_content ?>...</p>

                                <div class="mt-5">
                                    <a href="blog/?title=<?php echo $blog_link ?>" target="_self" class="ls-widest link_hover" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; "><u>Read More</u></a>
                                </div>
                                <div class="mt-5">
                                    <p style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; text-transform: capitalize;"> <span style="font-family: <?php echo $font_family1 ?>;">Published On:</span> <?php echo $newDate?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 center" style="min-height: 50vh; overflow: hidden;">
                        <img class="blog_img textAn" src="<?php echo $post_image ?>" onerror="this.src = 'https://app.wooble.org/blogs/upload/<?php echo $blog_pic ?>';" style="object-fit: cover; width: 100%; height: 50vh;" alt="<?php echo $blog_title ?>" srcset="">
                    </div>
                </div>
                <?php }?>


                <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
                    <button onclick="window.open('<?php echo $blogs_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-uppercase btn_hover" style="background: transparent; color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; border: 1px solid <?php echo $text_color ?>">view All</button>
                </div>
            </div>

            </div>
            <?php }?>
            <!--blog section end-->
            <!-- work section start -->
            <?php if ($row_user_details['work_summary'] == 1){?>
                <div class="container-fluid" style="background: <?php echo $primary_color ?>">
                    <div class="text-light ps-5 pt-4 textAn">
                        <h1 style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_work_name'] ?></h1>
                        <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                        <p class="textAn" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['work_description'] ?></p>
                    </div>

                    <div class="container py-5 lightbox">

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

                            <div class="row flex-sm-row flex-column-reverse my-4 p-3" style="color: <?php echo $text_color?>; border: 1px solid <?php echo $text_color?>">
                                <div class="col-lg-6 col-12 fw-bolder">
                                    <div class="position-relative d-flex align-items-center"  style="min-height: 500px;">
                                        <div class="overflow-hidden px-3 textAn">

                                            <h1 onclick="window.open('work/?title=<?php echo $work_link ?>','_self')" class="hua fw-lighter" style="font-family: <?php echo $font_family1 ?>;"><?php echo $work_title ?></h1>
                                            <p class="mt-4 fw-light" style="font-family: <?php echo $font_family2 ?>;"><?php echo $clean_work_content ?>...</p>

                                            <div class="mt-5">
                                                <a href="work/?title=<?php echo $work_link ?>" target="_self" class="ls-widest link_hover" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; "><u>View</u></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 center" style="min-height: 500px; overflow: hidden;">
                                    <img class="blog_img textAn" src="<?php echo $work_image ?>" onerror="this.src = 'https://app.wooble.org/work/upload/<?php echo $work_cover_pic ?>';" style="background-position: center;background-size: cover; background-repeat: no-repeat; height: 50vh;" alt="<?php echo $work_title ?>" srcset="">
                                </div>
                            </div>
                        <?php }}?>


                        <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
                            <button onclick="window.open('<?php echo $works_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-uppercase btn_hover" style="background: transparent; color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; border: 1px solid <?php echo $text_color ?>">view All</button>
                        </div>
                    </div>

                </div>
            <?php }?>
            <!--work section end-->
            <!--featured article start-->
            <?php if ($row_user_details['article_summary'] == 1){?>
                <div class="container-fluid" style="background: <?php echo $bg_color?>">
                    <div class="text-light ps-5 pt-4 textAn">
                        <h1 style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_featured_article_name'] ?></h1>
                        <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                    </div>

                    <div class="container g-0 my-5" style="border: 1px solid <?php echo $text_color?>">
                        <div class="p-lg-5 p-3" style="background: <?php echo $primary_color ?>">
                            <i class="fas fa-quote-right fa-6x textAn text_hover" style="color: <?php echo $text_color?>"></i>
                            <div class="lightbox">
                                <?php
                                $query_article = "SELECT * FROM `articles_db` WHERE `email_id`='$email_id' ORDER BY `position` LIMIT 1";
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
                                            <div class="col-lg-6 p-lg-5 p-3 textAn">
                                                <img data-mdb-caption="<?php echo $article_title?>" src="https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>"
                                                     data-mdb-img="https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>"
                                                     onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                                                     alt="<?php echo $article_title?>"
                                                     class="w-100" style="height: 50vh; object-fit: cover; "/>
                                            </div>

                                            <div class="col-lg-6 d-flex align-items-center">
                                                <div class="textAn">
                                                    <h1 onclick="window.open('<?php echo $article_link ?>','_self')" class="my-3 text_hover" style="color: <?php echo $text_color?>; font-size: xxx-large; font-family: <?php echo $font_family1 ?>; font-weight: bold; cursor: pointer;"><?php echo $truncatedTitle?></h1>
                                                    <p class="my-3" style="color: <?php echo $text_color?>; font-size: xx-large; font-family: <?php echo $font_family2 ?>; font-weight: lighter; text-transform: capitalize;"><?php echo $row_user_details['field_1']?></p>
                                                    <a class="text_hover" href="<?php echo $article_link ?>" target="_self" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $text_color?>"><u>Media Link <i class="fas fa-link"></i></u></a>
                                                </div>
                                            </div>

                                        </div>
                                    <?php }}?>
                            </div>

                            <div class="px-2 px-lg-4 py-5 d-flex justify-content-center">
                                <button onclick="window.open('<?php echo $feature_article_url ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: transparent; border: 1px solid <?php echo $text_color ?>; color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>;">View All</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php }?>
            <!--featured article end-->
            <!-- 3rd -->
            <div class="row d-none" style=" background-color:  #E4FAEE;">

                <div class="col-lg-7 overflow-hidden" style="min-height: 100%;">
                    <div class="row">
                        <div class="col-lg" id="grim">
                            <div id="img6" class="bg" style="height: 100%; background-image: url(https://thumbs.dreamstime.com/b/paris-france-eiffel-tower-black-white-photo-vertical-191147369.jpg);"></div>
                        </div>
                        <div class="col-lg overflow-hidden">
                            <div id="img7" class="bg mb-3" style="height: 50vh; background-image: url(https://static.photocdn.pt/images/articles/2019/02/07/Landscape_Photography_Tip_Shoot_in_Vertical_Format.jpg);"></div>
                            <div id="img8" class="bg" style="height: 50vh;background-image: url(https://expertphotography.b-cdn.net/wp-content/uploads/2011/06/IMG_1479.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-black fw-bolder">
                    <div class="position-relative"  style="min-height: 100%;">
                        <div class="textAn" style="display: grid; place-content: center; padding: 10vh; min-height: 100vh;">

                            <p class="hua" style="font-size: 6vh;">ABOUT MY WORKS!</p>
                            <a href="<?php echo $work_url ?>" style="color: black; font-size: larger">Know More</a>

                        </div>
                    </div>
                </div>
                <!-- 4th -->
                <p style="font-size: 3vh; color: black; padding-top: 5vh; padding-left: 5vw;">Featured Project</p>
                <div class="d-flex justify-content-around align-items-center" style="height: 50vh;">
                    <div class="First bg" style="min-height: 30vh; min-width: 20vw;background-image: url(https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?cs=srgb&dl=pexels-vecislavas-popa-1571460.jpg&fm=jpg);   border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                    </div>
                    <div class="position-absolute Second bg" style="min-height: 30vh; min-width: 20vw; background-image: url(https://images.adsttc.com/media/images/632c/1ed8/5c11/c22d/15aa/f20e/newsletter/what-is-good-interior-design_7.jpg?1663835870);  border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                    </div>
                    <div class="position-absolute Third bg" style="min-height: 30vh; min-width: 20vw; background-image: url(https://images.livspace-cdn.com/plain/https://jumanji.livspace-cdn.com/magazine/wp-content/uploads/sites/2/2018/12/22103134/Cover-1.jpg);border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                    </div>
                    <!-- <div class="position-absolute Five" style="height: 30vh; width: 20vw; background-color:  pink; border-radius: 60px;"></div> -->
                    <div class="position-absolute Fourth bg" style="min-height: 30vh; min-width: 20vw; background-image: url(https://www.aishwaryainteriors.in/wp-content/uploads/2020/04/living-room-interior-designs.jpg);border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                    </div>
                </div>
            </div>
            <!-- 5th -->
            <div class="d-none ">
                <div class="d-flex align-items-center justify-content-between" style="height: 60vh; background-color: #548975;">
                    <div class="position-relative last" style="height: 42vh; width: 42vh;">
                        <div class="position-absolute top-0 start-0">
                            <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://media.istockphoto.com/id/1351571961/photo/looking-directly-up-at-the-skyline-of-the-financial-district-in-central-london.jpg?b=1&s=170667a&w=0&k=20&c=ScoPcmVztzvi771qPgGSvhA50WDt7gOM7361Ei0ODww=); border-radius: 15px;"></div>
                        </div>
                        <div class="position-absolute top-0 end-0" style="margin-top: -3vh;">
                            <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://5.imimg.com/data5/QQ/FD/JC/ANDROID-92022593/product-jpeg-500x500.jpg); border-radius: 15px;"></div>
                        </div>
                        <div class="position-absolute bottom-0 start-0">
                            <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://img.freepik.com/premium-photo/geometric-facades-residential-building_294094-27.jpg?w=2000); border-radius: 15px ;"></div>
                        </div>
                        <div class="position-absolute bottom-0 end-0 mb-4">
                            <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://images.news18.com/ibnlive/uploads/2019/06/Amazon-Building-in-Hyderabad.jpg?impolicy=website&width=0&height=0); border-radius: 15px;"></div>
                        </div>
                    </div>
                    <div class="text-center" style="font-size: 4vh; color: #015239; font-family: 'Aladin', cursive;">Recent Snapshots <br><a href="" style="color: wheat;">view more</a></div>

                    <div class="d-flex align-items-center" style="height: 60vh;">
                        <div class="position-relative last" style="height: 42vh; width: 42vh;">
                            <div class="position-absolute top-0 start-0" style="margin-top: -3vh;">
                                <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://static.toiimg.com/photo/90285980.cms); border-radius: 15px;"></div>
                            </div>
                            <div class="position-absolute top-0 end-0">
                                <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://i0.wp.com/theconstructor.org/wp-content/uploads/2019/06/Building-components.jpg?resize=752%2C395&ssl=1); border-radius: 15px;"></div>
                            </div>
                            <div class="position-absolute bottom-0 start-0 mb-4">
                                <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://i.pinimg.com/originals/1b/b0/47/1bb0477a1429a66bb34614a8a90a9e5f.jpg); border-radius: 15px;"></div>
                            </div>
                            <div class="position-absolute bottom-0 end-0">
                                <div class="bg" style="height: 18vh; width: 18vh; background-image: url(https://i.pinimg.com/originals/92/3c/df/923cdf2138480da004567e9bec55f4c4.png); border-radius: 15px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none" style="height: 20vh; background-color: #548975;">
                <div class="text-center center" style="font-size: 4vh; font-family: 'Aladin', cursive;">For Recent Snapshots <br><a href="" style="color: wheat;">Click Here</a></div>
            </div>
            <!--footer section start-->
            <?php
            include 'footer/'.$row_user_info["footer_type"].'.php';
            ?>
            <!--footer section end-->
        </div>
    </div>


</div>
</div>
</div>
<!-- End -->
<!-- MDB -->
<!--<script type="text/javascript" src="../js/mdb.min.js"></script>-->
<script src='../gsap/minified/gsap.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/SplitText.min.js'></script>
<script src='../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap/minified/ScrollSmoother.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    gsap.to(".First",{
        x:'54%',
        scrollTrigger: {trigger: ".First",start: "top 100%",end: "bottom 80%",markers:false,scrub : true,
        }

    });
    gsap.to(".Second",{
        x:'-54%',
        scrollTrigger: {trigger: ".Second",start: "top 100%",end: "bottom 80%",markers:false,scrub : true,
        }

    });
    gsap.to(".Third",{
        x:'-160%',
        scrollTrigger: {trigger: ".Third",start: "top 100%",end: "bottom 80%",markers:false,scrub : true,
        }

    });
    gsap.to(".Fourth",{
        x:'160%',
        scrollTrigger: {trigger: ".Fourth",start: "top 100%",end: "bottom 80%",markers:false,scrub : true,
        }

    });
    //  1st div parallax
    gsap.from(".para",{
        y:"-30%",
        scrollTrigger: {trigger: ".para",start: "top 100%",end: "bottom",markers:false,scrub : true,
        }
    })
    //2nd div img
    gsap.from("#full",{
        scaleX: 2.2, scaleY: 2.5, x:"100%",
        scrollTrigger: {trigger: "#full",start: "top 50%",end: "bottom 110%",markers:false,scrub : true,
        }
    })
    //  1st div image animation
    gsap.to("#B1",{
        y:"20%",
        scrollTrigger: {trigger: "#full",start: "top 80%",end: "bottom 40%",markers:false,scrub : true,
        }
    })
    gsap.to("#B2",{
        y:"-20%",
        scrollTrigger: {trigger: "#full",start: "top 80%",end: "bottom 40%",markers:false,scrub : true,
        }
    })
    gsap.to("#B3",{
        y:"20%",
        scrollTrigger: {trigger: "#full",start: "top 80%",end: "bottom 40%",markers:false,scrub : true,
        }
    })
    gsap.to("#B4",{
        y:"-20%",
        scrollTrigger: {trigger: "#full",start: "top 80%",end: "bottom 40%",markers:false,scrub : true,
        }
    })

     gsap.from(".textAnim", {
         opacity: 0, scale:0.5 , scale:0.5,stagger: 1, duration: 1
    });

    var sections = gsap.utils.toArray('.textAn');
    sections.forEach((section) => {
        gsap.from(section, { opacity: 0, scale:0.5 , scale:0.5,stagger: 1, duration: 5,
            scrollTrigger: {
                trigger: section,
                start: 'top 100%',
                scrub: true,
                end: 'bottom 40%',
                markers: false
            }
        });

    })


    // gsap.from("#img6",{
    //   scale:1.8, y:"-20%",
    //  scrollTrigger: {trigger: "#img6",start: "top 80%",end: "bottom 100%",markers:true,scrub : true,
    //     }
    //  })
    //  gsap.from("#img7",{
    //    x:"-20%",
    //  scrollTrigger: {trigger: "#img7",start: "top 80%",end: "bottom 60%",markers:false,scrub : true,
    //     }
    //  })
    //  gsap.from("#img8",{
    //    y:"-20%",
    //  scrollTrigger: {trigger: "#img8",start: "top 80%",end: "bottom 60%",markers:false,scrub : true,
    //     }
    //  })
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
        const tl = gsap.timeline({//timeline with scroll trigger
            scrollTrigger:{
                trigger:"#grim",
                start: "top 100%",
                end: "bottom 110%",
                markers:false,
                scrub : true,
            }
        })
        tl.from("#img6", {y:"-40%"});
        tl.from("#img7", {y:"-20%"});
        tl.from("#img8", {y:"-30%"});
    });
    gsap.to(".soc", {
        opacity: 0, scale:0.5,x: '-100%', duration: 5,scrollTrigger:{trigger:".soc",start: "top 60%",end: "bottom 40%",markers: false,scrub: true,reverse:true
        }
    });

    gsap.from(".last",{
        y:"-20%",
        scrollTrigger: {trigger: ".last",start: "top 80%",end: "bottom 40%",markers:false,scrub : true,
        }
    })
</script>
<script>

    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:4,
        smoothTouch:0.1
    })
</script>
</body>
</html>