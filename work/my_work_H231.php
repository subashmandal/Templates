<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_work['work_title'] ?> | <?php echo $row_user_info['field_1'] ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- ubuntu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>

    <style>
        p{
            color:<?php echo $row_user_info['tertiary_color'];?> !important;
            font-family: <?php echo $row_fonts['font_2'] ?> !important;
        }
        span{
            color:<?php echo $row_user_info['tertiary_color'];?>!important;
            font-family: <?php echo $row_fonts['font_2'] ?>!important;
        }
    </style>


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

        @media (max-width:600px){
            .align{
                min-height: 35vh;
                scroll-padding-top: 2vh;
            }
            .align2{
                margin-bottom: 0px !important;
            }

        }
        .title_hover:hover{
            color: <?php echo $row_user_info['secondary_color'];?>!important;
        }
    </style>
</head>
<body style="background-color: <?php echo $row_user_info['background'] ?>; user-select: none;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow: hidden;">
            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
            <div style=" background-color: <?php echo $row_user_info['background'] ?>">
                <div class="position-relative" style="min-height: 100vh;">

                    <div class="position-absolute top-0 end-0">
                        <img  data-lag="0.5" src="../lp_designs/img/element2.svg" class="img-fluid" style="height: 30vh;" alt="" srcset="">
                    </div>


                    <div class="container">
                        <div class="row mt-4">
                            <div class="col-lg-8" >
                                <h1 style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>;"><?php echo $row_work['work_title'] ?></h1>

                                <br>
                                <div class="my-4 row">
                                    <div class="col-1 d-flex align-items-center justify-content-center">
                                        <img src="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp'" class="hover-shadow" height="50" width="50" style="border-radius: 50%; object-fit: cover; -o-object-fit: cover; cursor:pointer;" onclick="window.open('<?php echo $root_canonical_url ?>', '_self')">
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-start">
                                        <div>
                                            <div class="row" style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>; cursor: pointer;" onclick="window.open('<?php echo $root_canonical_url ?>', '_self')">
                                                <?php echo $row_user_info['field_1']?>
                                            </div>
                                            <div class="row" style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>;">
                                                <?php echo $row_user_info['field_2']?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
                                    <?php echo $row_work['work_description'] ?>
                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-md-block" style="max-height: 100vh; overflow-x: hidden; overflow-y: scroll;">
                                <?php
                                $query_load_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `added_date` DESC";
                                $res_load_works = mysqli_query($link, $query_load_works);
                                while($row_load_works = mysqli_fetch_assoc($res_load_works)){
                                    $work_title = $row_load_works['work_title'];
                                    $work_description = $row_load_works['work_description'];
                                    $cover_pic = $row_load_works['cover_pic'];
                                    $canonical_url = $row_load_works['canonical_url'];
                                    $keywords = $row_load_works['keywords'];
                                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_description, $image);
                                    $fallback_work_pic = $image['src'];
                                ?>
                                <div class="row p-2">
                                    <div class="col-12 g-0">
                                        <img class="src img-fluid w-100 rounded-top" src="https://app.wooble.org/work/upload/<?php echo $cover_pic?>" onerror="this.src ='<?php echo $fallback_work_pic?>'" style="object-fit: cover; object-position: top; max-height: 20vh;">
                                    </div>
                                    <div class="col-12 rounded-bottom" style="background: <?php echo $primary_color ?>; ">
                                        <span class="title_hover" onclick="window.open('<?php echo '../my_work/?title='.$canonical_url ?>', '_self')" style="cursor: pointer;"><?php echo $work_title ?></span>
                                    </div>

                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="position-absolute bottom-0 start-0">
                        <img  data-lag="0.5" src="../lp_designs/img/element3.svg" class="img-fluid" style="height: 25vh;" alt="" srcset="">
                    </div>
                </div>
            </div>
            <?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
        </div>
    </div></div>
<!-- End -->
<?php
if ($row_user_info['work_share']==1) {
    include 'share.php';
}
?>
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<script src='https://wooble.org/gsap/minified/gsap.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollToPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/SplitText.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollTrigger.min.js'></script>
<script src='https://wooble.org/gsap/minified/MotionPathPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollSmoother.min.js'></script>

<script>
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
        smoothTouch:1
    })
</script>
<script>
    var  skewSetter = gsap.quickSetter(".bg", "skewY", "deg");
    var proxy = {skew:0}
    ScrollTrigger.create({
        onUpdate:self=>{
            var skew = self.getVelocity()/-200;
            if (Math.abs(skew) > Math.abs(proxy.skew)) {
                proxy.skew = skew;
                gsap.to(proxy, {skew: 0, duration: 1, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
            }
        }
    });
    gsap.set(".col",{transformOrigin:"right center",force3D:true});

</script>
</body>
</html>