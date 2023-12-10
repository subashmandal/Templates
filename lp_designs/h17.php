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
$userEmailID = $row_user_info['email'];
?>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo $row_user_info['field_1'] ?> - <?php echo $row_user_info['field_2'] ?> | Wooble</title>
    <meta name="description" content="<?php echo $row_user_info['field_3'] ?>">
    <link rel="icon" type="image/x-icon" href="app/home/ico-master/files/<?php echo $email_id ?>.ico">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <?php
    $profile_pic = $row_user_info['profile_pic'];
    $compressed_img = $row_user_info['compressed_image'];
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
    <link rel="stylesheet" href="../css/mdb.min.css"/>
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


        .my_font {
            font-family: <?php echo $row_fetch_font['font_family'] ?> !important;
        }

        .module {
            background: <?php echo $secondary_color ?>;
            position: relative;
            border: 5px solid<?php echo $primary_color ?>;
            margin: 20px;
            border-radius: 40px;
        }

        .primary_color {
            color: <?php echo $row_user_info['primary_color']?> !important;
        }

        .secondary_color {
            color: <?php echo $row_user_info['secondary_color']?> !important;
        }

    </style>
</head>
<body style="<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden">
<!-- Start your project here-->
<div class="container" style="min-height: 100vh;">
    <!--Nav Bar Code Start-->
    <?php include 'inc/header_h17.php'; ?>
    <!--Nav Bar Code End-->
    <div>
        <!-- Contact Modal Starts Here -->
        <div class="modal fade" id="contact_modal_web" tabindex="-1" aria-labelledby="contact_modal_web"
             aria-hidden="true" style="max-height:60vh">
            <div class="modal-dialog modal-dialog-centered modal-lg glass_box">
                <div class="">
                    <div class="modal-body" style="background-color: transparent!important; ">
                        <div class="">
                            <div data-mdb-modal-non-invasive="true" class="row">
                                <div class="col-lg-12" align="right" style="color:darkred">
                                    <a href="#">
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                aria-label="Close"></button>
                                    </a>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <!--                                    <img loading="lazy" data-mdb-lazy-src="-->
                                    <?php //echo $profile_pic ?><!--" src="-->
                                    <?php //echo $profile_pic ?><!--" class="rounded-circle mt-3" style="width: 170px; height: 170px; object-fit: cover">-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-3 fw-bold text-black" style="font-family: Ubuntu, serif;">
                                        <P class="text-black-50 h2"><?php echo $row_user_info['field_1'] ?><br> <span
                                                    class="h4"><?php echo $row_user_info['field_2'] ?></span></P>
                                        <hr class="text-black-50">
                                        <P class="text-black-50"><i class="fas fa-envelope"></i> &nbsp; <span>email@gmail.com</span>
                                        </P>
                                        <P class="text-black-50"><i class="fas fa-globe"></i>&nbsp; &nbsp;<span>wooble.org/<?php echo $row_user_info['username'] ?></span>
                                        </P>
                                        <P class="text-black-50"><i
                                                    class="fas fa-info-circle"></i>&nbsp;&nbsp;<span><?php echo $row_user_info['field_3'] ?></span>
                                        </P>
                                    </div>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-4 hover-zoom">
                    <?php
                    $count_query = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!=''";
                    $count_res_gallery = mysqli_query($link, $count_query);
                    $count_photos = mysqli_num_rows($count_res_gallery);
                    $photo_in_one_column = round($count_photos / 3, 0);
                    $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT $photo_in_one_column ";
                    $res_gallery = mysqli_query($link, $query_gallery);
                    while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                        ?>
                        <img class="mt-2 mb-2"
                             data-mdb-toggle="animation"
                             data-mdb-animation="fade-in-up"
                             data-mdb-animation-duration="2000"
                             data-mdb-animation-on-scroll="repeat"
                             data-mdb-animation-start="onLoad"
                             width="100%"
                             src="https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>">
                    <?php } ?>
                </div>
                <div class="col-lg-4 hover-zoom">
                    <?php
                    $offset = $photo_in_one_column * 1;
                    $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT $photo_in_one_column OFFSET $offset ";
                    $res_gallery = mysqli_query($link, $query_gallery);
                    while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                        ?>
                        <img class="mt-2 mb-2 hover-zoom"
                             data-mdb-toggle="animation"
                             data-mdb-animation="fade-in-up"
                             data-mdb-animation-duration="2000"
                             data-mdb-animation-on-scroll="repeat"
                             data-mdb-animation-start="onLoad"
                             width="100%"
                             src="https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>">
                    <?php } ?>
                </div>
                <div class="col-lg-4 hover-zoom">
                    <?php
                    $offset = $photo_in_one_column * 2;
                    $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT $photo_in_one_column OFFSET $offset ";
                    $res_gallery = mysqli_query($link, $query_gallery);
                    while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                        ?>
                        <img class="mt-2 mb-2 hover-zoom"
                             data-mdb-toggle="animation"
                             data-mdb-animation="fade-in-up"
                             data-mdb-animation-duration="2000"
                             data-mdb-animation-on-scroll="repeat"
                             data-mdb-animation-start="onLoad"
                             width="100%"
                             src="https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>">
                    <?php } ?>
                </div>

            </div>
        </div>
</body>
</div>
<!-- Wooble link for desktop start-->
<!-- Wooble link for desktop  end-->
<!-- Wooble link for mobile start-->
<!-- Wooble link for mobile end-->
</div>
</div>
</div>

<?php include 'inc/footer_h17.php'; ?>
<!-- MDB -->
</body>
</html>
