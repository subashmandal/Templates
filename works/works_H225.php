<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1'] ?> | Works </title>
    <!-- Wooble icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
    <!-- Google Fonts Abel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- Google Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <style>
        li a:hover{
            color: #F3AE7D !important;
        }
        li a:active{
            color: white !important;
        }
        .row>*{
            padding-left: 0;
        }
        .blog_img_section:hover .blog_img{
            cursor: pointer;
            opacity: 0.9;
        }

        @media (max-width:1000px){
            .row>*{
                padding-left: 10px !important;
            }
            .blog_img{
                margin-top: 10px !important;
                margin-bottom: 50px;
            }
        }
        .blog1, .blog2, .blog3, .blog4{
            transition: 1s;
        }
        .blog1:hover, .blog2:hover,.blog3:hover, .blog4:hover{
            transform: scale(1.05) !important;
            cursor: pointer;
        }
    </style>
</head>
<body style="overflow-x:hidden !important;">
<!-- Start your project here-->
<div id="smooth-wrapper" style="overflow-x: hidden !important;">
    <div id="smooth-content" style="overflow-x: hidden !important;">
        <header class="shadow-0" style="background: #FEEEB2; border-bottom: 5px solid #623300;">
            <nav class="navbar navbar-expand-lg navbar-light shadow-0 container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="architect4.html">
                        <small class="fw-lighter ls-wide fs-1" style="font-family: 'Abel', sans-serif; color: #F3AE7D;">Casper's</small>
                    </a>
                    <button
                        class="navbar-toggler"
                        style="color: #F3AE7D;"
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
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-family: 'Abel', sans-serif;">
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide fw-bold" style="color: #714C29;" href="architect4.html">Home</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide fw-bold" style="color: #714C29;" href="work.html">Works</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide fw-bold" style="color: #714C29;" href="#">About me</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide fw-bold" style="color: #714C29;" href="blog.html">Blogs</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide fw-bold" style="color: #714C29;" href="gallery.html">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                </div>
            </nav>
        </header>
        <!-- 1st section -->
        <div style="background-color: #FEEEB2;">

            <div class="container g-5 py-3">
                <h1 class="text-center fw-light py-5 mt-5 work_heading" style="color: rgba(113, 76, 41, 1); font-family: 'Poppins', sans-serif;">The Work Section of Casper’s</h1>
                <!-- 1st blog -->
                <div class="row mt-4 blog1" style="background-color: #714C29; border-radius: 30px;">
                    <div class="col-lg-4 position-relative blog_img_section d-flex justify-content-center align-items-center">
                        <div class="blog_img" style="background-image: url('../architect/architect4/img4/img1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;border-radius: 30px; box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.5);">
                        </div>
                        <a href=""><button type="button" class="btn fs-6 text-capitalize ls-wider rounded-5 position-absolute top-50 start-50 translate-middle" style="background: #F3AE7D; color: white;">View</button></a>
                    </div>
                    <div class="col-lg-8 text-start d-flex align-items-center">
                        <div class="mx-3">
                            <h1 class="text-white">Work Title</h1>
                            <p class="text-white opacity-90 fw-lighter mt-4 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore earum minus quos dolor voluptates eaque. Quos temporibus nisi suscipit, nihil et minus laudantium nesciunt quasi dolorum ea quas atque officia blanditiis aspernatur repellendus eligendi est dolor quis dicta optio similique eaque? Esse nam ipsum alias quis possimus minus quisquam?</p>
                        </div>
                    </div>
                </div>

                <!-- 2nd blog -->
                <div class="row mt-4 blog2" style="background-color: #714C29; border-radius: 30px;">
                    <div class="col-lg-4 position-relative blog_img_section d-flex justify-content-center align-items-center">
                        <div class="position-relative blog_img" style="background-image: url('../architect/architect4/img4/img2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;border-radius: 30px; box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.5);">
                            <a href=""><button type="button" class="btn fs-6 text-capitalize ls-wider rounded-5 position-absolute top-50 start-50 translate-middle" style="background: #F3AE7D; color: white;">View</button></a>
                        </div>
                    </div>
                    <div class="col-lg-8 text-start d-flex align-items-center">
                        <div class="mx-3">
                            <h1 class="text-white">Work Title</h1>
                            <p class="text-white opacity-90 fw-lighter mt-4 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore earum minus quos dolor voluptates eaque. Quos temporibus nisi suscipit, nihil et minus laudantium nesciunt quasi dolorum ea quas atque officia blanditiis aspernatur repellendus eligendi est dolor quis dicta optio similique eaque? Esse nam ipsum alias quis possimus minus quisquam?</p>
                        </div>
                    </div>
                </div>
                <!-- 3rd blog -->
                <div class="row mt-4 blog3" style="background-color: #714C29; border-radius: 30px;">
                    <div class="col-lg-4 position-relative blog_img_section d-flex justify-content-center align-items-center">
                        <div class="position-relative blog_img" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;border-radius: 30px; box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.5);">
                            <a href=""><button type="button" class="btn fs-6 text-capitalize ls-wider rounded-5 position-absolute top-50 start-50 translate-middle" style="background: #F3AE7D; color: white;">View</button></a>
                        </div>
                    </div>
                    <div class="col-lg-8 text-start d-flex align-items-center">
                        <div class="mx-3">
                            <h1 class="text-white">Work Title</h1>
                            <p class="text-white opacity-90 fw-lighter mt-4 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore earum minus quos dolor voluptates eaque. Quos temporibus nisi suscipit, nihil et minus laudantium nesciunt quasi dolorum ea quas atque officia blanditiis aspernatur repellendus eligendi est dolor quis dicta optio similique eaque? Esse nam ipsum alias quis possimus minus quisquam?</p>
                        </div>
                    </div>
                </div>
                <!-- 4th blog -->
                <div class="row mt-4 blog4" style="background-color: #714C29; border-radius: 30px;">
                    <div class="col-lg-4 position-relative blog_img_section d-flex justify-content-center align-items-center">
                        <div class="position-relative blog_img" style="background-image: url('../architect/architect4/img4/img4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;border-radius: 30px; box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.5);">
                            <a href=""><button type="button" class="btn fs-6 text-capitalize ls-wider rounded-5 position-absolute top-50 start-50 translate-middle" style="background: #F3AE7D; color: white;">View</button></a>
                        </div>
                    </div>
                    <div class="col-lg-8 text-start d-flex align-items-center">
                        <div class="mx-3">
                            <h1 class="text-white">Work Title</h1>
                            <p class="text-white opacity-90 fw-lighter mt-4 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. A dolore earum minus quos dolor voluptates eaque. Quos temporibus nisi suscipit, nihil et minus laudantium nesciunt quasi dolorum ea quas atque officia blanditiis aspernatur repellendus eligendi est dolor quis dicta optio similique eaque? Esse nam ipsum alias quis possimus minus quisquam?</p>
                        </div>
                    </div>
                </div>
                <!-- 5th empty section -->
                <div style="height: 400px;"></div>

            </div>


        </div>
        <footer class="text-center text-white">
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: #714C29;">
                <p>Copyright @ 2023 <i class="fas fa-heart" style="color: red;"></i>  <a href="wooble.org" class="text-white">Wooble.org</a></p>
            </div>
            <!-- Copyright -->
        </footer>
    </div></div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<!-- Gsap -->
<script src="../gsap/minified/gsap.min.js"></script>
<script src="../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../gsap//minified/MotionPathPlugin.min.js"></script>
<script src="../gsap/minified/DrawSVGPlugin.min.js"></script>
<script src="../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../gsap/minified/SplitText.min.js"></script>

<!-- gsap Script -->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, DrawSVGPlugin, MotionPathPlugin, gsap);

    gsap.from(".work_heading",{x:-100, y: -100, opacity: 0, duration: 2.5, ease: "bounce.out"});
    gsap.from(".blog1",{y:'40%',opacity:0,scrollTrigger:{trigger:".blog1",start: "top 150%",end: "+=100%",scrub: true}});
    gsap.from(".blog2",{y:'40%', opacity:0,scrollTrigger:{trigger:".blog2",start: "top 150%",end: "+=100%",scrub: true}});
    gsap.from(".blog3",{y:'40%', opacity:0,scrollTrigger:{trigger:".blog3",start: "top 150%",end: "+=100%",scrub: true}});
    gsap.from(".blog4",{y:'40%', opacity:0,scrollTrigger:{trigger:".blog4",start: "top 150%",end: "+=100%",scrub: true}});
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