<!DOCTYPE html>
<?php
$gallery_url = '../gallery/'.$row_user_info['username'];
$blogs_url = '../blogs/'.$row_user_info['username'];
?>
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
    <title><?php echo $row_user_info['field_1']; ?></title>
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
<!--GSAP-->
    <script src="../gsap/minified/gsap.min.js"></script>
    <script src="../gsap/minified/ScrollTrigger.min.js"></script>
    <script src="../gsap//minified/MotionPathPlugin.min.js"></script>
    <script src="../gsap/minified/DrawSVGPlugin.min.js"></script>
    <script src="../gsap/minified/ScrollSmoother.min.js"></script>
    <script src="../gsap/minified/SplitText.min.js"></script>


    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
    <style>
        #btn-letsgo {
            display: inline-block;
            padding: 8px 30px;
            border-radius: 40px;
            background: linear-gradient(180deg, #3563D9 0%, #14395B 100%);
            color: white;
            font-size: 1.5em;
            text-decoration: none;
            /* transform: translateY(100px); */
            /* transition: 0.5s; */
        }
        #btn-letsgo:hover {
            background: linear-gradient(180deg,#14395B  0%, #3563D9 100%);
            /* border: 1px solid #fff; */
        }
        .glass{
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(5px);
        }
        #btn-lets {
            display: inline-block;
            padding: 30px 50px;
            border-radius: 8px;
            background: #000000;
            color: white;
            font-size: 1.5em;
            text-decoration: none;
        }
        #btn-lets:hover {
            background: linear-gradient(180deg,#14395B  0%, #3563D9 100%);
        }
        .outline-border {
            width: 23vw;
            border-top: 4vh solid rgba(53, 99, 217, 1);
            border-bottom:4vh solid rgba(20, 57, 91, 1);
            border-radius: 500px;
        }
        svg {
            fill: currentColor;
            height: 20vh;
            max-width: 66vmin;
            transform-origin: center;
            width: 18vh;
            color: white;
        }
        /* .round{
        height: 150px; width: 150px;
        margin-left: -30px;
        clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
        } */
        .round{
            height: 150px; width: 150px; border-radius: 100px;
            margin-left: -30px;
            border: 1px solid white;
        }
        .center{
            display: grid;
            place-content: center;
        }

    </style>
</head>
<body style="background-color: #191818;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow-x: hidden;">
            <nav class="navbar shadow-0 navbar-dark navbar-expand-lg navbar-light " style="background-color: #191818; min-height: 6rem;">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarCenteredExample"
                        aria-controls="navbarCenteredExample"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <!-- Collapsible wrapper -->
                    <a class="navbar-brand" href="#">
                        <h2><?php

                            $words = explode(" ", $row_user_info['field_1']);
                            $initials = null;
                            foreach ($words as $w) {
                                $initials .= $w[0];
                            }
                            echo $initials; //JB
                            ?></h2>
                    </a>
                    <div
                        class="collapse navbar-collapse justify-content-center"
                        id="navbarCenteredExample"
                    >
                        <!-- Left links -->
                        <ul class="navbar-nav navbar-brand">
                            <li class="nav-item pe-4">
                                <a class="nav-link active" aria-current="page" href="<?php echo $row_user_info['username'] ?>">Home</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link active" aria-current="page" href="works/<?php echo $row_user_info['username'] ?>">Works</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link active" aria-current="page" href="blogs/<?php echo $row_user_info['username'] ?>">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="gallery/<?php echo $row_user_info['username'] ?>">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <div class="row">
                <div class="col-lg-7 text-light fw-bolder overflow-hidden" style="background-color: #191818;  z-index: 1;">
                    <div class="position-relative"  style="min-height: 100vh;">
                        <div class="position-absolute top-50 start-100 translate-middle">
                            <!-- <div style="height:58vh; width: 50vh ; border-radius: 500px; background-color: #1B1A1B; border: 2px solid black;"></div> -->
                        </div>
                        <div style="display: grid; place-content: center; text-align: center; min-height: 100vh;">
                            <div style="z-index: 1;">
                                <p class="text all1" style="font-size: 10vh;text-shadow:
                                 0 1px 0px #378ab4,1px 0 0px #5dabcd,1px 2px 1px #378ab4,2px 1px 1px #5dabcd,2px 3px 2px #378ab4,3px 2px 2px #5dabcd,3px 4px 2px #378ab4,4px 3px 3px #5dabcd,4px 5px 3px #378ab4,5px 4px 2px #5dabcd,5px 6px 2px #378ab4,6px 5px 2px #5dabcd,6px 7px 1px #378ab4,7px 6px 1px #5dabcd,7px 8px 0px #378ab4,8px 7px 0px #5dabcd;"><?php echo $row_user_info['field_1'] ?></p>
<!--                                <p class="text all1" style="font-size: 10vh; text-shadow:-->
<!--                                 0 1px 0px #378ab4,1px 0 0px #5dabcd,1px 2px 1px #378ab4,2px 1px 1px #5dabcd,2px 3px 2px #378ab4,3px 2px 2px #5dabcd,3px 4px 2px #378ab4,4px 3px 3px #5dabcd,4px 5px 3px #378ab4,5px 4px 2px #5dabcd,5px 6px 2px #378ab4,6px 5px 2px #5dabcd,6px 7px 1px #378ab4,7px 6px 1px #5dabcd,7px 8px 0px #378ab4,8px 7px 0px #5dabcd;"> For Work</p>-->
                                <p id="quote" style="font-size: 3vh; padding: 6vh;"><?php echo $row_user_info['field_3'] ?></p>
                                <div style="padding-bottom: 30px;">
                                    <a href="#" id="btn-letsgo">See My Works!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $profile_pic = $row_user_info['compressed_image']; ?>
                <div class="col-lg-5 six" style="background-image: url('https://wooble.org/app/home/images/<?php echo $profile_pic ?>'); background-size: cover; background-repeat: no-repeat; background-position: center top;">
                    <div class="position-relative" style="height: 100vh;">
                        <div class="outline-border position-absolute top-50 start-0 translate-middle">
                            <div style="height:50vh; border-radius: 500px; background-color: #1B1A1B;"></div>
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle" style="z-index: 2;">
                            <div style="height:20vh; width: 20vh; border-radius: 500px; background: linear-gradient(182.39deg, #D9D9D9 -330.44%, rgba(217, 217, 217, 0) 98%);">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <svg id="KS" viewBox="0 0 100 100" width="100" height="100">
                                        <defs>
                                            <path id="circle"
                                                  d="
                                          M 50, 50
                                          m -37, 0
                                          a 37,37 0 1,1 74,0
                                          a 37,37 0 1,1 -74,0"/>
                                        </defs>
                                        <text font-size="16">
                                            <textPath xlink:href="#circle">
                                                WELCOME TO MY PORTFOLIO *
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-7 text-light" style="min-height: 20vh; background-color: #191818;">
                    <div class="d-flex align-items-center justify-content-center" style="padding-bottom: 30px;">

                        <?php
                        $count_blogs = "SELECT count(*) as TOTAL FROM `blogs` WHERE `email_id`='$email_id'";
                        $res_blogs = mysqli_query($link, $count_blogs);
                        $row_blogs = mysqli_fetch_assoc($res_blogs);
                        $counter = $row_blogs['TOTAL'];

                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `time_created` DESC LIMIT 3";
                $res_blogs = mysqli_query($link, $query_blogs);
                while ($row_blogs = mysqli_fetch_assoc($res_blogs)){
                    $blog_content = $row_blogs['content'];
                    $blog_title = $row_blogs['title'];
                    $blog_id = $row_blogs['blog_id'];
                    $blog_url = rawurlencode($row_blogs['canonical_url']);
                    $count++;
                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                    $post_image = $image['src'];
                    ?>
                        <a target="_blank" href="https://wooble.org/blog/<?php echo $blog_url ?>"><div class="round" style="background-image: url(<?php echo $post_image ?>); background-size: cover; z-index: 1000"></div></a>
                        <?php } ?>
                        <a target="_blank" href="https://wooble.org/blogs/<?php echo $username ?>"><div class="round" style="background: linear-gradient(180deg, #3563D9 0%, #14395B 100%); align-items: center; justify-content: center; display: flex;">
                            <?php echo $counter ?>+
                            </div></a>
                        <p id="Fi" style="padding-left: 20px; font-size:30px;">Latest Blogs</p>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 20vh; background-color: #191818; z-index: 1;">
                    <img id="hang" src="https://wooble.org/img/vertical-low-angle-shot-high-rise-triangular-building 1.svg" style="height: 35vh; margin-top: -200px; margin-left: 50px;" alt="" srcset="">
                </div>
            </div>

            <br><hr><br>

            <?php
            $count=0;
            $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$email_id' ORDER BY `added_date` LIMIT 3";
            //                echo $query_works;
            $res_count_works = mysqli_num_rows(mysqli_query($link, $query_works));
            if($res_count_works>0){
            ?>

        <div class="container">
            <div class="row mt-2">

                <div class="row text-light pb-5 pb-lg-0" style="min-height: 30vh; background-color: #191818;">
                    <div class="col-lg-6 center">
                        <p id="featured" style="font-size: 5vh;">FEATURED WORKS</p>
                    </div>
                    <div class="col-lg-6 center">
                        <a href="<?php echo $gallery_url ?>" id="btn-lets">EXPLORE ALL WORKS</a>
                    </div>
                </div>


            <?php
                $res_works = mysqli_query($link, $query_works);
                while($row_works = mysqli_fetch_assoc($res_works)){
                    $count++;
                    ?>

                    <div class="col-lg-4 center">
                <div id="Bbox<?php echo $count ?>" style="min-height:35vh; max-width: 350px; background: linear-gradient(91.02deg, #020302 -1.57%, rgba(66, 66, 66, 0) 247.47%);
                        border-radius: 12px; padding: 30px;">
                    <div class="row">
                        <div class="col-3">
                            <?php $work_img = rawurlencode($row_works['cover_pic']) ?>
                            <div style="height: 10vh; width: 10vh; background-image: url(https://wooble.org/works/img/<?php echo $work_img ?>);background-size: cover; background-repeat: no-repeat; border-radius: 15px;">
                            </div>
                        </div>
                        <div class="col-9 d-flex align-items-center text-light">
                            <p style="font-size: larger; padding-left: 50px;"><?php echo $row_works['work_title'] ?></p>
                        </div>
                    </div>
                    <p class="text-light" style="padding: 30px 00px"><?php echo $row_works['work_description'] ?></p>
                </div>
                <br>
            </div>
            <?php
                }
            ?>
            </div>

            <br><hr><br>

        </div>

            <?php } ?>

            </div>


        <?php
            $sl=0;
            $pic_url = ['','','',''];
            $pic_title = ['','','',''];
            $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$email_id' LIMIT 4";
            $res_gallery = mysqli_query($link, $query_gallery);
            while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                $pic_url[$sl] = $row_gallery['file_name'];
                $pic_title[$sl] = $row_gallery['description'];
                $sl++;
            }
        ?>



        <?php
            if($sl!=0){
        ?>
                <div class="row text-light pb-5 pb-lg-0" style="min-height: 30vh; background-color: #191818;">
                    <div class="col-lg-6 center">
                        <p id="gallery_title" style="font-size: 5vh;">GALLERY</p>
                    </div>
                    <div class="col-lg-6 center">
                        <a href="<?php echo $gallery_url ?>" id="btn-lets">EXPLORE GALLERY</a>
                    </div>
                </div>
            <div class="d-none d-sm-block">
                <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <div class="First" style="min-height: 30vh; width: 20vw;background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['0'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;  border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                        <p class="text-white glass"><?php echo $pic_title['0'] ?></p>
                    </div>
                    <div class="position-absolute Second" style="min-height: 30vh; width: 20vw; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['1'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover; border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                        <p class="text-white glass"><?php echo $pic_title['1'] ?></p>
                    </div>
                    <div class="position-absolute Third" style="min-height: 30vh; width: 20vw; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['2'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover; border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                        <p class="text-white glass"><?php echo $pic_title['2'] ?></p>
                    </div>
                    <!-- <div class="position-absolute Five" style="height: 30vh; width: 20vw; background-color:  pink; border-radius: 60px;"></div> -->
                    <div class="position-absolute Fourth" style="min-height: 30vh; width: 20vw; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['3'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                        <p class="text-white glass"><?php echo $pic_title['3'] ?></p>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-none">
                <div class="center pb-5">
                    <div style="min-height:30vh; max-width: 350px; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['0'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;
                        border-radius: 12px; padding: 30px;  display: flex; align-items: flex-end;">
                        <p class="text-white glass"><?php echo $pic_title['0'] ?></p>
                    </div>
                    <br><br>
                    <div>
                        <div style="min-height:30vh; max-width: 350px; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['1'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;
                           border-radius: 12px; padding: 30px;  display: flex; align-items: flex-end;">
                            <p class="text-white glass"><?php echo $pic_title['1'] ?></p>
                        </div>
                        <br> <br>
                        <div style="min-height:30vh; max-width: 350px; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['2'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;
                           border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                            <p class="text-white glass"><?php echo $pic_title['2'] ?></p>
                        </div>
                    </div>
                    <div>
                        <div style="min-height:30vh; max-width: 350px; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url['3'] ?>); background-position: center; background-repeat: no-repeat; background-size: cover;
                           border-radius: 12px; padding: 30px; display: flex; align-items: flex-end;">
                            <p class="text-white glass"><?php echo $pic_title['3'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>

            <div style="background: linear-gradient(0deg, #3360CF 0%, #153A5D 100%);" class="d-none d-sm-block">
                <div class="d-flex align-items-center justify-content-around text-light small" style="min-height: 30vh; padding: 20px;">
                    <p style="font-size: 5vh;"><?php echo $row_user_info['field_1'] ?></p>
<!--                    <p style="font-size: 3vh;">178 Firelos Street, STE 1100 <br>San Francsico USA 2437321</p>-->
                    <div style="font-size: 3vh;">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <!-- for mobile view -->
            <div style="background: linear-gradient(0deg, #3360CF 0%, #153A5D 100%);" class="d-block d-sm-none">
                <div class="text-light center text-center" style="min-height: 30vh; padding: 20px;">
                    <p class="FS1" style="font-size: 5vh;"> <?php echo $row_user_info['field_1'] ?></p>
<!--                    <p class="FS2" style="font-size: 3vh;">178 Firelos Street, STE 1100 <br>San Francsico USA 2437321</p>-->
                    <div class="FS3" style="font-size: 3vh;">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End -->
<!-- MDB -->
<script src='../gsap-shockingly-green/minified/gsap.min.js'></script>
<script src='../gsap-shockingly-green/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap-shockingly-green/minified/SplitText.min.js'></script>
<script src='../gsap-shockingly-green/minified/ScrollTrigger.min.js'></script>
<script src='../gsap-shockingly-green/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap-shockingly-green/minified/ScrollSmoother.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    //register the plugin (just once)
    // set initial states
    gsap.from("#KS",{
        rotation:720,
        scrollTrigger: {trigger: "#KS",start: "top 100%",end: "bottom",markers:false,scrub : true,
        }
    })
    gsap.from("#hang",{
        opacity:0, scale:1.5,
        scrollTrigger: {trigger: "#hang",start: "top 70%",end: "bottom 50%",markers:false,scrub : true,
        }
    })

    //  round
    const tl = gsap.timeline({//timeline with scroll trigger
        scrollTrigger:{
            trigger:".round",
            start: "top 100%",
            end: "bottom 50%",
            markers:false,
            scrub : true,
        }
    })
    tl.from("#Fi", {x:100, opacity:0,});

    gsap.from(".round", {
        opacity: 0, scale:0.5,x: '-100%',rotation:720,stagger: 3, duration: 5,scrollTrigger:{trigger:".round",start: "top 60%",end: "bottom 40%",markers: false,scrub: true,reverse:true
        }
    });
    //vlog section animation
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
        gsap.from("#Bbox1",{
            x:'50%',
            scrollTrigger: {trigger: "#Bbox1",start: "top 100%",end: "bottom",markers:false,scrub : true,
            }
        })
        gsap.from("#Bbox3",{
            x:'-50%',
            scrollTrigger: {trigger: "#Bbox3",start: "top 100%",end: "bottom",markers:false,scrub : true,
            }
        })
    });

    let mm2 = gsap.matchMedia();

    mm2.add("(min-width: 800px)", () => {
        gsap.from("#featured",{
            x:'50%', opacity:0,
            scrollTrigger: {trigger: "#featured",start: "top 100%",end: "bottom 70%",markers:false,scrub : true,
            }
        })

        gsap.from("#gallery_title",{
            x:'50%', opacity:0,
            scrollTrigger: {trigger: "#gallery_title",start: "top 100%",end: "bottom 70%",markers:false,scrub : true,
            }
        })
        gsap.from("#btn-lets",{
            x:'-50%', opacity:0,
            scrollTrigger: {trigger: "#btn-lets",start: "top 100%",end: "bottom 70%",markers:false,scrub : true,
            }
        })
    });

    gsap.from("#g1",{
        x:'50%',
        scrollTrigger: {trigger: "#g1",start: "top 40%",end: "bottom 50%",markers:false,scrub : true,
        }
    });
    gsap.from("#g2",{
        y:'50%',
        scrollTrigger: {trigger: "#g2",start: "top 100%",end: "bottom",markers:false,scrub : true,
        }
    });
    gsap.from("#g3",{
        y:'-50%',
        scrollTrigger: {trigger: "#g3",start: "top 100%",end: "bottom 80%",
            markers:false,
            scrub : true,
        }
    });
    gsap.from("#g4",{
        x:'-50%',
        scrollTrigger: {trigger: "#g4",start: "top 100%",end: "bottom",markers:false,scrub : true,
        }

    });

    gsap.to(".First",{
        x:'100%',
        scrollTrigger: {trigger: ".First",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,
        }

    });
    gsap.to(".Second",{
        x:'-100%',
        scrollTrigger: {trigger: ".Second",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,
        }

    });
    gsap.to(".Third",{
        y:'100%',
        scrollTrigger: {trigger: ".Third",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,
        }

    });
    gsap.to(".Fourth",{
        y:'-100%',
        scrollTrigger: {trigger: ".Fourth",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,
        }

    });
    //  gsap.from(".Five",{
    //   scale:0.2,duration:6, opacity:0,
    //  scrollTrigger: {trigger: ".Five",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,
    //     }
    //  });

    var mySplitText = new SplitText("#quote",{type:"words,chars"});
    TweenLite.set("#quote",{perspective:400});
    TweenMax.staggerFrom(mySplitText.chars, 0.8, {opacity:0, scale:0,duration:100, y:80,rotationX:180,transformOrigin:"0% 50% -50", ease:Back.easeOut}, 0.01);
    // for mouse move
    document.addEventListener("mousemove",function(event){
        var width = window.innerWidth,
            height = window.innerHeight,
            positionX = (event.clientX/width) - 0.55;
        positionY = (event.clientY/width) - 0.55;
        gsap.to(".all1",{
            rotationY:positionX * 50,
            rotationX:positionY * 50,
            ease:"none"
        });
    })

    //name animation
    gsap.from(".text",{
        onStart:function(){
            $('.text').textillate({ in: { effect: 'bounceInDown' } });
        }
    })

    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:4,
        smoothTouch:0.1
    })
</script>
</body>
</html>