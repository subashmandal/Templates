<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_work['work_title'] ?> | <?php echo $row_user_info['field_1'] ?></title>
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

        @media (max-width:600px){
            .align{
                min-height: 35vh;
                scroll-padding-top: 2vh;
            }
            .align2{
                margin-bottom: 0px !important;
            }

        }
        .title_hover:hover{
            color: <?php echo $row_user_info['secondary_color'];?>!important;
        }
    </style>
</head>
<body style="background-color: <?php echo $row_user_info['background'] ?>; user-select: none;">
<!-- Start -->
        <div style="overflow: hidden;">
            <?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
            <div style=" background-color: <?php echo $row_user_info['background'] ?>">
                <div class="position-relative" style="min-height: 100vh;">


                    <div class="container">
                        <div class="row my-4">
                            <div class="col-lg-8" >
                                <h1 style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>;"><?php echo $row_work['work_title'] ?> hello</h1>

                                <br>
                                <div class="my-4 d-flex justify-content-start">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="https://app.wooble.org/home/images/<?php echo $row_user_info['dp'] ?>" onerror="this.src = 'https://placehold.co/600x400'" class="hover-shadow" height="50" width="50" style="border-radius: 50%; object-fit: cover; -o-object-fit: cover; cursor:pointer;" onclick="window.open('<?php echo $root_canonical_url ?>', '_self')">
                                    </div>
                                    <div class="ms-3 d-flex align-items-center justify-content-start">
                                        <div>
                                            <div class="row" style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_1']; ?>; cursor: pointer;" onclick="window.open('<?php echo $root_canonical_url ?>', '_self')">
                                                <?php echo $row_user_info['field_1']?>
                                            </div>
                                            <div class="row" style="color: <?php echo $row_user_info['tertiary_color'] ?>; font-family:<?php echo $row_fonts['font_2']; ?>;">
                                                <?php echo $row_user_info['field_2']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
                                    <?php echo $row_work['work_description'] ?>
                                </div>
                                <div>
                                    <div style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
                                        Random work
                                    </div>
                                    <div class="d-flex" style="width: 100%; overflow-x: scroll; overflow-y: hidden;">
                                        <?php
                                        $query_load_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY RAND()";
                                        $res_load_works = mysqli_query($link, $query_load_works);
                                        while($row_load_works = mysqli_fetch_assoc($res_load_works)){
                                            $work_title = $row_load_works['work_title'];
                                            $work_title_len = substr($work_title,0, 50);
                                            $work_description = $row_load_works['work_description'];
                                            $cover_pic = $row_load_works['cover_pic'];
                                            $canonical_url = $row_load_works['canonical_url'];
                                            $keywords = $row_load_works['keywords'];
                                            preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_description, $image);
                                            $fallback_work_pic = $image['src'];
                                            ?>
                                            <div class="mx-2" style="height: 210px; cursor: pointer;" onclick="window.open('<?php echo '../work/?title='.$canonical_url ?>', '_self')">
                                                <div class="bg-image hover-zoom g-0" style="width: 200px">
                                                    <img class="src img-fluid w-100" src="https://app.wooble.org/work/upload/<?php echo $cover_pic?>" onerror="this.src ='<?php echo $fallback_work_pic?>'" style="object-fit: cover; object-position: top; height: 150px;">
                                                </div>
                                                <div class="px-2" style="background: <?php echo $primary_color ?>; font-size: small;">
                                                    <span class="title_hover" onclick="window.open('<?php echo '../work/?title='.$canonical_url ?>', '_self')" style="cursor: pointer;"><?php echo $work_title_len ?>...</span>
                                                </div>

                                            </div>
                                        <?php }?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-md-block">
                                <div style="color:<?php echo $row_user_info['tertiary_color'] ?>!important; font-family:<?php echo $row_fonts['font_2'] ?>">
                                    Latest work
                                </div>
                                <div style="max-height: 100vh; overflow-x: hidden; overflow-y: scroll;">
                                <?php
                                $query_load_works = "SELECT * FROM `works_db` WHERE `email_id`='$userEmailID' ORDER BY `added_date` DESC";
                                $res_load_works = mysqli_query($link, $query_load_works);
                                while($row_load_works = mysqli_fetch_assoc($res_load_works)){
                                    $work_title = $row_load_works['work_title'];
                                    $work_title_len = substr($work_title,0, 50);
                                    $work_description = $row_load_works['work_description'];
                                    $cover_pic = $row_load_works['cover_pic'];
                                    $canonical_url = $row_load_works['canonical_url'];
                                    $keywords = $row_load_works['keywords'];
                                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $work_description, $image);
                                    $fallback_work_pic = $image['src'];
                                ?>
                                <div class="row p-2" style="cursor: pointer;" onclick="window.open('<?php echo '../work/?title='.$canonical_url ?>', '_self')">
                                    <div class="col-4 g-0 bg-image hover-zoom">
                                        <img class="src img-fluid w-100" src="https://app.wooble.org/work/upload/<?php echo $cover_pic?>" onerror="this.src ='<?php echo $fallback_work_pic?>'" style="object-fit: cover; object-position: top; height: 100px;">
                                    </div>
                                    <div class="col-8" style="background: <?php echo $primary_color ?>; ">
                                        <span class="title_hover" onclick="window.open('<?php echo '../work/?title='.$canonical_url ?>', '_self')" style="cursor: pointer;"><?php echo $work_title_len ?>...</span>
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