<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap');
  </style>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1']; $profile_pic = $row_user_info['profile_pic']; ?> | Wooble</title>
  <!-- Wooble icon -->
  <link rel="icon" href="https://wooble.org/img/wooble_logo1.webp" type="image/x-icon" />
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
  <link rel="stylesheet" href="../css/mdb.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">


</head>
<body>
<!-- Start your project here-->
<div class="container-fluid">
  <?php include 'inc/header_h15.php'; ?>
</div>
<div class="row">
  <div class="col-lg-12 bg-image"  style="height: 100vh; background-image: url('../img/bg_15.png');">
    <div class="d-flex justify-content-center align-items-center mt-5"><img src="<?php echo $row_user_info['profile_pic'] ?>" class="d-block d-md-none" style="height: 200px; width: 200px; object-fit: cover; border-radius: 100%; outline-width: 30px; outline-style: double; outline-color: gold;"></div>
    <div class="row" style="height:100%;">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="d-flex align-items-center justify-content-center" style="height: 30%;">
          <p class="fw-bolder text-light text-center" style="font-size: 50px; font-family:Raleway;"><br>Hi, My Name is <br><?php echo $row_user_info['field_1'] ?></p>
        </div>
          <br>
          <p class="text-light text-center fw-bolder" style="font-size: 30px;">
              <?php echo $row_user_info['field_2'] ?>
          </p>
          <br>
        <p class="text-light text-center fw-bolder p-2" style="font-size: 20px;">
            <?php echo $row_user_info['field_3'] ?>
        </p>
        <div class="text-center" style="margin-top:20px;">
          <!-- Facebook -->
          <a class="btn text-white" style="background-color: #3b5998;" href="#!" role="button">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!-- Twitter -->
          <a class="btn text-white" style="background-color: #55acee;" href="#!" role="button">
            <i class="fab fa-twitter"></i>
          </a>
          <!-- Linkedin -->
          <a class="btn text-white" style="background-color: #0082ca;" href="#!" role="button">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <!-- Whatsapp -->
          <a class="btn text-white" style="background-color: #25d366;" href="#!" role="button">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 p-5">
        <div class="d-flex justify-content-center align-items-center mt-5"><img src="<?php echo $row_user_info['profile_pic'] ?>" class="d-none d-md-block" style="height: 300px!important; width: 300px!important; object-fit: cover!important; border-radius: 100%; outline-width: 30px; outline-style: double; outline-color: gold;"></div>
      </div>
    </div>
  </div>
</div>
<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
