<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PZBV6NB');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Wooble - Unify your work with Digital Portfolio</title>
    <!-- Wooble icon -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!--    <link rel="manifest" href="/site.webmanifest">-->
    <!-- Font Awesome -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228873711-1"></script>
    <!-- Google Fonts Roboto -->
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- Google Fonts Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link rel="stylesheet" href="https://wooble.org/css/mdb.min.css" />


    <style>
        .glassism{
            /* From https://css.glass */
            background: rgba(200, 200, 200, 0.2);
            /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);*/
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
            border-radius: 30px;
        }
        /* logo slider start */
        .f_img{
            margin-left: 10px;
            margin-right: 10px;
            overflow-x: scroll  ;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .br{
            border: 1px solid red;
        }

        logo-slider {
            --image-size: 50px;
            padding: 20px;
            overflow: hidden;
            max-width: 100vw;
            width: 100%;
            margin: 0 auto;
            position: relative;
            display: flex;
            margin-bottom: 20px;
            filter: grayscale(100%);
        }
        logo-slider:hover div {
            animation-play-state: paused;
            filter: grayscale(0%)!important;
        }
        logo-slider div {
            display: flex;
            position: relative;
            animation: marquee 50s linear infinite;
            /*justify-content: space-around;*/
        }
        logo-slider img {
            display: block;
            min-width: var(--image-size);
            height: var(--image-size);
            /*margin: 0 1vw;*/
        }
        logo-slider:after {
            content: "";
            position: absolute;
            width: 50%;
            height: 100%;
            left: 0;
            top: 0;
            /* background: linear-gradient(to right, white, rgba(255, 255, 255, 0) 80px, rgba(255, 255, 255, 0) calc(100% - 80px), white); */
        }
        @media (max-width: 900px) {
            logo-slider {
                --image-size: 50px;
                --image-size: min(max(50px, 10vw), 100px);
            }
        }

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        @media (max-width: 420px){
            .mobile{
                display: none !important;
            }
        }
        @media (max-width: 420px){
            .font{
                font-size: 15vw !important;
            }
        }

        /* logo slider end */
        @keyframes fade-in {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        @keyframes fade-out {
            from {
                transform: scale(1);
                opacity: 1;
            }

            to {
                transform: scale(0);
                opacity: 0;
            }
        }
        /* card slider start */
        .f_card{
            width: 400px;
            background: rgba(200, 200, 200, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
            border-radius: 30px;
            /* margin-left: 10px;
            margin-right: 10px; */
            /* overflow-x: scroll  ; */
            /* -ms-overflow-style: none;  IE and Edge */
            /* scrollbar-width: none;  Firefox */
        }
        .f_content{
            height: 100px;
            overflow-y:scroll;
            scrollbar-width: none;
            -ms-overflow-style: none; /* IE and Edge */
        }
        .slider {
            padding: 20px;
            overflow: hidden;
            max-width: 100vw;
            width: 100%;
            margin: 0 auto;
            position: relative;
            display: flex;
            overflow-x: scroll;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
            /* margin-bottom: 20px; */
        }
        .slider::-webkit-scrollbar {
            display: none;
        }
        .slider:hover div {
            animation-play-state: paused;
        }
        .slider .academic_card {
            display: flex;
            position: relative;
            animation: marquee 250s linear infinite;
            /*justify-content: space-around;*/
        }

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        /* card slider end */
        .img_hover:hover{
            z-index: 10 !important;
        }
        /*.random-word {*/
        /*    display: inline-block;*/
        /*    letter-spacing: 3px;*/
        /*    width: auto;*/
        /*    !*   transition: all 1.25s; *!*/
        /*    animation: slidedown 1s infinite;*/
        /*    -webkit-animation: slidedown 1.5s infinite;*/
        /*    -moz-animation: slidedown 1.5s infinite;*/
        /*}*/

        @keyframes slidedown {
            0% {
                opacity: 0;
            }

            5% {
                opacity: 0;
                transform: translateY(0.5em);
            }

            7% {
                transform: translateY(-1em);
            }

            10% {
                opacity: 0;
            }

            20% {
                transform: translateY(0);
                opacity: 100;
            }
        }
        @keyframes slide_in {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        @keyframes slide_out {
            from {
                transform: scale(1);
                opacity: 1;
            }

            to {
                transform: scale(0);
                opacity: 0;
            }
        }
        .typed-cursor {
            color: red;
        }
    </style>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-228873711-1');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1048430763241995');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1048430763241995&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->

</head>
<body style="font-family: 'Ubuntu', sans-serif; overflow-x: hidden;">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZBV6NB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <!-- Start your project here-->
        <header class="bg-white sticky-top" style="z-index: 1000;" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="pulse" data-mdb-animation-start="onLoad">
            <nav class="navbar navbar-expand-lg navbar-white shadow-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../../">
                        <img src="https://wooble.org/wooble-img/wooble logo 1.svg" alt="Wooble Logo" class="src w-25" loading="lazy">
                        <small class="fs-1 fw-bold ls-wide" style="font-family: 'Ubuntu', sans-serif; color:#002366;">Wooble</small>
                    </a>
                    <button
                            class="navbar-toggler"
                            type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarRightAlignExample" aria-controls="navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                        <!-- Left links -->
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-family: 'Ubuntu', sans-serif;">
                            <li class="nav-item text-center">
                                <a class="nav-link fs-5 ls-wide text-black" href="https://wooble.org/examples">Exemplar</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link fs-5 ls-wide text-black" href="https://wooble.org/features">Features</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link fs-5 ls-wide text-black" href="https://wooble.org/wooble-blogs">Blogs</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link fs-5 ls-wide text-black" href="https://app.wooble.org">Sign In</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="https://app.wooble.org/onboarding/"><button type="button" class="btn btn-rounded text-white" style="background-color: #002366;">get started</button></a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                </div>

            </nav>
        </header>

        <main id="scrollTop" style="overflow-x: hidden;">
            <!-- 1st section -->
            <div style="background-color:white;">

                <!-- add animation here -->
                <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">

                    <!-- random text and icon present -->
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center justify-content-center">
                            <h1 class="text-wrap fon lh-1 oute position-relative fs-1" style="color:rgb(10,34,98);">Build a portfolio that brings out your
                                <span class="text_fl"></span>
                            </h1>

                        </div>
                    </div>
                </div>
                <div class="container border border-danger">
                    <lottie-player id="firstLottie" src="https://assets2.lottiefiles.com/packages/lf20_i9mxcD.json" style="width: 100%; height: 100%;"></lottie-player>
                </div>

            </div>

            <!-- 2nd section -->
            <!--    <div id="videoContainer" class="video-container bg-danger" style="height: 100vh;">-->
            <!--        <video src="lottie_files/videoplayback.mp4" type="video/mp4" id="bgVideo" class="object-cove vh-100 vw-10" muted></video>-->
            <!--        <lottie-player loop id="firstLottie" src="lottie_files/video.json" style="width:100%; height: 100vh;"></lottie-player>-->
            <!--    </div>-->
            <!--    <div class="container-fluid p-0 bg-success" id="loti_pin" style="height: 100vh;">-->
            <!--        <lottie-player loop id="firstLottie" src="lottie_files/video.json" style="width:100%; height: 100%;"></lottie-player>-->
            <!--    </div>-->
            <!-- for mobile device -->
            <div class="justify-content-center d-flex mb-4 mt-3">
                <p class="fs-1 text-center text-wrap px-2">
                    Wooble serves millions of people who wish to pursue their ambition with passion.</p>
            </div>
            <!-- 3rd section -->
            <!-- logos slider -->
            <logo-slider class="slider1">

                <div>
                    <img src="https://wooble.org/img/supporters/1.png" title="featured in Dharitri for Launch Event on July 23, 2022" alt="Dharitri" class="src f_img">
                    <img src="https://wooble.org/img/supporters/2.jpg" title="featured in FinShashta Annual Magazine on 19th Nov 2022" alt="X-Fin XIMB Finance Club" class="src f_img">
                    <img src="https://wooble.org/img/supporters/3.jpg" title="Founder featured on Newspaper and Online Portal" alt="dainik jagran" class="src f_img">
                    <img src="https://wooble.org/img/supporters/4.jpeg" title="featured in Sambad for Launch Event on July 23, 2022" alt="sambad odiya newspaper" class="src f_img">
                    <img src="https://wooble.org/img/supporters/5.jpeg" title="Presented During Talk Show at FED KIIT" alt="FED" class="src f_img">
                    <img src="https://wooble.org/img/supporters/6.png" title="Founder featured in Magazine as 15 Young entrepreneur in 2022 to look for" alt="Outlook India" class="src f_img">
                    <img src="https://wooble.org/img/supporters/7.png" title="DNUS recognition of Company" alt="dun & bradstreet" class="src f_img">
                    <img src="https://wooble.org/img/supporters/8.png" title="Presented Wooble at the Gitex Global 2022 at Dubai" alt="gitex global" class="src f_img">
                    <img src="https://wooble.org/img/supporters/9.jpeg" title="Featured in News 18 Odisa for the launch Even on 23r July 2022" alt="News 18 Odiya" class="src f_img">
                    <img src="https://wooble.org/img/supporters/10.png" title="Electronic Media coverage during Launch event in July 2022" alt="argus news" class="src f_img">
                    <img src="https://wooble.org/img/supporters/11.png" title="ISO 27001 certified company" alt="ISO certification" class="src f_img">
                </div>

                <div>
                    <img src="https://wooble.org/img/supporters/1.png" title="featured in Dharitri for Launch Event on July 23, 2022" alt="Dharitri" class="src f_img">
                    <img src="https://wooble.org/img/supporters/2.jpg" title="featured in FinShashta Annual Magazine on 19th Nov 2022" alt="X-Fin XIMB Finance Club" class="src f_img">
                    <img src="https://wooble.org/img/supporters/3.jpg" title="Founder featured on Newspaper and Online Portal" alt="dainik jagran" class="src f_img">
                    <img src="https://wooble.org/img/supporters/4.jpeg" title="featured in Sambad for Launch Event on July 23, 2022" alt="sambad odiya newspaper" class="src f_img">
                    <img src="https://wooble.org/img/supporters/5.jpeg" title="Presented During Talk Show at FED KIIT" alt="FED" class="src f_img">
                    <img src="https://wooble.org/img/supporters/6.png" title="Founder featured in Magazine as 15 Young entrepreneur in 2022 to look for" alt="Outlook India" class="src f_img">
                    <img src="https://wooble.org/img/supporters/7.png" title="DNUS recognition of Company" alt="dun & bradstreet" class="src f_img">
                    <img src="https://wooble.org/img/supporters/8.png" title="Presented Wooble at the Gitex Global 2022 at Dubai" alt="gitex global" class="src f_img">
                    <img src="https://wooble.org/img/supporters/9.jpeg" title="Featured in News 18 Odisa for the launch Even on 23r July 2022" alt="News 18 Odiya" class="src f_img">
                    <img src="https://wooble.org/img/supporters/10.png" title="Electronic Media coverage during Launch event in July 2022" alt="argus news" class="src f_img">
                    <img src="https://wooble.org/img/supporters/11.png" title="ISO 27001 certified company" alt="ISO certification" class="src f_img">
                </div>

                <div>
                    <img src="https://wooble.org/img/supporters/1.png" title="featured in Dharitri for Launch Event on July 23, 2022" alt="Dharitri" class="src f_img">
                    <img src="https://wooble.org/img/supporters/2.jpg" title="featured in FinShashta Annual Magazine on 19th Nov 2022" alt="X-Fin XIMB Finance Club" class="src f_img">
                    <img src="https://wooble.org/img/supporters/3.jpg" title="Founder featured on Newspaper and Online Portal" alt="dainik jagran" class="src f_img">
                    <img src="https://wooble.org/img/supporters/4.jpeg" title="featured in Sambad for Launch Event on July 23, 2022" alt="sambad odiya newspaper" class="src f_img">
                    <img src="https://wooble.org/img/supporters/5.jpeg" title="Presented During Talk Show at FED KIIT" alt="FED" class="src f_img">
                    <img src="https://wooble.org/img/supporters/6.png" title="Founder featured in Magazine as 15 Young entrepreneur in 2022 to look for" alt="Outlook India" class="src f_img">
                    <img src="https://wooble.org/img/supporters/7.png" title="DNUS recognition of Company" alt="dun & bradstreet" class="src f_img">
                    <img src="https://wooble.org/img/supporters/8.png" title="Presented Wooble at the Gitex Global 2022 at Dubai" alt="gitex global" class="src f_img">
                    <img src="https://wooble.org/img/supporters/9.jpeg" title="Featured in News 18 Odisa for the launch Even on 23r July 2022" alt="News 18 Odiya" class="src f_img">
                    <img src="https://wooble.org/img/supporters/10.png" title="Electronic Media coverage during Launch event in July 2022" alt="argus news" class="src f_img">
                    <img src="https://wooble.org/img/supporters/11.png" title="ISO 27001 certified company" alt="ISO certification" class="src f_img">
                </div>

            </logo-slider>
            <!-- 4th section -->
            <div class="d-none d-sm-block mt-5" style="position:relative; background: linear-gradient(90deg, #002366 0%, #306FB2 100%); min-height: 150vh;">
                <img src="https://wooble.org/wooble-img/Group 9.webp" alt="" class="src img-fluid w-100 groupImg" style="margin-top: -5vh;">
                <!-- <div class="bg-white" style="width: 100%; height:6rem; position:absolute; bottom:0; z-index:1;"></div> -->
            </div>
            <!-- for mobile -->
            <div class="d-block d-sm-none mb-4 py-2" style="position:relative; background: linear-gradient(90deg, #002366 0%, #306FB2 100%);">
                <img src="https://wooble.org/wooble-img/Group 9.webp" alt="" class="src img-fluid" >
            </div>
            <!-- 5th section -->
            <div class="text-center" style="padding-top: 10vh;">
                <a style="padding:10px 20px;" href="#"><button type="button" class="btn text-white btn-lg text-capitalize btn-rounded fs-4 reason" style="background: radial-gradient(50% 50% at 50% 50%, rgba(29, 64, 131, 0.83) 0%, #1D4083 100%);">✨ 4 reasons for using wooble ✨</button></a>

                <!-- <a href="" target="_blank"><button type="button" class="btn btn-rounded text-light my-5 reason143" style="background: #0E0E48; letter-spacing: 0.1em;">CREATE YOUR PORTFOLIO!</button></a> -->
            </div>
            <!-- 6th section -->
            <div class="container text-center">
                <div class="row my-5 justify-content-center">
                    <!-- card-1 -->
                    <div class="col-md-5 pt-5 px-lg-5 " >
                        <div class="glassism rounded-9 text-center" style="min-height: 55vh;">
                            <div class="hover-zoom">
                                <img src="https://wooble.org/wooble-img/icon_1.png" class="img-fluid reason1" style="width: 20.5rem; position: relative; margin-top: -30px;"/>
                            </div>

                            <div class="px-3">
                                <h5 class="text-black fs-1 mt-3 caption">Personalized<br>Domain</h5>
                                <!-- data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-left" data-mdb-animation-start="onScroll" data-mdb-animation-delay="500" -->
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Build your own domain that provides trust, authority, and custom-named hyperlinks.
                                </p>
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Make it uniquely yours by credibility, and branding through personalized domain as well as advanced Google ranking factors.
                                </p>

                                <a href="onboarding">
                                    <button type="button" class="btn btn-outline-dark btn-rounded fw-light fs-6 my-4 caption" data-mdb-ripple-color="dark" style="letter-spacing: 0.2rem;">Try It Out</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- card-2 -->
                    <div class="col-md-5 pt-5 px-lg-5">
                        <div class="glassism rounded-9 text-center" style="min-height: 55vh;">
                            <div class="hover-zoom">
                                <img src="https://wooble.org/wooble-img/icon_2.png" class="img-fluid reason2" style="width: 70%; position: relative; margin-top: -30px;"/>
                            </div>

                            <div class="px-3">
                                <h5 class="text-black fs-1 mt-3 caption">Professional<br>Templates</h5>
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Wooble's excellent templates represent your personality.
                                </p>
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Digital portfolio offers creative, original design with limitless customizable options such as colors, fonts, and stylos.
                                </p>

                                <a href="onboarding">
                                    <button type="button" class="btn btn-outline-dark btn-rounded fw-light fs-6 my-4 caption" data-mdb-ripple-color="dark" style="letter-spacing: 0.2rem;">Try It Out</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- card-3 -->
                    <div class="col-md-5 pt-5 px-lg-5">
                        <div class="glassism rounded-9 text-center" style="min-height: 60vh;">
                            <div class="hover-zoom">
                                <img src="https://wooble.org/wooble-img/icon_3.png" class="img-fluid reason1" style="position:relative; width: 12.5rem; margin-top: -30px;" data-mdb-toggle="animation"/>
                            </div>

                            <div class="px-3">
                                <h5 class="text-black fs-1 mt-3 caption">Audible<br>Blogs</h5>
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Upload your incredible writings, stories, photographs, videos and many more through ideal blog section.
                                </p>
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Convey your blogs digitally with AI text-to-speech and hyperlink assistance in real time. Say no to coding, just focus on adding.
                                </p>
                                <a href="onboarding">
                                    <button type="button" class="btn btn-outline-dark btn-rounded fw-light fs-6 my-4 caption" data-mdb-ripple-color="dark" style="letter-spacing: 0.2rem;">Try It Out</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- card-4 -->
                    <div class="col-md-5 pt-5 px-lg-5">
                        <div class="glassism rounded-9 text-center" style="min-height: 60vh; align-self:normal;">
                            <div class="hover-zoom">
                                <img src="https://wooble.org/wooble-img/icon%20gallery.png" class="img-fluid reason2" style="width: 13.5rem; position: relative; margin-top: -40px;" data-mdb-toggle="animation"/>
                            </div>

                            <div class="px-3">
                                <h5 class="text-black fs-1 pb-4 mt-3 caption">Collective<br>Gallery</h5>
                                <p class="fw-lighter my-5 text-wrap caption">
                                    Upload any high-resolution photographs and add interesting descriptions with cool titles.
                                </p>
                                <p class="fw-lighter my-4 text-wrap caption">
                                    Glorify your imagination with the carousel and scrollable tile view choices in wooble’s gallery section.
                                </p>

                                <a href="onboarding">
                                    <button type="button" class="btn btn-outline-dark btn-rounded fw-light fs-6 my-4 caption" data-mdb-ripple-color="dark" style="letter-spacing: 0.2rem;">Try It Out</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 7th section -->
            <div style="background-color: rgb(10, 34, 98);">
                <div class="container-fluid text-white position-relative" style="background: linear-gradient(180deg, #02002B 0%, #002366 100%);">

                    <img src="https://wooble.org/wooble-img/diamond-1.svg" alt="" class="src d1 d-none d-md-block position-absolute top-0 start-0" style="z-index: 1; width: 15rem;">

                    <img src="https://wooble.org/wooble-img/diamond-2.svg" alt="" class="src d2 d-none d-md-block position-absolute bottom-0 end-0" style=" z-index: 1; width: 20rem;">

                    <img src="https://wooble.org/wooble-img/diamond-3.svg" alt="" class="src d3 d-none d-md-block position-absolute start-0 bottom-0" style=" z-index: 1; ">

                    <img src="https://wooble.org/wooble-img/diamond-4.svg" alt="" class="src d4 d-none d-md-block position-absolute top-0 end-0" style=" z-index: 1; width: 20rem;">

                    <div class="container text-center position-relative" style="z-index: 2;">
                        <p class="fs-1 fw-bold lh-sm pt-4 ucl"><span style="font-size:3.5rem;" class="fw-bolder">Unlimited</span><br> customizable layouts</p>
                        <!-- for desktop -->
                        <div class="d-none d-sm-block">
                            <div class="py-5 img_scale position-relative" style="justify-content: center; display: flex;">
                                <img src="https://wooble.org/wooble-img/mockup screen.svg" alt="mockup screen" class="src" style="transform: scaleY(0.9);">
                                <video class="position-absolute" height="950px" width="870px"  style="z-index: 0; top: -99px; transform: scaleY(1.12);"  loop autoplay muted>
                                    <source src="https://wooble.org/video/tutorial.mp4" type="video/mp4">
                                    <p>If you are reading this, it is because your browser does not support the HTML5 video element.</p>
                                </video>
                            </div>
                        </div>
                        <!-- for Mobile -->
                        <div class="d-block d-sm-none">
                            <img src="https://wooble.org/wooble-img/tutorial_image.webp" alt="" class="src img-fluid">
                        </div>
                    </div>

                </div>
                <!-- 8th section -->
                <div style="min-height: 50vh; background: radial-gradient(circle at bottom, rgba(0,35,102,1) 3%, rgba(41,73,135,1) 4%, rgba(16,52,124,1) 5%, rgba(0,35,102,1) 11%, rgba(41,73,135,1) 12%, rgba(0,35,102,1) 12%, rgba(0,35,102,1) 19%, rgba(41,73,135,1) 20%, rgba(0,35,102,1) 21%, rgba(4,44,121,1) 30%, rgba(41,73,135,1) 31%, rgba(0,35,102,1) 33%, rgba(0,35,102,1) 40%);">
                    <div class="text-center d-flex align-items-center justify-content-center fw-bold">
                        <div class="row flex-column w-75 py-3 ">
                            <div class="col fs-1 text-white text-capitalize py-2 lexicon">Academic Lexicon</div>
                            <p class="text-wrap fw-light text-white px-2 lexicon_title">What institutions say about the
                                importance of having a portfolio.</p>
                        </div>
                    </div>
                    <div class="d-none d-sm-block">
                        <div class="slider slider2">
                            <div class="academic_card">
                                <!-- card_1 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.careerservices.txst.edu/students-alumni/resources-services/career-guides/portfolio-guide.html" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/1.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.careerservices.txst.edu/students-alumni/resources-services/career-guides/portfolio-guide.html"><h5 class="text-white text-wrap">Texas State University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Rather than simply listing your skills, activities, interests, education and experience, a career portfolio allows you to enhance the presentation of your skills.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_2 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://imdiversity.com/diversity-news/a-work-portfolio-can-showcase-your-experience-and-potential/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/2.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://imdiversity.com/diversity-news/a-work-portfolio-can-showcase-your-experience-and-potential/"><h5 class="text-white text-wrap">IM Diversity</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A portfolio provides a way to tell the story of your career and the challenges you have overcome.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_3 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://help.open.ac.uk/create-a-professional-portfolio-for-when-you-are-applying-for-jobs" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/3.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://help.open.ac.uk/create-a-professional-portfolio-for-when-you-are-applying-for-jobs"><h5 class="text-white text-wrap">The Open University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A professional portfolio indicates that you’re self-reflective and proactive in terms of your own development.
                                        </p>
                                    </div>
                                </div>

                                <!-- card_4 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://drexel.edu/scdc/professional-pointers/application-materials/portfolio-dev/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/4.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://drexel.edu/scdc/professional-pointers/application-materials/portfolio-dev/"><h5 class=" text-white">Drexel University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A well-developed portfolio helps you to be better prepared for your job search.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_5 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.latrobe.edu.au/students/opportunities/careers/career-portfolio" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/5.webp" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.latrobe.edu.au/students/opportunities/careers/career-portfolio"><h5 class=" text-white">La Trobe University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Through portfolios, you can collate the information you need to write a high impact job application.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_6 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.ncda.org/aws/NCDA/pt/sd/news_article/5253/_PARENT/CC_layout_details/false" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/6.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.ncda.org/aws/NCDA/pt/sd/news_article/5253/_PARENT/CC_layout_details/false"><h6 class=" text-white">National Career Development Association(NCDA)</h6></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            The basis for creating a career portfolio for use in professional positions , is to identify accomplishments and skill areas for performance appraisals and promotions.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_7 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://career.fsu.edu/portfolio/sample-portfolios" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/7.svg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://career.fsu.edu/portfolio/sample-portfolios"><h5 class=" text-white">Florida State University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Building your Career Portfolio helps you get organized, showcase your skills and accomplishments, and stand out from the crowd.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_8 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.wcsu.edu/careersuccess/resumes/build-your-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/8.webp" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.wcsu.edu/careersuccess/resumes/build-your-portfolio/"><h5 class=" text-white">Western Connecticut State University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Portfolio offers valuable insight into your professional development and skill mastery.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_9 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://clutejournals.com/index.php/TLC/article/view/1148" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/9.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://clutejournals.com/index.php/TLC/article/view/1148"><h5 class=" text-white">Journal Of College Teaching & Learning</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A career portfolio can be useful in obtaining an internship or entry-level position and throughout a career’s progression.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_10 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://bccareercenter.wordpress.com/2020/05/06/how-to-promote-yourself-with-an-online-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/10.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/>
                                            </a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://bccareercenter.wordpress.com/2020/05/06/how-to-promote-yourself-with-an-online-portfolio/"><h5 class=" text-white">Boston College</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            It can be very beneficial for people  to take an extra step and create an online portfolio to showcase their work and skills.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_11 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://careers.tufts.edu/resources/what-is-an-online-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/11.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://careers.tufts.edu/resources/what-is-an-online-portfolio/"><h5 class=" text-white">Tufts University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A portfolio displays skills and projects in a robust and visual way that complements the information in your resume and cover letter.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_12 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.capella.edu/blog/career/why-a-portfolio-is-important-for-your-career/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/12.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.capella.edu/blog/career/why-a-portfolio-is-important-for-your-career/"><h5 class=" text-white">Capella University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Portfolios are a great way to demonstrate the competencies you would list on a resume or talk about in an interview — they allow you to show and not just tell.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_13 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.digitalschool.ca/how-a-private-portfolio-can-illustrate-promote-your-cad-training/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/13.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.digitalschool.ca/how-a-private-portfolio-can-illustrate-promote-your-cad-training/"><h5 class=" text-white">Digital School Technical Design College</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Employers often ask to see the portfolios of potential new employees, so that they can get a good sense of their expert training and hands-on skills.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_14 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://go.gale.com/ps/i.do?id=GALE%7CA200844487&sid=googleScholar&v=2.1&it=r&linkaccess=abs&issn=00220787&p=AONE&sw=w&userGroupName=anon%7E6f5810c6" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/14.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://go.gale.com/ps/i.do?id=GALE%7CA200844487&sid=googleScholar&v=2.1&it=r&linkaccess=abs&issn=00220787&p=AONE&sw=w&userGroupName=anon%7E6f5810c6"><h5 class=" text-white">Gale Academic Onefile</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A portfolio is a visual representation of work samples, skills, abilities, knowledge, and capabilities..
                                        </p>
                                    </div>
                                </div>
                                <!-- card_15 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.icb.edu/blogs/why-you-should-have-a-professional-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/15.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.icb.edu/blogs/why-you-should-have-a-professional-portfolio/"><h5 class=" text-white">International College of Broadcasting</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A digital portfolio highlights your best video or audio clips and can help generate excitement, set yourself apart from the competition, and make employers remember you.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_16 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.arts.ac.uk/students/student-careers/career-skills-and-support/how-to-build-a-portfolio" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/16.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.arts.ac.uk/students/student-careers/career-skills-and-support/how-to-build-a-portfolio"><h5 class=" text-white">UAL</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A professional portfolio is a curated collection of work that demonstrates your creativity, skills and ability.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_17 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://ctl.wiley.com/e-portfolios-and-their-uses-in-higher-education/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/17.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://ctl.wiley.com/e-portfolios-and-their-uses-in-higher-education/"><h5 class=" text-white">Wiley University Services</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            E-portfolios are valuable tools to aid in students’ academic growth and their transition into the career landscape.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="academic_card">
                                <!-- card_1 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.careerservices.txst.edu/students-alumni/resources-services/career-guides/portfolio-guide.html" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/1.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.careerservices.txst.edu/students-alumni/resources-services/career-guides/portfolio-guide.html"><h5 class="text-white text-wrap">Texas State University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Rather than simply listing your skills, activities, interests, education and experience, a career portfolio allows you to enhance the presentation of your skills.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_2 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://imdiversity.com/diversity-news/a-work-portfolio-can-showcase-your-experience-and-potential/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/2.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://imdiversity.com/diversity-news/a-work-portfolio-can-showcase-your-experience-and-potential/"><h5 class="text-white text-wrap">IM Diversity</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A portfolio provides a way to tell the story of your career and the challenges you have overcome.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_3 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://help.open.ac.uk/create-a-professional-portfolio-for-when-you-are-applying-for-jobs" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/3.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://help.open.ac.uk/create-a-professional-portfolio-for-when-you-are-applying-for-jobs"><h5 class="text-white text-wrap">The Open University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A professional portfolio indicates that you’re self-reflective and proactive in terms of your own development.
                                        </p>
                                    </div>
                                </div>

                                <!-- card_4 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://drexel.edu/scdc/professional-pointers/application-materials/portfolio-dev/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/4.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://drexel.edu/scdc/professional-pointers/application-materials/portfolio-dev/"><h5 class=" text-white">Drexel University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A well-developed portfolio helps you to be better prepared for your job search.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_5 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.latrobe.edu.au/students/opportunities/careers/career-portfolio" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/5.webp" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.latrobe.edu.au/students/opportunities/careers/career-portfolio"><h5 class=" text-white">La Trobe University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Through portfolios, you can collate the information you need to write a high impact job application.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_6 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.ncda.org/aws/NCDA/pt/sd/news_article/5253/_PARENT/CC_layout_details/false" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/6.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.ncda.org/aws/NCDA/pt/sd/news_article/5253/_PARENT/CC_layout_details/false"><h6 class=" text-white">National Career Development Association(NCDA)</h6></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            The basis for creating a career portfolio for use in professional positions , is to identify accomplishments and skill areas for performance appraisals and promotions.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_7 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://career.fsu.edu/portfolio/sample-portfolios" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/7.svg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://career.fsu.edu/portfolio/sample-portfolios"><h5 class=" text-white">Florida State University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Building your Career Portfolio helps you get organized, showcase your skills and accomplishments, and stand out from the crowd.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_8 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.wcsu.edu/careersuccess/resumes/build-your-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/8.webp" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.wcsu.edu/careersuccess/resumes/build-your-portfolio/"><h5 class=" text-white">Western Connecticut State University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Portfolio offers valuable insight into your professional development and skill mastery.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_9 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://clutejournals.com/index.php/TLC/article/view/1148" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/9.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://clutejournals.com/index.php/TLC/article/view/1148"><h5 class=" text-white">Journal Of College Teaching & Learning</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A career portfolio can be useful in obtaining an internship or entry-level position and throughout a career’s progression.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_10 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://bccareercenter.wordpress.com/2020/05/06/how-to-promote-yourself-with-an-online-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/10.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/>
                                            </a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://bccareercenter.wordpress.com/2020/05/06/how-to-promote-yourself-with-an-online-portfolio/"><h5 class=" text-white">Boston College</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            It can be very beneficial for people  to take an extra step and create an online portfolio to showcase their work and skills.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_11 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://careers.tufts.edu/resources/what-is-an-online-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/11.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://careers.tufts.edu/resources/what-is-an-online-portfolio/"><h5 class=" text-white">Tufts University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A portfolio displays skills and projects in a robust and visual way that complements the information in your resume and cover letter.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_12 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.capella.edu/blog/career/why-a-portfolio-is-important-for-your-career/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/12.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.capella.edu/blog/career/why-a-portfolio-is-important-for-your-career/"><h5 class=" text-white">Capella University</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Portfolios are a great way to demonstrate the competencies you would list on a resume or talk about in an interview — they allow you to show and not just tell.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_13 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.digitalschool.ca/how-a-private-portfolio-can-illustrate-promote-your-cad-training/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/13.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.digitalschool.ca/how-a-private-portfolio-can-illustrate-promote-your-cad-training/"><h5 class=" text-white">Digital School Technical Design College</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            Employers often ask to see the portfolios of potential new employees, so that they can get a good sense of their expert training and hands-on skills.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_14 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://go.gale.com/ps/i.do?id=GALE%7CA200844487&sid=googleScholar&v=2.1&it=r&linkaccess=abs&issn=00220787&p=AONE&sw=w&userGroupName=anon%7E6f5810c6" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/14.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://go.gale.com/ps/i.do?id=GALE%7CA200844487&sid=googleScholar&v=2.1&it=r&linkaccess=abs&issn=00220787&p=AONE&sw=w&userGroupName=anon%7E6f5810c6"><h5 class=" text-white">Gale Academic Onefile</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A portfolio is a visual representation of work samples, skills, abilities, knowledge, and capabilities..
                                        </p>
                                    </div>
                                </div>
                                <!-- card_15 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.icb.edu/blogs/why-you-should-have-a-professional-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/15.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.icb.edu/blogs/why-you-should-have-a-professional-portfolio/"><h5 class=" text-white">International College of Broadcasting</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A digital portfolio highlights your best video or audio clips and can help generate excitement, set yourself apart from the competition, and make employers remember you.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_16 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://www.arts.ac.uk/students/student-careers/career-skills-and-support/how-to-build-a-portfolio" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/16.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://www.arts.ac.uk/students/student-careers/career-skills-and-support/how-to-build-a-portfolio"><h5 class=" text-white">UAL</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            A professional portfolio is a curated collection of work that demonstrates your creativity, skills and ability.
                                        </p>
                                    </div>
                                </div>
                                <!-- card_17 -->
                                <div class="m-3 f_card">
                                    <div class="row d-flex align-items-center ms-2 mt-2">
                                        <div class="col-3">
                                            <a class="ripple" target="_blank" href="https://ctl.wiley.com/e-portfolios-and-their-uses-in-higher-education/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                <img src="https://wooble.org/wooble-img/University/17.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                        </div>
                                        <div class="col-9 text-start">
                                            <a target="_blank" href="https://ctl.wiley.com/e-portfolios-and-their-uses-in-higher-education/"><h5 class=" text-white">Wiley University Services</h5></a>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div class="px-4 col-12 f_content">
                                        <p class="text-wrap text-white fw-lighter">
                                            E-portfolios are valuable tools to aid in students’ academic growth and their transition into the career landscape.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- for mobile device -->
                    <div class="d-block d-sm-none pb-4">
                        <div id="carouselExampleIndicators" class="carousel slide border d-flex align-items-center justify-content-center rounded-5 mt-2" data-mdb-ride="carousel" style="width: 420px auto; z-index: 10; background: linear-gradient(0deg, #002366 0%, #306FB2 100%);" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-right" data-mdb-animation-start="onScroll" data-mdb-animation-delay="100">
                            <div class="carousel-inner">
                                <!-- card-1 start -->
                                <div class="carousel-item active">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.careerservices.txst.edu/students-alumni/resources-services/career-guides/portfolio-guide.html" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/1.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.careerservices.txst.edu/students-alumni/resources-services/career-guides/portfolio-guide.html"><h5 class="text-white text-wrap">Texas State University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                Rather than simply listing your skills, activities, interests, education and experience, a career portfolio allows you to enhance the presentation of your skills.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-2 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://imdiversity.com/diversity-news/a-work-portfolio-can-showcase-your-experience-and-potential/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/2.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://imdiversity.com/diversity-news/a-work-portfolio-can-showcase-your-experience-and-potential/"><h5 class="text-white text-wrap">IM Diversity</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A portfolio provides a way to tell the story of your career and the challenges you have overcome.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-3 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://help.open.ac.uk/create-a-professional-portfolio-for-when-you-are-applying-for-jobs" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/3.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://help.open.ac.uk/create-a-professional-portfolio-for-when-you-are-applying-for-jobs"><h5 class="text-white text-wrap">The Open University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A professional portfolio indicates that you’re self-reflective and proactive in terms of your own development.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-4 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://drexel.edu/scdc/professional-pointers/application-materials/portfolio-dev/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/4.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://drexel.edu/scdc/professional-pointers/application-materials/portfolio-dev/"><h5 class=" text-white">Drexel University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A well-developed portfolio helps you to be better prepared for your job search.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-5 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.latrobe.edu.au/students/opportunities/careers/career-portfolio" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/5.webp" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.latrobe.edu.au/students/opportunities/careers/career-portfolio"><h5 class=" text-white">La Trobe University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                Through portfolios, you can collate the information you need to write a high impact job application.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-6 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.ncda.org/aws/NCDA/pt/sd/news_article/5253/_PARENT/CC_layout_details/false" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/6.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.ncda.org/aws/NCDA/pt/sd/news_article/5253/_PARENT/CC_layout_details/false"><h6 class=" text-white">National Career Development Association(NCDA)</h6></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                The basis for creating a career portfolio for use in professional positions , is to identify accomplishments and skill areas for performance appraisals and promotions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-7 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://career.fsu.edu/portfolio/sample-portfolios" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/7.svg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://career.fsu.edu/portfolio/sample-portfolios"><h5 class=" text-white">Florida State University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                Building your Career Portfolio helps you get organized, showcase your skills and accomplishments, and stand out from the crowd.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-8 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.wcsu.edu/careersuccess/resumes/build-your-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/8.webp" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.wcsu.edu/careersuccess/resumes/build-your-portfolio/"><h5 class=" text-white">Western Connecticut State University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                Portfolio offers valuable insight into your professional development and skill mastery.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-9 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://clutejournals.com/index.php/TLC/article/view/1148" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/9.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://clutejournals.com/index.php/TLC/article/view/1148"><h5 class=" text-white">Journal Of College Teaching & Learning</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A career portfolio can be useful in obtaining an internship or entry-level position and throughout a career’s progression.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-10 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://bccareercenter.wordpress.com/2020/05/06/how-to-promote-yourself-with-an-online-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/10.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/>
                                                </a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://bccareercenter.wordpress.com/2020/05/06/how-to-promote-yourself-with-an-online-portfolio/"><h5 class=" text-white">Boston College</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                It can be very beneficial for people  to take an extra step and create an online portfolio to showcase their work and skills.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-11 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://careers.tufts.edu/resources/what-is-an-online-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/11.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://careers.tufts.edu/resources/what-is-an-online-portfolio/"><h5 class=" text-white">Tufts University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A portfolio displays skills and projects in a robust and visual way that complements the information in your resume and cover letter.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-12 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.capella.edu/blog/career/why-a-portfolio-is-important-for-your-career/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/12.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.capella.edu/blog/career/why-a-portfolio-is-important-for-your-career/"><h5 class=" text-white">Capella University</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                Portfolios are a great way to demonstrate the competencies you would list on a resume or talk about in an interview — they allow you to show and not just tell.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-13 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.digitalschool.ca/how-a-private-portfolio-can-illustrate-promote-your-cad-training/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/13.png" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.digitalschool.ca/how-a-private-portfolio-can-illustrate-promote-your-cad-training/"><h5 class=" text-white">Digital School Technical Design College</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                Employers often ask to see the portfolios of potential new employees, so that they can get a good sense of their expert training and hands-on skills.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-14 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://go.gale.com/ps/i.do?id=GALE%7CA200844487&sid=googleScholar&v=2.1&it=r&linkaccess=abs&issn=00220787&p=AONE&sw=w&userGroupName=anon%7E6f5810c6" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/14.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://go.gale.com/ps/i.do?id=GALE%7CA200844487&sid=googleScholar&v=2.1&it=r&linkaccess=abs&issn=00220787&p=AONE&sw=w&userGroupName=anon%7E6f5810c6"><h5 class=" text-white">Gale Academic Onefile</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A portfolio is a visual representation of work samples, skills, abilities, knowledge, and capabilities..
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-15 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.icb.edu/blogs/why-you-should-have-a-professional-portfolio/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/15.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.icb.edu/blogs/why-you-should-have-a-professional-portfolio/"><h5 class=" text-white">International College of Broadcasting</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A digital portfolio highlights your best video or audio clips and can help generate excitement, set yourself apart from the competition, and make employers remember you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-16 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://www.arts.ac.uk/students/student-careers/career-skills-and-support/how-to-build-a-portfolio" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/16.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://www.arts.ac.uk/students/student-careers/career-skills-and-support/how-to-build-a-portfolio"><h5 class=" text-white">UAL</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                A professional portfolio is a curated collection of work that demonstrates your creativity, skills and ability.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- card-17 start -->
                                <div class="carousel-item">
                                    <div class="m-3">
                                        <div class="row d-flex align-items-center ms-2 mt-2">
                                            <div class="col-4">
                                                <a class="ripple" target="_blank" href="https://ctl.wiley.com/e-portfolios-and-their-uses-in-higher-education/" data-mdb-ripple-unbound="true" data-mdb-ripple-radius="50">
                                                    <img src="https://wooble.org/wooble-img/University/17.jpeg" class="img-fluid" style="border-radius: 50%; width:70px; height:70px; background-color: white;"/></a>
                                            </div>
                                            <div class="col-8 text-start">
                                                <a target="_blank" href="https://ctl.wiley.com/e-portfolios-and-their-uses-in-higher-education/"><h5 class=" text-white">Wiley University Services</h5></a>
                                            </div>
                                        </div>
                                        <hr class="text-white">
                                        <div class="px-4 col-12" style="height: 100px; overflow-y:scroll; scrollbar-width: none;">
                                            <p class="text-wrap text-white fw-lighter">
                                                E-portfolios are valuable tools to aid in students’ academic growth and their transition into the career landscape.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev mt-4 pe-4" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next mt-4 ps-4" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ScrollToTop code here -->
            <div class="position-fixed" style="bottom: 50px; right: 50px; z-index: 10;">
                <a href="#" id="myBtn" ><i class="fas fa-arrow-circle-up fa-2x primary_color button" ></i></a>
            </div>

        </main>
        <footer class="container-fluid text-white"  style="background: linear-gradient(270deg, #002366 0%, #306FB2 100%); font-family: 'Ubuntu', sans-serif;">
            <div class="position-relative">
                <img src="https://wooble.org/wooble-img/4 element.svg" alt="" class="src img-fluid d-none d-sm-block" data-lag="0.3" style=" position: absolute; left:-15px; ">

                <img src="https://wooble.org/wooble-img/2 element.svg" alt="" class="src img-fluid d-none d-sm-block element2" data-lag="0.3" style=" position: absolute; right: -10px;">

                <section class="container-fluid d-flex justify-content-center p-4">
                    <div class="row flex-column flex-sm-row text-center">

                        <div class="col-md-4 text-md-start lh-sm" style="z-index: 1;">
                            <div class="d-flex align-items-center justify-content-center" style="height: 200px;">
                                <span class="fs-1">Don't wait to begin<br><span style="font-size:3.7rem;">Be amazed</span><br>to login</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center" style="height: 200px;">
                                <a href="https://app.wooble.org/onboarding">
                                    <button type="button" class="btn btn-rounded text-white shadow border-top border-secondary fs-5 text-capitalize fw-bold" style="background: #002366;" data-lag="0.1">Try for free
                                    </button></a>
                            </div>
                        </div>


                        <div class="col-md-4" style="z-index: 1;">
                            <div class="d-flex align-items-center fs-4" style="height: 200px;">
                                Fulfill your desire for a career that is fueled by passion. Give it a try right away for free.
                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <div class="text-center text-lg-start">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-md-end justify-content-center  p-4 border-bottom">
                    <div>
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
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section>
                    <div class="container text-center text-md-start mt-5" style="min-width: 75vw;">
                        <!-- Grid row -->
                        <div class="row flex-row mt-3">

                            <!-- About -->
                            <div class="col-md-3 col-lg-5 col-xl-3 mx-auto">
                                <!-- Content -->
                                <h6 class="text-capitalize fs-4">
                                    <img src="https://wooble.org/wooble-img/wooble logo 2.svg" alt="" class="src" style="height: 50px;">Wooble
                                </h6>
                                <p class="fw-lighter">
                                    At Wooble we believe in passion, progress and performance, Wooble's system is curated with passion, and latest technology to boost user experience which will help individuals to capture their progress and to boost their career performance.
                                </p>
                            </div>

                            <!-- Feature -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 fw-lighter">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-4">
                                    Important Links
                                </h6>
                                <span class="my-5 lh-1">
<!--                <p>-->
                                    <!--                  <a href="examples" class="text-reset">Examples</a>-->
                                    <!--                </p>-->
                <p>
                  <a href="features" class="text-reset">Features</a>
                </p>
                <p>
                  <a href="pricing" class="text-reset">Pricing</a>
                </p>
                            <p>
                  <a href="faq" class="text-reset">FAQs</a>
                </p>
                <p>
                  <a href="https://app.wooble.org/login/" class="text-reset">Sign in</a>
                </p>
                </span>
                            </div>

                            <!-- Company -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 fw-lighter">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-4">
                                    Company
                                </h6>
                                <span class="my-5 lh-1">
                <p>
                  <a href="../about-us" class="text-reset">About us</a>
                </p>
                                    <!--                <p>-->
                                    <!--                  <a href="../events" class="text-reset">Events</a>-->
                                    <!--                </p>-->
                <p>
                  <a target="_blank" href="../contact-us" class="text-reset">Contact Us</a>
                </p>
                <p>
                  <a target="_blank" href="../careers" class="text-reset">Careers</a>
                </p>
                 <p>
                  <a target="_blank" href="https://wooble.org/legal/privacy_policy.html" class="text-reset">Privacy Policy</a>
                </p>
                            <p>
                  <a target="_blank" href="https://wooble.org/legal/terms_and_conditions.html" class="text-reset">Terms & Conditions</a>
                </p>
                                    <!--                <p>-->
                                    <!--                  <a href="../help" class="text-reset">Help</a>-->
                                    <!--                </p>-->
              </span>
                            </div>

                            <!-- Contact -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 fw-lighter">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-4">Contact</h6>
                                <span class=" lh-sm">
                  <p onclick="map()" style="cursor:pointer;">
                    <i class="fas fa-home me-3"></i>
                    Bhubaneswar, Odisha 751024</p>
                <p onclick="gmail()" style="cursor:pointer;">
                  <i class="fas fa-envelope me-3"></i>
                  connect@wooble.org
                </p>
                <p  onclick="call()" style="cursor:pointer;">
                  <i class="fas fa-phone me-3"></i>
                  +91-8260303017
                </p>
                <p  onclick="whatsapp()" style="cursor:pointer;">
                  <i class="fab fa-whatsapp me-3"></i>
                  +91-8260303017
                </p>
                </span>
                            </div>

                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <hr class="text-white-50">
                <div class="text-center p-4 fw-light">
                    © 2023 Wooble Software Private Limited. All Rights Reserved.
                </div>
            </div>
            <!-- Copyright -->
        </footer>
<!-- End your project here-->
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/35984/ScrollLottie.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
<script>
    var typing=new Typed(".text_fl", {
        strings: ["", "Dreams.", "Ideas.", "Growth.", "Belief.", "Best.", "Success.", "Potential.", "Performance."],
        typeSpeed: 100,
        backSpeed: 40,
        loop: true,
    });

    LottieInteractivity.create({
        player:'#firstLottie',
        mode:"scroll",
        actions: [
            {
                visibility: [0.50, 1.0],
                type: "play"
            }
        ]
    });

    randomizeText();

</script>
<script type="text/javascript">
    function signin(){
        window.open("https://wooble.org/app/login/");
    }
    function map(){
        window.open("https://goo.gl/maps/xbDiqWttNGoijhRJA");
    }
    function gmail(){
        window.open("mailto:connect@wooble.org");
    }
    function call(){
        window.open("tel:+918260303017");
    }
    function whatsapp(){
        window.open("https://wa.me/918260303017?text=Hello%21%20I%20wanted%20to%20know%20about.....");
    }
    //Random text Popup script here

    let output_icon = document.getElementById('output_icon');
    let output = document.getElementById('output');
    let Text = [
        '"Wooble simply enhances my credibility."',
        '"I love the personalized profile outlook in my portfolio."',
        '"The most elegant & smooth user interface I`ve ever used."',
        '"Wooble`s latest version is unstopable."',
        '"It drives me to accomplish my work."'];

    let icon = [
        '<img src="https://wooble.org/wooble-img/3d stars.png" style="width: 40px;" alt="star"> <img src="https://wooble.org/wooble-img/3d stars.png" style="width: 40px;" alt="star"> <img src="https://wooble.org/wooble-img/3d stars.png" style="width: 40px;" alt="star"> <img src="https://wooble.org/wooble-img/3d stars.png" style="width: 40px;" alt="star"> <img src="https://wooble.org/wooble-img/3d stars.png" style="width: 40px;" alt="star">'];

    i=0;
    setInterval(() => {
        output.style.animationName = 'fade-out';
        output_icon.style.animationName = 'fade-out';
        setTimeout(() => {
            output.innerHTML = Text[i++];
            output_icon.innerHTML = icon;
            output.style.animationName = 'fade-in';
            output_icon.style.animationName = 'fade-in';
            if(i==5){
                i=0;
            }
        }, 500);
    }, 5000);

</script>

<script>
    var hoverMouse = function($el) {
        $el.each(function() {
            var $self = $(this);
            var hover = false;
            var offsetHoverMax = $self.attr("offset-hover-max") || 0.7;
            var offsetHoverMin = $self.attr("offset-hover-min") || 0.5;

            var attachEventsListener = function() {
                $(window).on("mousemove", function(e) {
                    //
                    var hoverArea = hover ? offsetHoverMax : offsetHoverMin;

                    // cursor
                    var cursor = {
                        x: e.clientX,
                        y: e.clientY + $(window).scrollTop()
                    };

                    // size
                    var width = $self.outerWidth();
                    var height = $self.outerHeight();

                    // position
                    var offset = $self.offset();
                    var elPos = {
                        x: offset.left + width / 2,
                        y: offset.top + height / 2
                    };

                    // comparaison
                    var x = cursor.x - elPos.x;
                    var y = cursor.y - elPos.y;

                    // dist
                    var dist = Math.sqrt(x * x + y * y);

                    // mutex hover
                    var mutHover = false;

                    // anim
                    if (dist < width * hoverArea) {
                        mutHover = true;
                        if (!hover) {
                            hover = true;
                        }
                        onHover(x, y);
                    }

                    // reset
                    if (!mutHover && hover) {
                        onLeave();
                        hover = false;
                    }
                });
            };

            var onHover = function(x, y) {
                TweenMax.to($self, 0.4, {
                    x: x * 0.5,
                    y: y * 0.1,
                    rotation: x * 0.05,
                    ease: Power2.easeOut
                });
            };
            var onLeave = function() {
                TweenMax.to($self, 0.7, {
                    x: 0,
                    y: 0,
                    scale: 1,
                    rotation: 0,
                    ease: Elastic.easeOut.config(1.5,0.5)
                });
            };

            attachEventsListener();
        });
    };

    hoverMouse($('.reason'));
</script>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "18f510436fd504084dd4e6d41745e410b4fdffe0f9b4a4a645b113c5be2d0671", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
</body>
</html>