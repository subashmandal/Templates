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
    <title>Blogs | <?php echo $row_user_info['field_1'] ?></title>
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
    <link rel="stylesheet" href="https://wooble.org/css/mdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .title_hover:hover{
            color: <?php echo $secondary_color ?> !important;
        }
        @media (max-width:1440px) {
            .hello{
                font-size:8rem !important;
            }
        }
        @media (max-width:850px) {
            .hello{
                font-size:8rem !important;
            }
        }
        @media (max-width:600px) {
            .hello{
                font-size:xx-large !important;
            }
            .featured_blogs{
                font-size: 10vw !important;
            }
            .blogs{
                font-size: 5vw !important;
            }
        }
        img{
            cursor: pointer;
        }
        img:hover{
            opacity: 0.9 !important;
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
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<div id="smooth-wrapper" style="overflow-x: hidden !important;">
    <div id="smooth-content" style="overflow-x: hidden !important;">
        <!-- Start your project here-->
        <!-- 1th section -->
        <div class="row" style="overflow-x: hidden !important;">
            <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold featured_blogs opacity-35" style=" font-size: 10rem;font-family: <?php echo $font_family2 ?>; color: <?php echo $secondary_color ?>;">featured</span>
                <span class="position-absolute text-capitalize fw-bold blogs" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_details['custom_blog_name']?></span>
            </div>
            <div class="container mt-lg-0 mt-5 blogs">
                <div class="d-flex align-items-center justify-content-center px-3" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;">
                    <span style="font-size: large;"><?php echo $row_user_info['blog_description'] ?></span>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <?php
                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created`";
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
                <div class="col-lg-4 col-md-6 col-sm-12 p-3 position-relative blog1">
                    <div class="img img-fluid rounded-9 mb-3 position-relative" style="background-image:url('<?php echo $post_image ?>'), url('https://app.wooble.org/blogs/upload/<?php echo $blog_cover_pic ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%; background-position-x: center; background-position-y: top;">
                    <div class="position-absolute bottom-0 text-start w-100" style="min-height: 10%; background: linear-gradient(90deg, <?php echo $primary_color ?> 20%, rgba(0,0,0,0) 100%); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                        <p onclick="window.open('../blog/<?php echo $blog_link ?>','_self')" class="text-capitalize fw-bold mx-3 mb-3 mt-2 title_hover" style="line-height: 100%; font-size: medium; color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>; cursor: pointer;"><?php echo $blog_title ?></p>
                        <p class="opacity-90 ms-3 me-5 mb-2 ls-wide" style="font-size: small; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $clean_blog_content ?>...</p>
                        <div class="mx-3 mb-2" style="color: <?php echo $text_color ?>;"><span class="fw-bold" style="font-family: <?php echo $font_family1 ?>; font-size: small;">Published on: </span><span style="font-size: small; font-family: <?php echo $font_family2 ?>;"><?php echo $newDate ?></span></div>
                    </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
        <!-- blog section end -->
        <!--    footer section start-->
        <?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
        <!--    footer section end-->

        <!-- End your project here-->
    </div>
</div>
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
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

    gsap.from(".featured_blogs", {scale: 0,y:"-100%", duration: 2});

    gsap.from(".blogs", {opacity: 0, duration: 2});

    var sections = gsap.utils.toArray('.blog1');
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

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
    })
</script>
</body>
</html>