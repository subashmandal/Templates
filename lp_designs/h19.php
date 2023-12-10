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

        .glassism{
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);*/
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 10px;
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
    <?php include 'inc/header_h19.php'; ?>
    <!--Nav Bar Code End-->
    <div class="container">
        <div class="row">
        <div class="col-lg-5 mt-2">
            <img width="100%" src="https://wooble.org/app/home/images/<?php echo $compressed_img ?>" style="object-fit: cover"
                 onerror="this.onerror=null; this.src='<?php echo $profile_pic ?>'">
        </div>
        <div class="col-lg-7 mt-2" id="my_dynamic_text" style="max-height: 30vh">
            <h1 id="quotee" class="my_font primary_color" style="font-size: 32px"><?php echo $row_user_info['field_1'] ?></h1>
            <p class="my_font secondary_color"><?php echo $row_user_info['field_2'] ?></p>
            <div class="d-flex pt-2">
            <?php
            $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$userEmailID' LIMIT 5";
            $res_link = mysqli_query($link, $query_link);
            while ($row_link = mysqli_fetch_assoc($res_link)) {
                $link1 = $row_link['link'];
                $brand = $row_link['brand'];
                $url = $link1;
                $parse = parse_url($url);
                $host = $parse['host'];
                $host = str_ireplace('www.', '', $host);
                $short_host = $host;
                $first = strtok($short_host, '.');
//            echo $first; // home
                ?>
                <div class="cols" align="center">
                    <center>
                        <a target="_blank" class="m-2" href="<?php echo $link1 ?>">
                            <i style="font-size: 32px; color: <?php echo $secondary_color ?>" class="fab fa-<?php echo $first ?> secondary_color"></i>
                        </a>
                    </center>
                </div>
            <?php } ?>
            </div>

        </div>
            <p class="my_font mt-4 justify-content-around secondary_color"><?php echo $row_user_info['field_3'] ?></p>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <strong><h1 class="my_font secondary_color">Recent Blogs</h1></strong>
        <br>
            <?php
            $count=0;
            $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' ORDER BY `time_created` DESC LIMIT 5";
            $res_blogs = mysqli_query($link, $query_blogs);
            while ($row_blogs = mysqli_fetch_assoc($res_blogs)){
                $blog_content = $row_blogs['content'];
                $blog_title = $row_blogs['title'];
                $last_updated = $row_blogs['last_updated'];
                $date_created = $row_blogs['time_created'];
                $blog_id = $row_blogs['blog_id'];
                $count++;
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                $post_image = $image['src'];
                ?>
        <div class="row glassism p-0  p-4 mt-2 mb-4" style="min-height: 200px">
            <div class="bg-image col-lg-4" style="min-height: 200px; background-image: url('<?php echo $post_image; $fallback_url = 'https://medium.com/search?q='.$blog_title ?>')">
<!--                <img-->
<!--                        src="--><?php //echo $post_image; $fallback_url = 'https://medium.com/search?q='.$blog_title ?><!--"-->
<!--                        onerror="this.onerror=null; this.src='https://random.imagecdn.app/500/150'"-->
<!--                        width="100%"-->
<!--                        height="100%"-->
<!--                        style="object-fit: cover"-->
<!--                        alt="--><?php //echo $blog_title ?><!--"-->
<!--                />-->
            </div>
            <div class="col-lg-8 p-2">
                <a target="_blank" href="https://wooble.org/blog/<?php echo $row_blogs['canonical_url'] ?>"><h3 class="my_font primary_color"><?php echo $blog_title ?></h3></a>
                <p class="my_font secondary_color"><?php $short_info = substr(strip_tags($blog_content), 0, 1000); $short_info = preg_replace("/<img[^>]+\>/i", "(image) ", $short_info);  echo substr($short_info, 0, 200) ?>...</p>
            </div>
        </div>
            <?php } ?>

    </div>

</body>
</div>
</div>
</div>
</div>

<?php include 'inc/footer_h19.php'; ?>
<!-- MDB -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script type="text/javascript">
    var multiplexador = 3;
    initial_div_height = document.getElementById ("my_dynamic_text").scrollHeight;
    Adequar_Frase = setInterval(function(){
        var div = document.getElementById ("my_dynamic_text");
        var frase = document.getElementById ("quotee");
        var message = "WIDTH div " + div.scrollWidth + "px. "+ frase.scrollWidth+"px. frase \n";
        message += "HEIGHT div " + initial_div_height + "px. "+ frase.scrollHeight+"px. frase \n";

        if (frase.scrollHeight < initial_div_height-70) {
            multiplexador += 1;
            $("#quotee").css("font-size", multiplexador);
        }else{
            clearInterval(Adequar_Frase);
        }
        //console.log(message);
    }, 1);
</script>
</body>
</html>
