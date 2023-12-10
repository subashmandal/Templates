<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .br{
            border:1px solid rgb(252, 10, 10);
        }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1'] ?> | Blogs</title>
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
    <link rel="stylesheet" href="../../css/mdb.min.css" />
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
            background-color: yellow;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hua:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

    </style>
</head>
<body style="background-color: #191818;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow: hidden;">
            <nav class="navbar shadow-0 navbar-dark navbar-expand-lg navbar-light " style="background-color: #191818; min-height: 6rem;">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarCenteredExample"
                        aria-controls="navbarCenteredExample"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <!-- Collapsible wrapper -->
                    <a class="navbar-brand" href="#">
                        <h2><?php

                            $words = explode(" ", $row_user_info['field_1']);
                            $initials = null;
                            foreach ($words as $w) {
                                $initials .= $w[0];
                            }
                            echo $initials; //JB
                            ?></h2>
                    </a>
                    <div
                        class="collapse navbar-collapse justify-content-center"
                        id="navbarCenteredExample"
                    >
                        <!-- Left links -->
                        <ul class="navbar-nav navbar-brand">
                            <li class="nav-item pe-4">
                                <a class="nav-link active" aria-current="page" href="../<?php echo $row_user_info['username'] ?>">Home</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link active" aria-current="page" href="../works/<?php echo $row_user_info['username'] ?>">Works</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link active" aria-current="page" href="../blogs/<?php echo $row_user_info['username'] ?>">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../gallery/<?php echo $row_user_info['username'] ?>">Gallery</a>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <div class="row">
                <?php
                $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$email_id' ORDER BY `time_created` DESC";
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
                <div class="col-lg-6">
                    <div class="center" style="min-height: 50vh;">
                        <div class="" style="min-height: 40vh; width: 50vw;padding-left: 2vw;padding-right: 1.5vw;">
                            <div class="row" style="min-height: 40vh; background-image: linear-gradient(90deg,rgba(2, 3, 2, 1)44%,rgba(66, 66, 66, 0)74%); border-radius: 20px;">
                                <div class="col-lg-5 bg d-flex align-items-center justify-content-center image">
                                    <img src="<?php echo $post_image ?>" style="height: 35vh; margin-top: -1.6vh; border-radius: 15px;" alt="" srcset="">
                                </div>
                                <div class="col-lg-7">

                                    <p class="center text-light" style="height: 40vh; font-size: 2vh;">
                                        <b><?php echo $row_blogs['title']; ?></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div></div>
<!-- End -->
<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<script src='../../gsap/minified/gsap.min.js'></script>
<script src='../../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../../gsap/minified/SplitText.min.js'></script>
<script src='../../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../../gsap/minified/ScrollSmoother.min.js'></script>

<script>
    var sections = gsap.utils.toArray('.image');
    sections.forEach((section) => {
        gsap.from(section, { y:'40%',
            scrollTrigger: {
                trigger: section,
                start: 'top 100%',
                scrub: true,
                end: 'bottom 80%',
                markers: false
            }
        });
    })
</script>
<script >
    let smoother = ScrollSmoother.create({
        wrapper:"#smooth-wrapper",
        content:"#smooth-content",
        smooth:3,
        smoothTouch:0.1
    })
</script>
</body>
</html>