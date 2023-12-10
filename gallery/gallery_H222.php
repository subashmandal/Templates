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
    <title>W1</title>
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
            border-radius: 15px;
        }
        .hua {
            display: inline-block;
            position: relative;
        }

        .hua:after {
            content: '';
            position: absolute;
            width: 70%;
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
        .glassism{
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.5);
            /*box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);*/
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 0px solid rgba(255, 255, 255, 0.3);
            padding: 0.2vh;
            /* border-radius: 30px; */
        }

    </style>
</head>
<body style="background-color: #191818;">
<!-- Start -->
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
    $sl=0;
    $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID'";
    $res_gallery = mysqli_query($link, $query_gallery);
    while($row_gallery = mysqli_fetch_assoc($res_gallery)){
        $pic_url[$sl] = $row_gallery['file_name'];
        $pic_title[$sl] = $row_gallery['title'];
        $pic_description[$sl] = $row_gallery['description'];
        $sl++;
    }


?>

<?php
    $sl1=0;
    for($i=1;$i<$sl;$i=$i+2){?>
        <div class="px-4 d-flex align-items-center justify-content-center">
            <div class="row gx-2">
                <div class="col">
                    <div class="p-3">
                        <div class="bg position-relative First" style="height: 40vh; width: 45vh; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url[$sl1] ?>);">
                            <div class="position-absolute bottom-0 start-0" >
                                <p class="text-black mb-2 glassism ps-3" ><?php echo $pic_title[$sl1] ?></p>
                                <p class="text-black glassism ps-3"><?php echo $pic_description[$sl1] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $sl1++; ?>
                <div class="col">
                    <div class="p-3">
                        <div class="bg position-relative Second" style="height: 40vh; width: 45vh; background-image: url(https://wooble.org/app/gallery/upload/<?php echo $pic_url[$sl1] ?>);">
                            <div class="position-absolute bottom-0 start-0" >
                                <p class="text-black mb-2 glassism ps-3" ><?php echo $pic_title[$sl1] ?></p>
                                <p class="text-black glassism ps-3"><?php echo $pic_description[$sl1] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $sl1++; ?>
            </div>
        </div>
    <?php }
?>


<!--<div class="px-4 d-flex align-items-center justify-content-center">-->
<!--    <div class="row gx-2">-->
<!--        <div class="col">-->
<!--            <div class="p-3">-->
<!--                <div class="bg position-relative First" style="height: 40vh; width: 45vh; background-image: url(https://www.buildingplanner.in/images/ready-plans/34N1002.jpg);">-->
<!--                    <div class="position-absolute bottom-0 start-0" >-->
<!--                        <p class="text-black mb-2 glassism ps-3">Gotham Center</p>-->
<!--                        <p  class="text-black glassism ps-3">Amet minim mollit non deserunt ullamco-->
<!--                            est sit aliqua dolor do amet sint. Velit-->
<!--                            officia conse amet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="p-3">-->
<!--                <div class="bg position-relative Second" style="height: 40vh; width: 45vh; background-image: url(https://1.bp.blogspot.com/-6uL4YhQICoU/XRNup_w25-I/AAAAAAAAAKE/pMGI0DVUecsO9f6boeMsfVs0U17dLCAWACLcBGAs/s1600/5%2Bstorey%2Bbuilding%2Bdesign.jpg);">-->
<!--                    <div class="position-absolute bottom-0 start-0" >-->
<!--                        <p class="text-black mb-2 glassism ps-3">430 Park Avenue</p>-->
<!--                        <p  class="text-black glassism ps-3">Amet minim mollit non deserunt ullamco-->
<!--                            est sit aliqua dolor do amet sint. Velit-->
<!--                            officia conse amet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="px-4 d-flex align-items-center justify-content-center">-->
<!--    <div class="row gx-2">-->
<!--        <div class="col">-->
<!--            <div class="p-3">-->
<!--                <div class="bg position-relative First" style="height: 40vh; width: 45vh; background-image: url(https://i.ytimg.com/vi/cyNtZ3_ar6o/maxresdefault.jpg);">-->
<!--                    <div class="position-absolute bottom-0 start-0" >-->
<!--                        <p class="text-black mb-2 glassism ps-3">16 E 34th St</p>-->
<!--                        <p  class="text-black glassism ps-3">Amet minim mollit non deserunt ullamco-->
<!--                            est sit aliqua dolor do amet sint. Velit-->
<!--                            officia conse amet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="p-3">-->
<!--                <div class="bg position-relative Second" style="height: 40vh; width: 45vh; background-image: url(https://www.monnaiedevelopers.com/wp-content/uploads/2022/10/monnaie-developers_001.jpg);">-->
<!--                    <div class="position-absolute bottom-0 start-0" >-->
<!--                        <p class="text-black mb-2 glassism ps-3">229 West 36th Street</p>-->
<!--                        <p  class="text-black glassism ps-3">Amet minim mollit non deserunt ullamco-->
<!--                            est sit aliqua dolor do amet sint. Velit-->
<!--                            officia conse amet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="px-4 d-flex align-items-center justify-content-center">-->
<!--    <div class="row gx-2">-->
<!--        <div class="col">-->
<!--            <div class="p-3">-->
<!--                <div class="bg position-relative First" style="-webkit-box-reflect:below 30px linear-gradient(transparent,#00000040);  min-height: 40vh; min-width: 45vh; background-image: url(https://i.ytimg.com/vi/cyNtZ3_ar6o/maxresdefault.jpg);">-->
<!--                    <div class="position-absolute bottom-0 start-0" >-->
<!--                        <p class="text-black mb-2 glassism ps-3">16 E 34th St</p>-->
<!--                        <p  class="text-black glassism ps-3">Amet minim mollit non deserunt ullamco-->
<!--                            est sit aliqua dolor do amet sint. Velit-->
<!--                            officia conse amet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="p-3">-->
<!--                <div class="bg position-relative Second" style=" -webkit-box-reflect:below 30px linear-gradient(transparent,#00000040); min-height: 40vh; min-width: 45vh; background-image: url(https://www.monnaiedevelopers.com/wp-content/uploads/2022/10/monnaie-developers_001.jpg);">-->
<!--                    <div class="position-absolute bottom-0 start-0" >-->
<!--                        <p class="text-black mb-2 glassism ps-3">229 West 36th Street</p>-->
<!--                        <p  class="text-black glassism ps-3">Amet minim mollit non deserunt ullamco-->
<!--                            est sit aliqua dolor do amet sint. Velit-->
<!--                            officia conse amet.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="" style="height: 60vh;"></div>
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
    var sections = gsap.utils.toArray('.First');
    sections.forEach((section) => {
        gsap.to(section, { x:'-40%',
            scrollTrigger: {
                trigger: section,
                start: 'top 0%',
                scrub: 2,
                end: 'bottom 10%',
            }
        });
    })
    var sections = gsap.utils.toArray('.Second');
    sections.forEach((section) => {
        gsap.to(section, { x:'40%',
            scrollTrigger: {
                trigger: section,
                start: 'top 0%',
                scrub: 2,
                end: 'bottom 10%',
            }
        });
    })
</script>

</body>
</html>