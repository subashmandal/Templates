<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallery</title>
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
    <link rel="stylesheet" href="../css/mdb.min.css" />
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
        .image{
            transition: 1s;
        }
        .image:hover{
            transform: scale(1.02) !important;
            border-radius: 10px !important;
            cursor: pointer;
            -webkit-box-shadow: 0px 0px 9px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 9px 2px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 9px 2px rgba(0,0,0,0.75);
            opacity: 0.8 !important;
        }
        @media (max-width:1024px){
            .image{
                margin-top: 10px !important;
                margin-left: 0px !important;
            }
            .row{
                margin: 0px !important;
            }
        }
        @media (max-width:600px){
            .image{
                height: 400px !important;
                margin-top: 10px !important;
                margin-left: 0px !important;
            }
            .row{
                margin: 0px !important;
            }
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
        <div class="container-fluid" style="background-color: #714C29;">

            <div class="container py-3">
                <h1 class="text-center fw-light py-5 text-capitalize gallery_heading" style="color: white; font-family: 'Poppins', sans-serif;">The Photo Gallery of Casper’s</h1>
                <p class="text-capitalize text-white text-center fw-light gallery_para">The Nature is Beautiful<br>find your favorite picture around the world.</p>
            </div>

            <div class="row mx-3 me-lg-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img5.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2nd div -->
                <div class="col-lg-6 pe-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 850px;"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img7.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;"></div>
                            </div>
                            <div class="row">
                                <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img8.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;"></div>
                    </div>
                </div>
            </div>
            <!-- 2nd gallery section -->

            <div class="row mx-3 me-lg-5">
                <div class="col-lg-6">
                    <div class="row px-2">
                        <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img5.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2nd div -->
                <div class="col-lg-6 pe-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 850px;"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img7.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;"></div>
                            </div>
                            <div class="row">
                                <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img8.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="m-4 image" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 400px;"></div>
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
<script type="text/javascript" src="../js/mdb.min.js"></script>
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

    gsap.from(".gallery_heading",{x:-100, y: -100, opacity: 0, duration: 2.5, ease: "bounce.out"});
    gsap.from(".gallery_para",{x:0, y: -100, opacity: 0, duration: 2.5, ease: "bounce.out"});
    //  gsap skew effect start
    let proxy = { skew: 0 },
        skewSetter = gsap.quickSetter(".image", "skewY", "deg"), // fast
        clamp = gsap.utils.clamp(-15, 15); // don't let the skew go beyond 20 degrees.

    ScrollTrigger.create({
        onUpdate: (self) => {
            let skew = clamp(self.getVelocity() / -200);
            if (Math.abs(skew) > Math.abs(proxy.skew)) {
                proxy.skew = skew;
                gsap.to(proxy, {skew: 0, duration: 1, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
            }
        }
    });

    gsap.set(".image", {transformOrigin: "right center", force3D: true});
    // gsap skew effect end


</script>

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:2.5,
    })
</script>
</body>
</html>