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
    <link rel="stylesheet" href="flipster/jquery.flipster.min.css">
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
        .menu img{
            display: none;
        }
        .menu:hover img, .menu:focus img, .menu:active img{
            display: block !important;
        }
        .nav-item a:hover, .nav-item a:focus, .nav-item a:active{
            color: #F44336 !important;
        }
        @media (max-width:600px) {
            .name{
                font-size:xx-large !important;
            }
            .img{
                width: 320px !important;
                height: 540px !important;
            }
            .bg_img {
                width: 100% !important;
                height: 600px !important;
            }
            .content{
                width: 100% !important;
            }
        }
        .hero{
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .hero .carousel{
            width: 300px;
            margin: 100px auto 0;
            overflow: visible;
        }
        .carousel img{
            -webkit-box-reflect: below 20px linear-gradient(rgba(255,255,255,0.1),rgba(255,255,255,0.3));
        }
    </style>
</head>
<body style="overflow-x:hidden !important;">
<!-- Start your project here-->
<!-- Sidenav -->
<nav
    id="sidenav-1"
    class="sidenav"
    style="min-height: 100% !important;"
    data-mdb-hidden="true"
>
    <div class="text-center">
        <h3 class="pt-4" style="color: rgba(244, 67, 54, 1);">Rey Southee</h3>
        <h6 class="text-secondary">Engineer + Visual Designer</h6>
        <!-- Section: Social media -->
        <section class="pb-3">
            <!-- Facebook -->
            <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
            ><i class="fab fa-facebook-f"></i
                ></a>

            <!-- Twitter -->
            <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
            ><i class="fab fa-twitter"></i
                ></a>
            <!-- Instagram -->
            <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- Linkedin -->
            <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
            ><i class="fab fa-linkedin-in"></i
                ></a>
        </section>
        <hr class="m-0" />
    </div>
    <ul class="sidenav-menu">
        <li class="sidenav-item">
            <a class="sidenav-link" href="graphics1.html">
                <i class="fas fa-home fa-fw me-3" style="color: #000d23 ;"></i><span>Home</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="">
                <i class="fas fa-info-circle fa-fw me-3" style="color: #000d23 ;"></i><span>About</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="blogs.html">
                <i class="fas fa-pencil-ruler fa-fw me-3" style="color: #000d23 ;"></i><span>Skills</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="works.html">
                <i class="fas fa-toolbox fa-fw me-3" style="color: #000d23 ;"></i><span>Works</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="gallery.html">
                <i class="fas fa-user-circle fa-fw me-3" style="color: #000d23 ;"></i><span>Gallery</span></a
            >
        </li>
    </ul>
    </li>
    </ul>
</nav>
<!-- Sidenav -->
<div id="smooth-wrapper" style="overflow-x: hidden !important;">
    <div id="smooth-content" style="overflow-x: hidden !important;">
        <!-- 1st section -->
        <div class="container-fluid g-0">
            <div class="position-relative">
                <!-- Toggler -->
                <button
                    data-mdb-toggle="sidenav"
                    data-mdb-target="#sidenav-1"
                    data-mdb-ripple-radius="1"
                    class="btn text-black mt-3 mb-8 ms-3 d-block d-lg-none ripple-surface-dark"
                    aria-controls="#sidenav-1"
                    aria-haspopup="true"
                >
                    <i class="fas fa-bars fa-2x"></i>
                </button>
                <!-- Toggler -->
                <!-- hide on small device -->
                <div class="d-none d-lg-block">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-0">
                        <!-- Container wrapper -->
                        <div class="container-fluid">
                            <!-- Collapsible wrapper -->
                            <div
                                class="collapse navbar-collapse justify-content-center"
                                id="navbarCenteredExample"
                            >
                                <!-- Left links -->
                                <ul class="navbar-nav mb-2 mb-lg-0 mt-lg-4 position-relative">
                                    <li class="nav-item menu">
                                    </li>
                                    <li class="nav-item menu">
                                    </li>

                                    <li class="nav-item">
                                        <div class="menu">
                                            <img src="img/splash img.svg" alt="" class="position-absolute" style="transform: translate(0%, -40%); z-index: -1;">
                                            <a class="nav-link text-black fw-normal ms-lg-5" href="graphics1.html" data-src="img/splash img.svg">Home</a>
                                        </div>
                                    </li>

                                    <li class="nav-item menu">
                                        <img src="img/splash img.svg" alt="" class="position-absolute" style="transform: translate(0%, -40%); z-index: -1;">
                                        <a class="nav-link text-black fw-normal ms-lg-5" href="#" data-src="img/splash img.svg">About</a>
                                    </li>
                                    <li class="nav-item menu">
                                        <img src="img/splash img.svg" alt="" class="position-absolute" style="transform: translate(0%, -40%); z-index: -1;">
                                        <a class="nav-link text-black fw-normal ms-lg-5" href="blogs.html" data-src="img/splash img.svg">Blogs</a>
                                    </li>
                                    <li class="nav-item menu">
                                        <img src="img/splash img.svg" alt="" class="position-absolute" style="transform: translate(0%, -40%); z-index: -1;">
                                        <a class="nav-link text-black fw-normal ms-lg-5" aria-current="page" href="works.html" data-src="img/splash img.svg">Works</a>
                                    </li>
                                    <li class="nav-item menu">
                                        <img src="img/splash img.svg" alt="" class="position-absolute" style="transform: translate(0%, -40%); z-index: -1;">
                                        <a class="nav-link text-black fw-normal ms-lg-5" href="gallery.html" data-src="img/splash img.svg">Gallery</a>
                                    </li>
                                </ul>
                                <!-- Left links -->
                            </div>
                            <!-- Collapsible wrapper -->
                        </div>
                        <!-- Container wrapper -->
                    </nav>
                </div>
            </div>
        </div>
        <!-- Gallery section -->
        <div class="container-fluid text-center">
            <h1 class="fw-bold my-3" style="color: #F44336;">Gallery</h1>
            <div class="position-relative">
                <img src="img/Group 87.png" alt="group 4" class="position-absolute top-0 start-0 img-fluid d-none d-sm-block g-0" style="z-index: -1; margin-left: -15px;">
                <img src="img/Group 2.png" alt="group 2" class="position-absolute bottom-0 end-0 img-fluid d-none d-sm-block" style="z-index: -1; margin-right: -15px;">
                <div class="container">
                    <div class="hero d-flex justify-content-center">
                        <div class="carousel">
                            <ul class="lightbox">
                                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" class="img"></li>
                                <li><img src="https://www.shutterstock.com/image-photo/surreal-image-african-elephant-wearing-260nw-1365289022.jpg" class="img" ></li>
                                <li><img src="https://thumbs.dreamstime.com/b/view-lingaraja-temple-complex-bhubaneswar-india-odisha-view-lingaraja-temple-complex-bhubaneswar-odisha-india-165731841.jpg" class="img"  ></li>
                                <li><img src="https://www.w3schools.com/css/img_forest.jpg" class="img" ></li>
                                <li><img src="https://images.ctfassets.net/hrltx12pl8hq/3j5RylRv1ZdswxcBaMi0y7/b84fa97296bd2350db6ea194c0dce7db/Music_Icon.jpg" class="img" ></li>
                                <li><img src="https://avatars.mds.yandex.net/i?id=43788516ec2b4a11f5acc4fcd7716835-4767137-images-thumbs&n=13" class="img"  ></li>
                                <li><img src="https://avatars.mds.yandex.net/i?id=967e6e19d02157edbf7f1ec464351bb4-3948343-images-thumbs&n=13" class="img"  ></li>
                                <li><img src="https://avatars.mds.yandex.net/i?id=c52172e48a803a5549be5b7f73a16a9b-5875897-images-thumbs&n=13" class="img"  ></li>
                                <li><img src="https://avatars.mds.yandex.net/i?id=bb0b71cb9c486b2291d3639a08c3dd4a-5888296-images-thumbs&n=13" class="img"  ></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-white" style="background: #000C24;">
            <a href="wooble.org"><h5 class="pt-5 text-white">Wooble_org</h5></a>
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mt-">
                    <!-- Facebook -->
                    <a class="btn btn-floating m-1" href="#!" role="button" style="background: #928A97;"
                    ><i class="fab fa-facebook-f fa-2x" style="color: #000C24;"></i
                        ></a>

                    <!-- Twitter -->
                    <a class="btn btn-floating m-1" href="#!" role="button" style="background: #928A97;"
                    ><i class="fab fa-twitter fa-2x" style="color: #000C24;"></i
                        ></a>
                    <!-- Instagram -->
                    <a class="btn btn-floating m-1" href="#!" role="button" style="background: #928A97;"
                    ><i class="fab fa-instagram fa-2x" style="color: #000C24;"></i
                        ></a>

                    <!-- Linkedin -->
                    <a class="btn btn-floating m-1" href="#!" role="button" style="background: #928A97;"
                    ><i class="fab fa-linkedin-in fa-2x" style="color: #000C24;"></i
                        ></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <i class="fas fa-heart" style="color: #F44336;"></i>All Rights Reserved © 2023
                <a class="text-white" href="https://wooble.org/">wooble</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div></div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="flipster/jquery.flipster.min.js"></script>
<!-- Gsap -->
<script src="../gsap/minified/gsap.min.js"></script>
<script src="../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../gsap//minified/MotionPathPlugin.min.js"></script>
<script src="../gsap/minified/DrawSVGPlugin.min.js"></script>
<script src="../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../gsap/minified/SplitText.min.js"></script>
<!-- gsap Script -->
<script>
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, DrawSVGPlugin, MotionPathPlugin, gsap);
    gsap.from('.nav-item', { opacity: 0, pointerEvents: 'all', stagger: 0.3, x:-50, y:-100 }, '-=.8')
    // link hover animation start
    var navLink = gsap.utils.toArray(".nav-link"),
        imgWrap = document.querySelectorAll('.menu img'),
        imgItem = document.querySelectorAll('.menu img');

    function linkHover(e){
        if (e.type === "mouseenter"){
            var imgSrc = e.target.dataset.src;
            var tl = gsap.timeline();

            tl.set(imgItem, {
                attr: {src : imgSrc}
            }).to(imgWrap, {
                autoAlpha:1,
                scale:1,
                ease:"back.out",
            });
        } else if (e.type === "mouseleave"){
            var tl = gsap.timeline();
            tl.to(imgWrap, {
                autoAlpha:0,
                scale:0.3,
            })
        }
    }

    function initAnimation(){
        navLink.forEach(link => {
            link.addEventListener('mouseenter', linkHover);
            link.addEventListener('mouseleave', linkHover);
        })
    }

    function init(){
        initAnimation();
    }

    window.addEventListener("load", function(){
        init();
    })
    // link hover animation end
</script>
<script>
    // image movement with mouse move code start
    document.addEventListener("mousemove", function(event){
        var width = window.innerWidth;
        var height = window.innerHeight;
        var positionX = (event.clientX/width) - 0.55;
        var positionY = (event.clientY/height) - 0.55;
        gsap.to(".img",{
            rotationY : positionX * 50,
            rotationX : positionY * 50,
            ease: "none"
        })
    })
    // image movement with mouse move code end
</script>
<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:2.5,
    })
    $('.carousel').flipster({
        style:'carousel',
        spacing: -0.4,
    });
</script>
</body>
</html>