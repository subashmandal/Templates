<?php

$work_title = array();
$work_description = array();
$work_img = array();
$sl = 0;
$query_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `added_date` DESC";
//                echo $query_works;
$res_works = mysqli_query($link, $query_works);
while ($row_works = mysqli_fetch_assoc($res_works)) {
    $work_title[$sl] = $row_works['work_title'];
    $work_description[$sl] = $row_works['work_description'];
    $work_img[$sl] = $row_works['cover_pic'];
    $sl++;
}

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

    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>
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
        .row {
            margin-right: 0;
            margin-left: 0;
            --mdb-gutter-x: 0;
        }
        .text_hover:hover{
            opacity: 80%;
        }
    </style>
</head>
<body style="background-color:<?php echo $background_color ?>">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow-x: hidden;">

            <div class="bg" style="background-color:<?php echo $row_user_info['background'] ?>; min-height: 100vh; background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center top;">
                <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
                <h1 style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family: <?php echo $row_fonts['font_1'] ?> ; padding-left: 10vw; padding-top: 5vh; font-size: 6vh;"><?php echo $row_user_info['custom_work_name'] ?></h1>
                <p class="fw-light text-start ls-wider" style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family: <?php echo $row_fonts['font_1'] ?> ; padding-left: 10vw; padding-top: 1vh;"><?php echo $row_user_info['work_description'] ?></p>
                <br><br><br><br><br>
                <?php
                    $i=0;
                    $work_title = array();
                    $work_description = array();
                    $cover_pic = array();
                    $keywords = array();
                    $work_image = array();

                    $query_load_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `added_date` DESC";
                    $res_load_works = mysqli_query($link, $query_load_works);
                    while($row_load_works = mysqli_fetch_assoc($res_load_works)){
                        $work_title[$i] = $row_load_works['work_title'];
                        $work_description[$i] = $row_load_works['work_description'];
                        $cover_pic[$i] = $row_load_works['cover_pic'];
                        $canonical_url[$i] = $row_load_works['canonical_url'];
                        $keywords[$i++] = $row_load_works['keywords'];
                    }
                    $sl1=0;
                ?>

                <div class="container">
                    <div class="row ">
                <?php
                    for($j=1;$j<=$i;$j++){
                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_description[$sl1], $image);
                        $work_image[$sl1] = $image['src'];
                        ?>


                    <div class="col-lg-4 col-12 p-2 p-lg-3" style="overflow: hidden;">

                            <div class="row" style="overflow: hidden">
                                <div class="col-12 position-relative image rounded-4 shift" style="background-image: url('https://app.wooble.org/work/upload/<?php echo $cover_pic[$sl1] ?>'), url('<?php echo $work_image[$sl1] ?>'), url('http://via.placeholder.com/200x200'); height: 30vh; background-repeat: no-repeat; background-size: cover; background-position: center; width: 100%; "></div>
                                <div class="col-12 my-2 shift" style=" overflow: hidden;">
                                    <a target="_blank" href="<?php echo 'https://wooble.org/work/?title='.$canonical_url[$sl1] ?>"><h1 class="text-capitalize text_hover" style="font-size: 3vh; font-family:<?php echo $row_fonts['font_1'] ?>!important; color:<?php echo $row_user_info['tertiary_color'] ?>;"><?php echo $work_title[$sl1] ?></h1></a>
                                    <p class="right" href="#" style="color: aliceblue;">
                                        <?php
                                        $tag_string = $keywords[$sl1++];
                                        $tags = explode(',', $tag_string);
                                        $tag_count = count($tags);
                                        if($tag_count>1){
                                            for($k=0;$k<$tag_count; $k++){
                                                if(strlen($tags[$k])>0){
                                                    ?>
                                                    <button disabled type="button" class="btn btn-sm btn-rounded m-1" style="background-color: <?php echo $background_color?>; background-color: <?php echo $tertiary_color?>"><?php echo $tags[$k] ?></button>
                                                    <?php
                                                }
                                            }

                                        } ?>
                                    </p>

                                </div>
                            </div>

                        </div>
                    <?php }?>
                    </div>
                </div>
                <!--footer section start here-->
                <?php
                include '../footer/'.$row_user_info["footer_type"].'.php';
                ?>
                <!--footer section end here-->

            </div>
        </div>
    </div></div>

<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>
<script src='https://wooble.org/gsap/minified/gsap.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollToPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/SplitText.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollTrigger.min.js'></script>
<script src='https://wooble.org/gsap/minified/MotionPathPlugin.min.js'></script>
<script src='https://wooble.org/gsap/minified/ScrollSmoother.min.js'></script>
<script>
    var sections = gsap.utils.toArray('.shift');
    sections.forEach((section) => {
        gsap.to(section, {
            x:"-100%",opacity:0,
            scrollTrigger: {
                trigger: section,
                start: 'top',
                scrub: 2,
                end: 'bottom 30%',
                markers:false,
            }
        });
    })

    // var sections = gsap.utils.toArray('.left');
    // sections.forEach((section) => {
    //     gsap.to(section, {x:"100%",
    //         scrollTrigger: {
    //             trigger: section,
    //             start: 'top',
    //             scrub: 1,
    //             end: 'bottom',
    //
    //         }
    //     });
    // })
    // var sections = gsap.utils.toArray('.right');
    // sections.forEach((section) => {
    //     gsap.to(section, {x:"-100%",
    //         scrollTrigger: {
    //             trigger: section,
    //             start: 'top',
    //             scrub: 1,
    //             end: 'bottom',
    //
    //         }
    //     });
    // })
    // var sections = gsap.utils.toArray('.short');
    // sections.forEach((section) => {
    //     gsap.to(section, {x:"20%",
    //         scrollTrigger: {
    //             trigger: section,
    //             start: 'top',
    //             scrub: 1,
    //             end: 'bottom',
    //
    //         }
    //     });
    // })

</script>
<script>

    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:1,
        smoothTouch:0.1
    })
</script>
</body>
</html>