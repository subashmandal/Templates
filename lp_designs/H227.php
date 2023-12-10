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
        .menu img{
            display: none;
        }
        .menu:hover img, .menu:focus img, .menu:active img{
            display: block !important;
        }
        .menu a:hover, .menu a:focus, .menu a:active{
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
        .btn-floating:hover, .btn-floating:active, .btn-floating:focus{
            background: white !important;
            color: black !important;
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
            <a class="sidenav-link">
                <i class="fas fa-home fa-fw me-3" style="color: #000d23 ;"></i><span>Home</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link">
                <i class="fas fa-info-circle fa-fw me-3" style="color: #000d23 ;"></i><span>About</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="blogs.html">
                <i class="fas fa-pencil-ruler fa-fw me-3" style="color: #000d23 ;"></i><span>Blogs</span></a
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
        <div class="container-fluid g-0" style="min-height: 100vh;">
            <div class="position-relative">
                <img src="lp_designs/img/bg1.png" alt="" class="position-absolute start-0 top-0 d-block d-lg-none" style="z-index: -1; width: 100vw; transform: rotate(90deg); margin-top: -200px;">
            </div>
            <div class="position-relative">

                <!-- Toggler -->
                <button
                    data-mdb-toggle="sidenav"
                    data-mdb-target="#sidenav-1"
                    data-mdb-ripple-radius="1"
                    class="btn text-white position-absolute end-0 mt-3 me-3 d-block d-lg-none ripple-surface-dark"
                    aria-controls="#sidenav-1"
                    aria-haspopup="true"
                >
                    <i class="fas fa-bars fa-2x"></i>
                </button>
                <!-- Toggler -->
                <!-- hide on small device -->
                <div class="d-none d-lg-block">
                    <div class="row position-absolute top-50 start-0 text-white" style="transform: rotate(-90deg); z-index: 10; margin-left: -300px;">
                        <div class="col mt-1 fs-1 menu"></div>
                        <div class="col mt-1 fs-1 menu"></div>
                        <div class="col mt-1 fs-1 menu"><img src="" alt="" class="position-absolute top-0 start-0" style="z-index: -1; width: 400px; height: 200px; transform: rotate(-90deg); margin-left: -150px; margin-top: -60px;"><a href="#" data-src="lp_designs/img/splash button.svg" class="text-white nav-link">Home</a></div>

                        <div class="col mt-1 fs-1 menu"><img src="" alt="" class="position-absolute top-0 start-0" style="z-index: -1; width: 400px; height: 200px; transform: rotate(-90deg); margin-left: -150px; margin-top: -60px;"><a href="#" data-src="lp_designs/img/splash button.svg" class="text-white nav-link">About</a></div>

                        <div class="col mt-1 fs-1 menu"><img src="" alt="" class="position-absolute top-0 start-0" style="z-index: -1; width: 400px; height: 200px; transform: rotate(-90deg); margin-left: -150px; margin-top: -60px;"><a href="blogs.html" data-src="lp_designs/img/splash button.svg" class="text-white nav-link">Blogs</a></div>

                        <div class="col mt-1 fs-1 menu"><img src="" alt="" class="position-absolute top-0 start-0" style="z-index: -1; width: 400px; height: 200px; transform: rotate(-90deg); margin-left: -150px; margin-top: -60px;"><a href="works.html" data-src="lp_designs/img/splash button.svg" class="text-white nav-link">Works</a></div>

                        <div class="col mt-1 fs-1 menu"><img src="" alt="" class="position-absolute top-0 start-0" style="z-index: -1; width: 400px; height: 200px; transform: rotate(-90deg); margin-left: -150px; margin-top: -60px;"><a href="gallery.html" data-src="lp_designs/img/splash button.svg" class="text-white nav-link">Gallery</a></div>
                    </div>
                </div>
                <img src="lp_designs/img/bg1.png" alt="" class="position-absolute start-0 top-0 d-none d-lg-block" style="min-height: 100vh; z-index: -1;">
                <img src="lp_designs/img/bg2.png" alt="" class="position-absolute end-0 top-0 d-none d-lg-block" style="min-height: 130vh; z-index: -1;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                        <div class="text-center" id="headerb">
                            <h1 class="text-uppercase fw-bolder ls-wider mb-5 name" style="color: rgba(244, 67, 54, 1); font-size: 8rem;">rey Southee</h1>
                            <h1 class="text-black">Engineer + Visual Designer</h1>
                            <!-- Section: Social media -->
                            <section class="mt-5">
                                <!-- Facebook -->
                                <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
                                ><i class="fab fa-facebook-f fa-lg"></i
                                    ></a>

                                <!-- Twitter -->
                                <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
                                ><i class="fab fa-twitter fa-lg"></i
                                    ></a>
                                <!-- Instagram -->
                                <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
                                ><i class="fab fa-instagram fa-lg"></i
                                    ></a>

                                <!-- Linkedin -->
                                <a class="btn text-white btn-floating m-1" href="#!" role="button" style="background: #0E398E;"
                                ><i class="fab fa-linkedin-in fa-lg"></i
                                    ></a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about me section -->
        <div class="container-fluid d-flex align-items-center" style="min-height:100vh;">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center about_img">
                    <div class="img img-fluid" style="background-image:url('lp_designs/img/about_img.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 700px; width: 500px; -webkit-clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%); position: absolute;"></div>
                    <div class="bg_img" style="background-image:url('lp_designs/img/graphics bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; width: 600px;"></div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="my-5 content" style="width: 80%;">
                        <h1 class="about_me" style="color: #F44336;">About Me</h1>
                        <p class="fs-4 fw-lighter about_me_para" style="letter-spacing: 2px; text-align: justify; text-indent: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam itaque sint! Eveniet doloribus enim, minima quod quos laboriosam libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus enim laborum accusantium consequuntur nesciunt, vero possimus quam? Fugiat, doloremque. </p>
                        <a href="gallery.html"><button type="button" class="btn text-white mt-4 fw-light fs-6 text-capitalize gallery_btn" style="background: #0E398E;">Gallery</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog section -->
        <div class="container-fluid d-flex align-items-center position-relative" style="min-height:100vh;">
            <img src="lp_designs/img/Group 1.png" alt="group 1" class="position-absolute bottom-0 start-0 img-fluid d-none d-sm-block">
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="my-5 content" style="width: 80%;">
                        <h1 class="blogs" style="color: #F44336;">Blogs</h1>
                        <p class="fs-4 fw-lighter blogs_para" style="letter-spacing: 2px; text-align: justify; text-indent: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam itaque sint! Eveniet doloribus enim, minima quod quos laboriosam libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus enim laborum accusantium consequuntur nesciunt, vero possimus quam? Fugiat, doloremque. </p>
                        <button type="button" class="btn text-white mt-4 fw-light fs-6 text-capitalize blogs_btn" style="background: #0E398E;">Blogs</button>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center blog_img">
                    <div class="img" style="background-image:url('lp_designs/img/blog.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 700px; width: 500px; -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 90%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 90%); position: absolute;"></div>
                    <div class="bg_img" style="background-image:url('lp_designs/img/graphics bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; width: 600px;"></div>
                </div>
            </div>
        </div>
        <!-- work section -->
        <div class="container-fluid d-flex align-items-center position-relative m-2" style="min-height:100vh;">
            <img src="lp_designs/img/Group 2.png" alt="group 2" class="position-absolute bottom-0 end-0 img-fluid d-none d-sm-block">
            <div class="row flex-sm-row flex-column">
                <div class="col-lg-6 d-flex justify-content-center align-items-center works_img">
                    <div class="img" style="background-image:url('lp_designs/img/works_img.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 700px; width: 500px; -webkit-clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%); position: absolute;"></div>
                    <div class="bg_img" style="background-image:url('lp_designs/img/graphics bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; width: 600px;"></div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="my-5 content" style="width: 80%;">
                        <div class="works">
                            <h1 class="text-capitalize" style="color: #F44336;">works</h1>
                            <h3 class="text-capitalize opacity-80" style="color: #F44336;">Diablo Games</h3>
                        </div>
                        <p class="fs-4 fw-lighter works_para" style="letter-spacing: 2px; text-align: justify; text-indent: 50px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam itaque sint! Eveniet doloribus enim, minima quod quos laboriosam libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus enim laborum accusantium consequuntur nesciunt, vero possimus quam? Fugiat, doloremque. </p>
                        <div class="row flex-row works_btn">
                            <div class="col-12 d-inline">
                                <button type="button" class="btn mt-4 fw-light fs-6 text-capitalize text-white m-1" style="background: #0E398E;">UI/UX</button>
                                <button type="button" class="btn mt-4 fw-light fs-6 text-capitalize text-white m-1" style="background: #0E398E;">Gallery</button>
                                <button type="button" class="btn mt-4 fw-light fs-6 text-capitalize text-white m-1" style="background: #0E398E;">Product Design</button>
                                <button type="button" class="btn mt-4 fw-light fs-6 text-capitalize text-white m-1" style="background: #0E398E;">Motion Design</button>
                            </div>
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
    gsap.from('.menu', { opacity: 0, pointerEvents: 'all', stagger: 0.3, x:-50, y:-100 }, '-=.8')
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
    gsap.from(".about_img", {x: "-30%",opacity:0,scrollTrigger: {trigger: ".about_img",start: "top 100%",end: "+=30%",markers: false,scrub : true,}});

    gsap.from(".about_me", {x: "30%",opacity:0,scrollTrigger: {trigger: ".about_me",start: "top 100%",end: "bottom 60%",markers: false,scrub : true,}});

    gsap.from(".about_me_para", {y:"50%",ease: "SlowMo.easeOut",opacity:0,stagger: 0.2,duration: 0.7,scrollTrigger: {trigger: ".about_me_para",start: "top 100%",end: "+=40%", markers:false, scrub : true,}});

    gsap.from(".gallery_btn", {y:"50%",ease: "SlowMo.easeOut",opacity:0,stagger: 0.2,duration: 0.7,scrollTrigger: {trigger: ".gallery_btn",start: "top 100%",end: "+=40%", markers:false, scrub : true,}});

    gsap.from(".blog_img", {x: "30%",opacity:0,scrollTrigger: {trigger: ".blog_img",start: "top 100%",end: "+=30%",markers: false,scrub : true,}});

    gsap.from(".blogs", {x: "-30%",opacity:0,scrollTrigger: {trigger: ".blogs",start: "top 100%",end: "bottom 60%",markers: false,scrub : true,}});

    gsap.from(".blogs_para", {y:"50%",ease: "SlowMo.easeOut",opacity:0,stagger: 0.2,duration: 0.7,scrollTrigger: {trigger: ".blogs_para",start: "top 100%",end: "+=40%", markers:false, scrub : true,}});

    gsap.from(".blogs_btn", {y:"50%",ease: "SlowMo.easeOut",opacity:0,stagger: 0.2,duration: 0.7,scrollTrigger: {trigger: ".blogs_btn",start: "top 100%",end: "+=40%", markers:false, scrub : true,}});

    gsap.from(".works_img", {x: "-30%",opacity:0,scrollTrigger: {trigger: ".works_img",start: "top 100%",end: "+=30%",markers: false,scrub : true,}});

    gsap.from(".works", {x: "30%",opacity:0,scrollTrigger: {trigger: ".works",start: "top 100%",end: "bottom 60%",markers: false,scrub : true,}});

    gsap.from(".works_para", {y:"50%",ease: "SlowMo.easeOut",opacity:0,stagger: 0.2,duration: 0.7,scrollTrigger: {trigger: ".works_para",start: "top 100%",end: "+=40%", markers:false, scrub : true,}});

    gsap.from(".works_btn", {y:"50%",ease: "SlowMo.easeOut",opacity:0,stagger: 0.2,duration: 0.7,scrollTrigger: {trigger: ".works_btn",start: "top 100%",end: "+=40%", markers:false, scrub : true,}});

</script>
<script>
    // Mouse position
    let mouseX, mouseY;

    document.addEventListener("mousemove", e => {
        mouseX = e.clientX;
        mouseY = e.clientY;

        // Add GSAP Effect
        gsap.to("#headerb", {
            // The '30' value bellow corresponds to the effect power, change it as you want
            x: (mouseX / window.innerWidth - 0.5) * 30,
            y: (mouseY / window.innerHeight - 0.5) * 30,
            delay: 0.1,
            ease: "power2.out",
            overwrite: "auto"
        });
    });
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
</script>
</body>
</html>