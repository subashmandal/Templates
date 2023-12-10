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
    <title>G5</title>
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
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <style>
        .center{
            display: grid;
            place-content: center;
        }
        .bg{
            background-size: cover; background-repeat: no-repeat; background-position: center;
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
        .title {
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }
        .line3::after {
            content: "";
            background-color: white;
            height: 3px;
            width: 40%;
            margin-left: 4rem;
        }
        @media (max-width: 768px) {
            .media{
                margin-top: 0vh !important;
            }
        }
    </style>
</head>
<body style="background-color: #0E1B1B;">
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
            <div style="min-height: 100vh; background-color: #0E1B1B;">
                <!--  -->
                <div class="row" style="height: 40vh;">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div id="ReBl" class="title line3 text-light center ps-3 ps-lg-0" style="font-size: 6vh; text-align: end; height: 20vh; font-family: 'Playfair Display', serif;">My Gallery</div>
                    </div>
                </div>
                <div class="row px-3" style="min-height: 100vh;">
                    <div class="col-lg-4 text-center">
                        <img src="https://images.pexels.com/photos/302769/pexels-photo-302769.jpeg?cs=srgb&dl=pexels-pixabay-302769.jpg&fm=jpg" class="img-fluid gallery" style="padding-bottom: 3vh;" alt="">
                        <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/128186657/original/52184453bb20a7e777eab47bd8ff8f655fc5cd5b/do-3d-exterior-design-of-any-building-46b1.jpg" class="img-fluid gallery"style="padding-bottom: 3vh;" alt="">
                        <img src="https://media.istockphoto.com/id/488120139/photo/modern-real-estate.jpg?s=612x612&w=0&k=20&c=88jk1VLSoYboMmLUx173sHs_XrZ9pH21as8lC7WINQs=" class="img-fluid gallery" style="padding-bottom: 3vh;" alt="" srcset="">
                    </div>
                    <div class="col-lg-4 text-center media" style="margin-top: -10vh;">
                        <img src="https://images.pexels.com/photos/302769/pexels-photo-302769.jpeg?cs=srgb&dl=pexels-pixabay-302769.jpg&fm=jpg" class="img-fluid gallery" style="padding-bottom: 3vh;" alt="">
                        <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/128186657/original/52184453bb20a7e777eab47bd8ff8f655fc5cd5b/do-3d-exterior-design-of-any-building-46b1.jpg" class="img-fluid gallery"style="padding-bottom: 3vh;" alt="">
                        <img src="https://media.istockphoto.com/id/488120139/photo/modern-real-estate.jpg?s=612x612&w=0&k=20&c=88jk1VLSoYboMmLUx173sHs_XrZ9pH21as8lC7WINQs=" class="img-fluid gallery" style="padding-bottom: 3vh;" alt="" srcset="">
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="https://images.pexels.com/photos/302769/pexels-photo-302769.jpeg?cs=srgb&dl=pexels-pixabay-302769.jpg&fm=jpg" class="img-fluid gallery" style="padding-bottom: 3vh;" alt="">
                        <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/128186657/original/52184453bb20a7e777eab47bd8ff8f655fc5cd5b/do-3d-exterior-design-of-any-building-46b1.jpg" class="img-fluid gallery"style="padding-bottom: 3vh;" alt="">
                        <img src="https://media.istockphoto.com/id/488120139/photo/modern-real-estate.jpg?s=612x612&w=0&k=20&c=88jk1VLSoYboMmLUx173sHs_XrZ9pH21as8lC7WINQs=" class="img-fluid gallery" style="padding-bottom: 3vh;" alt="" srcset="">
                    </div>
                </div>
                <div style="height: 62vh;"></div>
            </div>
        </div>
    </div>
</div>

<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<script src='../gsap/minified/gsap.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/SplitText.min.js'></script>
<script src='../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap/minified/ScrollSmoother.min.js'></script>
<script>
    var sections = gsap.utils.toArray('.gallery');
    sections.forEach((section) => {
        gsap.to(section, {
            y:"50%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 1,
                end: 'bottom 30%',

            }
        });
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