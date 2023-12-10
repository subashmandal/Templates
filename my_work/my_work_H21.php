<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .br{
            border:1px solid rgb(252, 10, 10);
        }
    </style>
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
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>

    <style>
        p{
            color:<?php echo $row_user_info['tertiary_color'];?> !important;
            font-family: <?php echo $row_fonts['font_2'] ?> !important;
        }
        span{
            color:<?php echo $row_user_info['tertiary_color'];?>!important;
            font-family: <?php echo $row_fonts['font_2'] ?>!important;
        }
    </style>


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
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:<?php echo $row_user_info['background'] ?>">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarRightAlignExample"
                        aria-controls="navbarRightAlignExample"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars text-light"></i>
                    </button>
                    <a class="navbar-brand" style="padding-left: 20vh; color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>" href="<?php echo $home_url ?>">
                        <h2><?php echo $row_user_info['field_1'] ?></h2>
                    </a>
                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                        <!-- Left links -->
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right: 20vh; font-size: 2.4vh;">
                            <li class="nav-item px-4">
                                <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" aria-current="page" href="<?php echo $work_url ?>">Works</a>
                            </li>
                            <li class="nav-item px-4">
                                <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" href="<?php echo $home_url ?>">About Me</a>
                            </li>
                            <li class="nav-item px-4">
                                <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" href="<?php echo $blog_url ?>">Blogs</a>
                            </li>
                            <li class="nav-item px-4">
                                <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" href="<?php echo $gallery_url ?>">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <div style=" background-color: <?php echo $row_user_info['background'] ?>">
                <div class="position-relative" style="min-height: 100vh;">

                    <div class="position-absolute top-0 end-0">
                        <img  data-lag="0.5" src="../lp_designs/img/element2.svg" class="img-fluid" style="height: 30vh;" alt="" srcset="">
                    </div>


                    <h1 style="color: <?php echo $row_user_info['secondary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>; padding-left: 10vw; padding-top: 5vh; font-size: 8vh;"><?php echo $row_blog['title'] ?></h1>
                    <p style="color: <?php echo $row_user_info['secondary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>; padding-left: 10vw; padding-top: 2vh; font-size: 2vh;">Published on - <sapn> Published on - <sapn> <?php $originalDate = $row_blog['time_created'];
                        $newDate = date("M, d Y", strtotime($originalDate)); echo $newDate ?> </p>
                    <br>
                    <div class="mt-4">
                        <div class="col-lg-8" style="padding-left: 10vw;">
                            <div style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
                                <?php echo $row_blog['content'] ?>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>

                    <div class="position-absolute bottom-0 start-0">
                        <img  data-lag="0.5" src="../lp_designs/img/element3.svg" class="img-fluid" style="height: 25vh;" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div></div>
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<script src='../gsap/minified/gsap.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/SplitText.min.js'></script>
<script src='../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap/minified/ScrollSmoother.min.js'></script>

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
        smoothTouch:1
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