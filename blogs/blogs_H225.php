<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1'] ?> | Blogs</title>
    <!-- Wooble icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
    <!-- Google Fonts Abel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- Google Fonts Work Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
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
        .blog_section:hover{
            cursor: pointer;
            background: rgba(200, 200, 200, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-right: 0px solid !important;
            border-radius: 20px;
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
        <div class="container-fluid" style="background-color: #FEEEB2;">

            <div class="container g-5 py-3">
                <h1 class="text-center fw-light py-5 text-capitalize blog_heading" style="color: rgba(113, 76, 41, 1); font-family: 'Poppins', sans-serif;">The Blog Section of Casper’s</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <!-- 1st Blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img7.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 2nd Blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img6.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 3rd Blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img5.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 4th blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 5th blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 6th blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 7th blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card7" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 8th blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card8" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img6.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>
                <!-- 9th blog -->
                <div class="col-lg-3 d-flex justify-content-center m-3 blog_card9" >
                    <div class="text-center blog_section p-4" style="border-right: 1px solid #A7B1A9;">
                        <div class="" style="background-image: url('../architect/architect4/img4/img5.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                        <h1 class="text-capitalize mt-4 mx-2" style="color: #714C29; font-family: 'Work Sans', sans-serif;">The Blog Section Of Casper’s</h1>
                        <p class="text-capitalize text-secondary">Read Now</p>
                    </div>
                </div>

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
    gsap.from(".blog_heading",{x:-100, y: -100, opacity: 0, duration: 2.5, ease: "bounce.out"});
    const blog_card = gsap.utils.toArray(".blog_card");
    gsap.from(blog_card, { opacity: 0, stagger: 0.3, x:100, y:100});
    gsap.from(".blog_card7", { opacity: 0, stagger: 0.3, x:100, y:100,scrollTrigger:{trigger:".blog_card7",start: "top bottom",end: "+=50%",markers: false,scrub: true}});
    gsap.from(".blog_card8", { opacity: 0, stagger: 0.3, x:100, y:100,scrollTrigger:{trigger:".blog_card8",start: "top bottom",end: "+=50%",markers: false,scrub: true}});
    gsap.from(".blog_card9", { opacity: 0, stagger: 0.3, x:100, y:100,scrollTrigger:{trigger:".blog_card9",start: "top bottom",end: "+=50%",markers: false,scrub: true}});
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