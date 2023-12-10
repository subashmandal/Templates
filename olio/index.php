<!DOCTYPE html>
<div lang="en">
   <head>

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PZBV6NB');</script>
      <!-- End Google Tag Manager -->

      <style>
         div {
         position: relative;
         }
         div input {
         border: none;
         border-bottom: 1px solid #ccc;
         padding: 5px 0;
         width: 80%;
         }
         input:focus {
         outline: none;
         }
         .from-left span
         {
         position: absolute;
         bottom: 0;
         width: 0;
         height: 2px;
         background-color: #002366;
         transition: all 0.6s;
         }
         .from-left span {
         left: 0;
         }
         input:focus + span {
         width: 80%;
         }
         ::placeholder{
         color: rgba(48, 111, 178, 0.4);
         }
         .underline {
             position: relative;
         }
         .underline::after {
              content: '';
              position: absolute;
              bottom: -0.725rem;
              left: -0.5rem;
              right: -0.5rem;
              height: 0.75rem;
          z-index: -1;

          background-image: url('img/underline.svg');
              background-repeat: no-repeat;
          background-size: cover;
          }
         .underline2 {
             position: relative;
         }
         .underline2::after {
             content: '';
             position: absolute;
             bottom: -0.725rem;
             left: -0.5rem;
             right: -0.5rem;
             height: 0.75rem;
             z-index: -1;

             background-image: url('img/underline2.svg');
             background-repeat: no-repeat;
             background-size: cover;
         }

         .cloud{
             animation: moving 7s linear infinite;
         }
         @keyframes moving {
             0%, 100% {
                 transform: translateX(0px);
             }
             50% {
                 transform: translateX(-50px);
             }
         }
         .olio_playing{
             animation: kick 5s linear infinite;
         }
         @keyframes kick {
             0%, 100% {
                 transform: translateX(0px);
                 transform: rotate3d(2, 1, 15, 25deg);
             }
             50% {
                 transform: translateX(20px);
             }
         }
         .football{
             animation: rolling 5s linear infinite;
         }
         @keyframes rolling {
             0%, 100% {
                 transform: translatey(-50px);
             }
             50% {

                 transform: translateY(-10px);
                 transform: rotate3d(2, 1, 15, 25deg);
             }
         }
         @media(max-width: 991px){
             .portfolio_guru{
                 font-size: 25px !important;
             }
         }
         @media(max-width:420px){
             .portfolio_guru{
                 font-size: 15px !important;
             }
         }
      </style>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Olio - The mascot of Wooble</title>
      <!-- MDB icon -->
      <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<!--       Google fonts Gen Dots-->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
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
   </head>
   <div style="overflow-x: hidden">

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZBV6NB"
                     height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->


      <!-- Start your project here-->
       <div id="smooth-wrapper">
           <div id="smooth-content">
   <header class="bg-light shadow" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="pulse" data-mdb-animation-start="onLoad">
       <nav class="navbar navbar-expand-lg navbar-light shadow-0 container" style="min-height: 5vh;">
           <div class="container-fluid">
               <a class="navbar-brand" href="../../">
                   <img src="https://wooble.org//wooble-img/wooble logo 1.svg" alt="Wooble Logo" class="src w-25" loading="lazy">
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
                           <a class="nav-link fs-5 ls-wide text-black" href="../examples">Exemplar</a>
                       </li>
                       <li class="nav-item text-center">
                           <a class="nav-link fs-5 ls-wide text-black" href="../features">Features</a>
                       </li>
                       <li class="nav-item text-center">
                           <a class="nav-link fs-5 ls-wide text-black" href="../wooble-blogs">Blogs</a>
                       </li>
                       <li class="nav-item text-center">
                           <a class="nav-link fs-5 ls-wide text-black" href="https://app.wooble.org">Sign In</a>
                       </li>
                       <!--                    <li class="nav-item text-center">-->
                       <!--                        <a class="nav-link fs-5 ls-wide text-black" href="https://app.wooble.org"><button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-ripple-color="#002366" style="color: #002366;">View demo</button></a>-->
                       <!--                    </li>-->
                       <li class="nav-item text-center">
                           <a class="nav-link" href="https://app.wooble.org/onboarding/"><button type="button" class="btn btn-rounded text-white" style="background-color: #002366;">get started</button></a>
                       </li>
                   </ul>
                   <!-- Left links -->
               </div>
           </div>
       </nav>
   </header>
   <main>
<!--section1 start-->
       <div class="container-fluid g-0">
           <div class="position-relative" style="background-image: url('img/blue_bg.png'); background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; min-height: 130vh;" >
                    <div class="text-center text-capitalize fs-1 pt-5 gs_reveal" style="color: #2A68AF; font-family: 'Zen Dots', cursive;">
                        Welcome to the<br> world of Olio
                    </div>
                    <div class="text-center text-capitalize pb-1 position-absolute bottom-0 start-50 translate-middle portfolio_guru gs_reveal" style="color: #2A68AF; font-family: 'Zen Dots', cursive; font-size: 35px;">
                        the ultimate portfolio-building guru!
                    </div>

           </div>
       </div>
<!--       section1 end-->
<!--       section2 start-->
       <div class="container-fluid g-0 position-relative">
           <img src="img/book.png" class="position-absolute top-0 start-0 img-fluid gs_reveal gs_reveal_fromLeft" style="max-width: 25vw" alt="book image">
           <img src="img/bulb_hand.png" class="position-absolute bottom-0 end-0 img-fluid gs_reveal gs_reveal_fromRight" style="max-width: 25vw" alt="book image">

           <div class="container" style="padding-top: 22vh; padding-bottom: 22vh; ">
               <p class="fs-1 text-center text-capitalize gs_reveal" style="font-family: 'Ubuntu', sans-serif; color:#002366; font-weight: 500;">
                   Olio is the mascot of Wooble and its most visible face. With a name derived from <span class="underline">"portfOLIO"</span> and an inspiration from the wise and watchful owl, Olio has taken on the form of a unique hybrid creature - an owl face and a human body.
               </p>
           </div>
       </div>
<!--       section2 end-->
<!--       section3 start-->
       <div class="container-fluid g-0">
           <div class="row">
               <div class="col-lg-6 d-flex justify-content-center my-5">
                   <img src="img/Group%201.png" class="img-fluid p-2 gs_reveal gs_reveal_fromLeft" alt="Olio Guiding">
               </div>
               <div class="col-lg-6 d-flex align-items-center">
                   <p class="fs-1 text-center text-capitalize m-5 gs_reveal gs_reveal_fromRight" style="font-family: 'Ubuntu', sans-serif; color:#002366; font-weight: 500; ">
                       Don't be intimidated by his unique appearance - Olio is here to guide you every step in building your perfect portfolio.
                   </p>
               </div>

           </div>
       </div>
<!--       section3 end-->
       <!--       section4 start-->
       <div class="container-fluid g-0">
           <div class="row flex-lg-row flex-column-reverse">
               <div class="col-lg-6 d-flex align-items-center">
                   <p class="fs-1 text-center text-capitalize m-5 gs_reveal gs_reveal_fromLeft" style="font-family: 'Ubuntu', sans-serif; color:#002366; font-weight: 500; ">
                       Mr. Olio is an achiever in professional field, a sharp yet witty, intuitively knowledgeable being; who goes with the modern trend of digitally transforming generations to make portfolios in the most happening way.
                   </p>
               </div>
               <div class="col-lg-6 d-flex justify-content-center my-5">
                   <img src="img/Group%202.png" class="img-fluid p-2 gs_reveal gs_reveal_fromRight" alt="Olio Chilling">
               </div>
           </div>
       </div>
       <!--       section4 end-->
       <!--       section5 start-->
       <div class="container-fluid g-0">
           <div class="container d-flex justify-content-center">
               <img src="img/about_olio.png" class="img-fluid gs_reveal"  alt="book image">
           </div>
       </div>
       <!--       section5 end-->
       <!--       section6 start-->
       <div class="container-fluid g-0">
           <div class="row flex-lg-row flex-column-reverse">
               <div class="col-lg-6 d-flex align-items-center">
                   <p class="fs-1 text-center m-5 gs_reveal gs_reveal_fromLeft" style="font-family: 'Ubuntu', sans-serif; color:#002366; font-weight: 500; ">
                       Olio embodies Magic, Astral Projection, Wisdom, And Divination. From Design To Content, Olio's Sharp Eyes Will Spot Every Detail And He Will Provide The Lift You Need To Soar Into The Professional World. So, Let's Join Forces And Create Stunning Portfolios With The <span class="underline2">One-Of-A-Kind Olio!</span>
                   </p>
               </div>
               <div class="col-lg-6 d-flex justify-content-center my-5">
                   <img src="img/Group%203.png" class="img-fluid p-2 gs_reveal gs_reveal_fromRight  " alt="Olio Guiding">
               </div>
           </div>
       </div>
       <!--       section6 end-->
   </main>
   <footer class="container-fluid text-white position-relative"  style="background: #0A142F; font-family: 'Ubuntu', sans-serif;">
       <img src="img/Cloud%20(no%20background).png" class="img-fluid position-absolute end-0 d-none d-sm-block cloud" style="max-width: 20vw; margin-top: -80px;" alt="Cloud image">
       <img src="img/olio%20playing.png" class="img-fluid position-absolute start-0 bottom-0 d-none d-sm-block olio_playing" style="max-width: 20vw; z-index: 5;" alt="Olio PLaying">
       <img src="img/football.png" class="img-fluid position-absolute start-0 bottom-0 d-none d-sm-block football" style="max-width: 20vw; margin-left: 15vw; margin-bottom: 2vh; z-index: 5;" alt="football">
       <div class="text-center text-lg-start pt-5">
           <!-- Section: Links  -->
           <section>
               <div class="container text-center text-md-start mt-5" style="min-width: 75vw;">
                   <!-- Grid row -->
                   <div class="row flex-row mt-3">

                       <!-- About -->
                       <div class="col-md-3 col-lg-5 col-xl-3 mx-auto" style="z-index: 10;">
                           <!-- Content -->
                           <h6 class="text-capitalize fs-4">
                               <img src="wooble-img/wooble logo 2.svg" alt="" class="src" style="height: 50px;">Wooble
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
                  <a href="../features" class="text-reset">Features</a>
                </p>
                <p>
                  <a href="../pricing" class="text-reset">Pricing</a>
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
                  <a href="../contact-us" class="text-reset">Contact Us</a>
                </p>
                              <p>
                  <a href="../careers" class="text-reset">Careers</a>
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
                  <p style="cursor:pointer;">
                    <i class="fas fa-home me-3"></i>
                      <a href="https://goo.gl/maps/xbDiqWttNGoijhRJA" target="_blank" class="text-white">Bhubaneswar, Odisha 751024</a>
                  </p>
                <p style="cursor:pointer;">
                  <i class="fas fa-envelope me-3"></i>
                  <a href="mailto:connect@wooble.org" target="_blank" class="text-white">connect@wooble.org</a>
                </p>
                <p style="cursor:pointer;">
                  <i class="fas fa-phone me-3"></i>
                  <a href="tel:+918260303017" class="text-white">+91-8260303017</a>
                </p>
                <p  style="cursor:pointer;">
                  <i class="fab fa-whatsapp me-3"></i>
                    <a href="https://wa.me/918260303017?text=Hello%21%20I%20wanted%20to%20know%20about....." target="_blank" class="text-white">+91-8260303017</a>
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
           <!-- Section: Social media -->
           <section class="container d-flex justify-content-md-end justify-content-center">
               <div>
                   <button type="button" class="btn btn-floating me-2" data-mdb-ripple-color="dark" style="border-radius: 100%; border: 1px solid rgb(255,255,255, 0.25);">
                       <a href="https://twitter.com/WoobleO" target="_blank" class="text-white">
                           <i class="fab fa-twitter fa-lg"></i>
                       </a>
                   </button>

                   <button type="button" class="btn btn-floating me-2" data-mdb-ripple-color="dark" style="border-radius: 100%; border: 1px solid rgb(255,255,255, 0.25);">
                       <a href="https://www.instagram.com/wooble_org/" target="_blank" class="text-white">
                           <i class="fab fa-instagram fa-lg"></i>
                       </a>
                   </button>

                   <button type="button" class="btn btn-floating me-2" data-mdb-ripple-color="dark" style="border-radius: 100%; border: 1px solid rgb(255,255,255, 0.25);">
                       <a href="https://www.youtube.com/channel/UC8LFjk9ArbwJf1f4pkloXzQ" target="_blank" class="text-white">
                           <i class="fab fa-youtube fa-lg"></i>
                       </a>
                   </button>

                   <button type="button" class="btn btn-floating me-2" data-mdb-ripple-color="dark" style="border-radius: 100%; border: 1px solid rgb(255,255,255, 0.25);">
                       <a href="https://www.linkedin.com/company/thewooble/" target="_blank" class="text-white">
                           <i class="fab fa-linkedin fa-lg"></i>
                       </a>
                   </button>

                   <button type="button" class="btn btn-floating me-2" data-mdb-ripple-color="dark" style="border-radius: 100%; border: 1px solid rgb(255,255,255, 0.25);">
                       <a href="https://www.facebook.com/theWooble" target="_blank" class="text-white">
                           <i class="fab fa-facebook-f fa-lg"></i>
                       </a>
                   </button>

               </div>
           </section>
           <!-- Section: Social media -->
           <div class="text-center p-4 fw-light">
               © 2022 Wooble Software Private Limited. All Rights Reserved.
           </div>
       </div>
       <!-- Copyright -->
   </footer>
   </div>
</div>
      <!-- End your project here-->
      <!-- MDB -->
      <script type="text/javascript" src="../js/mdb.min.js"></script>
<!--   gsap Script-->
   <script src='../gsap-shockingly-green/minified/gsap.min.js'></script>
   <script src='../gsap-shockingly-green/minified/ScrollTrigger.min.js'></script>
   <script src='../gsap-shockingly-green/minified/ScrollSmoother.min.js'></script>
      <!-- Custom scripts -->
      <script type="text/javascript">
          function animateFrom(elem, direction) {
              direction = direction || 1;
              var x = 0,
                  y = direction * 100;
              if(elem.classList.contains("gs_reveal_fromLeft")) {
                  x = -100;
                  y = 0;
              } else if (elem.classList.contains("gs_reveal_fromRight")) {
                  x = 100;
                  y = 0;
              }
              elem.style.transform = "translate(" + x + "px, " + y + "px)";
              elem.style.opacity = "0";
              gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
                  duration: 1.25,
                  x: 0,
                  y: 0,
                  autoAlpha: 1,
                  ease: "expo",
                  overwrite: "auto"
              });
          }

          function hide(elem) {
              gsap.set(elem, {autoAlpha: 0});
          }

          document.addEventListener("DOMContentLoaded", function() {
              gsap.registerPlugin(ScrollTrigger);

              gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
                  hide(elem); // assure that the element is hidden when scrolled into view

                  ScrollTrigger.create({
                      trigger: elem,
                      markers: false,
                      onEnter: function() { animateFrom(elem) },
                      onEnterBack: function() { animateFrom(elem, -1) },
                      onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
                  });
              });
          });

          let smoother = ScrollSmoother.create({
              wrapper:"#smooth-wrapper",
              content:"#smooth-content",
              smooth:1,
          });
      </script>
   </body>
</html>