<?php
include '../inc/dbconnection.php';

$user_id = $_GET['id'];
$username = $user_id;
$query_user_email = "SELECT * FROM `user_details` WHERE `username`='$user_id'";
$res_email = mysqli_query($link, $query_user_email);
$row_email = mysqli_fetch_assoc($res_email);
$row_user_info = $row_email;
$userEmailID = $row_email['email'];



$full_name = $row_email['field_1'];
$profile_pic = $row_email['profile_pic'];
$theme = $row_email['theme'];
$theme = strtolower($theme);


$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);



function get_clean_excerpt($string)
{

    $excerpt_string = get_excerpt($string);
    $excerpt_string = str_replace(' ', '-', $excerpt_string); // Replaces all spaces with hyphens.
    $excerpt_string = preg_replace('/[^A-Za-z0-9\-]/', '', $excerpt_string); // Removes special chars.
    return str_replace('-', ' ', $excerpt_string);
}

function get_excerpt($content, $length = 40, $more = '...')
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!--    <title>--><?php //echo $full_name; echo $profile_pic; ?><!-- | Wooble</title>-->
    <!-- Wooble icon -->
    <!--    <link rel="icon" href="https://test.wooble.org/home/upload/--><?php //echo rawurlencode($profile_pic); ?><!--" type="image/x-icon" />-->
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link href="../blog/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <link rel="stylesheet" href="http://wooble.org/css/mdb.min.css"/>
    <link rel="stylesheet" href="http://wooble.org/plugins/css/multi-carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">

    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>

    <style>
        .primary_color{
            color: <?php echo $row_user_info['primary_color']?>!important;
        }
        .secondary_color {
            color: <?php echo $row_user_info['secondary_color']?> !important;
        }
        .my_font{
            font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
        }

    </style>
</head>
<body style="min-height: 100vh; background-color: <?php echo $background ?>; background-repeat: no-repeat; background-size: cover; overflow-x: hidden!important;">
<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<br>
<div class="">
    <div class="flex">


        <div class="container" style="min-height: 100vh;">
            <!--Grid row-->
            <div class="row">

                <?php
                $count=0;
                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `time_created` DESC";
                $res_blogs = mysqli_query($link, $query_blogs);
                while ($row_blogs = mysqli_fetch_assoc($res_blogs)){
                    $blog_content = $row_blogs['content'];
                    $blog_title = $row_blogs['title'];
                    $last_updated = $row_blogs['last_updated'];
                    $date_created = $row_blogs['time_created'];
                    $blog_id = $row_blogs['blog_id'];
                    $count++;
                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                    $fallback_blog_pic = $image['src'];
                    ?>

                    <div class="col-lg-4 mt-2 mb-2" style="max-height: 320px">
                        <!-- Image with violet mask -->
                        <a target="_blank" style="display: inline" href="../blog/<?php echo $row_blogs['canonical_url'] ?>">
                            <div class="bg-image rounded-6" style="height: 320px;">
                                <img
                                        src="https://app.wooble.org/blog/upload/<?php echo $row_blogs['cover_image'] ?>"
                                        onerror="this.onerror=null;this.src='<?php echo $fallback_blog_pic ?>';"
                                    width="100%"
                                    height="100%"
                                    style="object-fit: cover; font-family: <?php echo $row_fonts['font_2'] ?>;"
                                    alt="<?php echo $blog_title ?>"
                                />
                                <!-- Mask -->
                                    <div class="mask" style="background: linear-gradient(180deg, rgba(255,255,255,0) 35%, <?php echo $background ?> 100%);">
                                    <div class=" bottom-0 d-flex align-items-end h-100 text-center justify-content-center">
                                        <div align="left">
                                            <h6 class="fw-normal mb-2 p-2" style="color:<?php echo $text_color ?>; font-family:<?php echo $row_fonts['font_2'] ?>"><?php echo $blog_title ?>

                                                <!--p class="text-muted">Last updated: <?php
                                                $org_date = date_create($last_updated);
                                                if($last_updated=='0000-00-00 00:00:00'){
                                                    $org_date = date_create($date_created);
                                                }
                                                echo date_format($org_date,"d/m/Y");
                                                ?></p-->
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <!--Grid row-->
        </div>

        <?php
        if($count==0){ ?>
            <div class="container">
                <div class="justify-content-center align-content-center" style="height: 80vh; vertical-align: middle" align="center">
                    <br><br><br><br><br>
                    <img src="no_blogs.jpeg" width="300px" height="200px" style="vertical-align: middle; align-content: center">
                    <br>
                    <button class="btn btn-primary">Request to add Blogs</button>
                </div>

            </div>
        <?php }
        ?>
    </div>
</div>
<!--footer section start-->
<div style="overflow-x: hidden!important;">
    <?php
    include '../footer/'.$row_user_info["footer_type"].'.php';
    ?>
</div>
<!--footer section end-->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>

</body>
<?php mysqli_close($link) ?>
</html>
