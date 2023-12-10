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
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap');
        .center{
            display: grid;
            place-content: center;
        }
        .bg{
            background-size: cover; background-repeat: no-repeat; background-position: center;
        }
        .title {
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }
        .line::before {
            content: "";
            background-color: white;
            height: 2px;
            width: 40%;
            margin-right: 1rem;
        }
        .line2::after {
            content: "";
            background-color: black;
            height: 3px;
            width: 40%;
            margin-left: 4rem;
        }
        .line3::after {
            content: "";
            background-color: white;
            height: 3px;
            width: 40%;
            margin-left: 4rem;
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
            background-color: yellow;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hua:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        #text{
            background: linear-gradient(to right, rgb(255 ,255, 255)50%, rgb(37,37,37)50%) !important;
            background-size: 200% 100% !important;

        }
        .row>* {
            padding-right: 0;
        }
        @media (max-width: 768px) {
            .Arch{
                font-size : 5vh !important;
            }
            .MyG{
                font-size : 5vh !important;
                text-align: center !important;
            }
            .MyG2{
                padding-left:65vw !important;
                padding-right:65vw !important;
                text-align: center !important;
            }
            .MyG3{
                padding-left:65vw !important;
                padding-right:65vw !important;
                text-align: center !important;
            }
            .but{
                text-align: center !important;
            }
        }
    </style>
</head>
<body >
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow: hidden;">
            <nav class="navbar shadow-0 navbar-dark navbar-expand-lg navbar-light " style="background-color: #0E1B1B; min-height: 6rem;">
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
                        <h2>Robert Cruise Sr.</h2>
                    </a>
                    <div
                        class="collapse navbar-collapse justify-content-center"
                        id="navbarCenteredExample"
                    >
                        <!-- Left links -->
                        <ul class="navbar-nav navbar-brand">
                            <li class="nav-item pe-4">
                                <a class="nav-link active hua" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link active hua" aria-current="page" href="#">Works</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link active hua" aria-current="page" href="#">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hua" aria-current="page" href="#">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <a class="navbar-brand" href="#">
                        <h2><div style="font-size: 3vh;">
                                <i class="fab fa-facebook pe-3"></i>
                                <i class="fab fa-instagram pe-3"></i>
                                <i class="fab fa-youtube"></i>
                            </div></h2>
                    </a>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <div style="padding-bottom: 40vh;">
                <div style="background-color: #0E1B1B;">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-lg-6 position-relative" style="min-height: 40vh;">
                            <div class="position-absolute top-100 start-0 translate-middle d-none d-sm-block">
                                <img id="photo" style="padding-left: 50vw; height: 50vh;" src="lp_designs/img/Rectangle 13.png" alt="" srcset="">
                            </div>
                            <!-- for mobile view -->
                            <div class="position-absolute top-100 start-50 translate-middle d-block d-sm-none">
                                <img id="photo" style="height: 50vh;" src="lp_designs/img/Rectangle 13.png" alt="" srcset="">
                            </div>
                        </div>


                        <div class="col-lg-6" style="min-height: 40vh;">
                            <div class="container pt-5 text-light">
                                <div id="lineAn" class="title line" style="font-size: 4vh; text-align: end; font-family: 'Playfair Display', serif;">Designer Architect</div>
                                <p style=" padding-top: 5vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit elementum ut dui sed augue ultrices phasellus ullamcorper condimentum ut suspendisse viverra ornare sit venenatis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #0E1B1B;">
                <div class="position-relative" style="min-height: 100vh;">
                    <div class="position-absolute bottom-0 start-0 d-none d-sm-block">
                        <img data-lag="0.5" src="lp_designs/img/Rectangle 1.jpg" style="height: 90vh;" alt="" srcset="">
                    </div>
                    <!-- for mobile view -->
                    <div class="d-block d-sm-none">
                        <div class="center" style="min-height: 100vh;">
                            <p data-lag="0.3" class="Arch text-center" style="font-size: 17vh; line-height: 100%; font-family: 'Playfair Display', serif; color: wheat;">Architecture <br>Room</p>
                            <img data-lag="0.5" src="lp_designs/img/Rectangle 1.jpg" style="height: 30vh;" alt="" srcset="">
                        </div>
                    </div>
                    <div class="position-absolute top-0 end-0 d-none d-sm-block">
                        <p data-lag="0.3" class="Arch" style="font-size: 17vh; line-height: 100%; font-family: 'Playfair Display', serif; color: wheat;">Architecture <br>Room</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-11 position-relative center text-light" style="min-height: 60vh; background-color: #070F0F; margin-top: -10vh;">
                    <div id="Bdiv" style="z-index: 1;">
                        <div class=" d-block d-sm-none">
                            <div class=" d-flex align-items-center justify-content-center">
                                <div class="bg" style="height: 50vh;width: 50vh; background-image: url(lp_designs/img/Rectangle\ 8.png);"></div>
                            </div>
                        </div>
                        <p class="MyG" style="font-size: 8vh; margin-top: 15vh; z-index: 1; font-family: 'Playfair Display', serif;">My Gallery</p>
                        <p class="MyG2" style="width: 100vh; font-size: 2vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit elementum ut dui sed augue ultrices phasellus ullamcorper condimentum ut suspendisse viverra ornare sit venenatis</p>
                        <p class="MyG3" style="font-family: 'Playfair Display', serif; color: #6B6B6B; font-size: 3vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit </p>
                        <div class="pb-4 but">
                            <button type="button" class="btn btn-lg btn-primary" style="min-width: 15vh;">View</button>
                        </div>
                    </div>
                    <div class="position-absolute top-50 start-0 translate-middle d-none d-sm-block" style="margin-top: 80px;">
                        <div id="img3" class="bg" style="height: 50vh; width:50vh; background-image: url(lp_designs/img/Rectangle\ 8.png);">
                        </div>
                    </div>

                </div>
            </div>
            <div style="padding-top: 10vh;">
                <div id="text" class="title line2 text-black center" style="font-size: 6vh; text-align: end; height: 20vh; font-family: 'Playfair Display', serif; font-weight: lighter;">Recent Works</div>
                <p style="padding-left: 15vh; padding-right: 15vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit elementum ut dui sed augue ultrices phasellus ullamcorper condimentum ut suspendisse viverra ornare sit venenatis</p>
            </div>
            <div class="row" style="padding-top: 10vh;">
                <div class="col-lg">
                    <div class="position-relative" style="min-height: 70vh;">
                        <div class="position-absolute top-0 end-0 d-none d-sm-block">
                            <div id="img4" class="bg" style="height: 50vh; width:60vh; background-image: url(lp_designs/img/Rectangle\ 10.png);">
                                <div class="position-relative h-100">
                                    <div class="position-absolute top-100 start-0 translate-middle" style="margin-left: -5vw;">
                                        <img id="img5" class="bg" src="lp_designs/img/Rectangle 11.png" style="height: 30vh;" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle text-light">
                                <button id="B1" type="button" class="btn btn-lg btn-primary">View Works</button>
                            </div>
                        </div>
                        <!-- for mobile view -->
                        <div class="d-block d-sm-none">
                            <div class="d-flex align-items-center justify-content-center">
                                <div id="img4i" class="bg d-flex align-items-center justify-content-center" style="height: 50vh; width:60vh; background-image: url(lp_designs/img/Rectangle\ 10.png);">
                                    <div class="position-relative h-100">
                                        <div class="position-absolute top-100 start-0 translate-middle">
                                            <div id="img5i" class="bg" style="background-image: url(lp_designs/img/Rectangle\ 11.png); height: 30vh; width: 30vh;">
                                                <div class="position-absolute top-100 start-50 translate-middle text-light">
                                                    <button id="B1" type="button" class="btn btn-lg btn-primary">View Works</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg">
                    <div class="center text-black" style="height: 70vh; padding-left: 8vw; padding-right: 8vw";>
                        <div id="WoNa">
                            <h1 style="font-size: 6vh; font-family: 'Playfair Display', serif; text-align: center;">Work Name</h1>
                            <p style="font-size: 2vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit elementum ut dui sed augue ultrices phasellus ullamcorper condimentum ut suspendisse viverra ornare sit venenatis</p>
                        </div>
                    </div>

                </div>

                <div class="d-none d-sm-block">
                    <div class="row" style="padding-bottom: 35vh;">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9" style="background-color: #0E1B1B;">
                            <div class="row">
                                <div class="col-lg"></div>
                                <div class="col-lg">
                                    <div id="ReBl" class="title line3 text-light center ps-3 ps-lg-0" style="font-size: 6vh; text-align: end; height: 20vh; font-family: 'Playfair Display', serif;">Recent Blogs</div>
                                </div>
                            </div>
                            <div class="position-relative" style="height: 30vh;">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex text-light" style="margin-left: -18vw;">
                                    <div id="Blog1" class="p-1 bg position-relative" style="background-image: url(lp_designs/img/Rectangle\ 19.png); height: 40vh; width: 40vh;">
                                        <div class="position-absolute top-100 start-50 translate-middle">
                                            <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                                <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                            </div>
                                        </div>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div id="Blog2" class="p-1 bg position-relative" style="background-image: url(lp_designs/img/Rectangle\ 19\ \(1\).png); min-height: 40vh; width: 40vh;">
                                        <div class="position-absolute top-100 start-50 translate-middle">
                                            <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                                <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                            </div>
                                        </div>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div id="Blog3" class="p-1 bg position-relative" style="background-image: url(lp_designs/img/Rectangle\ 19\ \(2\).png); height: 40vh; width: 40vh;">
                                        <div class="position-absolute top-100 start-50 translate-middle">
                                            <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                                <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute top-100 start-100 translate-middle">
                                    <button id="B2" type="button" class="btn btn-lg btn-primary" style="margin-left: -20vh;">View Blogs</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- for mobile view -->
                <div class="d-block d-sm-none">
                    <div style="background-color: #0E1B1B; height: 30vh;">
                        <div id="ReBl" class="title line3 text-light center ps-3 ps-lg-0" style="font-size: 3vh; text-align: end; height: 10vh; font-family: 'Playfair Display', serif;">Recent Blogs</div>
                        <div class="row"style="min-height: 20vh;">
                            <div class="col bg" style="background-image: url(lp_designs/img/Rectangle\ 19.png);"></div>
                            <div class="col bg" style="background-image: url(lp_designs/img/Rectangle\ 19\ \(1\).png);"></div>
                            <div class="col bg" style="background-image: url(lp_designs/img/Rectangle\ 19\ \(2\).png);"></div>
                        </div>
                        <div class="position-relative">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <button id="B2" type="button" class="btn btn-lg btn-primary" >View Blogs</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-column-reverse flex-lg-row" style=" background-color: #0E1B1B;">
                    <div class="col-lg-4 text-light" style="border-right: 1px solid white;">

                        <div class="d-flex align-items-center justify-content-between text-light small" style="min-height: 15vh; padding: 15px">
                            <p style="font-size: 2vh;">Copyright 2023</p>
                            <p style="font-size: 2vh;">Robert Cruise Sr.</p>
                        </div>


                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center justify-content-between text-light" style="height: 15vh; padding: 15px">
                            <div style="font-size: 2vh; margin-top: -1vh;">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                            <p style="font-size: 2vh;">Designed By Wooble</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script src='../gsap/minified/gsap.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/SplitText.min.js'></script>
<script src='../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap/minified/ScrollSmoother.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    let mm = gsap.matchMedia();
    mm.add("(min-width: 800px)", () => {
        gsap.to("#photo",{
            x:"20%",scale:1.1,opacity:0,
            scrollTrigger: {trigger: "#photo",start: "top 20%",end: "bottom 20%",markers:false,scrub : 2,
            }
        })
    });

    gsap.to("#lineAn",{
        x:"-10%",
        scrollTrigger: {trigger: "#lineAn",start: "top",end: "bottom",markers:false,scrub : 2,
        }
    })
    gsap.to("#img3",{
        x:"-10%",opacity:0,
        scrollTrigger: {trigger: "#img3",start: "top",end: "bottom",markers:false,scrub : true,
        }
    })
    let mm2 = gsap.matchMedia();
    mm2.add("(min-width: 800px)", () => {
        gsap.to("#Bdiv",{
            y:"10%",opacity:0,
            scrollTrigger: {trigger: "#Bdiv",start: "top",end: "bottom",markers:false,scrub : true,
            }
        })
    });


    gsap.from("#text",{
        x:"100", opacity:0,
        scrollTrigger:{trigger:"#text",scrub:2,start:"top 100%",end:"bottom 80%",
        },
    });

    gsap.from("#img5",{
        y:"-30%",x:"30%",opacity:0,
        scrollTrigger: {trigger: "#img5",start: "top 80%",end: "bottom 70%",scrub : 2, delay:2,
        }
    })
    gsap.from("#img4",{
        y:"-20%",x:"20%",opacity:0,
        scrollTrigger: {trigger: "#img4",start: "top 70%",end: "bottom 60%",scrub : 2,
        }
    })
    gsap.from("#img5i",{
        x:"-30%",opacity:0,
        scrollTrigger: {trigger: "#img5i",start: "top 80%",end: "bottom 70%",scrub : true,
        }
    })
    gsap.from("#img4i",{
        y:"20%",opacity:0,
        scrollTrigger: {trigger: "#img4i",start: "top 70%",end: "bottom 60%",scrub : true,
        }
    })

    gsap.from("#B1",{
        x:"-20%",opacity:0,
        scrollTrigger: {trigger: "#B1",start: "top 70%",end: "bottom 60%",scrub : 2,
        }
    })
    gsap.from("#B2",{
        x:"-50%",opacity:0,skewY: 20,
        scrollTrigger: {trigger: "#B2",start: "top 70%",end: "bottom 60%",scrub : true,
        }
    })
    gsap.from("#WoNa",{
        y:"-90%",x:"-10%",opacity:0,
        scrollTrigger: {trigger: "#WoNa",start: "top 70%",end: "bottom 60%",scrub : 2,
        }
    })
    gsap.from("#ReBl",{
        x:"-10%",opacity:0,
        scrollTrigger: {trigger: "#ReBl",start: "top 80%",end: "bottom 60%",scrub : 2,
        }
    })
    gsap.from("#Blog1",{
        x:"-50%",opacity:0,skewY: 20,
        scrollTrigger: {trigger: "#Blog1",start: "top 70%",end: "bottom 75%",scrub : 2,
        }
    })
    gsap.from("#Blog2",{
        x:"-50%",opacity:0,skewY: 20,
        scrollTrigger: {trigger: "#Blog2",start: "top 70%",end: "bottom 75%",scrub : 2,
        }
    })
    gsap.from("#Blog3",{
        x:"-50%",opacity:0,skewY: 20,
        scrollTrigger: {trigger: "#Blog3",start: "top 70%",end: "bottom 75%",scrub : 2,
        }
    })
</script>

<script>

    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:4,
        smoothTouch:0.1,effects:true
    })
</script>
</body>
</html>