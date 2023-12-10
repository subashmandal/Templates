
<?php
$query = "SELECT * FROM `user_details` WHERE `email` = '$userEmailID'";
$res_query = mysqli_query($link, $query);
$row_user_details = mysqli_fetch_assoc($res_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallery | <?php echo $row_user_info['field_1'] ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Wooble icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">

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
        @media (max-width:600px) {
            .hello{
                font-size:xx-large !important;
            }
            .recent{
                font-size: 10vw !important;
            }
            .photos{
                font-size: 5vw !important;
            }
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
    <div class="row" style="font-family: 'Poppins', sans-serif;">
        <div class="col-lg-12 d-flex justify-content-center">
            <span class="text-capitalize fw-bold recent opacity-35" style="font-family: <?php echo $font_family2 ?>; color: <?php echo $secondary_color ?>; font-size: 10rem; ">recent</span>
            <span class="position-absolute text-capitalize fw-bold photos" style="font-family: <?php echo $font_family1 ?>; color: <?php echo $text_color ?>; font-size: 6rem; margin-top: 3.5rem;"><?php echo $row_user_details['custom_gallery_name'] ?></span>
        </div>
        <div class="container mt-lg-0 mt-5 photos_desc">
            <div class="d-flex align-items-center justify-content-center px-3" style="color: <?php echo $text_color ?>; font-family: <?php echo $font_family1 ?>;">
                <span style="font-size: large;"><?php echo $row_user_info['gallery_description'] ?></span>
            </div>
        </div>
    </div>

        <div class="container-fluid">
            <div class="row my-5 lightbox">
                <?php
                $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' ORDER BY `position`";
                $res_gallery = mysqli_query($link, $query_gallery);
                while($row_gallery = mysqli_fetch_assoc($res_gallery)){
                $pic_url = $row_gallery['file_name'];
                $pic_title = $row_gallery['title'];
                $pic_description = $row_gallery['description'];
                ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 p-3 photo gs_reveal">
                        <img src="https://wooble.org/app/gallery/upload/<?php echo $pic_url ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp'" class="img-fluid rounded-9 w-100" alt="<?php echo $pic_title ?>" style="height: 45vh; object-fit: cover">
                    </div>
                <?php }?>

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
<!-- Gsap -->
<script src="https://wooble.org/gsap/minified/gsap.min.js"></script>
<script src="https://wooble.org/gsap/minified/ScrollTrigger.min.js"></script>
<script src="https://wooble.org/gsap/minified/ScrollSmoother.min.js"></script>
<script src="https://wooble.org/gsap/minified/SplitText.min.js"></script>

<!--gsap script-->
<script type="text/javascript">
    gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, gsap);

    gsap.from(".recent", {scale: 0,y:"-100%", duration: 2});
    gsap.from(".photos", {opacity: 0, duration: 2});
    gsap.from(".photos_desc", {opacity: 0, duration: 2});

    var sections = gsap.utils.toArray('.photo');
    sections.forEach((section) => {
        gsap.to(section, {skewX:"10", scale:0.8,
            scrollTrigger: {
                trigger: section,
                start: 'top 0%',
                scrub: 2,
                end: 'bottom 0%',
                markers: false,
            }
        });
    })
</script>
</body>
</html>