<nav class="navbar navbar-expand-lg navbar-light shadow-0">
    <div class="container-fluid">
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
        <div class="collapse navbar-collapse justify-content-center mt-2" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav mb-1 mb-lg-0">

<!--                <li class="nav-item p-2">-->
<!--                    <a class="nav-link fw-bolder my_font secondary_color"-->
<!--                       href="../--><?php //echo $username ?><!--">--><?php //echo strtoupper($row_user_info['field_1']); ?><!--</a>-->
<!--                </li>-->
                <?php
                if ($count_resume > 0) {
                    ?>
                    <li class="nav-item p-2">
                        <a class="nav-link fw-bolder my_font"
                           href="../resume/<?php echo $username ?>">DOWNLOAD CV</a>
                    </li>
                <?php } ?>
                <?php
                if ($count_photos > 0) {
                    ?>
                    <li class="nav-item p-2">
                        <a class="nav-link fw-bolder my_font"
                           href="../gallery/<?php echo $username ?>">GALLERY</a>
                    </li>
                <?php } ?>
                <?php
                if ($count_blogs != 0) {
                    ?>
                    <li class="nav-item p-2">
                        <a class="nav-link fw-bolder my_font"
                           href="../blogs/<?php echo $username ?>">BLOGS</a>
                    </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
</nav>