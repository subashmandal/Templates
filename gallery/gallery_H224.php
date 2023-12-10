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
    <title><?php echo $row_user_info['field_1']?> | Gallery</title>
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
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <style>
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
$query = "SELECT * FROM `user_details` WHERE `email` = '$userEmailID'";
$res_query = mysqli_query($link, $query);
$row_user_details = mysqli_fetch_assoc($res_query);
?>
<body>
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow-x: hidden;">
            <!--header start-->
            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
            <!--header end-->
            <!--main section start-->
            <div class="container-fluid" style="background: <?php echo $bg_color?>; min-height: 100vh;">
                <div class="text-light ps-5 pt-4 textAn">
                    <h1 style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_gallery_name'] ?></h1>
                    <hr class="py-0 my-0" style="width: 100px; color: <?php echo $text_color ?>">
                    <p class="textAn" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['gallery_description'] ?></p>
                </div>
                <div class="container">
                    <div class="row ps-2 pe-4 lightbox" style="background: <?php echo $bg_color?>">
                        <?php
                        $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' ORDER BY `position`";
                        $res_gallery = mysqli_query($link, $query_gallery);
                        while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                            $pic_url = $row_gallery['file_name'];
                            $pic_title = $row_gallery['title'];
                            $pic_description = $row_gallery['description'];
                            ?>
                            <div class="col-lg-4 textAn" style="height: 100%;">
                                <img  class="para bg w-100 my-3" style="height: 400px;" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';" alt="<?php echo $pic_title ?>" srcset="">
                                <div class="row d-flex justify-content-center" style="color: <?php echo $text_color?>; font-family:<?php echo $font_family1 ?> ">
                                    <div class="col-10 text-truncate text-center"><?php echo $pic_title ?></div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <!--main section end-->
            <!--footer section start-->
            <?php
            include '../footer/'.$row_user_info["footer_type"].'.php';
            ?>
            <!--footer section end-->
        </div>
    </div></div>
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
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

    var sections = gsap.utils.toArray('.anim');
    sections.forEach((section) => {
        gsap.to(section, { x:'-200%', opacity:0, stagger:3,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom',
            }
        });
    })
    gsap.from("#fix",{

        scrollTrigger: {trigger: "#fix",start: "top 20%",end: "+=100%",markers:false,scrub : true, pin:"#fix"
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