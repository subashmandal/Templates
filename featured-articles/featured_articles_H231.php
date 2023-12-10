<?php
//$bg_color   ="linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "green";
//$secondary_color = "green";
//$text_color = "black";
//$font_family = "'Frank Ruhl Libre', serif;";
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
        <title>Wooble | <?php echo $row_user_info['field_1'] ?></title>
    <!-- Wooble icon -->
<!--        <link rel="icon" href="https://test.wooble.org/home/upload/--><?php //echo rawurlencode($profile_pic); ?><!--" type="image/x-icon" />-->
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
<!--    <link href="--><?php //echo $row_fetch_font['font_google_link'] ?><!--" rel="stylesheet">-->


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;600;700;800;900&display=swap');
        .title_hover:hover{
            color: <?php echo $secondary_color ?> !important;
            cursor: pointer;
        }

        @media (max-width:600px) {
            .hello{
                font-size:xx-large !important;
            }
            .featured{
                font-size: 10vw !important;
            }
            .featured_article{
                font-size: 5vw !important;
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
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<div class="container-fluid" style="min-height: 100vh;">
    <!--media focus start-->
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold featured opacity-35" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $secondary_color ?>; font-size: 10rem;
                    ">featured</span>
            <span class="position-absolute text-capitalize fw-bold featured_article" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_details['custom_featured_article_name']?></span>
        </div>
    </div>

    <div class="container-fluid mt-5 g-0">

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
//                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
//                $fallback_blog_pic = $image['src'];
                $maxLength = 50;
                $truncatedTitle = truncateTitle($article_title, $maxLength);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3 position-relative featured_article1 gs_reveal">
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
    <!--media focus end-->
</div>

<!--    footer section start-->
<?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
<!--    footer section end-->
<!--end-->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<!-- Gsap -->
<script src="../../gsap/minified/gsap.min.js"></script>
<script src="../../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../../gsap/minified/SplitText.min.js"></script>

<!--gsap script-->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, gsap);

    gsap.from(".featured", {scale: 0,y:"-100%", duration: 2});
    gsap.from(".featured_article", {opacity: 0, duration: 2});

    var sections = gsap.utils.toArray('.featured_article1');
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
</script>
</body>
</html>
