<span class="navbar navbar-expand-lg shadow-0">
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
        <div class="row m-3 text-start" style="z-index: 10000">
            <div class="fs-2 position-fixed" >
                <a class="fw-lighter my_font primary_color"
                   href="../<?php echo $username ?>"><?php echo strtoupper($row_user_info['field_1']); ?></a>
            </div>
        </div>
    </div>
    <!-- Container wrapper -->
</span>

<!-- Sidenav -->
<nav id="sidenav-9" class="sidenav sidenav-sm shadow-0 bg-transparent align-items-center d-flex glassism " data-mdb-hidden="false" data-mdb-accordion="true" data-mdb-right="true">

    <ul class="sidenav-menu px-2 pb-5 primary_color">

        <li class="sidenav-item pt-3">
            <span class=" font-monospace">Menu</span>
            <hr class="opacity-50">
            <a class="sidenav-link" href="" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-up" data-mdb-animation-start="manually">
                <i class="fas fa-home fa-fw me-3"></i><span >Home</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="">
                <i class="fas fa-user-circle fa-fw me-3"></i></i><span >About</span></a
            >
        </li>
        <?php
        if ($count_resume > 0) {
        ?>
        <li class="sidenav-item">
            <a class="sidenav-link" href="../resume/<?php echo $username ?>">
                <i class="fas fa-file fa-fw me-3"></i></i><span>Resume</span></a
            >
        </li>
        <?php } ?>
        <?php
        if ($count_photos > 0) {
        ?>
        <li class="sidenav-item">
            <a target="_blank" class="sidenav-link" href="../gallery/<?php echo $username ?>">
                <i class="fas fa-briefcase fa-fw me-3"></i><span>Work</span></a
            >
        </li>
        <?php } ?>
        <br><br>
        <li class="sidenav-item pt-3">
            <span class="primary_color font-monospace">Social</span>
            <hr class="primary_color opacity-50">
            <a class="sidenav-link" href="">
                <i class="fab fa-instagram fa-fw me-3"></i><span class="opacity-75">Instagram</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="">
                <i class="fab fa-facebook-f fa-fw me-3"></i></i><span class="opacity-75">Facebook</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="">
                <i class="fab fa-linkedin-in fa-fw me-3"></i></i><span class="opacity-75">Linkedin</span></a
            >
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link" href="">
                <i class="fab fa-twitter fa-fw me-3"></i><span class="opacity-75">Twitter</span></a
            >
        </li>
    </ul>

</nav>
<!-- Sidenav -->

<!-- Side Nav Toggler button code start -->
<button
        data-mdb-toggle="sidenav"
        data-mdb-target="#sidenav-9"
        class="bg-transparent primary_color position-fixed  m-sm-3 "
        style="top: 20px; right: 50px; z-index: 10000; border: 1px solid <?php echo $row_user_info['primary_color']?>; border-radius: 50%; height: 70px; width: 70px;"
        aria-controls="#sidenav-9"
        aria-haspopup="true"
>
    <i class="fas fa-bars my-4 mx-3 fa-lg primary_color"></i>
</button>
<!-- Side Nav Toggler button code start -->