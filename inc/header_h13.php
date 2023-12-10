<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-0 bg-secondary bg-opacity-25" style="background-color: rgb(231,233,235)!important;">
    <div class="container">
        <div class="column">
            <div class="row"><a href="../<?php echo $username ?>" class="navbar-brand fw-bold" style="font-family: 'Playfair Display', serif; font-size: 30px">I am <?php echo $row_user_info['field_1'] ?></a></div>
            <div class="row"><a class="navbar-brand fs-6" style="font-family: 'Playfair Display', serif;"><span class="text-black bg-warning bg-opacity-75"><?php echo $row_user_info['field_2'] ?> </span></a></div>
        </div>
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
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 22px; font-family: 'Playfair Display">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://wooble.org/<?php echo $username ?>">Home</a>
                </li>
                <?php
                if($count_resume>0){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../resume/<?php echo $username ?>">Resume</a>
                </li>
                <?php } ?>
                <?php
                    if($count_photos>0){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../gallery/<?php echo $username ?>">Gallery</a>
                </li>
                <?php } ?>
                <?php
                if($count_blogs>0){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../blogs/<?php echo $username ?>">Blogs</a>
                </li>
                <?php } ?>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
</nav>