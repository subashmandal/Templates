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
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        @media (max-width:1440px) {
            .name{
                font-size: 8rem !important;
            }
            .img_row{
                max-height: 50vh !important;
            }
            .img_1, .img_2{
                height: 25vh !important;
            }
            .img_3{
                height: 35vh !important;
            }
            .img_4{
                height: 15vh !important;
            }
            .img_5{
                height: 20vh !important;
            }
            .img_6{
                height: 30vh !important;
            }
        }
        @media (max-width:850px) {
            .name{
                font-size: 5rem !important;
            }
            .img_row{
                max-height: 50vh !important;
            }
            .img_1, .img_2{
                height: 25vh !important;
            }
            .img_3{
                height: 35vh !important;
            }
            .img_4{
                height: 15vh !important;
            }
            .img_5{
                height: 20vh !important;
            }
            .img_6{
                height: 30vh !important;
            }
        }
        @media (max-width:600px) {
            .name{
                font-size:xx-large !important;
            }
            .img_row{
                max-height: 50vh !important;
            }
            .img_1, .img_2{
                height: 25vh !important;
            }
            .img_3{
                height: 35vh !important;
            }
            .img_4{
                height: 15vh !important;
            }
            .img_5{
                height: 20vh !important;
            }
            .img_6{
                height: 30vh !important;
            }
        }
        /* img slider start */
        img-slider {
            overflow: hidden;
            max-width: 100vw;
            max-height: 100vh;
            margin: 0 auto;
            width: 100%;
            position: relative;
            display: flex;
        }
        /* img-slider:hover .img_row {
            animation-play-state: paused;
        } */
        img-slider .img_row {
            display: flex;
            min-width: 100vw;
            position: relative;
            animation: marquee 50s linear infinite;
        }
        img-slider:after {
            content: "";
            position: absolute;
            width: 50%;
            height: 100%;
            left: 0;
            top: 0;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        /* img slider end */
        /* text slider start */
        text-slider {
            overflow: hidden;
            max-width: 100vw;
            max-height: 100vh;
            margin: 0 auto;
            width: 100%;
            position: relative;
            display: flex;
        }
        text-slider span {
            display: flex;
            min-width: 100vw;
            position: relative;
            animation: marquee_text 50s linear infinite;
        }
        @keyframes marquee_text {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-200%);
            }
        }
        /* text slider end */
        li a{
            margin: 0px 10px;
            padding: 10px 10px;
            position: relative;
        }
        li a:before, li a:after{
            position: absolute;
            left: 0px;
            width: 100%;
            height: 2px;
            background: #FFF;
            content: "";
            opacity: 0;
            transition: all 0.3s;
        }

        li a:before
        {
            top: 0px;
            transform: translateY(10px);
        }

        li a:after
        {
            bottom: 0px;
            transform: translateY(-10px);
        }

        li a:hover:before,  li a:hover:after
        {
            opacity: 1;
            transform: translateY(0px);
        }
        section .btn{
            transition: 0.5s;
        }
        section .btn:hover{
            background-color: white !important;
            color: rgba(0,120,120,1) !important;
            transform: translateY(-15px) !important;
        }
    </style>
</head>
<body style="overflow-x:hidden !important; font-family: 'Abhaya Libre', serif; background-color: black;">
<div id="smooth-wrapper" style="overflow-x: hidden !important;">
    <div id="smooth-content" style="overflow-x: hidden !important;">
        <!-- Start your project here-->
        <nav class="navbar navbar-expand-lg shadow-0 bg-black">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button
                    class="navbar-toggler text-light"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarRightAlignExample"
                    aria-controls="navbarRightAlignExample"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>
                <div>
                    <a href="graphics3.html"><h1 class="text-light" style="letter-spacing: 0.1em;">SPARROW</h1></a>
                </div>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                    <!-- Left links -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item me-lg-5 text-center">
                            <a class="nav-link text-light active" aria-current="page" href="works.html">WORKS</a>
                        </li>
                        <li class="nav-item me-lg-5 text-center">
                            <a class="nav-link text-light" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item me-lg-5 text-center">
                            <a class="nav-link text-light" href="gallery.html">GALLERY</a>
                        </li>
                        <li class="nav-item me-lg-5 text-center">
                            <a class="nav-link text-light" href="blogs.html">BLOG</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>

        <!-- 1st div -->
        <div class="container-fluid text-center name name1" style="font-size: 15rem;">
            <span class="text-uppercase text-black fw-bold" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">john</span>&nbsp;&nbsp;<span class="text-uppercase text-white fw-bold">sparrow</span>
        </div>
        <!-- 2nd div -->
        <div class="container-fluid g-0" style="background: rgb(0,120,120);">
            <img-slider class="bg-image">
                <!-- Gallery -->
                <div class="row img_row ms-3">
                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_1" style="height: 50vh; width: 100%;">

                        <img src="https://www.shutterstock.com/image-photo/surreal-image-african-elephant-wearing-260nw-1365289022.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_2" style="height: 50vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://thumbs.dreamstime.com/b/view-lingaraja-temple-complex-bhubaneswar-india-odisha-view-lingaraja-temple-complex-bhubaneswar-odisha-india-165731841.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_3" style="height: 70vh; width: 100%; ">

                        <img src="https://letsenhance.io/static/b8eda2f8914d307d52f725199fb0c5e6/62e7b/MainBefore.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_4" style="height: 30vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">

                        <img src="https://avatars.mds.yandex.net/i?id=84dbd50839c3d640ebfc0de20994c30d-4473719-images-taas-consumers&n=27&h=480&w=480" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_5" style="height: 40vh; width: 100%;">

                        <img src="lp_designs/img/Image.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_6" style="height: 60vh; width: 100%;">

                    </div>
                </div>
                <div class="row img_row ms-3">
                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_1" style="height: 50vh; width: 100%;">

                        <img src="https://www.shutterstock.com/image-photo/surreal-image-african-elephant-wearing-260nw-1365289022.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_2" style="height: 50vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://thumbs.dreamstime.com/b/view-lingaraja-temple-complex-bhubaneswar-india-odisha-view-lingaraja-temple-complex-bhubaneswar-odisha-india-165731841.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_3" style="height: 70vh; width: 100%; ">

                        <img src="https://letsenhance.io/static/b8eda2f8914d307d52f725199fb0c5e6/62e7b/MainBefore.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_4" style="height: 30vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">

                        <img src="https://avatars.mds.yandex.net/i?id=84dbd50839c3d640ebfc0de20994c30d-4473719-images-taas-consumers&n=27&h=480&w=480" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_5" style="height: 40vh; width: 100%;">

                        <img src="lp_designs/img/Image.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_6" style="height: 60vh; width: 100%;">

                    </div>
                </div>
                <div class="row img_row ms-3">
                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_1" style="height: 50vh; width: 100%;">

                        <img src="https://www.shutterstock.com/image-photo/surreal-image-african-elephant-wearing-260nw-1365289022.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_2" style="height: 50vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://thumbs.dreamstime.com/b/view-lingaraja-temple-complex-bhubaneswar-india-odisha-view-lingaraja-temple-complex-bhubaneswar-odisha-india-165731841.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_3" style="height: 70vh; width: 100%; ">

                        <img src="https://letsenhance.io/static/b8eda2f8914d307d52f725199fb0c5e6/62e7b/MainBefore.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_4" style="height: 30vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">

                        <img src="https://avatars.mds.yandex.net/i?id=84dbd50839c3d640ebfc0de20994c30d-4473719-images-taas-consumers&n=27&h=480&w=480" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_5" style="height: 40vh; width: 100%;">

                        <img src="lp_designs/img/Image.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_6" style="height: 60vh; width: 100%;">

                    </div>
                </div>
                <div class="row img_row ms-3">
                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_1" style="height: 50vh; width: 100%;">

                        <img src="https://www.shutterstock.com/image-photo/surreal-image-african-elephant-wearing-260nw-1365289022.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_2" style="height: 50vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">
                        <img src="https://thumbs.dreamstime.com/b/view-lingaraja-temple-complex-bhubaneswar-india-odisha-view-lingaraja-temple-complex-bhubaneswar-odisha-india-165731841.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_3" style="height: 70vh; width: 100%; ">

                        <img src="https://letsenhance.io/static/b8eda2f8914d307d52f725199fb0c5e6/62e7b/MainBefore.jpg" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_4" style="height: 30vh; width: 100%;">
                    </div>

                    <div class="col-4 mb-0 mb-lg-0">

                        <img src="https://avatars.mds.yandex.net/i?id=84dbd50839c3d640ebfc0de20994c30d-4473719-images-taas-consumers&n=27&h=480&w=480" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_5" style="height: 40vh; width: 100%;">

                        <img src="lp_designs/img/Image.png" alt="" class="img-fluid shadow-1-strong rounded-3 mb-4 img_6" style="height: 60vh; width: 100%;">

                    </div>
                </div>
                <!-- Gallery -->
                <div class="mask" style="background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.2931766456582633) 50%, rgba(0,0,0,1) 100%);">
                    <div class="d-flex justify-content-center align-items-end h-100">
                        <div class="text-center about_photo">
                            <a href="gallery.html"><p class="text-uppercase text-decoration-underline text-white" style="text-underline-offset: 8px;">See all photos</p></a>
                            <p class="text-white my-5 fs-1 " style="line-height: 100%;">Creating captivating video and motion designs that tell your brand's story and are sure to grab the attention of your audience.</p>
                        </div>
                    </div></div>
            </img-slider>
        </div>

        <!-- 3rd div -->
        <div class="container-fluid g-0" style="background: rgb(0,120,120);">
            <div class="text-center pt-5 name" style="font-size: 10rem;">
                <text-slider>
                    <span class="text-uppercase fw-bold" style="color: rgb(0,120,120); -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white; letter-spacing: 0.1em;">selected work</span>
                    &nbsp;&nbsp;<span class="text-uppercase text-white fw-bold" style="letter-spacing: 0.1em;">selected work</span>&nbsp;&nbsp;
                    <span class="text-uppercase fw-bold" style="color: rgb(0,120,120); -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white; letter-spacing: 0.1em;">selected work</span>
                    &nbsp;&nbsp;<span class="text-uppercase text-white fw-bold" style="letter-spacing: 0.1em;">selected work</span>&nbsp;&nbsp;
                </text-slider>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 position-relative pt-5">
                        <div class="position-relative img-fluid work_1" style="background-image:url('https://images.ctfassets.net/hrltx12pl8hq/3j5RylRv1ZdswxcBaMi0y7/b84fa97296bd2350db6ea194c0dce7db/Music_Icon.jpg'); background-repeat: no-repeat; background-size: cover; height: 60vh; width: 100%; background-position-y: top; background-position-x: center;">
                            <div class="position-absolute bottom-0 text-start mb-3" style="line-height: 100%;">
                                <p class="text-uppercase text-white fs-1 ms-3">cyberpunk</p>
                                <p class="text-uppercase text-secondary fs-5 ms-3">Invision Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-6 position-relative pt-5 work_2">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_-HhzvHXslE30b0CWnFL3jPu07coDJ3ToFsDcVxlN1eI4l0yLkCIhwP7wCNwrWecLXG0&usqp=CAU" alt="" class="rounded-3"  style="width: 100%; height: 50vh">
                                <div class="position-absolute bottom-0 text-start mb-3" style="line-height: 100%;">
                                    <p class="text-uppercase text-white fs-1 ms-3">Digital Future</p>
                                    <p class="text-uppercase text-secondary fs-5 ms-3">Motion Agency</p>
                                </div>
                            </div>
                            <div class="col-lg-6 position-relative pt-5 work_3">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" alt="" class="rounded-3" style="width: 100%; height: 50vh">
                                <div class="position-absolute bottom-0 text-start mb-3" style="line-height: 100%;">
                                    <p class="text-uppercase text-white fs-1 ms-3">Virtual Reality</p>
                                    <p class="text-uppercase text-secondary fs-5 ms-3">Vision Square</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="works.html"><p class="text-uppercase text-decoration-underline fs-4 my-5 text-white" style="text-underline-offset: 8px;">See all works</p></a>
                </div>
            </div>

            <!-- 4th div -->
            <div class="text-center name" style="font-size: 10rem;">
                <text-slider>
                    <span class="text-uppercase fw-bold" style="color: rgb(0,120,120); -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white; letter-spacing: 0.1em;">recent blogs</span>
                    &nbsp;&nbsp;<span class="text-uppercase text-white fw-bold" style="letter-spacing: 0.1em;">recent blogs</span>&nbsp;&nbsp;
                    <span class="text-uppercase fw-bold" style="color: rgb(0,120,120); -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white; letter-spacing: 0.1em;">recent blogs</span>
                    &nbsp;&nbsp;<span class="text-uppercase text-white fw-bold" style="letter-spacing: 0.1em;">recent blogs</span>&nbsp;&nbsp;
                </text-slider>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 position-relative pt-5 blog_1">
                        <div class="position-relative img-fluid" style="background-image:url('https://static8.depositphotos.com/1320014/918/i/600/depositphotos_9181010-stock-photo-walled-hindu-temple.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 50vh; width: 100%; background-position-y: top; background-position-x: center;">
                            <div class="position-absolute bottom-0 text-start mb-3" style="line-height: 100%;">
                                <p class="text-uppercase text-white fs-1 ms-3">cyberpunk</p>
                                <p class="text-uppercase text-secondary fs-5 ms-3">Invision Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-6 position-relative pt-5 blog_2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png" alt="" class="rounded-3"  style="width: 100%; height: 50vh">
                                <div class="position-absolute bottom-0 text-start mb-3" style="line-height: 100%;">
                                    <p class="text-uppercase text-white fs-1 ms-3">Digital Future</p>
                                    <p class="text-uppercase text-secondary fs-5 ms-3">Motion Agency</p>
                                </div>
                            </div>
                            <div class="col-lg-6 position-relative pt-5 blog_3">
                                <img src="https://thumbs.dreamstime.com/b/view-lingaraja-temple-complex-bhubaneswar-india-odisha-view-lingaraja-temple-complex-bhubaneswar-odisha-india-165731841.jpg" alt="" class="rounded-3" style="width: 100%; height: 50vh">
                                <div class="position-absolute bottom-0 text-start mb-3" style="line-height: 100%;">
                                    <p class="text-uppercase text-white fs-1 ms-3">Virtual Reality</p>
                                    <p class="text-uppercase text-secondary fs-5 ms-3">Vision Square</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="blogs.html"><p class="text-uppercase text-decoration-underline fs-4 my-5 text-white" style="text-underline-offset: 8px;">See all blogs</p></a>
                </div>
            </div>
            <!-- 5th div -->
            <div class="container" id="about">
                <div class="mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 col-sm-12 justify-content-center d-flex">
                            <img
                                src="lp_designs/img/Image.png"
                                alt="Trendy Pants and Shoes"
                                class="img-fluid rounded-5"
                                style="width: 200px; height: 150px;"
                            />
                        </div>
                        <div class="col-md-8 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class=" m-4">
                                <h5 class="text-white text-uppercase" style="letter-spacing: 0.1em;">John Sparrow</h5>
                                <h5 class="text-white text-uppercase" style="letter-spacing: 0.1em;">Visual designer</h5>
                                <p class="text-white opacity-75" style="letter-spacing: 0.1em;">About john sparrow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="text-center text-white">
                <!-- Grid container -->
                <div class="container pt-4">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-white m-1 border bg-transparent rounded-6"
                            href="#!"
                            role="button"
                            data-mdb-ripple-color="dark"
                        ><i class="fab fa-facebook-f fa-lg"></i
                            ></a>

                        <!-- Twitter -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-white m-1 border bg-transparent rounded-6"
                            href="#!"
                            role="button"
                            data-mdb-ripple-color="dark"
                        ><i class="fab fa-twitter fa-lg"></i
                            ></a>

                        <!-- Google -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-white m-1 border bg-transparent rounded-6"
                            href="#!"
                            role="button"
                            data-mdb-ripple-color="dark"
                        ><i class="fab fa-google fa-lg"></i
                            ></a>

                        <!-- Instagram -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-white m-1 border bg-transparent rounded-6"
                            href="#!"
                            role="button"
                            data-mdb-ripple-color="dark"
                        ><i class="fab fa-instagram fa-lg"></i
                            ></a>

                        <!-- Linkedin -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-white m-1 border bg-transparent rounded-6"
                            href="#!"
                            role="button"
                            data-mdb-ripple-color="dark"
                        ><i class="fab fa-linkedin fa-lg"></i
                            ></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center text-white p-3 fs-1 opacity-60" style="letter-spacing: 0.1em;">
                    © 2023 Made by & Powered by <a href="wooble.org" class="text-white">wooble.</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
        <!-- End your project here-->
    </div>
</div>
<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Gsap -->
<script src="../gsap/minified/gsap.min.js"></script>
<script src="../gsap/minified/ScrollTrigger.min.js"></script>
<script src="../gsap/minified/ScrollSmoother.min.js"></script>
<script src="../gsap/minified/SplitText.min.js"></script>
<!-- gsap Script -->
<script>
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, gsap);
    // text animation
    $('.name1 span').each(function(){
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='_text3'>$&</span>"));
    });
    var $text5 = $(".name1 span"),
        tl_5 = new TimelineMax({repeat:0});

    tl_5.staggerFrom($text5, 0.5, {alpha: 0, x: 40, ease: Power1.easeOut}, 0.1,'+=1.2');
    // .staggerTo($text5, 0.5, {alpha: 0, x: -40, ease: Power1.easeOut}, 0.1, '+=1.5');
    // text animation end

    gsap.from(".about_photo", {y:"-100%",opacity:0,scrollTrigger: {trigger: ".about_photo",start: "top 100%",end: "+=100%",markers: false,scrub : true,}});

    gsap.from(".work_1", {y: "30%", scale: 0.8,scrollTrigger: {trigger: ".work_1",start: "top 100%",end: "+=30%",markers: false,scrub : true,}});

    gsap.from(".work_2", {x: "-100%",y:"30%",opacity:0, ease: "SlowMo.easeOut",scrollTrigger: {trigger: ".work_2",start: "top 100%",end: "+=50%", markers:false, scrub : true,}});

    gsap.from(".work_3", {x: "100%",y:"30%", opacity:0, ease: "SlowMo.easeOut",scrollTrigger: {trigger: ".work_3",start: "top 100%",end: "+=50%", markers:false, scrub : true,}});

    gsap.from(".blog_1", {y: "30%", scale: 0.8,scrollTrigger: {trigger: ".blog_1",start: "top 100%",end: "+=50%",markers: false,scrub : true,}});

    gsap.from(".blog_2", {x: "-100%",y:"30%",opacity:0, ease: "SlowMo.easeOut",scrollTrigger: {trigger: ".blog_2",start: "top 100%",end: "+=50%", markers:false, scrub : true,}});

    gsap.from(".blog_3", {x: "100%",y:"30%", opacity:0, ease: "SlowMo.easeOut",scrollTrigger: {trigger: ".blog_3",start: "top 100%",end: "+=50%", markers:false, scrub : true,}});

</script>

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:0,
    })
</script>
</body>
</html>