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
    <title><?php echo $row_user_info['field_1'] ?> | Works </title>
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

        .char{
            transform:translateY(115px);
            transition: transform .5s;
        }
        h1{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
            line-height: 5.9rem;
        }

    </style>
</head>
<body style="background-color: #191818;">
<!-- Start -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div style="overflow-x: hidden;">
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


            <?php
                $work_title = array();
                $work_description = array();
                $work_img = array();
                $sl=0;
                $query_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID'";
//                echo $query_works;
                $res_works = mysqli_query($link, $query_works);
                while($row_works = mysqli_fetch_assoc($res_works)){
                    $work_title[$sl] = $row_works['work_title'];
                    $work_description[$sl] = $row_works['work_description'];
                    $work_img[$sl] = $row_works['cover_pic'];
                    $sl++;
                }
            ?>

            <?php
                $sl1=0;
                for($i=1;$i<=$sl;$i=$i+1){
                    if($i%2==0){?>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-lg-7">
                                <div class="center" style="min-height: 50vh;">
                                    <div style="min-height: 40vh; width: 50vw;">
                                        <div class="row" style="min-height: 40vh; background-image: linear-gradient(90deg,rgba(2, 3, 2, 1)44%,rgba(66, 66, 66, 0)74%);border-radius: 20px; ">
                                            <div class="col-lg-5 bg d-flex align-items-center justify-content-center">
                                                <img class="image" src="img/<?php echo $work_img[$sl1] ?>" style="height: 35vh; margin-top: -1.6vh; border-radius: 15px;" alt="" srcset="">
                                            </div>
                                            <div class="col-lg-7">
                                                <p class="center text-light" style="height: 40vh; font-size: 2vh;">
                                                    <?php echo $work_description[$sl1] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-light center" style="height: 50vh;">
                                <h1 style="font-size: 7vh;"><?php echo $sl1+1 ?>. <?php echo $work_title[$sl1] ?></h1>
                            </div>
                        </div>
                    <?php $sl1=$sl1+1; }
                    else{ ?>
                        <div class="row">
                            <div class="col-lg-5 text-light center" style="height: 50vh;">
                                <h1 style="font-size: 7vh;"><?php echo $sl1+1 ?>. <?php echo $work_title[$sl1] ?></h1>
                            </div>
                            <div class="col-lg-7">
                                <div class="center" style="min-height: 50vh;">
                                    <div class="" style="min-height: 40vh; width: 50vw;">
                                        <div class="row" style="min-height: 40vh;background-image: linear-gradient(90deg,rgba(2, 3, 2, 1)44%,rgba(66, 66, 66, 0)74%);border-radius: 20px; ">
                                            <div class="col-lg-5 bg d-flex align-items-center justify-content-center">
                                                <img class="image" src="img/<?php echo $work_img[$sl1] ?>" style="height: 35vh; margin-top: -1.6vh; border-radius: 15px;" alt="" srcset="">
                                            </div>
                                            <div class="col-lg-7">
                                                <p class="center text-light" style="height: 40vh; font-size: 2vh;">
                                                    <?php echo $work_description[$sl1] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php $sl1=$sl1+1; }
                    ?>
                <?php }
            ?>

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
    <script src="https://unpkg.com/split-type"></script>
    <script >
        let smoother = ScrollSmoother.create({
            wrapper:"#smooth-wrapper",
            content:"#smooth-content",
            smooth:3,
            smoothTouch:0.1
        })
        // const myText = new SplitType('#my-text')
        // gsap.to(".char",{
        // y:0, stagger:0.05, delay:0.2, duration:.1,
        // scrollTrigger: {
        //      trigger: "#my-text",
        //      start: "top 50%",
        //      end: "bottom 40%",
        //      markers:true,
        //      scrub : true,
        //    }
        // })
        const myText = new SplitType('.my-text')
        var sections = gsap.utils.toArray('.char');
        sections.forEach((section) => {
            gsap.to(section, { y:0,stagger:0.05, delay:0.2, duration:.1,
                scrollTrigger: {
                    trigger: section,
                    start: 'top 100%',
                    scrub: true,
                    end: 'bottom 95%',
                }
            });
        })

        // const myText = new SplitType('#my-text')
        // gsap.to('.char',{
        //    y:0,
        //    stagger:0.05,
        //    delay:0.2,
        //    duration:.1
        // })
    </script>
    <script>

        var sections = gsap.utils.toArray('.image');
        sections.forEach((section) => {
            gsap.from(section, { y:'40%',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 100%',
                    scrub: true,
                    end: 'bottom 80%',
                }
            });
        })
    </script>
</body>
</html>