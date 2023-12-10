<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css'>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallery | <?php echo $row_user_info['field_1'] ?></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- ubuntu fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/mdb.min.css" />

    <style>



        img {
            max-width: 100%;
        }

        .ag-format-container {
            width: 1160px;
            margin: 0 auto;

            position: relative;
        }

        .ag-timeline-block {
            padding: 300px 0;
        }
        .ag-timeline_title-box {
            padding: 0 0 30px;

            text-align: center;
        }
        .ag-timeline_tagline {
            font-size: 40px;
            color: rgb(84, 89, 95);
        }
        .ag-timeline_title {
            background-image: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/bg.jpg);
            background-repeat: no-repeat;
            background-position: 50% 50%;

            background-size: cover;
            -webkit-background-clip: text;
            background-clip: text;
            text-fill-color: transparent;
            color: transparent;

            font-size: 80px;
        }

        .ag-timeline_item {
            margin: 0 0 50px;

            position: relative;
        }
        .ag-timeline_item:nth-child(2n) {
            text-align: right;
        }

        .ag-timeline {
            display: inline-block;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;

            position: relative;
        }
        .ag-timeline_line {
            width: 2px;
            background-color: #393935;

            position: absolute;
            top: 2px;
            left: 50%;
            bottom: 0;

            overflow: hidden;

            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .ag-timeline_line-progress {
            width: 100%;
            height: 20%;
            background-color: #FF0;
        }

        .ag-timeline-card_box {
            padding: 0 0 20px 50%;
        }
        .ag-timeline_item:nth-child(2n) .ag-timeline-card_box {
            padding: 0 50% 20px 0;
        }
        .ag-timeline-card_point-box {
            display: inline-block;
            margin: 0 14px 0 -28px;
        }
        .ag-timeline_item:nth-child(2n) .ag-timeline-card_point-box {
            margin: 0 -28px 0 14px;
        }
        .ag-timeline-card_point {
            height: 50px;
            line-height: 50px;
            width: 50px;
            border: 3px solid <?php echo $row_user_info['secondary_color'] ?>;
            background-color: #1d1d1b;

            text-align: center;
            font-family: 'ESL Legend', sans-serif;
            font-size: 20px;
            color: <?php echo $row_user_info['tertiary_color'] ?>;

            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }
        .js-ag-active .ag-timeline-card_point {
            color: #1d1d1b;
            background-color: <?php echo $row_user_info['secondary_color'] ?>;
        }
        .ag-timeline-card_meta-box {
            display: inline-block;
        }
        .ag-timeline-card_meta {
            margin: 10px 0 0;

            font-family: 'ESL Legend', sans-serif;
            font-weight: bold;
            font-size: 28px;
            color: <?php echo $row_user_info['secondary_color'] ?>;
        }
        .ag-timeline-card_item {
            display: inline-block;
            width: 45%;
            margin: -77px 0 0;
            background-color: <?php echo $row_user_info['primary_color'] ?>;

            opacity: 0;

            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;

            -webkit-box-shadow: 0 0 0 0 rgba(0,0,0,.5);
            -moz-box-shadow: 0 0 0 0 rgba(0,0,0,.5);
            -o-box-shadow: 0 0 0 0 rgba(0,0,0,.5);
            box-shadow: 0 0 0 0 rgba(0,0,0,.5);

            -webkit-transition: -webkit-transform .5s, opacity .5s;
            -moz-transition: -moz-transform .5s, opacity .5s;
            -o-transition: -o-transform .5s, opacity .5s;
            transition: transform .5s, opacity .5s;

            position: relative;
        }
        .ag-timeline_item:nth-child(2n+1) .ag-timeline-card_item {
            -webkit-transform: translateX(-200%);
            -moz-transform: translateX(-200%);
            -ms-transform: translateX(-200%);
            -o-transform: translateX(-200%);
            transform: translateX(-200%);
        }
        .ag-timeline_item:nth-child(2n) .ag-timeline-card_item {
            -webkit-transform: translateX(200%);
            -moz-transform: translateX(200%);
            -ms-transform: translateX(200%);
            -o-transform: translateX(200%);
            transform: translateX(200%);
        }
        .js-ag-active.ag-timeline_item:nth-child(2n+1) .ag-timeline-card_item,
        .js-ag-active.ag-timeline_item:nth-child(2n) .ag-timeline-card_item {
            opacity: 1;

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }
        .ag-timeline-card_arrow {
            height: 18px;
            width: 18px;
            margin-top: 20px;
            background-color: <?php echo $row_user_info['primary_color'] ?>;

            z-index: -1;
            position: absolute;
            top: 0;
            right: 0;

            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .ag-timeline_item:nth-child(2n+1) .ag-timeline-card_arrow {
            margin-left: calc(-18px / 2);
            margin-right: calc(-18px / 2);
        }
        .ag-timeline_item:nth-child(2n) .ag-timeline-card_arrow {
            margin-left: -10px;

            right: auto;
            left: 0;
        }
        .ag-timeline-card_img {
            width: 100%;
        }
        .ag-timeline-card_info {
            padding: 20px 30px;
        }
        .ag-timeline-card_title {
            display: none;
            margin: 10px 0 0;

            font-family: 'ESL Legend', sans-serif;
            font-weight: bold;
            font-size: 28px;
            color: <?php echo $row_user_info['primary_color'] ?>;
        }
        .ag-timeline-card_desc {
            line-height: 1.45;

            font-size: 16px;
            color: <?php echo $row_user_info['tertiary_color'] ?>;
        }


        @media only screen and (max-width: 979px) {
            .ag-timeline_line {
                left: 30px;
            }

            .ag-timeline_item:nth-child(2n) {
                text-align: left;
            }

            .ag-timeline-card_box,
            .ag-timeline_item:nth-child(2n) .ag-timeline-card_box {
                padding: 0 0 20px;
            }
            .ag-timeline-card_meta-box {
                display: none;
            }
            .ag-timeline-card_point-box,
            .ag-timeline_item:nth-child(2n) .ag-timeline-card_point-box {
                margin: 0 0 0 8px;
            }
            .ag-timeline-card_point {
                height: 40px;
                line-height: 40px;
                width: 40px;
            }
            .ag-timeline-card_item {
                width: auto;
                margin: -65px 0 0 75px
            }
            .ag-timeline_item:nth-child(2n+1) .ag-timeline-card_item,
            .ag-timeline_item:nth-child(2n) .ag-timeline-card_item {
                -webkit-transform: translateX(200%);
                -moz-transform: translateX(200%);
                -ms-transform: translateX(200%);
                -o-transform: translateX(200%);
                transform: translateX(200%);
            }
            .ag-timeline_item:nth-child(2n+1) .ag-timeline-card_arrow {
                right: auto;
                left: 0;
            }
            .ag-timeline-card_title {
                display: block;
            }
            .ag-timeline-card_arrow {
                margin-top: 12px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

            .ag-timeline-card_img {
                height: auto;
                width: auto;
            }
        }

        @media only screen and (max-width: 639px) {
            .ag-timeline_title {
                font-size: 60px;
            }

            .ag-timeline-card_info {
                padding: 10px 15px;
            }
            .ag-timeline-card_desc {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 479px) {

        }

        @media (min-width: 768px) and (max-width: 979px) {
            .ag-format-container {
                width: 750px;
            }

        }

        @media (min-width: 980px) and (max-width: 1161px) {
            .ag-format-container {
                width: 960px;
            }

        }
    </style>
</head>
<body style="background-color:<?php echo $row_user_info['background'] ?>">

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:<?php echo $row_user_info['background'] ?>">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample"
                aria-controls="navbarRightAlignExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars text-light"></i>
        </button>
        <a class="navbar-brand" style="padding-left: 20vh; color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>" href="<?php echo $home_url ?>">
            <h2>Natalia</h2>
        </a>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right: 20vh; font-size: 2.4vh;">
                <li class="nav-item px-4">
                    <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" aria-current="page" href="<?php echo $work_url ?>">Works</a>
                </li>
                <li class="nav-item px-4">
                    <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" href="<?php echo $home_url ?>">About Me</a>
                </li>
                <li class="nav-item px-4">
                    <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" href="<?php echo $blog_url ?>">Blogs</a>
                </li>
                <li class="nav-item px-4">
                    <a style="color:<?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>" class="nav-link active hua" href="<?php echo $gallery_url ?>">Gallery</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- partial:index.partial.html -->
<div class="ag-timeline-block">
    <div class="ag-timeline_title-box">
        <div class="ag-timeline_tagline"><?php echo $row_user_info['field_1']."'s" ?> Journey</div>
    </div>
    <section class="ag-section">
        <div class="ag-format-container">
            <div class="js-timeline ag-timeline">
                <div class="js-timeline_line ag-timeline_line">
                    <div class="js-timeline_line-progress ag-timeline_line-progress"></div>
                </div>
                <div class="ag-timeline_list">
                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2021</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 13</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-13.png" class="ag-timeline-card_img" width="640" height="360" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 13</div>
                                    <div class="ag-timeline-card_desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 12</div>
                            </div>
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2020</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-12.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 12</div>
                                    <div class="ag-timeline-card_desc">
                                        Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                        tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                        nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2020</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 11</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-11.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 11</div>
                                    <div class="ag-timeline-card_desc">
                                        Aenean imperdiet. Etiam ultricies
                                        nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                                        adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                        hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                        sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
                                        eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 10</div>
                            </div>
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2019</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-10.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 10</div>
                                    <div class="ag-timeline-card_desc">
                                        Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                        tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2019</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 9</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-9.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 9</div>
                                    <div class="ag-timeline-card_desc">
                                        Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                        nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                                        nisi vel augue. Curabitur ullamcorper ultricies nisi.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 8</div>
                            </div>
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2018</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-8.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 8</div>
                                    <div class="ag-timeline-card_desc">
                                        Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                        tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2018</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 7</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-7.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 7</div>
                                    <div class="ag-timeline-card_desc">
                                        Quisque rutrum. Aenean imperdiet. Etiam ultricies
                                        nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                                        adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                        hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 6</div>
                            </div>
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2017</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-6.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 6</div>
                                    <div class="ag-timeline-card_desc">
                                        Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                        nulla ut metus varius laoreet. Quisque rutrum.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2017</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 5</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-5.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 5</div>
                                    <div class="ag-timeline-card_desc">
                                        Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                        tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                        nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                                        nisi vel augue. Curabitur ullamcorper ultricies nisi.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 4</div>
                            </div>
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2016</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-4.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 4</div>
                                    <div class="ag-timeline-card_desc">
                                        Nullam dictum felis eu pede mollis pretium. Integer
                                        tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                        nulla ut metus varius laoreet.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2016</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 3</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-3.png" class="ag-timeline-card_img" width="640" height="360" alt="" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 3</div>
                                    <div class="ag-timeline-card_desc">
                                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                                        adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                        hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                        sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget
                                        eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 2</div>
                            </div>
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2015</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-2.png" class="ag-timeline-card_img" width="640" height="360" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 2</div>
                                    <div class="ag-timeline-card_desc">
                                        Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                        nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies
                                        nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                            <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                                <div class="ag-timeline-card_point">2015</div>
                            </div>
                            <div class="ag-timeline-card_meta-box">
                                <div class="ag-timeline-card_meta">Season 1</div>
                            </div>
                        </div>
                        <div class="ag-timeline-card_item">
                            <div class="ag-timeline-card_inner">
                                <div class="ag-timeline-card_img-box">
                                    <img src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/img-1.png" class="ag-timeline-card_img" width="640" height="360" />
                                </div>
                                <div class="ag-timeline-card_info">
                                    <div class="ag-timeline-card_title">Season 1</div>
                                    <div class="ag-timeline-card_desc">
                                        Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer
                                        tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                        tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                                    </div>
                                </div>
                            </div>
                            <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type="text/javascript">
    (function ($) {
        $(function () {


            $(window).on('scroll', function () {
                fnOnScroll();
            });

            $(window).on('resize', function () {
                fnOnResize();
            });


            var agTimeline = $('.js-timeline'),
                agTimelineLine = $('.js-timeline_line'),
                agTimelineLineProgress = $('.js-timeline_line-progress'),
                agTimelinePoint = $('.js-timeline-card_point-box'),
                agTimelineItem = $('.js-timeline_item'),
                agOuterHeight = $(window).outerHeight(),
                agHeight = $(window).height(),
                f = -1,
                agFlag = false;

            function fnOnScroll() {
                agPosY = $(window).scrollTop();

                fnUpdateFrame();
            }

            function fnOnResize() {
                agPosY = $(window).scrollTop();
                agHeight = $(window).height();

                fnUpdateFrame();
            }

            function fnUpdateWindow() {
                agFlag = false;

                agTimelineLine.css({
                    top: agTimelineItem.first().find(agTimelinePoint).offset().top - agTimelineItem.first().offset().top,
                    bottom: agTimeline.offset().top + agTimeline.outerHeight() - agTimelineItem.last().find(agTimelinePoint).offset().top
                });

                f !== agPosY && (f = agPosY, agHeight, fnUpdateProgress());
            }

            function fnUpdateProgress() {
                var agTop = agTimelineItem.last().find(agTimelinePoint).offset().top;

                i = agTop + agPosY - $(window).scrollTop();
                a = agTimelineLineProgress.offset().top + agPosY - $(window).scrollTop();
                n = agPosY - a + agOuterHeight / 2;
                i <= agPosY + agOuterHeight / 2 && (n = i - a);
                agTimelineLineProgress.css({height: n + "px"});

                agTimelineItem.each(function () {
                    var agTop = $(this).find(agTimelinePoint).offset().top;

                    (agTop + agPosY - $(window).scrollTop()) < agPosY + .5 * agOuterHeight ? $(this).addClass('js-ag-active') : $(this).removeClass('js-ag-active');
                })
            }

            function fnUpdateFrame() {
                agFlag || requestAnimationFrame(fnUpdateWindow);
                agFlag = true;
            }


        });
    })(jQuery);
</script>

<script type="text/javascript" src="../../js/mdb.min.js"></script>
<script src='../gsap/minified/gsap.min.js'></script>
<script src='../gsap/minified/ScrollToPlugin.min.js'></script>
<script src='../gsap/minified/SplitText.min.js'></script>
<script src='../gsap/minified/ScrollTrigger.min.js'></script>
<script src='../gsap/minified/MotionPathPlugin.min.js'></script>
<script src='../gsap/minified/ScrollSmoother.min.js'></script>

</body>
</html>
