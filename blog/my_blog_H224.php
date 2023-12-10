<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['custom_blog_name'] ?> | <?php echo $row_user_info['field_1'] ?></title>
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
        .center{
            display: grid;
            place-content: center;
        }
        .bg{
            background-size: cover; background-repeat: no-repeat; background-position: center;
        }
        .hua {
            display: inline-block;
            position: relative;
        }
        .hua:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color:white;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hua:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        @media (max-width:600px){
            .align{
                min-height: 35vh;
                scroll-padding-top: 2vh;
            }
            .align2{
                margin-bottom: 0px !important;
            }

        }
    </style>
</head>
<body style="background-color: <?php echo $row_user_info['background'] ?>; user-select: none;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
        <div style="overflow: hidden;">

            <div style=" background-color: <?php echo $row_user_info['background'] ?>">
                <div class="container" style="min-height: 100vh;">


                    <h1 style="color: <?php echo $row_user_info['secondary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>; padding-top: 5vh;"><?php echo $row_blog['title'] ?></h1>
                    <p style="color: <?php echo $row_user_info['secondary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>; padding-top: 2vh;"><sapn> Published on- <sapn> <?php $originalDate = $row_blog['time_created'];
                        $newDate = date("M, d Y", strtotime($originalDate)); echo $newDate ?> </p>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="my-4 d-flex justify-content-start">
                                <div class=" d-flex align-items-center justify-content-center">
                                    <img src="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>" onerror="this.src = 'https://app.wooble.org/img/placeholder.webp'" class="hover-shadow" height="50" width="50" style="border-radius: 50%; object-fit: cover; -o-object-fit: cover; cursor:pointer;" onclick="window.open('<?php echo $root_canonical_url ?>', '_self')">
                                </div>
                                <div class=" d-flex align-items-center justify-content-start ms-4">
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
                            <div class="pe-lg-5 pe-0 my-5" style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
                                <?php echo $row_blog['content'] ?>
                            </div>
                            <div class="my-5">
                                <div class="mb-2" style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_1'] ?>">
                                    Random blogs
                                </div>
                                <div class="d-flex" style="width: 100%; overflow-x: scroll; overflow-y: hidden;">
                                    <?php
                                    $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY RAND()";
                                    $res_blogs = mysqli_query($link, $query_blogs);
                                    while($row_blogs = mysqli_fetch_assoc($res_blogs)){
                                        $blog_title = $row_blogs['title'];
                                        $blog_content = $row_blogs['content'];
                                        $originalDate = $row_blogs['time_created'];
                                        $newDate = date("F, d, Y", strtotime($originalDate));
                                        $blog_link = $row_blogs['canonical_url'];
                                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                                        $post_image = $image['src'];
                                        ?>
                                        <div class="mx-2" style="height: 210px; cursor: pointer;" onclick="window.open('<?php echo '../blog/?title='.$blog_link ?>', '_self')">
                                            <div class="bg-image hover-zoom g-0" style="width: 200px">
                                                <img class="src img-fluid w-100" src="<?php echo $post_image?>" onerror="this.src ='https://app.wooble.org/img/placeholder.webp'" style="object-fit: cover; object-position: top; height: 150px;">
                                            </div>
                                            <div class="px-2" style="background: <?php echo $primary_color ?>; font-size: small;">
                                                <span class="title_hover" onclick="window.open('<?php echo '../blog/?title='.$blog_link ?>', '_self')" style="cursor: pointer;"><?php echo $blog_title ?></span>
                                            </div>

                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-md-block">
                            <div style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>;">
                                latest blog
                            </div>
                            <div style="max-height: 100vh; overflow-x: hidden; overflow-y: scroll;">
                                <?php
                                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY `position`";
                                $res_blogs = mysqli_query($link, $query_blogs);
                                while($row_blogs = mysqli_fetch_assoc($res_blogs)){
                                    $blog_title = $row_blogs['title'];
                                    $blog_content = $row_blogs['content'];
                                    $originalDate = $row_blogs['time_created'];
                                    $newDate = date("F, d, Y", strtotime($originalDate));
                                    $blog_link = $row_blogs['canonical_url'];
                                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                                    $post_image = $image['src'];
                                    ?>
                                    <div class="row p-2" style="cursor: pointer;" onclick="window.open('<?php echo '../blog/?title='.$blog_link ?>', '_self')">
                                        <div class="col-4 g-0 bg-image hover-zoom">
                                            <img class="src img-fluid w-100" src="<?php echo $post_image?>" onerror="this.src ='https://app.wooble.org/img/placeholder.webp'" style="object-fit: cover; object-position: top; height: 100px;">
                                        </div>
                                        <div class="col-8" style="background: <?php echo $primary_color ?>;">
                                            <span class="title_hover" onclick="window.open('<?php echo '../blog/?title='.$blog_link ?>', '_self')" style="cursor: pointer;"><?php echo $blog_title ?></span>
                                        </div>

                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
    </div></div>
<!-- End -->
<!--social share start-->
<?php
if ($row_user_info['blog_share']) {
    include 'share.php';
}
?>
<!--social share end-->
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