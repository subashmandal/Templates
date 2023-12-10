<!DOCTYPE html>
<html lang="en">

<?php
$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
$compressed_img = $row_user_info['compressed_image'];
?>


  <head>
    <style>
      .br{
        min-height: 100px;
        border:1px solid black;
      }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title><?php echo $row_user_info['field_1']?> - <?php echo $row_user_info['field_2'] ?> | Wooble</title>
      <meta name="description" content="<?php echo $row_user_info['field_3'] ?>">
      <?php $profile_pic = $row_user_info['profile_pic'];  ?>
      <link rel="icon" type="image/x-icon" href="app/home/ico-master/files/<?php echo $email_id ?>.ico">


      <meta property="og:title" content="<?php echo $row_user_info['field_1'] ?>"/>
      <meta property="og:description" content="<?php echo $row_user_info['field_2'] ?>"/>
      <?php
      $og_image = "https://wooble.org/app/home/images/".$compressed_img;
      list($width, $height, $type, $attr) = getimagesize($og_image);
      ?>
      <meta property="og:image" content="<?php echo $og_image ?>">
      <meta property="og:image:width" content="<?php echo $width ?>">
      <meta property="og:image:height" content="<?php echo $height ?>">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">


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
    <link rel="stylesheet" href="../css/mdb.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <style>
        .my_font{
            font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
        }
    </style>

  </head>
  <body style="<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden">
    <!-- Start your project here--> 
    <?php include 'inc/header_h29.php'; ?>
    <div class="row">
      <img class="d-block d-sm-none" src="<?php echo $row_user_info['profile_pic'] ?>" style="background-repeat: no-repeat; background-size:cover; height:100%;">
      <div class="col-lg-6" >
        <div style="margin-left: 50px;">
            <p class="fw-bolder my_font" style="font-size: 40px; margin-top:50px; color:black;">Hi, My Name is <br><bold> <?php echo $row_user_info['field_1'] ?> </bold> </p>
                  <p class="fw-bold my_font" style="font-size: 18px; color:black;"><?php echo $row_user_info['field_2'] ?></p>
                  <p class="fw-bolder my_font" style="font-size: 2em; font-family:Raleway; color:rgb(255, 0, 0);">About Me</p>
                  <p class="text-dark fw-bolder my_font" style="font-size: 20px;">
                      <?php echo $row_user_info['field_3'] ?>
                  </p>
                  <div>
                  <div style="margin-top: 60px;">
                  <!-- Facebook -->
                  <a style="color: #3b5998;" href="#!" role="button">
                    <i class="fab fa-facebook-f fa-lg"></i>
                  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <!-- Twitter -->
                  <a style="color: #55acee;" href="#!" role="button">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <!-- Google -->
                  <a style="color: #dd4b39;" href="#!" role="button">
                    <i class="fab fa-google fa-lg"></i>
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <!-- Instagram -->
                  <a style="color: #ac2bac;" href="#!" role="button">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </div>
              </div>
        </div>
      </div>
      <div class="col-lg-4">
        <img class="d-none d-sm-block" src="<?php echo $row_user_info['profile_pic'] ?>" style="background-repeat: no-repeat; background-size:cover; height:100vh; margin-left: 5%;">
      </div>
      <div class="col-lg-2" style="background-color: #7BD9fc; border-top-right-radius: 3em 5em;
      border-bottom-right-radius: 3em 5em;" ></div>
    </div>
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
