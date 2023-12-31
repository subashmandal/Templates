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
        .nav-link:hover{
            color: black !important;
        }
        @media (max-width: 1000px) {
            .work_img {
                height: 450px !important;
            }
        }
        @media (max-width: 800px) {
            .work_img {
                height: 350px !important;
            }
        }

        button:hover{
            background-color: black !important;
        }
        .work_1:hover, .work_2:hover, .work_3:hover, .work_4:hover{
            color: #5B4A1D !important;
        }
        .work_img{
            transition: 1s;
        }
        .work_img:hover{
            filter: grayscale(0)!important;
            cursor: pointer;
            transform: scale(1.05);
            border-radius: 20px;
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
                        <small class="fw-bold ls-wide fs-5 name" style="font-family: 'Ubuntu', sans-serif;">Jay<br>Gosling</small>
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
                                <a class="nav-link  ls-wide text-white" href="architect2.html">Home</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link  ls-wide text-white" href="Work.html">Works</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide text-white" href="#">About me</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide text-white" href="blog.html">Blogs</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link ls-wide text-white" href="gallery.html">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                </div>
            </nav>
        </header>


        <!-- work-1 -->
        <div class="container bg-white text-black" style="min-width: 80%;">
            <div class="row flex-sm-row flex-column-reverse mx-1">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="my-5">
                            <div class="number_1" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">1</div>
                            <div class="work_1 mt-4">
                                <h1>Interior Designer</h1>
                                <p class="opacity-70 text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laborum eum vero mollitia rerum. Ipsam fuga maiores ad nihil, praesentium labore, veniam ex aliquid maxime deserunt consequuntur iste eos molestiae vero pariatur quas. Voluptas quos enim quisquam necessitatibus ad placeat. Doloribus tenetur dicta illo repellendus deleniti repellat excepturi! Harum, quisquam..</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4 lightbox">
                    <div class="work_img work_img1" style="background-image: url('../architect/architect2/img/Rectangle 4.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 620px; filter: grayscale(10);"></div>
                </div>
            </div>
        </div>
        <!-- work-2 -->
        <div class="container bg-white text-black" style="min-width: 80%;">
            <div class="row flex-sm-row flex-column-reverse mx-1">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="my-5">
                            <div class="number_2" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">2</div>
                            <div class="work_2 mt-4">
                                <h1>Problem-Solving and Analytics</h1>
                                <p class="opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus adipisci porro reiciendis commodi. Perferendis, earum reiciendis inventore velit dignissimos perspiciatis quidem. Fuga saepe nisi, eos possimus minima, eius illum, culpa aliquam quis unde illo aut ullam tenetur sunt vel? Repellat ex, odit commodi eveniet ipsam accusantium nihil voluptatibus sed error?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4 lightbox">
                    <div class="work_img work_img2" style="background-image: url('../architect/architect2/img/Rectangle 3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 620px; filter: grayscale(10);"></div>
                </div>
            </div>
        </div>
        <!-- work-3 -->
        <div class="container bg-white text-black" style="min-width: 80%;">
            <div class="row flex-sm-row flex-column-reverse mx-1">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="my-5">
                            <div class="number_3" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">3</div>
                            <div class="work_3 mt-4">
                                <h1>Buildings & Constructions</h1>
                                <p class="opacity-70">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet laboriosam ratione, est, vero dolorum iste eius nulla ea distinctio ipsam ab nobis rem quia consequuntur pariatur sunt voluptatibus similique accusantium mollitia maiores. Corrupti quisquam consequuntur iste eligendi molestiae laborum voluptas optio ab, culpa, eveniet ducimus dolore consectetur hic. Ex, optio?</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4 lightbox">
                    <div class="work_img work_img3" style="background-image: url('../architect/architect2/img/Rectangle 1.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 620px; filter: grayscale(10);"></div>
                </div>
            </div>
        </div>
        <!-- work-4 -->
        <div class="container bg-white text-black" style="min-width: 80%;">
            <div class="row flex-sm-row flex-column-reverse mx-1">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="my-5">
                            <div class="number_4" style=" border-radius: 50%; width: 45px; height: 45px;
          padding: 10px; background: #5B4A1D; color: #ffffff;  text-align: center; font-size: 15px;font-weight: bold;">4</div>
                            <div class="work_4 mt-4">
                                <h1>Buildings & Constructions</h1>
                                <p class="opacity-70">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet laboriosam ratione, est, vero dolorum iste eius nulla ea distinctio ipsam ab nobis rem quia consequuntur pariatur sunt voluptatibus similique accusantium mollitia maiores. Corrupti quisquam consequuntur iste eligendi molestiae laborum voluptas optio ab, culpa, eveniet ducimus dolore consectetur hic. Ex, optio?</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4 lightbox">
                    <div class="work_img work_img4" style="background-image: url('../architect/architect2/img/Rectangle 3.png'); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 620px; filter: grayscale(10);"></div>
                </div>
            </div>
        </div>
        <!-- blank space -->
        <div style="height: 20vh;"></div>
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
<script src="../gsap//minified/MotionPathPlugin.min.js"></script>
<script src="../gsap/minified/DrawSVGPlugin.min.js"></script>
<script src="../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../gsap/minified/SplitText.min.js"></script>
<!-- gsap Script -->

<!-- Custom Script -->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, DrawSVGPlugin, MotionPathPlugin, gsap);
    gsap.from('.name', { opacity: 0, stagger: 0.3, x:0, y:-100});
    gsap.from('.nav-link', { opacity: 0, stagger: 0.3, x:0, y:-100});

    gsap.from(".number_1", {x: "-100%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_1 ",start: "top 100%",end: "+=30%",markers: false,scrub : true,}});

    gsap.from(".number_2", {x: "-100%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_2 ",start: "top 100%",end: "+=30%",markers: false,scrub : true,}});

    gsap.from(".number_3", {x: "-100%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_3 ",start: "top 100%",end: "+=30%",markers:false,scrub : true,}});

    gsap.from(".number_4", {x: "-100%",rotate: 360,opacity:0,scrollTrigger: {trigger: ".number_4 ",start: "top 100%",end: "+=30%",markers:false,scrub : true,}});

    gsap.from(".work_1", {y: "10%",opacity:0,scrollTrigger: {trigger: ".work_1",start: "top 100%",end: "+=30%",markers:false,scrub : true,}});

    gsap.from(".work_2", {y: "10%",opacity:0,scrollTrigger: {trigger: ".work_2",start: "top 100%",end: "+=30%",markers:false,scrub : true,}});

    gsap.from(".work_3", {y: "10%",opacity:0,scrollTrigger: {trigger: ".work_3",start: "top 100%",end: "+=30%",markers:false,scrub : true,}});

    gsap.from(".work_4", {y: "10%",opacity:0,scrollTrigger: {trigger: ".work_4",start: "top 100%",end: "+=30%",markers:false,scrub : true,}});

    gsap.from(".work_img1",{opacity:0.3,x:'40%',y: 0,scrollTrigger:{trigger:".work_img1",start: "top 100%",end: "+=30%",marker: false,scrub: true}});

    gsap.from(".work_img2",{opacity:0.3,x:'40%',y: 0,scrollTrigger:{trigger:".work_img2",start: "top 100%",end: "+=30%",marker: false,scrub: true}});

    gsap.from(".work_img3",{opacity:0.3,x:'40%',y: 0,scrollTrigger:{trigger:".work_img3",start: "top 100%",end: "+=30%",marker: false,scrub: true}});

    gsap.from(".work_img4",{opacity:0.3,x:'40%',y: 0,scrollTrigger:{trigger:".work_img4",start: "top 100%",end: "+=30%",marker: false,scrub: true}});

</script>
<!-- smooth scrolling script-->
<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:0.5,
    })
</script>
</body>
</html>