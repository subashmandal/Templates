<!DOCTYPE html>
<html lang="en">
<?php
include '../inc/dbconnection.php';
include '../inc/header_landing_page_inner.php';
?>
<head>
    <title>Wooble: Potfolios</title>
<!--    <meta name="description" content="If you have any questions, feedbacks or issues, feel free to reach us. We will be happy to help you.">-->
    <link rel="stylesheet" href="../plugins/css/multi-carousel.min.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<!--    Jquery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style>
        .box{
            transition: box-shadow .6s;
            box-shadow: 0 0 3px rgba(55,55,55,.8);
        }
        .box:hover {
            box-shadow: 0 0 20px rgba(55,55,55,.8);
        }


    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Container for demo purpose -->
        <div class="container my-5 py-5">

            <!-- Section: Design Block -->
            <section class="mb-10 text-center text-lg-start">
                <h2 class="fw-bold mb-5 text-center">
                    <u class="text-primary">Portfolios</u>
                </h2>

                <div class="row gx-lg-5">
                    <?php
                        $date_today = date('Y-m-d');
                        $query_portfolios = "SELECT * FROM `user_details` WHERE `expiry_date`>'$date_today'";
                        $res_portfolios = mysqli_query($link, $query_portfolios);
                        while($row_portfolios = mysqli_fetch_assoc($res_portfolios)){

                    ?>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="card mb-3 shadow-2">
                            <div class="card-body">

                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-5" style="width: 100px; height: 100px; object-fit: cover; overflow: hidden">
                                        <img
                                                src="https://app.wooble.org/home/images/<?php echo $row_portfolios['compressed_image'] ?>.png"
                                                alt="Profile Picture of <?php echo $row_portfolios['field_1'] ?>"
                                                class="img-fluid rounded-4 mb-4 mb-lg-0"
                                        />
                                    </div>
                                    <div class="col-lg-7">
                                        <a target="_blank" href="https://wooble.org/<?php echo $row_portfolios['username'] ?>"><h5 class="fw-bold"><?php echo $row_portfolios['field_1'] ?></h5></a>
                                        <p class="text-muted"><?php echo $row_portfolios['field_2'] ?></p>
                                        <ul class="list-unstyled mb-0">
                                            <a href="#!" class="px-1">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                            <a href="#!" class="px-1">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#!" class="px-1">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->
    </div>
</body>




<!-- End your project here-->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript" src="../plugins/js/multi-carousel.min.js"></script>
</body>
</html>