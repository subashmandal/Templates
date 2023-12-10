<html lang="en">
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
    <meta name="description" content="<?php $row_user_info['field_1'] ?>">
    <?php $profile_pic = $row_user_info['profile_pic'];  ?>
    <link rel="icon" href="<?php echo $profile_pic ?>" type="image/x-icon" />
    <meta property="og:image" content="<?php echo $profile_pic ?>" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../plugins/css/multi-carousel.min.css">
    <link rel="stylesheet" href="../plugins/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

</head>
<body style="<?php echo $row_user_info['background'] ?> height: 100vh; margin: 0px; overflow-x: hidden;">

<?php include 'inc/header_h13.php'; ?>
<!-- Start your project here-->
<div class="container" style="background-color: rgb(231,233,235)!important; padding: 0px" >

    <div class="col bg-secondary bg-opacity-25" style="border-bottom-right-radius: 60px!important;">
        <div class="row mb-4">
            <div class="col-lg-7 justify-content-center align-content-center" style="padding-top:10%; padding-bottom: 10%;">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="text-center">
                            <?php $about_us = $row_user_info['field_3']; $about_us_length = strlen($about_us); ?>
                            <P style="<?php if($about_us_length>49){ echo 'font-size:22px!important'; } ?>" class="position-relative text-center justify-content-middle fs-1"><span class="fst-italic fw-lighter"><?php echo $about_us ?></span>
                            <div class="row justify-content-center align-content-center">


                                <div class="col-lg-12">
                                    <center>
                                        <!-- Facebook -->
                                        <?php

                                            $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$email_id'";
                                            echo $query_link;
                                            $res_link = mysqli_query($link, $query_link);
                                            while($row_link = mysqli_fetch_assoc($res_link)){

                                        ?>

                                     <a target="_blank" class="btn text-white m-2" style="background-color: #3b5998;" href="'.$row_user_info['fb_link'].'" role="button">
                      <i class="fab fa-facebook-f fa-2x"></i>
                    </a>

                                        <?php } ?>
                                <?php
                                        if($row_user_info['insta_link']!="") {
                                            echo '<a target="_blank" class="btn text-white m-2" style="background-color: #ac2bac;" href="' . $row_user_info['insta_link'] . '" role="button">
                      <i class="fab fa-instagram fa-2x"></i>
                    </a>';
                                        }

                                        if($row_user_info['twitter_link']!=""){
                                            echo '<a target="_blank" class="btn text-white m-2" style="background-color: #55acee;" href="'.$row_user_info['twitter_link'].'" role="button">
                      <i class="fab fa-twitter fa-2x"></i>
                    </a>';

                                        };

                                        if($row_user_info['linkedin_link']!="") {
                                            echo '<a target="_blank" class="btn text-white m-2" style="background-color: #0082ca" href="' . $row_user_info['linkedin_link'] . '" role="button">
                      <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>';
                                        }

                                        if($row_user_info['youtube_link']!="") {
                                            echo '<a target="_blank" class="btn text-white m-2" style="background-color: #ed302f;" href="' . $row_user_info['linkedin_link'] . '" role="button">
                      <i class="fab fa-youtube fa-2x"></i>
                    </a>';
                                        }

                                        if($row_user_info['github_link']!="") {
                                            echo '<a target="_blank" class="btn text-white m-2" style="background-color: #333333" href="' . $row_user_info['github_link'] . '" role="button">
                      <i class="fab fa-github fa-2x"></i>
                    </a>';
                                        }

                                        if($row_user_info['whatsapp_link']!="") {
                                            echo '<a target="_blank" class="btn text-white m-2" style="background-color: #25d366" href="' . $row_user_info['whatsapp_link'] . '" role="button">
                      <i class="fab fa-whatsapp fa-2x"></i>
                    </a>';
                                        }
                                        ?>


                                    </center>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>


            </div>
            <div class="col-lg-5 p-4 d-flex align-content-center justify-content-center align-middle" align="center" style="min-height: 80vh; border-top-left-radius: 60px; border-bottom-right-radius: 60px; border:10px solid white; background-image: url(<?php echo $row_user_info['profile_pic'] ?>); background-repeat: no-repeat; background-size: cover">

            </div>
        </div>
    </div>
</div>
</body>

    <!-- End your project here-->