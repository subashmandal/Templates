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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blogs | <?php echo $row_user_info['field_1'] ?></title>
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

    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="https://wooble.org/css/mdb.min.css" />
    <style>
        .center{
            display: grid;
            place-content: center;
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
            background-color:white;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hua:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        .extra-long-container {
            min-width: 200%;
            height: 100%;
            position: relative;
        }
        .text_hover:hover{
            opacity: 70% !important;
        }

    </style>
</head>
<body style="background-color: <?php echo $background ?>; user-select: none;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow-x: hidden;">

            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>

            <?php
            $sl=0;
            $blog_content = array();
            $last_updated = array();
            $date_created = array();
            $canonical_url = array();
            $blog_title = array();
            $blog_id = array();
            $blog_pic = array();
            $clean_blog_content = array();


            $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position` ASC, `time_created` DESC";
            $res_blogs = mysqli_query($link, $query_blogs);
            while ($row_blogs = mysqli_fetch_assoc($res_blogs)) {
                $blog_content[$sl] = $row_blogs['content'];
                $clean_blog_content[$sl] = get_clean_excerpt($row_blogs['content']);
                $blog_title[$sl] = $row_blogs['title'];
                $last_updated[$sl] = $row_blogs['last_updated'];
                $date_created[$sl] = $row_blogs['time_created'];
                $blog_pic[$sl] = $row_blogs['cover_image'];
                $blog_id[$sl] = $row_blogs['blog_id'];
                $canonical_url[$sl] = $row_blogs['canonical_url'];
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content[$sl], $image);
                $post_image[$sl] = $image['src'];
                $sl++;
                $count++;

            }
            $sl1=0;
            ?>


            <div class="d-none d-sm-block" style="background-color: <?php echo $row_user_info['background'] ?>;">
                <h1 style="color: <?php echo $tertiary_color ?>; padding-left: 10vw; padding-top: 5vh; font-size: 6vh; font-family:<?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['custom_blog_name'] ?></h1>
                <p class="fw-light text-start ls-wider" style="color: <?php echo $tertiary_color ?>; padding-left: 10vw; padding-top: 1vh; font-family:<?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['blog_description'] ?></p>

                        <div class="container">
                            <div class="row">
                                <?php
                                    for($i=0;$i<$sl;$i++){
                                ?>
                                <div class="col-lg-4 p-4 my-5" style="overflow: hidden;">
                                    <div class="row">
                                        <div class="col-12 rounded-5 shift" style="background-image: url('https://app.wooble.org/blogs/upload/<?php echo $blog_pic[$sl1] ?>'), url('<?php echo $post_image[$sl1] ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 30vh; width: 100%;"></div>

                                        <div class="col-12 mt-2">
                                            <p class="shift lh-sm" style="font-size: 3vh; color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>!important;"><?php echo $blog_title[$sl1] ?></p>
                                            <p class="shift opacity-75" style="color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>!important;"><?php echo $clean_blog_content[$sl1] ?>...</p>
                                            <div class="shift" style="color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>!important;">Published on: <span class="opacity-50"><?php $newDate = date("M, d Y", strtotime($date_created[$sl1])); echo $newDate ?></span></div>
                                            <br>
                                            <a style=" color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>" class="fs-3 shift text_hover" href="https://wooble.org/blog/?title=<?php echo $canonical_url[$sl1++] ?>"><u>view</u></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

            <?php
                $sl1=0;
            ?>
<!--blog section start-->

            <div class="d-block d-sm-none">
                <div style="min-height: 50vh; background-color: <?php echo $row_user_info['background'] ?>; ">
                    <h1 style="color: <?php echo $tertiary_color ?>; padding-left: 10vw; padding-top: 5vh; font-size: 6vh; font-family:<?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['custom_blog_name'] ?></h1>
                    <p class="fw-light text-start ls-wider" style="color: <?php echo $tertiary_color ?>; padding-left: 10vw; padding-top: 1vh; font-family:<?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['blog_description'] ?></p>
                    <div class="row" style="min-height: 30vh;">
                        <div class="col-lg-1"></div>
                        <?php
                        for($i=0;$i<$sl;$i++){
                        ?>
                                <div class="col-lg">
                                    <div class="row p-2">

                                        <div class="col-12 rounded-5 shift" style="background-image: url('<?php echo $post_image[$sl1] ?>'), url('http://via.placeholder.com/400x400'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 40vh; width: 100%;"></div>

                                        <div class="col-12 text-light p-3" style="overflow: hidden;">
                                            <p class="shift" style="font-size: 3vh; color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>!important;"><?php echo $blog_title[$sl1] ?></p>
                                            <p class="shift opacity-75" style="color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>!important;"><?php echo $clean_blog_content[$sl1]  ?>...</p>
                                            <div class="shift" style="color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>!important;">Published on: <span class="opacity-50"><?php echo $date_created[$sl1] ?></span></div>
                                            <a class="shift fs-3 text_hover mt-5" href="<?php echo $canonical_url[$sl1++] ?>" style=" color:<?php echo $tertiary_color ?>; font-family:<?php echo $row_fonts['font_1'] ?>"><u>View</u></a>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                        <div class="col-lg-1"></div>
                    </div>

                </div>
            </div>
<!--            blog section end here-->
<!--footer section start here-->
            <?php
            include '../footer/'.$row_user_info["footer_type"].'.php';
            ?>
<!--footer section end here-->
        </div>
    </div></div>
<!-- End -->
<!-- MDB -->
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

</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    const body = document.querySelector("body");
    const mainContainer = body.querySelector(".main-container");
    const extraLongContainer = mainContainer.querySelector(".extra-long-container");
    const horizontalCoordinate = body.querySelector(".horizontal-coordinate");


    let scrollTween = gsap.to(".extra-long-container", {
        xPercent: -100,
        x: () => window.innerWidth,
        ease: "none", // <-- IMPORTANT!
        scrollTrigger: {
            pin: ".main-container",
            trigger: ".main-container",
            start: "left left",
            end: () => `+=${extraLongContainer.offsetWidth} bottom`,
            scrub: 1,
            markers: false,
        }
    });
</script>
</body>
</html>