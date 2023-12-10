<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1']; ?></title>
    <!-- Wooble icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
    <!-- Google Fonts Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .about{
            position: relative;
            margin-top: 20px;
        }
        .about::after{
            content:'';
            height:2px;
            width:25%;
            background: #5B4A1D;
            position:absolute;
            left:calc(10% - 10%);
            bottom:-5px;
        }
        .flip-container {
            -webkit-perspective: 1000;
            margin: 0 auto 60px auto;
            width: 320px;
            height: 270px;
            border-radius: 15px;
            cursor:pointer;
        }

        .flip-container:hover .flipper {
            -webkit-transform: rotateY(180deg);
            cursor:pointer;
        }
        .flip-container.hover .flipper {
            -webkit-transform: rotateY(180deg);
            cursor:pointer;
        }

        .front {
            width: 320px;
            height: 270px;
            border-radius: 15px;
            -webkit-backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }

        .front h3 {
            text-align: start;
            font-size: 18px;
            margin-left: 10px;
            font-family: "Poppins", sans-serif;
            color: white;
        }

        .back {
            width: 320px;
            height: 270px;
            border-radius: 15px;
            -webkit-backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform: rotateY(180deg);
            text-align: center;
            font-family: "Poppins", sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .back h3 {
            margin-top: 20px;
        }

        .back p {
            font-size: 14px;
            font-family: "Poppins", sans-serif;
        }

        .flipper {
            -webkit-transition: 0.6s;
            -webkit-transform-style: preserve-3d;
            position: relative;
        }
        @media (max-width:420px){
            .any{
                width: 100% !important;
                padding-top:20px !important;
                padding-bottom:20px !important;
            }
        }


        .header-section {
            margin: 100px auto 0;
        }

        svg {
            max-width: 600px;
            overflow: visible;
            /* margin-top: 60vh; */
        }

        .ball {
            fill: #5B4A1D;
            visibility: hidden;
        }

        .line {
            fill: none;
            stroke: white;
            stroke-width: 2px;
        }
        text {
            fill: white;
            font-size: 15px;
            visibility: hidden;
        }


        @media (max-width: 800px) {
            .architect_img {
                min-height: 300px !important;
            }
        }

        @media (max-width: 600px) {
            .architect_img {
                min-height: 300px !important;
            }
        }
        @media (max-width: 400px) {
            .architect_img {
                min-height: 300px !important;
            }
        }
        .random-word {
            display: inline-block;
            text-transform:capitalize;
            color: rgba(91, 74, 29, 1);
            letter-spacing: 1px;
            width: auto;
            /*   transition: all 1.25s; */
            animation: slidedown 4s infinite;
            -webkit-animation: slidedown 4s infinite;
            -moz-animation: slidedown 4s infinite;
        }

        @keyframes slidedown {
            0% {
                opacity: 50;
            }

            5% {
                opacity: 0;
                transform: translateY(0.5em);
            }

            7% {
                transform: translateY(-1em);
            }

            10% {
                opacity: 0;
            }

            20% {
                transform: translateY(0);
                opacity: 100;
            }
        }
        .btn1:hover{
            background-color: black !important;
        }
        .work_1:hover, .work_2:hover, .work_3:hover{
            color: #5B4A1D !important;
        }
        .architect_img:hover{
            filter: grayscale(0)!important;
        }
        .nav-link:hover{
            color: black !important;
        }
        .btn_shake:hover{
            animation: shake 1s linear infinite;
        }
        @keyframes shake {
            0%{
                transform: scale(1);
            }
            50%{
                transform: scale(1.4);
            }
            100%{
                transform: scale(1);
            }

        }
    </style>
</head>
<body style="overflow-x:hidden !important;">
<!-- Start your project here-->
<div id="smooth-wrapper" style="overflow-x: hidden !important;">
    <div id="smooth-content" style="overflow-x: hidden !important;">
        <header class="shadow-0" style="background: #5B4A1D;">
            <nav class="navbar navbar-expand-lg navbar-light shadow-0 container">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="architect2.html">
                        <small class="fw-bold ls-wide fs-5 . name" style="font-family: 'Ubuntu', sans-serif;">Jay<br>Gosling</small>
                    </a>
                    <button
                        class="navbar-toggler text-white"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarRightAlignExample"
                        aria-controls="navbarRightAlignExample"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarRightAlignExample">
                        <!-- Left links -->
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-family: 'Ubuntu', sans-serif;">
                            <li class="nav-item text-center">
                                <a class="nav-link  ls-wide text-white" href="<?php echo $row_user_info['username'] ?>">Home</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link  ls-wide text-white" href="works/<?php echo $row_user_info['username'] ?>">Works</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide text-white" href="#">About me</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide text-white" href="blogs/<?php echo $row_user_info['username'] ?>">Blogs</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide text-white" href="gallery/<?php echo $row_user_info['username'] ?>">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                </div>
            </nav>
        </header>
        <!-- 1st section -->
        <div style="background: #5B4A1D; overflow-x: hidden;">
            <div class="container lh-sm justify-content-start any" style="width: 40%; padding-top: 3%; padding-bottom: 3%;">
                <span class="text-light fs-1 architect_hl mx-2" style="font-weight: 500;">Any architectural work that does not express serenity is an error-Jay gosling</span>
            </div>
        </div>
        <div style="background: #5B4A1D;">
            <div class="rectangle_img" style="background-image: url('../architect/architect2/img/Rectangle 3670.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 85vh;"> </div>
        </div>
        <!-- 2nd section -->
        <div class=" text-center bg-white" style="font-family: Ubuntu; padding-top: 50px;">
            <div class="container work_p bg-white mt-5">
                <span class="fs-1" style="font-weight: 500;">What are my <span class='random-word'></span></span>
                <p class="mt-3 fs-5" style="color: #292929; opacity: 0.4;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci laborum placeat, nam beatae pariatur quod assumenda qui Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni amet suscipit, consequuntur voluptas culpa quidem quos id blanditiis doloribus esse? </p>
                <div class="mt-5 mb-3">
                    <a href="work.html"><button type="button" class="btn btn-rounded text-capitalize fs-5 fw-light explore btn1" style="background: #5B4A1D; color: #ffffff;">Explore</button></a>
                </div>
            </div>
        </div>


        <!-- work -->
        <div class="bg-white text-black" style="overflow-x: hidden;">
            <div class="row flex-sm-row mx-1">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div style="overflow-y: hidden;">
                        <div class="my-5">
                            <div class="number_1" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">1</div>
                            <div class="work_1">
                                <h1>Interior Designer</h1>
                                <p class="opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, numquam.</p>
                            </div>
                        </div>
                        <div class="my-5">
                            <div class="number_2" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">2</div>
                            <div class="work_2">
                                <h1>Problem-Solving and Analytics</h1>
                                <p class="opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, numquam.</p>
                            </div>
                        </div>
                        <div class="my-5">
                            <div class="number_3" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">3</div>
                            <div class="work_3">
                                <h1>Buildings & Constructions</h1>
                                <p class="opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, numquam.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4 lightbox">
                    <img src="../architect/architect2/img/Rectangle 1.png" alt="rectangle_imghv" class="img-fluid work_img" style="height: 500px;">
                </div>
            </div>
        </div>
        <!-- about section -->
        <div class="bg-black" style="overflow-x: hidden;">
            <div class="container" >
                <div class="row flex-column-reverse flex-sm-row" >
                    <div class="col-lg-6 flex-column d-flex align-items-center justify-content-center">
                        <div class="about_me ms-3">
                            <div class="text-uppercase fs-1 fw-bold ls-wider about" style="color: #fff;">About Me</div>
                            <div class="my-5 d-inline-flex" style="color: rgba(255, 255, 255, 0.75);" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non et asperiores ad est natus omnis at ipsam esse suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, voluptas. Laboriosam ullam iusto temporibus et.Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            <a href="blog.html"><button type="button" class="btn btn-rounded mb-4 text-capitalize fs-4 btn1" style="background: #5B4A1D; color: #ffffff;">My Blogs</button></a>
                        </div>
                    </div>
                    <!-- About Profile Image-->
                    <div class="col-md-6 col-12 text-center d-flex align-items-center justify-content-center my-5">
                        <div class="about_me_img" style="background-image: url('https://assets-news.housing.com/news/wp-content/uploads/2021/07/09191021/How-to-hire-an-architect-for-your-home-construction-FB-1200x700-compressed.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; width:400px; height: 400px;"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-black" style="height: 100px;"></div>
            <div class="container" style="margin-top: -70px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front text-center bg-secondary">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid m-2" style="border-radius: 10%; width:150px; height:150px;"/>
                                    <h3>Blog 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, exercitationem! </h3>
                                    <p class="text-start ms-3">Newest</p>
                                </div>
                                <div class="back bg-secondary text-white">
                                    <p class="fs-6 p-2 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, doloribus officia harum <a href="#" class="text-white fw-bold">Read More.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front text-center bg-secondary">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid m-2" style="border-radius: 10%; width:150px; height:150px;"/>
                                    <h3>Blog 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, exercitationem! </h3>
                                    <p class="text-start ms-3">Newest</p>
                                </div>
                                <div class="back bg-secondary text-white">
                                    <p class="fs-6 p-2 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, doloribus officia harum <a href="#" class="text-white fw-bold">Read More.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front text-center bg-secondary">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid m-2" style="border-radius: 10%; width:150px; height:150px;"/>
                                    <h3>Blog 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, exercitationem! </h3>
                                    <p class="text-start ms-3">Newest</p>
                                </div>
                                <div class="back bg-secondary text-white">
                                    <p class="fs-6 p-2 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, doloribus officia harum <a href="#" class="text-white fw-bold">Read More.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front text-center bg-secondary">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid m-2" style="border-radius: 10%; width:150px; height:150px;"/>
                                    <h3>Blog 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, exercitationem! </h3>
                                    <p class="text-start ms-3">Newest</p>
                                </div>
                                <div class="back bg-secondary text-white">
                                    <p class="fs-6 p-2 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, doloribus officia harum <a href="#" class="text-white fw-bold">Read More.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front text-center bg-secondary">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid m-2" style="border-radius: 10%; width:150px; height:150px;"/>
                                    <h3>Blog 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, exercitationem! </h3>
                                    <p class="text-start ms-3">Newest</p>
                                </div>
                                <div class="back bg-secondary text-white">
                                    <p class="fs-6 p-2 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, doloribus officia harum <a href="#" class="text-white fw-bold">Read More.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front text-center bg-secondary">
                                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid m-2" style="border-radius: 10%; width:150px; height:150px;"/>
                                    <h3>Blog 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, exercitationem! </h3>
                                    <p class="text-start ms-3">Newest</p>
                                </div>
                                <div class="back bg-secondary text-white">
                                    <p class="fs-6 p-2 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, distinctio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, doloribus officia harum <a href="#" class="text-white fw-bold">Read More.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" style="font-family: Ubuntu;">
    <span class="fs-1 split" style="font-weight: 500; overflow: hidden;">A World of <span style="color: rgba(91, 74, 29, 1);
        ">Architectures</span></span>
            <div class="container para_architect">
                <p class="mt-3" style="color: #292929; opacity: 0.4;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci laborum placeat, nam beatae pariatur quod assumenda qui Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni amet suscipit, consequuntur voluptas culpa quidem quos id blanditiis doloribus esse? </p>
            </div>
            <!-- Photo Grid Gallery -->
            <div class="row" style="overflow-x: hidden;">
                <div class="col-lg-4">
                    <div class="mb-4 img_grid">
                        <div class="architect_img" style="background-image: url('../architect/architect2/img/Grey concrete building under the blue sky.png'); background-position: center; background-repeat: no-repeat; background-size: cover; filter:grayscale(1); min-height: 500px;"></div>
                        <div class="text-start ms-3">
                            <p>Category</p>
                            <h4 style="line-height: 10px;">Building</h4>
                        </div>
                    </div>
                    <div class="mb-4 img_grid">
                        <div class="architect_img" style="background-image: url('../architect/architect2/img/Rectangle 2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; filter:grayscale(1); min-height: 500px;"></div>
                        <div class="text-start ms-3">
                            <p>Category</p>
                            <h4 style="line-height: 10px;">Sunrise</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4 img_grid">
                        <div class="architect_img" style="background-image: url('../architect/architect2/img/Rectangle 3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; filter:grayscale(1); min-height: 1080px;"></div>
                        <div class="text-start ms-3">
                            <p>Category</p>
                            <h4 style="line-height: 10px;">Vintage Building</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-4 img_grid">
                        <div class="architect_img" style="background-image: url('../architect/architect2/img/Rectangle 4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; filter:grayscale(1); min-height: 500px;"></div>
                        <div class="text-start ms-3">
                            <p>Category</p>
                            <h4 style="line-height: 10px;">Appartment</h4>
                        </div>
                    </div>
                    <div class="mb-4 img_grid">
                        <div class="architect_img" style="background-image: url('../architect/architect2/img/Rectangle 1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; filter:grayscale(1); min-height: 500px;"></div>
                        <div class="text-start ms-3">
                            <p>Category</p>
                            <h4 style="line-height: 10px;">Corporate Building</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center my-4">
                <div class="col">
                    <a href="gallery.html">
                        <button type="button" class="btn btn-outline-black btn-floating btn_shake">
                            <i class="fas fa-arrow-right fa-2x"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <footer class="container-fluid text-white"  style="background: #5B4A1D; font-family: 'Ubuntu', sans-serif;">

            <div class="text-center text-lg-start">
                <!-- Section: Social media -->
                <div class="row flex-sm-row flex-column">
                    <div class="col py-lg-4 py-2">
                        <p>Copywrite goes to - <a href="wooble.org" class="text-white">Wooble.org</a></p>
                    </div>
                    <div class="col d-flex justify-content-md-end justify-content-center  p-4 border-bottom">
                        <a href="https://twitter.com/WoobleO" target="_blank" class="me-4 text-reset">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/wooble_org/" target="_blank" class="me-4 text-reset">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC8LFjk9ArbwJf1f4pkloXzQ" target="_blank" class="me-4 text-reset">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/thewooble/" target="_blank" class="me-4 text-reset">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="https://www.facebook.com/theWooble" target="_blank" class="me-4 text-reset">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div></div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Gsap -->
<script src="../gsap/minified/gsap.min.js"></script>
<script src="../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../gsap/minified/MotionPathPlugin.min.js"></script>
<script src="../gsap/minified/DrawSVGPlugin.min.js"></script>
<script src="../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../gsap/minified/SplitText.min.js"></script>

<!-- gsap Script -->
<script>
    gsap.from(".user-card", { x: '-20%',repeat:-1,yoyo:true,duration:2 })
    gsap.from(".user-ui", { x: '-60%',repeat:-1,yoyo:true,duration:2 })
    gsap.from(".cursor", { x: '-80%',y: '-20%',repeat:-1,yoyo:true,duration:2, scale:0.6 })
</script>
<!-- Custom Script -->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, DrawSVGPlugin, MotionPathPlugin, gsap);
    gsap.from('.name', { opacity: 0, stagger: 0.3, x:0, y:-100});
    gsap.from('.nav-link', { opacity: 0, stagger: 0.3, x:0, y:-100});
    let mySplitText = new SplitText(".split", {type: "chars"});
    let chars = mySplitText.chars;
    gsap.from (chars, {yPercent : 130,stagger : 0.07,ease : "back.out",duration: 1,scrollTrigger:{trigger: ".split",start: "top 100%",end: "top 80%",scrub: true,marker: true}});

    var mySplitText2 = new SplitText(".architect_hl",{type:"words,chars"});
    TweenLite.set(".architect_hl",{perspective:400});
    TweenMax.staggerFrom(mySplitText2.chars, 0.8, {opacity:0, scale:0,duration:100,y:80,rotationX:180,transformOrigin:"0% 50% -50", ease:Back.easeOut}, 0.03, allDone);
    function allDone(){
        mySplitText2.revert();
    }
    gsap.from (".rectangle_img", {yPercent : 130,stagger : 0.07,ease : "back.out",duration: 1.5,});

    gsap.from(".para_architect",{opacity:0,yPercent:130,stagger:7,y:'40%',scrollTrigger:{trigger:".para_architect",start: "top bottom",end: "top 50%",marker: true,scrub: true}});

    gsap.from(".number_1", {x: "-300%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_1 ",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".number_2", {x: "-300%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_2 ",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".number_3", {x: "-300%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_3 ",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".work_1", {y: "100%",opacity:0,scrollTrigger: {trigger: ".work_1 ",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".work_2", {y: "100%",opacity:0,scrollTrigger: {trigger: ".work_2 ",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".work_3", {y: "100%",opacity:0,scrollTrigger: {trigger: ".work_3 ",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".work_p", {duration: 5,yPercent: -50,stagger: 3,scrollTrigger: {trigger: ".work_p",start: "top 100%",end: "bottom 40%",markers:false,scrub : true,}});

    gsap.from(".work_img",{opacity:0.3,x:'40%',scrollTrigger:{trigger:".work_img",start: "top bottom",end: "bottom 50%",marker: false,scrub: true}});

    gsap.from(".explore",{opacity: 0,xPercent:-130,rotate: 30,stagger:0.3,scrollTrigger:{trigger:".explore",start: "top 90%",end: "bottom 50%",markers: false,scrub: true}})

    gsap.from(".about_me",{opacity:0.3,x:'-40%',scrollTrigger:{trigger:".about_me",start: "top 100%",end: "bottom 80%",marker: false,scrub: true}})

    gsap.from(".about_me_img",{opacity:0.3,x:'40%',scrollTrigger:{trigger:".about_me_img",start: "top 100%",end: "bottom 80%",markers: false,scrub: true}})

    gsap.from(".flip-container", {opacity: 0,yPercent: 130,stagger: 0.4, duration: 5,scrollTrigger:{trigger:".flip-container",start: "top 150%",end: "bottom 20%",markers: false,scrub: true}});

    gsap.from(".img_grid", {opacity: 0.7,scale:0.7,duration: 5,scrollTrigger:{trigger:".img_grid",start: "top 100%",end: "bottom 50%",marker: false,scrub: true}});
</script>
<!-- random word animation -->
<script>
    let i = 0;

    const randomizeText = () => {
        const phrase = document.querySelector('.random-word');
        const compStyles = window.getComputedStyle(phrase);
        const animation = compStyles.getPropertyValue('animation');
        const animationTime = parseFloat(animation.match(/\d*[.]?\d+/)) * 1000;

        const phrases = ['Works.', 'Projects.'];

        i = randomNum(i, phrases.length);
        const newPhrase = phrases[i];

        setTimeout(() => {
            phrase.textContent = newPhrase;
        }, 400); // time to allow opacity to hit 0 before changing word
    }

    const randomNum = (num, max) => {
        let j = Math.floor(Math.random() * max);

        // ensure diff num every time
        if (num === j) {
            return randomNum(i, max);
        } else {
            return j;
        }
    }

    const getAnimationTime = () => {
        const phrase = document.querySelector('.random-word');
        const compStyles = window.getComputedStyle(phrase);
        let animation = compStyles.getPropertyValue('animation');

        // firefox support for non-shorthand property
        animation != "" ? animation : animation = compStyles.getPropertyValue('-moz-animation-duration');

        // webkit support for non-shorthand property
        animation != "" ? animation : animation = compStyles.getPropertyValue('-webkit-animation-duration');


        const animationTime = parseFloat(animation.match(/\d*[.]?\d+/)) * 1000;
        return animationTime;
    }

    randomizeText();
    setInterval(randomizeText, getAnimationTime());

</script>

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:0.5,
    })
</script>
</body>
</html>