<nav class="navbar navbar-expand-lg navbar-light shadow-0">
    <!-- Container wrapper -->
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
        <!--   Name     -->
        <div class="row ms-3 text-start">
            <div class="fs-2 primary_color" >
                <span>/</span>
                <a class="fw-bolder my_font primary_color"
                   href="../<?php echo $username ?>"><?php echo strtoupper($row_user_info['field_1']); ?></a>
            </div>
            <div class="fs-5 primary_color">
                <span>/</span>
                <a class="fw-normal text-lowercase primary_color"
                   href="../<?php echo $username ?>"><?php echo strtoupper($row_user_info['field_2']); ?></a>
            </div>
        </div>
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
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <?php
                if ($count_resume > 0) {
                    ?>
                    <li class="nav-item p-2 justify-content-end">
                        <a class="nav-link fw-normal my_font primary_color hov_h30"
                           href="../resume/<?php echo $username ?>">About</a>
                    </li>
                <?php } ?>
                <?php
                if ($count_photos > 0) {
                    ?>
                    <li class="nav-item p-2">
                        <a class="nav-link fw-normal my_font primary_color hov_h30"
                           href="../gallery/<?php echo $username ?>">Gallery</a>
                    </li>
                <?php } ?>
                <?php
                if ($count_blogs != 0) {
                    ?>
                    <li class="nav-item p-2">
                        <a class="nav-link fw-normal my_font primary_color hov_h30"
                           href="../blogs/<?php echo $username ?>">Blog</a>
                    </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>