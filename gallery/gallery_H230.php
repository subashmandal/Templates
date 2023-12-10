<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallery | <?php echo $row_user_info['field_1'] ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- ubuntu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="https://wooble.org/css/mdb.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;600;700;800;900&display=swap');
        .btn_hover:hover{
            background: <?php echo $secondary_color ?> !important;
            color: <?php echo $text_color?> !important;
        }
    </style>
</head>
<?php
$font_combo_id = $row_user_info['font_id'];
$query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
$res_fonts = mysqli_query($link, $query_fonts);
$row_fonts = mysqli_fetch_assoc($res_fonts);
echo $row_fonts['font_1_link'];
echo $row_fonts['font_2_link'];
$font_family1 = $row_fonts['font_1'];
$font_family2 = $row_fonts['font_2'];
?>
<?php
//$bg_color   = "linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "green";
//$secondary_color = "green";
//$text_color = "black";
//$font_family = "'Frank Ruhl Libre', serif;";
?>
<body style="background: <?php echo $bg_color?>; user-select: none;">
<!-- Start -->
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<div class="container-fluid" style="min-height: 100vh;">
    <!-- gallery section start-->
    <div class="container py-5">
        <div class="fs-2 text-capitalize mt-lg-3 mt-3" style="color: <?php echo $text_color?>">
            <span style="font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_info['custom_gallery_name'] ?></span><i class="fas fa-arrow-down-long mx-2"></i><span class="fw-lighter fs-4" style="font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_info['gallery_description'] ?></span>
        </div>
        <div class="lightbox">
            <div class="row my-5">
                <?php
                $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' ORDER BY `position`";
                $res_gallery = mysqli_query($link, $query_gallery);
                while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                $pic_url = $row_gallery['file_name'];
                $pic_title = $row_gallery['title'];
                $pic_description = $row_gallery['description'];
                ?>

                <div class="col-lg-4 g-0 p-2" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in">
                    <img data-mdb-caption="<?php echo $pic_title?>" src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>"
                         data-mdb-img="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>"
                         onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                         alt="<?php echo $pic_title?>"
                         class="w-100 hover-shadow" style="height: 400px; object-fit: cover; "/>
                    <div class="text-center">
                        <small class="text-truncate d-inline-block" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; max-width: 90%"><?php echo $pic_title?></small>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>


    </div>
    <!--gallery section end-->
</div>
<!--    footer section start-->
<?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
<!--    footer section end-->
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
</body>
</html>