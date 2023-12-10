<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallery | <?php echo $row_user_info['field_1'] ?></title>
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
    ?>

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
    <style>
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
        @media (max-width:600px){
            .align{
                min-height: 35vh;
                scroll-padding-top: 2vh;
            }
            .align2{
                margin-bottom: 0px !important;
            }

        }
    </style>
</head>
<body style="background-color: <?php echo $row_user_info['background'] ?>; user-select: none;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow: hidden;">
            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
            <div style=" background-color: <?php echo $row_user_info['background'] ?>">
                <div class="position-relative" style="min-height: 100vh;">

                    <div class="position-absolute top-0 end-0">
                        <img  data-lag="0.5" src="img/element2.svg" class="img-fluid" style="height: 30vh;" alt="" srcset="">
                    </div>
                    <h1 style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>; padding-left: 10vw; padding-top: 5vh; font-size: 8vh;"><?php echo $row_user_info['custom_gallery_name'] ?></span></h1>
                    <p class="fw-light text-start ls-wider" style="color: <?php echo $row_user_info['tertiary_color'] ?>; padding-left: 10vw; padding-top: 1vh; font-family:<?php echo $row_fonts['font_1'] ?>"><?php echo $row_user_info['gallery_description'] ?></p>
                    <div class="container" style="min-height: 100vh;">
                        <div class="row lightbox">


                    <?php
                    $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `file_created` DESC";
                    $res_gallery = mysqli_query($link, $query_gallery);
                    while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                        $pic_url = $row_gallery['file_name'];
                        $pic_title = $row_gallery['title'];
                        $pic_description = $row_gallery['description'];
                    ?>
                        <div class="col-lg-4 col-12 my-2 p-2" style="overflow: hidden;">
                            <img class="shift rounded-4" style="height: 40vh; width: 100%; object-fit:cover; object-position: 50% 0%;" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';" alt="<?php echo $pic_title ?>" srcset="">

                            <p class="mt-2 shift" style="color: <?php echo $row_user_info['tertiary_color']?>; font-family:<?php echo $row_fonts['font_1'] ?>;"><?php echo $pic_title?></p>
                            <p class="mt-2 opacity-75 shift" style="color: <?php echo $row_user_info['tertiary_color']?>; font-family:<?php echo $row_fonts['font_1'] ?>;"><?php echo $pic_description?></p>
                        </div>

                    <?php } ?>
                        </div>
                    </div>
                    <!--footer section start here-->
                    <?php
                    include '../footer/'.$row_user_info["footer_type"].'.php';
                    ?>
                    <!--footer section end here-->

                    <div class="position-absolute bottom-0 start-0">
                        <img  data-lag="0.5" src="img/element3.svg" class="img-fluid" style="height: 25vh;" alt="" srcset="">
                    </div>
                </div>
            </div>
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
        smoothTouch:0.1,effects:true
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
    var  skewSetter = gsap.quickSetter(".bg", "skewY", "deg");
    var proxy = {skew:0}
    ScrollTrigger.create({
        onUpdate:self=>{
            var skew = self.getVelocity()/-200;
            if (Math.abs(skew) > Math.abs(proxy.skew)) {
                proxy.skew = skew;
                gsap.to(proxy, {skew: 0, duration: 1, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
            }
        }
    });
    gsap.set(".col",{transformOrigin:"right center",force3D:true});
</script>
</body>
</html>