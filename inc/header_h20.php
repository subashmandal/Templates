<nav class="navbar navbar-expand-lg navbar-light shadow-0">
    <div class="container">
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
        <a class="navbar-brand navbar-expand-lg me-2" href="https://wooble.org/<?php echo $username ?>">
            <div class="fs-4 text-light" style=" font-family: 'Ubuntu', sans-serif;"><?php echo $row_user_info['field_1']?></div>
        </a>
        <button
            style="color:#ff9b0f; position: absolute; right: 0;"
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
                <li class="nav-item">
                    <a class="nav-link active hover-shadow" style="color: #ff9b0f;" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-shadow" style="color: #ff9b0f;" href="#">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-shadow" style="color: #ff9b0f;" href="#">Reel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-shadow" style="color: #ff9b0f;" href="#">Gallery</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
</nav>