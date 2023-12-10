<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title><?php echo $row_user_info['field_1']?> - <?php echo $row_user_info['field_2'] ?> | Wooble</title>
      <meta name="description" content="<?php $row_user_info['field_1'] ?>">
      <?php $profile_pic = $row_user_info['profile_pic'];  ?>
      <link rel="icon" href="<?php echo $profile_pic ?>" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

      <meta property="og:title" content="<?php echo $row_user_info['field_1'] ?>"/>
      <meta property="og:description" content="<?php echo $row_user_info['field_2'] ?>"/>
      <?php
      $og_image = "https://wooble.org/app/home/images/".$compressed_img;
      list($width, $height, $type, $attr) = getimagesize($og_image);
      ?>
      <meta property="og:image" content="<?php echo $og_image ?>">
      <meta property="og:image:width" content="<?php echo $width ?>">
      <meta property="og:image:height" content="<?php echo $height ?>">


    <!-- Google Fonts Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 

    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <style>

body {
  background: url(../img/bokeh_lights.jpg) no-repeat;
  /* Keep the inherited background full size. */
  background-attachment: fixed; 
  background-size: cover;
  background-position-x: 50%; 
  background-position-y: 0%;
  display: grid;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.glass {
  width: 90vw;
  height: 80%;
  box-shadow: 0 0 2rem 0 rgba(0, 0, 0, .2);
  position: relative;
  z-index: 1;
  background: inherit;
  overflow: hidden;
  border: 1px solid;
  border-image: linear-gradient(145deg, #9f890b, rgba(163, 162, 162, 0.363), #9f890b, rgba(163, 162, 162, 0.363), #9f890b, rgba(163, 162, 162, 0.363));
  border-image-slice: 1;
  border-bottom: 2px solid white !important;
  float: left;
  margin: 25px;
}

.glass:before {
  content: "";
  position: absolute;
  background: inherit;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
  filter: blur(8px);
  margin: -15px;
  
}

.scrollbar_hidden::-webkit-scrollbar {
  display: none;
}
    </style>
  </head>
  <body>
    <!-- Start your project here-->
<div class="glass container p-5">
<!--Nav Bar Code Start-->
    <?php include 'inc/header_h20.php'; ?>
<!--Nav Bar Code End-->
<!-- Main content code start -->
<div class="row text-end scrollbar_hidden" style="overflow: hidden; overflow-y: scroll; height: 100%; scrollbar-width: none; -ms-overflow-style: none;">
<div class="col-md-6" ></div>
<div class="col-md-6">
  <p class="text-light fw-bolder fs-1"><?php echo $row_user_info['field_2'] ?></p>
  <p class=" fs-6 text-wrap" style="color: #ffffff; "><?php echo $row_user_info['field_3'] ?></p>
<!-- social icons -->
<div class=" text-center my-5">
  <!-- Facebook -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #3b5998;" href="#!" role="button">
    <i class="fab fa-facebook-f"></i>
  </a>
  
  <!-- Twitter -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #55acee;" href="#!" role="button">
    <i class="fab fa-twitter"></i>
  </a>
  
  <!-- Google -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #dd4b39;" href="#!" role="button">
    <i class="fab fa-google"></i>
  </a>
  
  <!-- Instagram -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #ac2bac;" href="#!" role="button">
    <i class="fab fa-instagram"></i>
  </a>
  
  <!-- Linkedin -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #0082ca;" href="#!" role="button">
    <i class="fab fa-linkedin-in"></i>
  </a>
  
  <!-- Pinterest -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #c61118;" href="#!" role="button">
    <i class="fab fa-pinterest"></i>
  </a>
  
  <!-- Vkontakte -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #4c75a3;" href="#!" role="button">
    <i class="fab fa-vk"></i>
  </a>
  
  <!-- Stack overflow -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #ffac44;" href="#!" role="button">
    <i class="fab fa-stack-overflow"></i>
  </a>
  
  <!-- Youtube -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #ed302f;" href="#!" role="button">
    <i class="fab fa-youtube"></i>
  </a>
  
  <!-- Slack -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #481449;" href="#!" role="button">
    <i class="fab fa-slack-hash"></i>
  </a>
  
  <!-- Github -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #333333;" href="#!" role="button">
    <i class="fab fa-github"></i>
  </a>
  
  <!-- Dribbble -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #ec4a89;" href="#!" role="button">
    <i class="fab fa-dribbble"></i>
  </a>
  
  <!-- Reddit -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #ff4500;" href="#!" role="button">
    <i class="fab fa-reddit-alien"></i>
  </a>
  
  <!-- Whatsapp -->
  <a class="btn text-white btn-floating btn-sm m-1" style="background-color: #25d366;" href="#!" role="button">
    <i class="fab fa-whatsapp"></i>
  </a></div>
</div>
</div>
<!-- Main content code end -->
</div>



    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
