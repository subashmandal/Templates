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
        .blog_card:hover, .blog_card:focus, .blog_card:active{
            -webkit-box-shadow: 0px 8px 15px 1px rgba(0,0,0,0.61);
            -moz-box-shadow: 0px 8px 15px 1px rgba(0,0,0,0.61);
            box-shadow: 0px 8px 15px 1px rgba(0,0,0,0.61);
        }
        .img_bg{
            width: 108px;
            height: 108px;
            position: absolute;
            -webkit-clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
            clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%); background-color: #5B4A1D;
        }
        .blog_card img{
            -webkit-clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
            clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
            width:100px;
            height:100px;
            z-index: 1;
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

        <div class="container">
            <div class="row my-4">
                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;">
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 1.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 1</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;">
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 2.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 2</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 3.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 3</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 4.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 4</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 1.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 5</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 2.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 6</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 3.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 7</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 4.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 8</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 1.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 9</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 3.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 10</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 1.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 11</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
                </div>

                <div class="col-lg-4 p-2">
                    <div class="rounded-6 p-3 blog_card" style=" background: rgba(200, 200, 200, 0.2) !important; border: 0px solid rgba(255, 255, 255, 0.3) !important; border: 2px solid black;" >
                        <div class="position-relative">
                            <div class="img_bg"></div>
                            <img src="../architect/architect2/img/Rectangle 2.png" alt="rectangel 1" class="img-fluid m-1">
                        </div>
                        <h3 class="mt-3">Blog 12</h3>
                        <h6 class="mt-4 text-black-50 fw-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel nemo unde cupiditate at porro deleniti totam obcaecati quisquam distinctio nesciunt voluptatem molestias accusamus assumenda quidem, dignissimos eaque soluta dicta iste consequatur. Repellat cupiditate sed beatae fugiat, velit voluptate aliquam? Neque?</h6>
                        <a href=""><p class="mt-4 text-black">Read More</p></a>
                    </div>
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
<script src="../gsap//minified/MotionPathPlugin.min.js"></script>
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

    const blog_card = gsap.utils.toArray(".blog_card");
    gsap.from(blog_card, { opacity: 0, stagger: 0.3, x:0, y:100});
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