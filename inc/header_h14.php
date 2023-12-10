<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand navbar-expand-lg me-2" href="../<?php echo $username ?>">
            <div class="text-uppercase fs-1 fw-bold my_font primary_color" style="color: #b0ffda;"><?php echo substr($row_user_info['field_1'],0,1) ?></div>
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
            style="color:<?php $primary_color?>!important"
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
                if($count_resume>0){
                ?>
                <li class="nav-item">
                    <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda;" href="../resume/<?php echo $username ?>">Resume</a>
                </li>
                <?php } ?>
                <?php
                if($count_photos>0){
                ?>
                <li class="nav-item">
                    <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda;" href="../gallery/<?php echo $username ?>">Gallery</a>
                </li>
                <?php } ?>
                <?php
                if($count_blogs!=0){
                ?>
                <li class="nav-item">
                    <a class="nav-link fw-bolder my_font primary_color" style="color: #b0ffda; " href="../blogs/<?php echo $username ?>">Blogs</a>
                </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
</nav>