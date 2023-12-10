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
$font_combo_id = $row_user_info['font_id'];
$query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
$res_fonts = mysqli_query($link, $query_fonts);
$row_fonts = mysqli_fetch_assoc($res_fonts);
echo $row_fonts['font_1_link'];
echo $row_fonts['font_2_link'];
$font_family1 = $row_fonts['font_1'];
$font_family2 = $row_fonts['font_2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Works | <?php echo $row_user_info['field_1'] ?></title>
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
//$bg_color   = "linear-gradient(0deg, rgba(255,0,0,0.6) 50%, rgba(244,149,0,1) 100%)";
//$primary_color = "green";
//$secondary_color = "green";
//$text_color = "black";
//$font_family = "'Frank Ruhl Libre', serif;";
?>
<body style="background:<?php echo $bg_color ?>; user-select: none;">
<!-- Start -->
<!--header section start-->
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<!--header section end-->
<div class="container-fluid" style="background:<?php echo $bg_color ?>; min-height: 100vh;">
    <!--work section start-->
    <div class="container mt-lg-5 mt-3">
        <div class="fs-2 text-capitalize my-lg-5 mt-5" style="color: <?php echo $text_color?>">
            <span style="font-family: <?php echo $font_family1?>;"><?php echo $row_user_info['custom_work_name']?></span><i class="fas fa-arrow-down-long mx-2"></i><span class="fw-lighter fs-4" style="font-family: <?php echo $font_family2 ?>;"><?php echo $row_user_info['work_description']?></span>
        </div>
        <div class="container">
            <div class="lightbox">
                <?php
                $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY position";
                $res_works = mysqli_query($link, $query_works);
                $work_count = mysqli_num_rows($res_works);
                if ($work_count>0){
                    $i =0;
                    $work_title = array();
                    $work_link = array();
                    $work_image = array();
                    $clean_work_content = array();
                    while($row_works = mysqli_fetch_assoc($res_works)){

                        $work_id = $row_works['work_id'];
                        $work_title[] = $row_works['work_title'];
                        $work_content = $row_works['work_description'];
                        $work_link[] = $row_works['canonical_url'];
                        $work_cover_pic[] = $row_works['cover_pic'];

                        $clean_work_content[] = get_clean_excerpt($work_content);
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_content, $image);
                        $work_image[] = $image['src'];
                    }
                    ?>
                    <?php
                    for ($i=0; $i<$work_count; $i++){
                        if ($i %2 == 0){?>

                            <div class="row flex-sm-row flex-column-reverse my-5" style="border: 1px solid <?php echo $secondary_color ?>">
                                <div class="col-lg-5 col-12 g-0 d-flex align-items-center">
                                    <div class="mx-lg-4 mx-3 my-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                                        <h1 class="text-capitalize" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>; cursor: pointer;"><?php echo $work_title[$i] ?></h1>
                                        <p class="opacity-75 my-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $clean_work_content[$i] ?></p>
                                        <div class="mt-5">
                                            <button onclick="window.open('https://wooble.org/work/?title=<?php echo $work_link[$i] ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-12 g-0" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                                    <img data-mdb-caption="<?php echo $work_title[$i] ?>" src="<?php echo $work_image[$i] ?>"
                                         data-mdb-img="<?php echo $work_image[$i] ?>" alt="<?php echo $work_title[$i] ?>"
                                         onerror="this.src = 'https://app.wooble.org/work/upload/<?php echo $work_cover_pic[$i] ?>';"
                                         class="w-100" style="height: 400px; object-fit: cover; "/>
                                </div>
                            </div>

                        <?php }  else{?>

                            <div class="row my-5" style="border: 1px solid <?php echo $secondary_color ?>">

                                <div class="col-lg-7 col-12 g-0" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-left">
                                    <img data-mdb-caption="<?php echo $work_title[$i] ?>" src="<?php echo $work_image[$i] ?>"
                                         data-mdb-img="<?php echo $work_image[$i] ?>" alt="<?php echo $work_title[$i] ?>"
                                         onerror="this.src = 'https://app.wooble.org/work/upload/<?php echo $work_cover_pic[$i] ?>';"
                                         class="w-100" style="height: 400px; object-fit: cover; "/>
                                </div>

                                <div class="col-lg-5 col-12 g-0 d-flex align-items-center">
                                    <div class="mx-lg-4 mx-3 my-3" data-mdb-toggle="animation" data-mdb-animation-reset="false" data-mdb-animation-on-scroll="once" data-mdb-animation-repeat="false" data-mdb-animation-duration="2000" data-mdb-animation-start="onScroll" data-mdb-animation="fade-in-right">
                                        <h1 class="text-capitalize" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family1 ?>; cursor: pointer;"><?php echo $work_title[$i] ?></h1>
                                        <p class="opacity-75 my-4" style="color: <?php echo $text_color?>; font-family: <?php echo $font_family2 ?>"><?php echo $clean_work_content[$i] ?>...</p>
                                        <div class="mt-5">
                                            <button onclick="window.open('https://wooble.org/work/?title=<?php echo $work_link[$i] ?>','_self')" type="button" class="btn shadow-0 rounded-0 fw-light ls-widest text-capitalize btn_hover" style="background: <?php echo $text_color?>; color: <?php echo $bg_color?>; font-family: <?php echo $font_family2 ?>;">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }}?>
                <?php }?>
            </div>
        </div>
    </div>
    <!--work section end-->
</div>
<!--    footer section start-->
<?php include '../footer/'.$row_user_info["footer_type"].'.php'; ?>
<!--    footer section end-->
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
</body>
</html>