<nav class="navbar navbar-expand-lg navbar-light"style="background-color:<?php echo $bg_color; ?>; z-index: 100;">
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
        <a class="navbar-brand" style="padding-left: 20vh;" href="<?php echo $root_canonical_url ?>">
            <h2 style="color: <?php echo $text_color ?>; font-family:<?php echo $row_fonts['font_1']; ?>"><?php echo $row_user_info['field_1']; ?></h2>
        </a>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right: 20vh; font-size: 2.4vh;">

                <?php
                    $query_nav = "SELECT * FROM `navbar` WHERE `email_id`='$userEmailID' AND `status`='1' ORDER BY `position`";
//                    echo $query_nav;
                    $res_nav = mysqli_query($link, $query_nav);
                    while($row_nav = mysqli_fetch_assoc($res_nav)){
                        $the_link = $row_nav['nav_link'];
                        $custom_links = str_replace('#directory#', $the_link, $custom_url );
                        if($the_link=="works"){
                            $link_title = $row_user_info['custom_work_name'];
                        }
                        else if($the_link=="blogs"){
                            $link_title = $row_user_info['custom_blog_name'];
                        }
                        else if($the_link=="gallery"){
                            $link_title = $row_user_info['custom_gallery_name'];
                        }
                        else if($the_link=="featured-article"){
                            $link_title = $row_user_info['custom_featured_article_name'];
                        }
                        else{
                            $link_title = $row_nav['nav_title'];
                        }
                ?>

                <li class="nav-item px-4">
                    <a style="color:<?php echo $text_color ?>; font-family: <?php echo $row_fonts['font_2'] ?>" class="nav-link active hua" aria-current="page" href="<?php echo $custom_links ?>"><?php echo $link_title ?></a>
                </li>

                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>