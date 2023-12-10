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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1'] ?> | Blogs</title>
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
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <style>
        .btn_hover:hover{
            background: <?php echo $secondary_color ?> !important;
            color: <?php echo $bg_color ?> !important;
            border: 1px solid <?php echo $secondary_color ?> !important;
        }
        .link_hover:hover{
            color: <?php echo $secondary_color ?> !important;
            opacity: 70% !important;
        }
        .center{
            display: grid;
            place-content: center;
        }
        .bg{
            background-size: cover; background-repeat: no-repeat; background-position: center; border-radius: 15px;
        }
        .hua {
            display: inline-block;
            position: relative;
        }

        .hua:after {
            content: '';
            position: absolute;
            width: 80%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color:<?php echo $text_color?>;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hua:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
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
<body>
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow-x: hidden;">
            <!--header start-->
            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
            <!--header end-->
            <!-- blog section start -->
                <div class="container-fluid" style="background: <?php echo $bg_color ?>">
                    <div class="text-light ps-5 pt-4 textAn">
                        <h1 style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_blog_name'] ?></h1>
                        <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                        <p class="textAn" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['blog_description'] ?></p>
                    </div>

                    <div class="container py-5 lightbox">

                        <?php
                        $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created`";
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

                            <div class="row flex-sm-row flex-column-reverse my-4 p-3" style="color: <?php echo $text_color?>; border: 1px solid <?php echo $text_color?>">
                                <div class="col-lg-6 col-12 fw-bolder">
                                    <div class="position-relative d-flex align-items-center"  style="min-height: 500px;">
                                        <div class="overflow-hidden textAn">

                                            <h1 onclick="window.open('../blog/<?php echo $blog_link ?>','_self')" class="hua fw-lighter" style="font-family: <?php echo $font_family1 ?>;"><?php echo $blog_title ?></h1>
                                            <p class="mt-4 fw-light" style="font-family: <?php echo $font_family2 ?>;"><?php echo $clean_blog_content ?>...</p>

                                            <div class="mt-5">
                                                <a href="../blog/<?php echo $blog_link ?>" target="_self" class="ls-widest link_hover" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; "><u>Read More</u></a>
                                            </div>
                                            <div class="mt-5">
                                                <p style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; text-transform: capitalize;"><span style="font-family: <?php echo $font_family1 ?>;">Published On:</span> <?php echo $newDate?></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 center" style="min-height: 50vh; overflow: hidden;">
                                    <img class="blog_img textAn" src="<?php echo $post_image ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';" style="object-fit: cover; width: 100%; height: 50vh;" alt="<?php echo $blog_title ?>" srcset="">
                                </div>
                            </div>
                        <?php }?>

                    </div>

                </div>
            <!--blog section end-->
            <!--footer section start-->
            <?php
            include '../footer/'.$row_user_info["footer_type"].'.php';
            ?>
            <!--footer section end-->
        </div>
    </div></div>
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<script src='../gsap/minified/gsap.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/SplitText.min.js'></script>
<script src='../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap/minified/ScrollSmoother.min.js'></script>
<script>
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

    var sections = gsap.utils.toArray('.image');
    sections.forEach((section) => {
        gsap.to(section, {y:"100%", opacity:0, scale:0.8,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom',
            }
        });
    })
    var sections = gsap.utils.toArray('.shift');
    sections.forEach((section) => {
        gsap.to(section, {y:"10%", opacity:0, scale:0.8,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom',
            }
        });
    })
    gsap.from("#fix",{
        scrollTrigger: {trigger: "#fix",start: "top 20%", end:"+=100%",markers:false,scrub : true, pin:true
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