<?php
$users_email_id = $row_user_info['email'];
$query_count_photos = "SELECT * FROM `gallery_db` WHERE `email_id`='$users_email_id';";
$query_count_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$users_email_id'";
$query_count_resume = "SELECT * FROM `resume` WHERE `email`='$users_email_id'";
$query_count_articles = "SELECT * FROM `articles_db` WHERE `email_id`='$users_email_id'";
$res_photos = mysqli_query($link, $query_count_photos);
$res_blogs = mysqli_query($link, $query_count_blogs);
$res_resume = mysqli_query($link, $query_count_resume);
$res_articles = mysqli_query($link, $query_count_articles);
$count_photos = mysqli_num_rows($res_photos);
$count_blogs = mysqli_num_rows($res_blogs);
$count_resume = mysqli_num_rows($res_resume);
$count_articles = mysqli_num_rows($res_articles);

?>

<nav class="navbar navbar-expand-lg shadow-0" style="background-color:<?php echo $background_color ?>">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
                style="color: <?php echo $primary_color ?>!important;"
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample"
                aria-controls="navbarRightAlignExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <!--        for desktopp-->
        <div style="background-color:<?php echo $background_color ?>;" class="position-fixed d-none d-md-block">
            <a class="nav-link fw-bolder" style="background-color:<?php echo $background_color ?>; color:<?php echo $tertiary_color ?>; font-family: <?php echo $row_fonts['font_1'] ?> ; "
               href="<?php echo $root_canonical_url ?>"><b><?php echo $row_user_info['field_1']; ?></b></a>
        </div>
        <!--        for mobile-->
        <div style="background-color:<?php echo $background_color ?>;" class="d-block d-md-none">
            <a class="nav-link fw-bolder" style="color:<?php echo $tertiary_color ?>; font-family: <?php echo $row_fonts['font_1'] ?> ; "
               href="<?php echo $root_canonical_url ?>"><?php echo $row_user_info['field_1']; ?></a>
        </div>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <?php
                if ($count_articles > 0) {
                    ?>
                    <li class="nav-item p-2 justify-content-end ">
                        <strong><a class="nav-link fw-normal nav_21" style="color:<?php echo $tertiary_color ?>; font-family: <?php echo $row_fonts['font_1'] ?> ;"
                                   href="<?php echo str_replace('#directory#', 'featured-articles', $custom_url ) ?>">Featured Articles</a></strong>
                    </li>
                <?php } ?>

                <?php
                if ($count_resume > 0) {
                    ?>
                    <li class="nav-item p-2 justify-content-end" style="font-family: <?php echo $row_fonts['font_1'] ?> ;color:<?php echo $tertiary_color ?> ">
                        <strong><a class="nav-link fw-normal nav_21" style="color:<?php echo $tertiary_color ?>"
                           href="<?php echo str_replace('#directory#', 'resume', $custom_url ) ?>">RESUME</a></strong>
                    </li>
                <?php } ?>
                <?php
                if ($count_photos > 0) {
                    ?>
                    <li class="nav-item p-2">
                        <strong><a class="nav-link fw-normal nav_21" style="color:<?php echo $tertiary_color ?>; font-family: <?php echo $row_fonts['font_1'] ?> ;"
                           href="<?php echo str_replace('#directory#', 'gallery', $custom_url ) ?>">Gallery</a></strong>
                    </li>
                <?php } ?>
                <?php
                if ($count_blogs != 0) {
                    ?>
                    <li class="nav-item p-2">
                        <strong><a class="nav-link fw-normal nav_21" style="color:<?php echo $tertiary_color ?>; font-family: <?php echo $row_fonts['font_1'] ?> ;"
                           href="<?php echo str_replace('#directory#', 'blogs', $custom_url ) ?>">Blogs</a></strong>
                    </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<br><br>