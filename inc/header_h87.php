<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light shadow-4" style="overflow: hidden">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" >
            <a href="../<?php echo $username ?>" style="font-size: 25px; font-weight: bold" class="nav-link  text-muted" href="#"><i style="color: #eb8806; padding: 5px" class="fas fa-circle"></i> <?php echo $row_user_info['field_1'] ?></a>
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


        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i style="color: darkgray" class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!--                    <a class="nav-link" href="#"><i style="color: #eb8806; padding: 5px" class="fas fa-circle"></i> --><?php //echo $row_user_info['field_1'] ?><!--</a>-->
                </li>
            </ul>
            <!-- Left links -->

            <div class="d-flex align-items-center ">
                <?php
                if($count_resume>0){
                ?>
                <a href="../resume/<?php echo $username ?>"><button style="font-size: 18px" type="button" class="btn btn-link px-3 me-2  text-muted">
                        Resume
                    </button></a>
                <?php } ?>
                <?php
                if($count_photos>0){
                ?>
                <a href="../gallery/<?php echo $username ?>"><button style="font-size: 18px" type="button" class="btn btn-link px-3 me-2  text-muted">
                        Gallery
                    </button></a>
                <?php } ?>
                <?php
                if($count_blogs>0){
                ?>
                <a href="../blogs/<?php echo $username ?>"><button style="font-size: 18px" type="button" class="btn btn-link px-3 me-2  text-muted">
                        Blogs
                    </button></a>
                <?php } ?>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->