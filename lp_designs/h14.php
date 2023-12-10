<!DOCTYPE html>
<html lang="en">

<?php
    $font_set = $row_user_info['font'];
    $query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
    $res_fetch_font = mysqli_query($link, $query_fetch_font);
    $row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
    $compressed_img = $row_user_info['compressed_image'];
    $primary_color = $row_user_info['primary_color'];
    $secondary_color = $row_user_info['secondary_color'];
?>

<head>
    <meta charset="UTF-8" />
    <title><?php echo $row_user_info['field_1']?> - <?php echo $row_user_info['field_2'] ?> | Wooble</title>
    <meta name="description" content="<?php echo $row_user_info['field_3'] ?>">
    <link rel="icon" type="image/x-icon" href="app/home/ico-master/files/<?php echo $email_id ?>.ico">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <?php
    $profile_pic = $row_user_info['profile_pic'];
    ?>


    <meta property="og:title" content="<?php echo $row_user_info['field_1'] ?>"/>
    <meta property="og:description" content="<?php echo $row_user_info['field_2'] ?>"/>
    <?php
    $og_image = "https://wooble.org/app/home/images/".$compressed_img;
    list($width, $height, $type, $attr) = getimagesize($og_image);
    ?>
    <meta property="og:image" content="<?php echo $og_image ?>">
    <meta property="og:image:width" content="<?php echo $width ?>">
    <meta property="og:image:height" content="<?php echo $height ?>">


    <!--    Dynamic font loading Starts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">
    <!--    Dynamic font loading Ends-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../plugins/css/multi-carousel.min.css">
    <style>

        .glass_box {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.5);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(6px);
            border: 1px solid rgba(100, 100, 104, 0.3);
        }


        .my_font{
            font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
        }
        .module {
            background: <?php echo $secondary_color ?>;
            position: relative;
            border: 5px solid <?php echo $primary_color ?>;
            margin: 20px;
            border-radius: 40px;
        }
        .primary_color{
            color: <?php echo $row_user_info['primary_color']?>!important;
        }
        .secondary_color{
            color: <?php echo $row_user_info['secondary_color']?>!important;
        }

    </style>
</head>
<body style="<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden">
<!-- Start your project here-->
<div class="container-fluid" style="min-height: 100vh;">
    <!--Nav Bar Code Start-->
    <?php include 'inc/header_h14.php'; ?>
    <!--Nav Bar Code End-->
    <div class="container-fluid">

        <!-- Contact Modal Starts Here -->
        <div class="modal fade" id="contact_modal_web" tabindex="-1" aria-labelledby="contact_modal_web"
             aria-hidden="true" style="max-height:60vh">
            <div class="modal-dialog modal-dialog-centered modal-lg glass_box" >
                <div class="">
                    <div class="modal-body" style="background-color: transparent!important; ">
                        <div class="">
                            <div data-mdb-modal-non-invasive="true"  class="row">
                                <div  class="col-lg-12" align="right" style="color:darkred">
                                    <a href="#"><button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button></a>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <img loading="lazy" data-mdb-lazy-src="<?php echo $profile_pic ?>" src="<?php echo $profile_pic ?>" class="rounded-circle mt-3" style="width: 170px; height: 170px; object-fit: cover">
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-3 fw-bold text-black" style="font-family: Ubuntu, serif;">
                                        <P class="text-black-50 h2"><?php echo $row_user_info['field_1'] ?><br> <span class="h4"><?php echo $row_user_info['field_2'] ?></span></P>
                                        <hr class="text-black-50">
                                        <P class="text-black-50"><i class="fas fa-envelope"></i> &nbsp; <span>akasjais1996@gmail.com</span></P>
                                        <P class="text-black-50"><i class="fas fa-globe"></i>&nbsp; &nbsp;<span>wooble.org/<?php echo $row_user_info['username'] ?></span></P>
                                        <P class="text-black-50"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;<span><?php echo $row_user_info['field_3'] ?></span></P>
                                    </div>
                                </div>
                                <!--div class="col-lg-3 text-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="" srcset="" height="180vh">
                                    <p class="text-center text-black fw-bold">Scan to Save Contact</p>
                                </div-->
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--                        Contact Modal Ends here-->


        <div class="row flex-direction align-items-center justify-content-center">
            <div class="col-md-6 fw-bold m-5 m-md-3 flex-column my_font primary_color" style="color: <?php echo $primary_color ?>">
                Hi, my name is
                <div class="fw-bolder my_font secondary_color" style="color: white; font-size: 2rem;"><?php echo $row_user_info['field_1'] ?></div>
                <div class="fw-bolder my_font secondary_color" style="color: white; font-size: 1.7rem;"><?php echo $row_user_info['field_2'] ?></div>
                <div class="text-muted mt-3 lh-2 my_font secondary_color"><?php echo $row_user_info['field_3'] ?></div>
                <a href="../gallery/<?php echo $username ?>"><button type="button" style="border: 1px solid <?php echo $primary_color ?>" class="btn btn-lg btn-rounded mt-3 secondary_color shadow-4-strong" data-mdb-ripple-color="<?php echo $primary_color; ?>">Checkout my work !</button></a>
                <div class="mt-5 text-left">
                    <?php
                    if($row_user_info['magic_contact_sharing']==1){ ?>

                        <a target="_blank" class="m-2 d-lg-none" style="width: 50px" href="vcf.php?id=<?php echo $email_id ?>">
                            <img class="m-1 p-1" src="img/m_c_sharing.svg" style="width: 40px; background-color: <?php echo $secondary_color ?>; border-radius: 50%">
                        </a>

                        <a class="m-2 d-none d-lg-inline-block" style="width: 50px" data-mdb-toggle="modal" data-mdb-target="#contact_modal_web"">
                            <img class="m-1 p-1" src="img/m_c_sharing.svg" style="display: inline; width: 40px; background-color: <?php echo $secondary_color ?>; border-radius: 50%">
                        </a>
                    <?php }
                    ?>

                    <?php
                    $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$email_id'";
                    $res_link = mysqli_query($link, $query_link);
                    while($row_link = mysqli_fetch_assoc($res_link)){
                        $link = $row_link['link'];
                        $brand = $row_link['brand'];
                        $url = $link;
                        $parse = parse_url($url);
                        $host = $parse['host'];
                        $host = str_ireplace('www.', '', $host);

                    ?>
                  <a  target="_blank" class="m-2" style="width: 50px; display: inline" href="<?php echo $link ?>">
                      <img class="m-1 p-1" src="https://wooble.org/img/social_media_icons/<?php echo $host ?>.png" onerror="this.onerror=null; this.src='http://www.google.com/s2/favicons?domain=<?php echo $link ?>'" style="width: 40px; background-color: <?php echo $secondary_color ?>; border-radius: 50%">
                    </a>
                   <?php } ?>

                </div>

</body>
</div>
<div class="col-md-4 m-md-3 flex-column align-items-center justify-content-center">
<!--    <img alt="--><?php //echo $row_user_info['field_1']?><!-- wooble" style="max-width: 80vw" class="module" src="app/home/images/--><?php //echo $row_user_info['compressed_image'] ?><!--.png">-->
    <img  loading="eager" style="width: 100%; object-fit: cover" class="module" src="https://wooble.org/app/home/images/<?php echo $row_user_info['compressed_image'] ?>" onerror="this.onerror=null; this.src='<?php echo $profile_pic ?>'">
</div>
<!-- Wooble link for desktop start-->
<div class="col-md-1 flex-column align-items-center justify-content-center d-none d-sm-block" style="writing-mode: vertical-lr; color: <?php echo $primary_color ?>">
    <h6 style="border-left: 1px solid <?php echo $primary_color ?>; height: 80vh;" class="my_font primary_color">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_user_info['email'] ?></h6>
</div>
<!-- Wooble link for desktop  end-->
<!-- Wooble link for mobile start-->
<div class="col-md-1 my_font text-center flex-column align-items-center justify-content-center d-block d-sm-none primary_color" style="color: <?php echo $primary_color ?>;">
    <h6 style="border-bottom: 1px solid <?php echo $primary_color ?>; width: 100%;"><?php echo $email_id ?></h6>
</div>
<!-- Wooble link for mobile end-->
</div>


</div>
</div>


<?php
if($row_user_info['gallery_on_first_page']){
    include 'gallery_section.php';
}

?>


<!-- MDB -->

</body>
</html>
