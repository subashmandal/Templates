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
    <title>Works | <?php echo $row_user_info['field_1'] ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Wooble icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">

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
            .works{
                font-size: 5vw !important;
            }
        }
    </style>
</head>
<?php
//$bg_color   = "linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "green";
//$secondary_color = "green";
//$text_color = "black";
//$font_family = "'Frank Ruhl Libre', serif;";
?>
<body style="background:<?php echo $bg_color ?>; user-select: none;">
<!-- Start -->
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<div id="smooth-wrapper" style="overflow-x: hidden !important;">
    <div id="smooth-content" style="overflow-x: hidden !important;">
<div class="container-fluid mt-lg-5 mt-3" style="background:<?php echo $bg_color ?>; min-height: 100vh;">
    <!--work section start-->
    <div>
        <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold featured opacity-35" style="font-family: <?php echo $font_family2 ?>; font-size: 10rem; color: <?php echo $secondary_color ?>;
                            ">featured</span>
            <span class="position-absolute text-capitalize fw-bold works" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_info['custom_work_name'] ?></span>
        </div>
        <div class="container mt-lg-0 mt-5 works">
            <div class="d-flex align-items-center justify-content-center px-3" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;">
                <span style="font-size: large;"><?php echo $row_user_info['work_description'] ?></span>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <?php
                $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY position";
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
                        <div class="col-lg-4 py-3 work_details work1 gs_reveal">
                            <div class="img img-fluid rounded-6 mb-3 position-relative" style="background-image:url('<?php echo $work_image ?>'), url('https://app.wooble.org/work/upload/<?php echo $work_cover_pic ?>'), url('https://app.wooble.org/img/placeholder.webp'); background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%; background-position-x: center; background-position-y: top;">
                                <div class="position-absolute bottom-0 text-start w-100" style="min-height: 15%; background: linear-gradient(0deg, <?php echo $primary_color ?> 20%, rgba(0,0,0,0) 100%); border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                    <p onclick="window.open('https://app.wooble.org/work/<?php echo $work_link ?>', '_self')" class="fw-bold mx-3 mb-4 lh-sm title_hover" style="font-size: large; color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $work_title ?></p>
                                    <p class="mx-3" style="font-size: smaller; color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $clean_work_content ?>...</p>
                                </div>
                            </div>
                        </div>


                <?php }}?>
            </div>
        </div>
    </div>
    <!--work section end-->
</div>
    </div>
</div>
<!--    footer section start-->
<?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
<!--    footer section end-->
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>

<!-- Gsap -->
<script src="../../gsap/minified/gsap.min.js"></script>
<script src="../../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../../gsap/minified/SplitText.min.js"></script>
<!--gsap script-->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, gsap);

    gsap.from(".featured", {scale: 0,y:"-100%", duration: 2});
    gsap.from(".works", {opacity: 0, duration: 2});

    // gsap.from(".works", {opacity: 0, scrollTrigger: {trigger: ".works",start: "top 100%",end: "+=60%", markers:false, scrub : true,}})

    var sections = gsap.utils.toArray('.work1');
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