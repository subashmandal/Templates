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
    <!-- Google Fonts Abel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
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
        .my_works{
            transition-duration: 1s;
        }
        .my_works:hover, .my_works:focus{
            color: black !important;
            box-shadow: 0 0 15px #F3AE7D !important;
            transform: translateY(-0.25em);
        }
        .img01, .img02{
            filter: opacity(0.8);
            transition-duration: 0.5s;
        }
        .img01:hover, .img01:focus, .img02:hover, .img02:focus{
            filter: opacity(1);
            transform: scale(1.05);
        }
        @media (max-width:600px){
            .card{
                margin-left: 0% !important;
            }
            .wrapper p{
                font-size:medium !important;
            }
        }

        .wrapper p.hidden {
            color: red;
            opacity: 0;
        }
        .wrapper p.hidden .char {
            opacity: 0;
        }
        .all_blogs{
            transition: 1s;
        }
        .all_blogs:hover, .all_blogs:focus{
            border-radius: 20px !important;
            box-shadow: inset 0 0 0 2em #F3AE7D !important;
            transform: scale(1.1);
        }
        .view_btn{
            transition: 1s;
            cursor: pointer;
        }
        .view_btn:hover, .view_btn:focus{
            border-radius: 20px !important;
            box-shadow: inset 0 0 0 2em #F3AE7D !important;
            transform: scale(1.1);
        }
        .img3, .img4, .img5, .img6, .img7{
            transition: 1s;
        }
        .img3:hover, .img4:hover, .img5:hover, .img6:hover, .img7:hover{
            filter: opacity(0.8);
            transform: scale(1.01) !important;
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

            <div class="position-relative luxury_img" style="background-image: url(../architect/architect4/img4/luxury-modern-dark-living-room.png); background-position: center; background-repeat: no-repeat; background-size: cover; height: 100vh;">
                <div class="position-absolute end-0 top-100 d-none d-sm-block" style="margin-top: -40px;">
                    <img src="img4/vectors.png" alt="vectors" class="vectors" >
                </div>

                <!-- for desktop screen -->
                <div class="position-absolute bottom-50 start-50 text-white d-none d-sm-block first_card" style="background-color: rgba(0, 0, 0, 0.62); border-radius: 20px; padding: 10px; width: 400px;  box-shadow: 0 0 20px #F3AE7D; border: 1px solid white;">
                    <div class="px-4">
                        <h1 class="fw-bolder mt-3" style="font-family: 'Work Sans'; font-weight: 700; text-shadow: 0 0 5px #FF0000, 0 0 5px #0000FF;">Design Your Space For Living</h1>
                        <p class="opacity-80 mt-5 fs-5 lh-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis nemo earum quo accusantium? Tempore, adipisci? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, quibusdam!</p>
                        <a href="work.html"><button type="button" class="btn rounded-5 text-white shadow-0 border border-1 fs-6 my_works text-capitalize" style="background: #F3AE7D; margin-bottom: -30px; margin-left: 25px;">My Works</button></a>
                    </div>
                </div>
                <!-- for mobile screen -->
                <div class="text-white d-block d-sm-none" style="height: 90vh;">
                    <div class=" position-absolute top-50 start-50" style="background-color: rgba(0, 0, 0, 0.62); border-radius: 20px; padding: 10px; width: 400px; transform: translate(-50%, -50%);">
                        <div class="px-4">
                            <h1 class="fw-bolder mt-3" style="font-family: 'Work Sans'; font-weight: 700;">Design Your Space For Living</h1>
                            <p class="opacity-80 mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis nemo earum quo accusantium? Tempore, adipisci?</p>
                            <a href="work.html"><button type="button" class="btn rounded-5 text-white" style="background: #F3AE7D; margin-bottom: -25px; margin-left: 25px;">My Works</button></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- 2nd section -->
        <div class="row" style="margin-top: 10%; margin-bottom: 8%; min-height: 100vh;">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div>
                    <section id="textSection" class="mt-5 w-100" style="height: 60vh; ">
                        <h1 class="my-4 m-3" style="font-family: 'Abel', sans-serif; color: #714C29;">Recent Blogs</h1>
                        <div class="wrapper position-relative">
                            <p class="white mx-3 position-absolute text-wrap fs-4 w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis consectetur voluptatem quae ea similique adipisci reprehenderit vero voluptatum, debitis exercitationem nisi ad mollitia? Molestias veniam sint quisquam ea et dolorum nesciunt rem saepe id, amet vero, necessitatibus esse reiciendis molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi maxime esse neque necessitatibus aut nulla non temporibus accusantium! Tempore quibusdam debitis quia fuga ducimus, molestiae asperiores quaerat voluptatibus consequatur esse soluta officia dolor, maiores magnam reprehenderit accusamus quas voluptatem. Nihil ab voluptatum sequi distinctio maxime adipisci doloribus dolor dicta repellat. </p>
                            <p class="hidden mx-3 position-absolute text-wrap fs-4 w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis consectetur voluptatem quae ea similique adipisci reprehenderit vero voluptatum, debitis exercitationem nisi ad mollitia? Molestias veniam sint quisquam ea et dolorum nesciunt rem saepe id, amet vero, necessitatibus esse reiciendis molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi maxime esse neque necessitatibus aut nulla non temporibus accusantium! Tempore quibusdam debitis quia fuga ducimus, molestiae asperiores quaerat voluptatibus consequatur esse soluta officia dolor, maiores magnam reprehenderit accusamus quas voluptatem. Nihil ab voluptatum sequi distinctio maxime adipisci doloribus dolor dicta repellat. </p>
                        </div>
                    </section>
                    <div class="row m-3 pt-5 blog">
                        <div class="col-md-4 d-flex justify-content-center align-items-center border-end border-2">
                            <div>
                                <h5 class="text-start" style="color: #714C29;">How to create portfolio in wooble</h5>
                                <p class="text-center fw-lighter my-4">Read Now</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center border-end border-2">
                            <div>
                                <h5 class="text-start" style="color: #714C29;">Portfolio Definition & Meaning - Merriam-Webster</h5>
                                <p class="text-center fw-lighter my-4">Read Now</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <div>
                                <h5 class="text-start" style="color: #714C29;">What is Portfolio? Definition of Portfolio, Portfolio Meaning</h5>
                                <p class="text-center fw-lighter my-4">Read Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center my-4">
                        <a href="blog.html">
                            <button type="button" class="btn rounded-5 text-white all_blogs" style="background: #714C29;">All Blogs</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- for desktop -->
            <div class="col-lg-3 img1 d-none d-md-block">
                <div class="img01" style="background-image: url('../architect/architect4/img4/img1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%; border-radius: 30px; margin-top: 30%;"></div>
            </div>
            <div class="col-lg-3 img2 d-none d-md-block">
                <div class="my-5 mt-lg-5 img02" style="background-image: url('../architect/architect4/img4/img2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 60vh; width: 100%; border-radius: 30px;"></div>
            </div>
            <!-- for mobile -->
            <div class="col-lg-3 img1 d-block d-sm-none">
                <div class="" style="background-image: url('../architect/architect4/img4/img1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh; border-radius: 30px; margin-top: 30%;"></div>
            </div>
            <div class="col-lg-3 img2 d-block d-sm-none">
                <div class="my-5 mt-lg-5" style="background-image: url('../architect/architect4/img4/img2.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 60vh; border-radius: 30px;"></div>
            </div>
        </div>
        <!-- 3rd section -->
        <div style="background: radial-gradient(50% 50% at 50% 50%, #AC5B00 0%, #452C10 100%); z-index: 10;">
            <div class="py-5">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white ms-3" style="font-family: 'Abel', sans-serif;">My Featured Photos</h1>
                    </div>
                    <div class="col text-end me-3">
                        <button type="button" class="btn rounded-5 text-capitalize fw-bold fs-6 view_btn" style="background: #ffffff; color: #714C29; margin-bottom: -25px; margin-left: 25px;">View</button>
                    </div>
                </div>
                <div class="my-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="m-2 my-3 img3" style="background-image: url('../architect/architect4/img4/img3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh; border-radius: 20px;"></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-2 img4" style="background-image: url('../architect/architect4/img4/img4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 25vh; border-radius: 20px;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-2 img5" style="background-image: url('../architect/architect4/img4/img5.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 25vh; border-radius: 20px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="m-2 img6" style="background-image: url('../architect/architect4/img4/img6.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 40vh; border-radius: 20px;"></div>
                        </div>
                        <div class="col-lg-5">
                            <div class="m-2 img7" style="background-image: url('../architect/architect4/img4/img7.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 40vh; border-radius: 20px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4th section -->
        <div style="background: linear-gradient(90deg, #F3AE7D 0%, #714C29 100%); position: relative;">
            <img src="img4/img9.png" alt="" class="position-absolute d-none d-sm-block" style="margin-top: -2%; margin-left:1%; z-index: 10;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <div class="m-2 img8" style="background-image: url('../architect/architect4/img4/img8.png'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 50vh; border-radius: 20px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-md-start">
                        <div class="bg-white card" style="border-radius: 20px; margin-left: -10%;">
            <span class="d-none d-sm-block">
            <i class="fas fa-quote-left text-white fa-2x" style="background: #EFAB7A; padding:10px; border-radius: 50%; margin-top: -10%; margin-left: 10%;"></i>
          </span>
                            <div class="m-5">
                                <h4>Casper</h4>
                                <p>Architect and Interior Designer</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati esse a quasi fuga ipsa eveniet porro sit voluptatem expedita magnam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt hic similique quam cumque ipsam vero delectus. Sapiente, reprehenderit. Error! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, magni.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Grid container -->
            <div class="container pt-4 text-center">
                <!-- Section: Social media -->
                <section class="pb-4">
                    <!-- Facebook -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="#!"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-facebook-f fa-2x  " style="color: #714C29;"></i
                        ></a>

                    <!-- Twitter -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="#!"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-twitter fa-2x" style="color: #714C29;"></i
                        ></a>

                    <!-- Instagram -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="#!"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-instagram fa-2x" style="color: #714C29;"></i
                        ></a>

                    <!-- Linkedin -->
                    <a
                        class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="#!"
                        role="button"
                        data-mdb-ripple-color="dark"
                    ><i class="fab fa-linkedin-in fa-2x" style="color: #714C29;"></i
                        ></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
        </div>
        <footer class="text-center text-white">
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: #714C29;">
                <p>Copyright @ 2023 <i class="fas fa-heart" style="color: red;"></i>  Wooble.org</p>
            </div>
            <!-- Copyright -->
        </footer>
    </div></div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<!-- Gsap -->
<script src="../../gsap/minified/gsap.min.js"></script>
<script src="../../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../../gsap//minified/MotionPathPlugin.min.js"></script>
<script src="../../gsap/minified/DrawSVGPlugin.min.js"></script>
<script src="../../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../../gsap/minified/SplitText.min.js"></script>

<!-- gsap Script -->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, DrawSVGPlugin, MotionPathPlugin, gsap);

    let ctx;

    function setup() {
        ctx && ctx.revert();
        ctx = gsap.context(() => {
            const split = new SplitText(".wrapper p", {type: "chars",charsClass: "char", position: "absolute",});
            gsap.set(".wrapper p.hidden", { opacity: 1 });

            const tl  = gsap.timeline({
                scrollTrigger: {trigger: "#textSection",start: "top 25%",end: "+=150%",pin: true,scrub: 0.75,markers: false,}})
                .set(".hidden .char", {opacity: 1,stagger: 0.1,}, 0.1)
                .set(".white .char", { opacity: 0,stagger: 0.1,}, 0.1);
        });
    }
    gsap.from(".img1",{scrollTrigger: {trigger: ".img1",start: "top 25%",end: "+=150%",pin: true,scrub: 0.75,markers: false,}})
    gsap.from(".img2",{scrollTrigger: {trigger: ".img2",start: "top 25%",end: "+=150%",pin: true,scrub: 0.75,markers: false,}})
    gsap.from(".vectors",{scrollTrigger: {trigger: ".vectors",start: "top -5%",end: "+=150%",pin: true,scrub: 0.75,markers: false,}});
    gsap.from(".blog",{scrollTrigger: {trigger: ".blog",start: "top 100%",end: "+=10%",pin: true,scrub: 0.75,markers: false,}});

    setup();

    callAfterResize(setup);

    // helper function for calling a function after the viewport stops resizing for a certain amount of time (0.2 seconds by default)
    function callAfterResize(func, delay) {
        let dc = gsap.delayedCall(delay || 0.2, func).pause(),
            handler = () => dc.restart(true);
        window.addEventListener("resize", handler);
        return handler; // in case you want to window.removeEventListener() later
    }

    gsap.from(".luxury_img", {xPercent : -130,scale: 0,stagger : 0.07,ease : "back.out",duration: 1.5,});
    gsap.from (".first_card", {xPercent : 130,stagger : 0.07,ease : "back",duration: 1.5,});
    document.addEventListener("mousemove", function(event){
        var width = window.innerWidth;
        var height = window.innerHeight;
        var positionX = (event.clientX/width) - 0.55;
        var positionY = (event.clientY/height) - 0.55;
        gsap.to(".first_card",{
            rotationY : positionX * 50,
            rotationX : positionY * 50,
            ease: "none"
        })
    })


    gsap.from(".img3",{x:'-40%',scrollTrigger:{trigger:".img3",start: "top bottom",end: "top 50%",markers: false,scrub: true}});
    gsap.from(".img4",{x:'40%',scrollTrigger:{trigger:".img4",start: "top bottom",end: "top 50%",markers: false,scrub: true}});
    gsap.from(".img5",{x:'40%',scrollTrigger:{trigger:".img5",start: "top bottom",end: "top 50%",markers: false,scrub: true}});
    gsap.from(".img6",{x:'-40%',scrollTrigger:{trigger:".img6",start: "top bottom",end: "top 50%",markers: false,scrub: true}});
    gsap.from(".img7",{x:'40%',scrollTrigger:{trigger:".img7",start: "top bottom",end: "top 50%",markers: false,scrub: true}});
    gsap.from(".img8", {scale:0,opacity:0,scrollTrigger: {trigger: ".img8 ",start: "top 100%",end: "bottom 70%",markers: false,scrub : true}});
    gsap.from(".card", {scale: 0,opacity:0,scrollTrigger: {trigger: ".card",start: "top 100%",end: "bottom 70%",markers:false,scrub : true,}});
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