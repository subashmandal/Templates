<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light shadow-0">
    <div class="container-fluid">
        <a class="navbar-brand navbar-expand-lg me-2" href="../<?php echo $username ?>">
            <div class="text-uppercase fs-1 fw-bold my_font primary_color"><?php echo $row_user_info['field_1'] ?></div>
        </a>

        <?php
        $users_email_id = $row_user_info['email'];
        $query_count_photos = "SELECT * FROM `gallery_db` WHERE `email_id`='$users_email_id';";
        $query_count_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$users_email_id'";
        $query_count_resume = "SELECT * FROM `resume` WHERE `email`='$users_email_id'";
        $res_photos = mysqli_query($link, $query_count_photos);
        $res_blogs = mysqli_query($link, $query_count_blogs);
        $res_resume = mysqli_query($link, $query_count_resume);
        $count_photos = mysqli_num_rows($res_photos);
        $count_blogs = mysqli_num_rows($res_blogs);
        $count_resume = mysqli_num_rows($res_resume);
        ?>
        <button
                style="color:<?php $primary_color ?>!important"
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample"
                aria-controls="navbarRightAlignExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars primary_color"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda;"
                       href="../about/<?php echo $username ?>">ABOUT</a>
                </li>
                <?php
                if ($count_resume > 0) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda;"
                           href="../resume/<?php echo $username ?>">RESUME</a>
                    </li>
                <?php } ?>
                <?php
                if ($count_photos > 0) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda;"
                           href="../gallery/<?php echo $username ?>">GALLERY</a>
                    </li>
                <?php } ?>
                <?php
                if ($count_blogs != 0) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda; "
                           href="../blogs/<?php echo $username ?>">BLOGS</a>
                    </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
</nav>


<div class="container-fluid">
<div class="d-flex pt-2" style="width: 100%; border-top: 1px solid <?php echo $secondary_color ?>">
    <div align="left" class="my_font cols flex-fill secondary_color"><?php echo $row_user_info['field_2'] ?></div>
    <div class="cols flex-fill" align="right">
        <?php
        $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$users_email_id'";
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
            <a target="_blank" class="m-2" style="display: inline" href="<?php echo $link1 ?>">
                <i class="fab fa-<?php echo $first ?> secondary_color"></i>
            </a>
        <?php } ?>
    </div>
</div>
</div>