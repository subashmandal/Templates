<?php
//$bg_color   ="linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "green";
//$secondary_color = "green";
//$text_color = "black";
//$font_family = "'Frank Ruhl Libre', serif;";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title><?php echo $row_user_info['field_1'] ?> | Wooble</title>
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

    <link rel="stylesheet" href="http://wooble.org/css/mdb.min.css"/>
    <link rel="stylesheet" href="http://wooble.org/plugins/css/multi-carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;600;700;800;900&display=swap');
        .text_hover:hover{
            color: <?php echo $secondary_color?> !important;
        }
        .btn_hover:hover{
            color: <?php echo $secondary_color?> !important;
        }
        @media (max-width: 600px) {
            .article_name_size{
                font-size: small !important;
            }
        }
    </style>
</head>
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
<body style="background: <?php echo $bg_color ?>; user-select: none;">
<!--start-->
<div id="smooth-wrapper">
    <div id="smooth-content">
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<div class="container-fluid" style="min-height: 100vh;">
    <div class="pt-4 article_name_size">
        <h1 style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family: <?php echo $row_fonts['font_1'] ?>; padding-left: 10vw; padding-top: 5vh; font-size: 6vh;"><?php echo $row_user_info['custom_featured_article_name'] ?></h1>
    </div>
    <!--media focus start-->
    <div class="container my-5">

        <div class="p-3">
            <div class="lightbox">
                <div class="row">
                <?php
                $query_article = "SELECT * FROM `articles_db` WHERE `email_id`='$email_id' ORDER BY position";
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
                    <div class="col-lg-4 p-lg-5 p-3" style="overflow: hidden;">
                        <div class="row">
                            <div class="col-12 rounded-5 shift" style="background-image: url('https://wooble.org/app/featured_article/image/<?php echo $article_pic ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 30vh; width: 100%;"></div>
                            <div class="col-12 mt-2">
                                <h1 onclick="window.open('<?php echo $article_link ?>','_self')" class="my-3 text_hover shift" style="color: <?php echo $text_color?>; font-size: xxx-large; font-family: <?php echo $font_family1 ?>; font-weight: bold; cursor: pointer;"><?php echo $truncatedTitle?></h1>
                                <p class="my-3 shift" style="color: <?php echo $text_color?>; font-size: xx-large; font-family: <?php echo $font_family2 ?>; font-weight: lighter; text-transform: capitalize;"><?php echo $row_user_info['field_1']?></p>
                                <a class="btn_hover shift" href="<?php echo $article_link ?>" target="_self" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $text_color?>"><u>Media Link <i class="fas fa-link"></i></u></a>
                            </div>

                        </div>
                    </div>

                <?php }}?>
                </div>
            </div>
        </div>
    </div>
    <!--media focus end-->
</div>
<!--    footer section start-->
<?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
<!--    footer section end-->
    </div></div>
<!--end-->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<script src='https://wooble.org/gsap/minified/gsap.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollToPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/SplitText.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollTrigger.min.js'></script>
<script src='https://wooble.org/gsap/minified/MotionPathPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollSmoother.min.js'></script>
<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
        smoothTouch:0.1
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
</script>
</body>
</html>
