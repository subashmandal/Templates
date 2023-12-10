<!DOCTYPE html>
<html lang="en">
<?php
include '../inc/dbconnection.php';
function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: '.$url);
        exit;
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
    $error="";

if (isset($_POST['name_form'])) {
    $name = $_POST['name_value'];
    if(strlen($name)<=0){
        $error="<p style='color:red'>Please enter your name</p>";
    }else{
        $query_new="INSERT INTO `user_details`(`field_1`) VALUE('$name')";
        $res_new = mysqli_query($link, $query_new);
        $id = $link->insert_id;
        $id=$id*1111;
        redirect("profession.php?id=$id&n=$name");
        exit();
    }
}

?>
   <head>

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PZBV6NB');</script>
      <!-- End Google Tag Manager -->


      <style>
         .br{
         border:1px solid rgb(252, 10, 10);
         /* border-radius: 30px; */
         }
      </style>
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
         @media(max-width:420px){
         .wid{
         font-size: 30px !important;
         }
         }
         @media(max-width:420px){
         .widd{
         font-size: 15px !important;
         }
         }
      </style>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Onbording</title>
      <!-- MDB icon -->
      <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
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
   <body>

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZBV6NB"
                     height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->


      <!-- Start your project here-->
      <div class="d-none d-sm-block">
         <form action="" method="POST">
         <div class="row" style="height: 100vh;">

            <div class="col-lg-6" data-mdb-toggle="animation" data-mdb-animation="fade-in-left" data-mdb-animation-start="onLoad" data-mdb-animation-duration="1000">
               <a href="../../" class="d-flex align-items-center m-1" style="height: 64px;">
                  <img src="img/wooble logo 1.svg" alt="Wooble Logo" class="src " loading="lazy" style="width: 58px;">
                  <span class="fs-1 fw-bolder" style="font-family: 'Ubuntu', sans-serif; color:#002366;">Wooble</span>
               </a>
               <!-- input name -->         
               <div style="margin-top: 30vh; padding-left: 3vw;">
                  <div class="from-left">
                     <p class="wid" style="font-size: 2vw; font-style: italic; color: #306FB2;">I'm</p>
                      <?php echo $error ?>
                     <input name="name_value" class="wid" style="font-size: 3vw;" type="text" placeholder="Your Name">
                     <span></span>
                  </div>
                  <br><br>
                  <p class="widd">This is your portfolio's name so we can customize it a bit more. No stress, you can change this later anytime</p>
               </div>
               <div class="position-relative" style="height: 20vh;">
                  <div class="position-absolute" style="bottom:0; right: 120px;">
                     <button name="name_form" type="submit" class="btn btn-primary btn-rounded border border-1 border-dark text-capitalize fw-lighter fs-3">
                     Next
                     </button>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 h-100" data-mdb-toggle="animation" data-mdb-animation="fade-in-right" data-mdb-animation-duration="1000"  data-mdb-animation-start="onLoad"  style="background-image: url(img/onboarding_bg_1.png);  background-position: center center;  background-repeat: no-repeat; background-size: cover; border-top-left-radius: 40px; border-bottom-left-radius: 40px; box-shadow: 0px 0px 20px 1px black ;"></div>
         </div>
         </form>
      </div>
      <!-- for mobile view -->
      <div class="d-block d-sm-none" style="font-family: 'Ubuntu', sans-serif;">
         <div  style="height: 100vh;">
            <div data-mdb-toggle="animation" data-mdb-animation="fade-in-right" data-mdb-animation-duration="1000"  data-mdb-animation-start="onLoad"  style="background-image: url(img/onboarding_bg_1.png);  background-position: center center;  background-repeat: no-repeat; background-size: cover;"></div>
            <form action="" method="POST">
            <div data-mdb-toggle="animation" data-mdb-animation="fade-in-left" data-mdb-animation-start="onLoad" data-mdb-animation-duration="1000">
               <a href="../../" class="d-flex align-items-center">
                  <img src="img/wooble logo 1.svg" alt="Wooble Logo" class="src img-fluid" loading="lazy" style="width: 48px;">
                  <span class="fs-1 fw-bolder" style="font-family: 'Ubuntu', sans-serif; color:#002366;">Wooble</span>
               </a>
               <div data-mdb-toggle="animation" data-mdb-animation="fade-in-right" data-mdb-animation-duration="1000"  data-mdb-animation-start="onLoad"  style="background-image: url(img/onboarding_bg_1.png);  background-position: center center;  background-repeat: no-repeat; background-size: cover; height: 40vh;"></div>
               <!-- input name -->         
               <div style="padding-left: 3vw;">
                  <div class="from-left">
                     <p class="wid" style="font-size: 2vw; font-style: italic; color: #306FB2;">I'm</p>
                      <?php echo $error ?>
                     <input name="name_value" class="wid" style="font-size: 3vw;" type="text" placeholder="Your Name">
                     <span></span>
                  </div>
                  <br><br>
                  <p class="widd lh-sm">This is your portfolio's name so we can customize it a bit more. No stress, you can change this later anytime.</p>
               </div>
                  <div class="text-end me-4">
                     <button name="name_form" type="submit" class="btn btn-primary btn-rounded text-capitalize btn-lg">
                     Next
                     </button>
                  </div>
            </div>
            </form>
         </div>
      </div>
      <!-- End your project here-->
      <!-- MDB -->
      <script type="text/javascript" src="../js/mdb.min.js"></script>
      <!-- Custom scripts -->
      <script type="text/javascript"></script>
   </body>
</html>