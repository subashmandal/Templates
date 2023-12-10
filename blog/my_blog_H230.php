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
<!--social share start-->
<?php
if ($row_user_info['blog_share']) {
    include 'share.php';
}
?>
<!--social share end-->
<!-- Start -->
        <div style="overflow: hidden;">
            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
            <div style=" background-color: <?php echo $row_user_info['background'] ?>">
                <div class="container" style="min-height: 100vh;">

                    <h1 style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>; padding-top: 5vh; "><?php echo $row_blog['title'] ?></h1>
                    <p style="color: <?php echo $row_user_info['secondary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>; padding-top: 2vh;"><sapn> Published on - <sapn> <?php $originalDate = $row_blog['time_created'];
                        $newDate = date("M, d Y", strtotime($originalDate)); echo $newDate ?> </p>
                    <br>
                    <div class="mt-4">
                        <div class="col-lg-12 col-12">
                            <div class="my-5" style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
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
                                        $blog_title_len = substr($blog_title,0,50)."...";
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
                                                <span class="title_hover" onclick="window.open('<?php echo '../blog/?title='.$blog_link ?>', '_self')" style="cursor: pointer;"><?php echo $blog_title_len ?></span>
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
        </div>

<!-- End -->

<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
</body>
</html>