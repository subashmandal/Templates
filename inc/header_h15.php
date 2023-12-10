<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <a class="navbar-brand mt-1 mt-lg-0 p-2" href="#">
            <h2 style="font-family: 'Bungee Spice', cursive; color: gold"><?php echo $row_user_info['field_1'] ?></h2>
        </a>
        <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample"
        >

            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0 navbar-brand">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blogs</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>