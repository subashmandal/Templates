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
    <title><?php echo $row_user_info['field_1'] ?> | Works </title>
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
        .line::before {
            content: "";
            background-color: black;
            height: 2px;
            width: 20%;
            margin-right: 1rem;
        }
        .line2::after {
            content: "";
            background-color: black;
            height: 2px;
            width: 20%;
            margin-left: 1rem;
        }


    </style>
</head>
<body>
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
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
        <div style="overflow-x: hidden;">

            <div class="row" style="padding-top: 5vh;">
                <div class="col-lg-6 pb-5 pb-lg-0" style="border-bottom: 2px solid black;">
                    <div class="position-relative" style="min-height: 70vh;">
                        <div  class="position-absolute top-0 end-0 d-none d-sm-block">
                            <div class="carousel slide carouselExampleControls" style="width: 60vh;" data-mdb-ride="carousel">
                                <div  class="carousel-inner img4">
                                    <div class="carousel-item active overflow-hidden">
                                        <img src="img/Rectangle 10.png" class="d-block" style="height: 50vh; " alt="Wild Landscape"/>
                                    </div>
                                    <div class="carousel-item overflow-hidden">
                                        <img src="img/Rectangle 8.png" class="d-block" style="height: 50vh;" alt="Camera"/>
                                    </div>
                                    <div class="carousel-item overflow-hidden">
                                        <img src="img/Rectangle 11.png" class="d-block" style="height: 50vh;" alt="Exotic Fruits"/>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle text-light" style="margin-top: 10vh;">
                                <button id="B1" type="button" class="btn btn-lg btn-primary">View Works</button>
                            </div>
                            <div class="position-relative h-100">
                                <div class="position-absolute top-100 start-0 translate-middle" style="margin-left: -2vw;">
                                    <div class="carousel slide" style="width: 30vh;" data-mdb-ride="carousel">
                                        <div class="carousel-inner img5">
                                            <div class="carousel-item active overflow-hidden">
                                                <img src="img/Rectangle 10.png" class="d-block" style="height: 30vh; " alt="Wild Landscape"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 8.png" class="d-block" style="height: 30vh; " alt="Camera"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 11.png" class="d-block" style="height: 30vh; " alt="Exotic Fruits"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- for mobile view -->
                        <div class="d-block d-sm-none">
                            <div class="d-flex align-items-center justify-content-center">
                                <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                                    <div class="carousel slide carouselExampleControls" style="width: 45vh;" data-mdb-ride="carousel">
                                        <div class="carousel-inner img4i">
                                            <div class="carousel-item active overflow-hidden">
                                                <img src="img/Rectangle 10.png" class="d-block" style="height: 50vh; " alt="Wild Landscape"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 8.png" class="d-block" style="height: 50vh;" alt="Camera"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 11.png" class="d-block" style="height: 50vh;" alt="Exotic Fruits"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <div class="position-relative">
                                        <div class="position-absolute top-100 start-50 translate-middle" style="margin-top: 5vh;">
                                            <div class="bg" style="height: 30vh; width: 30vh;">
                                                <div class="carousel slide carouselExampleControls" style="width: 30vh;" data-mdb-ride="carousel">
                                                    <div class="carousel-inner img5i">
                                                        <div class="carousel-item active overflow-hidden">
                                                            <img src="img/Rectangle 10.png" class="d-block" style="height: 30vh; " alt="Wild Landscape"/>
                                                        </div>
                                                        <div class="carousel-item overflow-hidden">
                                                            <img src="img/Rectangle 8.png" class="d-block" style="height: 30vh;" alt="Camera"/>
                                                        </div>
                                                        <div class="carousel-item overflow-hidden">
                                                            <img src="img/Rectangle 11.png" class="d-block" style="height: 30vh;" alt="Exotic Fruits"/>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="position-absolute top-100 start-50 translate-middle text-light">
                                                    <button id="B1" type="button" class="btn btn-lg btn-primary">View Works</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6" style="border-top: 2px solid black;" >

                    <div class="center text-black" style="height: 70vh; padding-left: 8vw; padding-right: 8vw";>
                        <div id="WoNa">
                            <h1 style="font-size: 6vh; font-family: 'Playfair Display', serif; text-align: center;">Work Name</h1>
                            <p style="font-size: 2vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit elementum ut dui sed augue ultrices phasellus ullamcorper condimentum ut suspendisse viverra ornare sit venenatis</p>
                            <div class="d-none d-sm-block">
                                <button class="title line carousel-control-next position-relative" style="width: 100%;" type="button" data-mdb-target=".carouselExampleControls" data-mdb-slide="next">
                                    <span class="text-black">Next</span>
                                </button>
                                <button class="title line2 carousel-control-prev position-relative" style="width: 100%;" type="button" data-mdb-target=".carouselExampleControls" data-mdb-slide="prev">
                                    <span class="text-black">Previous</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second work -->
            <div class="row">
                <div class="col-lg-6" style="border-top: 2px solid black;" >

                    <div class="center text-black" style="height: 70vh; padding-left: 8vw; padding-right: 8vw";>
                        <div id="WoNa">
                            <h1 style="font-size: 6vh; font-family: 'Playfair Display', serif; text-align: center;">Work Name</h1>
                            <p style="font-size: 2vh;">Amet eu facilisi posuere ut at cras non ipsum proin nunc purus tellus ultricies velit elementum ut dui sed augue ultrices phasellus ullamcorper condimentum ut suspendisse viverra ornare sit venenatis</p>
                            <div class="d-none d-sm-block">
                                <button class="title line carousel-control-next position-relative" style="width: 100%;" type="button" data-mdb-target=".carouselControls" data-mdb-slide="next">
                                    <span class="text-black">Next</span>
                                </button>
                                <button class="title line2 carousel-control-prev position-relative" style="width: 100%;" type="button" data-mdb-target=".carouselControls" data-mdb-slide="prev">
                                    <span class="text-black">Previous</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-5 pb-lg-0" style="border-bottom: solid black;">
                    <div class="position-relative" style="min-height: 70vh;">
                        <div class="position-absolute top-0 end-0 d-none d-sm-block">
                            <div class="carousel slide carouselControls" style="width: 60vh;" data-mdb-ride="carousel">
                                <div class="carousel-inner img4">
                                    <div class="carousel-item active overflow-hidden">
                                        <img src="img/Rectangle 10.png" class="d-block" style="height: 50vh; " alt="Wild Landscape"/>
                                    </div>
                                    <div class="carousel-item overflow-hidden">
                                        <img src="img/Rectangle 8.png" class="d-block" style="height: 50vh;" alt="Camera"/>
                                    </div>
                                    <div class="carousel-item overflow-hidden">
                                        <img src="img/Rectangle 11.png" class="d-block" style="height: 50vh;" alt="Exotic Fruits"/>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle text-light" style="margin-top: 10vh;">
                                <button id="B1" type="button" class="btn btn-lg btn-primary">View Works</button>
                            </div>
                            <div class="position-relative h-100">
                                <div class="position-absolute top-100 start-0 translate-middle" style="margin-left: -2vw;">
                                    <div class="carousel slide" style="width: 30vh;" data-mdb-ride="carousel">
                                        <div class="carousel-inner img5">
                                            <div class="carousel-item active overflow-hidden">
                                                <img src="img/Rectangle 10.png" class="d-block" style="height: 30vh; " alt="Wild Landscape"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 8.png" class="d-block" style="height: 30vh; " alt="Camera"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 11.png" class="d-block" style="height: 30vh; " alt="Exotic Fruits"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- for mobile view -->
                        <div class="d-block d-sm-none">
                            <div class="d-flex align-items-center justify-content-center">
                                <div id="carouselControls" class="carousel slide" data-mdb-ride="carousel">
                                    <div style="width: 45vh;" >
                                        <div class="carousel-inner img4i">
                                            <div class="carousel-item active overflow-hidden">
                                                <img src="img/Rectangle 10.png" class="d-block" style="height: 50vh; " alt="Wild Landscape"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 8.png" class="d-block" style="height: 50vh;" alt="Camera"/>
                                            </div>
                                            <div class="carousel-item overflow-hidden">
                                                <img src="img/Rectangle 11.png" class="d-block" style="height: 50vh;" alt="Exotic Fruits"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselControls" data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselControls" data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    <div class="position-relative">
                                        <div class="position-absolute top-100 start-50 translate-middle" style="margin-top: 5vh;">
                                            <div id="img5i" class="bg" style="height: 30vh; width: 30vh;">
                                                <div class="carousel slide carouselExampleControls" style="width: 30vh;" data-mdb-ride="carousel">
                                                    <div class="carousel-inner img5i">
                                                        <div class="carousel-item active overflow-hidden">
                                                            <img src="img/Rectangle 10.png" class="d-block" style="height: 30vh; " alt="Wild Landscape"/>
                                                        </div>
                                                        <div class="carousel-item overflow-hidden">
                                                            <img src="img/Rectangle 8.png" class="d-block" style="height: 30vh;" alt="Camera"/>
                                                        </div>
                                                        <div class="carousel-item overflow-hidden">
                                                            <img src="img/Rectangle 11.png" class="d-block" style="height: 30vh;" alt="Exotic Fruits"/>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="position-absolute top-100 start-50 translate-middle text-light">
                                                    <button id="B1" type="button" class="btn btn-lg btn-primary">View Works</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div style="height: 65vh;"></div>
        </div>
    </div></div>
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
    var sections = gsap.utils.toArray('.img4');
    sections.forEach((section) => {
        gsap.to(section, { y:"-20%",x:"20%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers: false
            }
        });
    })
    var sections = gsap.utils.toArray('.img5');
    sections.forEach((section) => {
        gsap.to(section, { y:"-20%",x:"20%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers: false
            }
        });
    })
    var sections = gsap.utils.toArray('.img5i');
    sections.forEach((section) => {
        gsap.to(section, {  x:"-30%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers: false
            }
        });
    })
    var sections = gsap.utils.toArray('.img4i');
    sections.forEach((section) => {
        gsap.to(section, {  y:"20%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers: false
            }
        });
    })
    var sections = gsap.utils.toArray('#WoNa');
    sections.forEach((section) => {
        gsap.to(section, {  y:"30%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers: false
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