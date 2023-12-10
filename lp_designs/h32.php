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
    <meta property="og:image" content="https://app.wooble.org/home/images/<?php echo $compressed_img ?>.png"/>
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

        .glassism{
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);*/
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
        }
        .my_gallery_32:hover{
            filter: grayscale(0)!important;
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

        /* REQUIRED / besides position, pointer-events, transform, and transition, the rest are customizable styling */
        .small {
            height: 10px;
            width: 10px;
            background-color: <?php echo $primary_color ?>;
            border-radius: 10px;
            filter: drop-shadow(0 0 5px <?php echo $primary_color ?>) drop-shadow(0 0 20px <?php echo $primary_color ?>);
            z-index: 10000;
            position: fixed;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: height 0.2s, width 0.2s;
        }

        /* REQUIRED / besides position, pointer-events, transform, and transition, the rest are customizable styling */
        .big {
            height: 50px;
            width: 50px;
            border: 3px solid <?php echo $primary_color ?>;
            border-radius: 100px;
            filter: drop-shadow(0 0 5px <?php echo $primary_color ?>) drop-shadow(0 0 20px <?php echo $primary_color ?>);
            z-index: 10000;
            position: fixed;
            pointer-events: none;
            transform: translate(calc(-50%), -50%);
            transition: height 0.5s, width 0.5s, filter 0.5s;
        }

        /* REQUIRED / some styling is necessary for hover effect */
        .hover__big {
            height: 100px;
            width: 100px;
            filter: drop-shadow(0 0 5px <?php echo $primary_color ?>) drop-shadow(0 0 20px <?php echo $primary_color ?>) drop-shadow(0 0 40px <?php echo $primary_color ?>);

            transition: height 0.5s, width 0.5s, filter 0.5s;
        }

        /* REQUIRED / some styling is necessary for hover effect */
        .hover__small {
            height: 8px;
            width: 8px;
            transition: height 0.2s, width 0.2s;
        }
    </style>
</head>
<body style="<?php echo $row_user_info['background'] ?>!important; overflow-x: hidden">
<!-- Start your project here-->
<!--mouse cursor code start-->
<div class="cursor small"></div>
<div class="cursor big"></div>
<!--mouse cursor code end-->
<!--Nav Bar Code Start-->
<?php include 'inc/header_h32.php'; ?>
<!--Nav Bar Code End-->
<!--main code start here-->
<div class="container" >
    <div class="row flex-sm-row">
        <div class="col-lg-5 position-sticky sticky-top d-none d-md-block" style="top: 100px; height: 100vh">
            <img src="https://wooble.org/app/home/images/<?php echo $compressed_img ?>" class="img-fluid" style="object-fit: cover; clip-path: polygon(0 0, 100% 20%, 100% 80%, 0 100%);">
        </div>
        <!--   image for mobile screen-->
        <div class="d-block d-md-none" style="margin-top: 100px;">
            <img src="https://wooble.org/app/home/images/<?php echo $compressed_img ?>" style="object-fit: cover; " class="img-fluid">
        </div>
        <div class="col-lg-7 overflow-y-scroll" >
            <!--hero line for desktop-->
            <div class="primary_color text-wrap m-5 fw-lighter d-none d-md-block my_font" style="font-size: 7rem; line-height: 1.3; min-height: 100vh" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onLoad">Digital Designer Based In  London.</div>
            <!--        hero line for mobile-->
            <div class="primary_color text-wrap my-5 fw-lighter d d-md-none my_font" style="font-size: 2.5rem;" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onLoad">Digital Designer Based In  London.</div>

            <!--about section-->
            <div style="min-height: 100vh" class="sticky-top my_font">
                <h6 class="text-start primary_color opacity-50 fw-lighter fs-3" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">About Me</h6>
                <hr class="primary_color opacity-99" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">
                <p class="text-wrap fw-light fs-2 lh-md primary_color opacity-80" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">
                    I am award-winning product designer specialized in UX/UI, currently living in London, UK. Where I have been working as a freelancer for about 7 years.
                    I work from the user experience to the visual details and then transform these in working code. I am a minimal designer and I really like the simple and elegant style. I worked with a range of clients focusing on web apps and platforms with Tesla in partnership with Webflow.
                </p>
            </div>
            <!--        about section code end-->

            <!--     gallery section-->


            <?php
            if ($count_photos > 0) {
                ?>
                <br><br>
                <div class="" style="min-height: 100vh">
                    <h6 class="text-start primary_color opacity-70 fw-lighter fs-3" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">Gallery</h6>
                    <hr class="primary_color opacity-50" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">
                    <div class="row flex-row">
                        <!--Gallery section-->
                        <div class="lightbox">
                            <?php
                            $count_query = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!=''";
                            $count_res_gallery = mysqli_query($link, $count_query);
                            $count_photos = mysqli_num_rows($count_res_gallery);
                            $photo_in_one_column = round($count_photos / 1, 0);
                            $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC LIMIT $photo_in_one_column ";
                            $res_gallery = mysqli_query($link, $query_gallery);
                            while ($row_gallery = mysqli_fetch_assoc($res_gallery)) {
                                ?>
                                <div class="position-relative" style="margin-top: 100px;">
                                    <img src="https://app.wooble.org/gallery/upload/<?php echo $row_gallery['file_name'] ?>" alt="<?php echo $row_gallery['title'] ?>" class="w-100 my_gallery_32" style="filter: grayscale(100); min-height: 420px; object-fit: cover" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" />
                                    <div data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">
                                        <p class="primary_color position-absolute fs-3 fw-bold text-truncate col-7 my_font" style="bottom: 25px; left: 20px"><?php echo $row_gallery['title'] ?></p>
                                        <p class="primary_color position-absolute fs-6 text-truncate col-4 opacity-70 my_font" style="bottom: 5px; left: 20px"><?php echo $row_gallery['description'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            <?php } ?>
            <!--        main gallery code end here-->
            <!--Recent Blogs-->

            <br><br><br><br><br><br>
            <?php
            if ($count_blogs != 0) {
                ?>
                <div class="">
                    <h6 class="text-start primary_color opacity-70 fw-lighter fs-3" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">Blogs</h6>
                    <hr class="primary_color opacity-50" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat">
                    <div class="justify-content-center d-flex">
                        <?php
                        $count = 0;
                        $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY `time_created` DESC LIMIT 3";
                        $res_blogs = mysqli_query($link, $query_blogs);
                        while ($row_blogs = mysqli_fetch_assoc($res_blogs)) {
                        $blog_content = $row_blogs['content'];
                        $blog_title = $row_blogs['title'];
                        $last_updated = $row_blogs['last_updated'];
                        $last_updated = substr($last_updated, 0,10);
                        $date_created = $row_blogs['time_created'];
                        $blog_id = $row_blogs['blog_id'];
                        $count++;
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                        $post_image = $image['src'];
                        ?>
                        <div class="my-5" style="background-color: transparent" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-right" data-mdb-animation-start="onScroll">
                            <a target="_blank" href="https://wooble.org/blog/<?php echo $row_blogs['canonical_url'] ?>">
                                <!-- Image with no mask -->
                                <div class="bg-image rounded-0">
                                    <img class="my_gallery_32" style="width: 100%; object-fit:cover; filter: grayscale(70)" src="<?php echo $post_image ?>" alt="<?php echo $blog_title ?>"/>
                                </div>
                                <div class="m-3 text-start">
                                    <h5 class="primary_color fw-bold my_font"><?php echo $blog_title ?></h5>
                                    <p class="primary_color opacity-50 my_font  "><b>Last Updated: </b><?php echo $last_updated ?></p>
                                    <p class="primary_color text-truncate col-12 text-wrap opacity-85 mt-3 my_font"><?php $short_info = substr(strip_tags($blog_content), 0, 1000); $short_info = preg_replace("/<img[^>]+\>/i", "(image) ", $short_info);  echo substr($short_info, 0, 200) ?></p>
                                </div>
                            </a>
                        </div>
                        <br><br><br><br>
                        <!--Grid row-->
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <!--Recent Blogs code end-->

        </div>
        <!--    change theme color-->
        <div class="form-check form-switch position-sticky ms-5" style="bottom: 50px;">
            <input class="form-check-input border" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
        </div>
        <?php include 'inc/footer_h32.php'; ?>
    </div>
</div>

<!--main code end here-->
</body>
</div>
</div>
</div>
</div>
<!--mouse cursor event-->
<script type="text/javascript">
    // declares variables for big circle and small circle in cursor
    var cursorBig = document.querySelector('.big');
    var cursorSmall = document.querySelector('.small');
    var a = document.querySelectorAll('img');

    // positions the two circles in a desired placement
    document.addEventListener('mousemove', function(e){
        var x = e.clientX;
        var y = e.clientY;
        cursorBig.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
    });

    document.addEventListener('mousemove', function(e){
        var x = e.clientX;
        var y = e.clientY;
        cursorSmall.style.left = x + 'px';
        cursorSmall.style.top = y + 'px';
    });

    // adds class when cursor clicks
    document.addEventListener('mousedown', function(){
        cursorBig.classList.add('click');
        cursorSmall.classList.add('hover__small')
    });

    // removes class when cursor stops clicking
    document.addEventListener('mouseup', function(){
        cursorBig.classList.remove('click')
        cursorSmall.classList.remove('hover__small')
    });

    // adds and removes class when mouse hovers and stops hovering
    a.forEach(item => {
        item.addEventListener('mouseover', () => {
            cursorBig.classList.add('hover__big');
            cursorSmall.classList.add('hover__small');
        });
        item.addEventListener('mouseleave', () => {
            cursorBig.classList.remove('hover__big');
            cursorSmall.classList.remove('hover__small');
        });
    })
</script>
<!-- MDB -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='plugins/js/multi-carousel.min.js'></script>
<!--<script type="text/javascript">-->
<!--    var multiplexador = 3;-->
<!--    initial_div_height = document.getElementById ("my_dynamic_text").scrollHeight;-->
<!--    Adequar_Frase = setInterval(function(){-->
<!--        var div = document.getElementById ("my_dynamic_text");-->
<!--        var frase = document.getElementById ("quotee");-->
<!--        var message = "WIDTH div " + div.scrollWidth + "px. "+ frase.scrollWidth+"px. frase \n";-->
<!--        message += "HEIGHT div " + initial_div_height + "px. "+ frase.scrollHeight+"px. frase \n";-->
<!---->
<!--        if (frase.scrollHeight < initial_div_height-70) {-->
<!--            multiplexador += 1;-->
<!--            $("#quotee").css("font-size", multiplexador);-->
<!--        }else{-->
<!--            clearInterval(Adequar_Frase);-->
<!--        }-->
<!--        -->
<!--    }, 1);-->
<!--</script>-->
</body>
</html>
