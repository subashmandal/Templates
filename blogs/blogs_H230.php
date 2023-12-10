<?php
function get_clean_excerpt($string)
{

    $excerpt_string = get_excerpt($string);
    $excerpt_string = str_replace(' ', '-', $excerpt_string); // Replaces all spaces with hyphens.
    $excerpt_string = preg_replace('/[^A-Za-z0-9\-]/', '', $excerpt_string); // Removes special chars.
    return str_replace('-', ' ', $excerpt_string);
}

function get_excerpt($content, $length = 30, $more = '...')
{
    $excerpt = strip_tags(trim($content));
    $words = str_word_count($excerpt, 2);
    if (count($words) > $length) {
        $words = array_slice($words, 0, $length, true);
        end($words);
        $position = key($words) + strlen(current($words));
        $excerpt = substr($excerpt, 0, $position) . $more;
    }
    return $excerpt;
}
?>
<?php
$query = "SELECT * FROM `user_details` WHERE `email` = '$email_id'";
$res_query = mysqli_query($link, $query);
$row_user_details = mysqli_fetch_assoc($res_query);
?>
<?php
//$bg_color  = "linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "green";
//$secondary_color = "#2f3239";
//$text_color = "black";
//$font_family = "'Frank Ruhl Libre', serif;";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blogs | <?php echo $row_user_info['field_1'] ?></title>
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
<body style="background: <?php echo $bg_color?>; user-select: none;">
<!-- Start -->
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<!--blog section start-->
<div class="container-fluid" style="background: <?php echo $bg_color?>; min-height: 100vh;">
    <div class="container py-5">
        <div class="fs-2 text-capitalize mt-lg-5 mt-3" style="color: <?php echo $text_color?>">
            <span style="font-family: <?php echo $font_family1 ?>;"><?php echo $row_user_details['custom_blog_name']?></span><i class="fas fa-arrow-down-long mx-2"></i><span class="fw-lighter fs-4" style="font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_details['blog_description']?></span>
        </div>

        <div class="lightbox">
            <?php
            $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `position`, `time_created`";
            $res_blogs = mysqli_query($link, $query_blogs);
            while($row_blogs = mysqli_fetch_assoc($res_blogs)){
            $blog_title = $row_blogs['title'];
            $blog_content = $row_blogs['content'];
            $clean_blog_content = get_clean_excerpt($row_blogs['content']);
            $originalDate = $row_blogs['time_created'];
            $newDate = date("F, d, Y", strtotime($originalDate));
            $blog_link = $row_blogs['canonical_url'];
            preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
            $post_image = $image['src'];
            ?>
            <div class="row my-5" style="border: 1px solid <?php echo $secondary_color?>">
                <div class="col-lg-7 col-12 g-0" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                        <img data-mdb-caption="<?php echo $blog_title ?>" src="<?php echo $post_image ?>"
                             data-mdb-img="<?php echo $post_image ?>"
                             onerror="this.src = 'https://app.wooble.org/img/placeholder.webp';"
                             alt="<?php echo $blog_title ?>"
                             class="w-100" style="height: 400px; object-fit: cover; "/>
                </div>

                <div class="col-lg-5 col-12 g-0 d-flex align-items-center">
                    <div class="mx-lg-4 mx-3 my-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                        <p style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>; text-transform: capitalize;"><?php echo $newDate?></p>
                        <h1 onclick="window.open('../blog/<?php echo $blog_link ?>','_blank')" class="text-capitalize" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>; font-weight: lighter; cursor: pointer;"><?php echo $blog_title ?></h1>
                        <p class="opacity-75 my-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $clean_blog_content ?></p>
                        <div class="my-5">
                            <button onclick="window.open('../blog/<?php echo $blog_link ?>','_blank')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

    </div></div>
    <!--blog section end-->
<!--    footer section start-->
    <?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
<!--    footer section end-->
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>

</body>
</html>