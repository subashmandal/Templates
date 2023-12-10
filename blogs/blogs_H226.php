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
    <title><?php echo $row_user_info['field_1'] ?> | Blogs</title>
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
        <div class="d-none d-sm-block">
            <div class="row" style="padding-bottom: 50vh;">
                <div class="col-lg-3"></div>
                <div class="col-lg-9" style="background-color: #0E1B1B;">
                    <div class="row">
                        <div class="col-lg"></div>
                        <div class="col-lg">
                            <div id="ReBl" class="title line3 text-light center ps-3 ps-lg-0" style="font-size: 6vh; text-align: end; height: 20vh; font-family: 'Playfair Display', serif;">Recent Blogs</div>
                        </div>
                    </div>
                    <div class="position-relative" style="height: 30vh;">
                        <div class="position-absolute top-100 start-50 translate-middle d-flex text-light" style="margin-left: -18vw;">
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19.png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(1\).png); min-height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(2\).png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- for mobile view -->
        <div class="d-block d-sm-none">
            <div style="background-color: #0E1B1B; min-height: 30vh;">
                <div  class="title line3 text-light center ps-3 ps-lg-0" style="font-size: 3vh; text-align: end; height: 10vh; font-family: 'Playfair Display', serif;">Recent Blogs</div>
                <div class="row"style="min-height: 60vh;">
                    <div class="col-lg bg" style="background-image: url(img/Rectangle\ 19.png);"></div>
                    <div class="col-lg bg" style="background-image: url(img/Rectangle\ 19\ \(1\).png);"></div>
                    <div class="col-lg bg" style="background-image: url(img/Rectangle\ 19\ \(2\).png);"></div>
                </div>
            </div>
        </div>
        <!-- 2nd  -->
        <div class="d-none d-sm-block">
            <div class="row" style="padding-bottom: 50vh;">
                <div class="col-lg-3"></div>
                <div class="col-lg-9" style="background-color: #0E1B1B; min-height: 50vh;">
                    <div class="position-relative" style="height: 30vh;">
                        <div class="position-absolute top-0 start-0 translate-middle d-flex text-light" style="margin-left: 19.5vw;">
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19.png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(1\).png); min-height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(2\).png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- modified blog design -->
                    <div class="position-relative" style="height: 30vh;">
                        <div class="position-absolute top-100 start-50 translate-middle d-flex text-light" style="margin-left: -18vw;">
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19.png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(1\).png); min-height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(2\).png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- 3rd blog -->
        <div class="d-none d-sm-block">
            <div class="row" style="padding-bottom: 50vh;">
                <div class="col-lg-3"></div>
                <div class="col-lg-9" style="background-color: #0E1B1B; min-height: 50vh;">
                    <div class="position-relative" style="height: 30vh;">
                        <div class="position-absolute top-0 start-0 translate-middle d-flex text-light" style="margin-left: 19.5vw;">
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19.png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(1\).png); min-height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(2\).png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- modified blog design -->
                    <div class="position-relative" style="height: 30vh;">
                        <div class="position-absolute top-100 start-50 translate-middle d-flex text-light" style="margin-left: -18vw;">
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19.png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(1\).png); min-height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="p-1 bg position-relative Blog" style="background-image: url(img/Rectangle\ 19\ \(2\).png); height: 40vh; width: 40vh;">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <div style="min-height: 10vh; min-width: 15vw; background-color: #0E1B1B;">
                                        <p class="center ps-4 pe-4" style="min-height: 10vh; font-family: 'Playfair Display', serif; ">Amet eu facilisi posuere ut at cras non ipsum proin</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
    var sections = gsap.utils.toArray('.Blog');
    sections.forEach((section) => {
        gsap.to(section, {
            x:"-50%",opacity:0,skewY: 20,
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