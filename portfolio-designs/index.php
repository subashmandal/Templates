<!DOCTYPE html>
<html lang="en">
<?php include '../inc/dbconnection.php'; ?>

<head>
    <title>Wooble: About us - Know who we are and what we do at Wooble </title>
    <meta name="description"
          content="Your life's works powered by our life's work. We provide a platform where you can build your own Digital Portfolio and share it via small customized link. Register now to know more">
    <link rel="stylesheet" href="../plugins/css/multi-carousel.min.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="https://wooble.org/img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://wooble.org/img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://wooble.org/img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://wooble.org/img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://wooble.org/img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://wooble.org/img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://wooble.org/img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://wooble.org/img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://wooble.org/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://wooble.org/img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://wooble.org/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://wooble.org/img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://wooble.org/img/icon/favicon-16x16.png">
    <!--    <link rel="manifest" href="https://wooble.org/img/icon/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228873711-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-228873711-1');
    </script>
</head>

<!--Modal: modalYT-->

<!--Modal: modalYT-->
<html lang="en">

<body>
<?php include '../inc/header_landing_page_inner.php' ?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $query_designs = "SELECT * FROM `design_list`";
        $res_designs = mysqli_query($link, $query_designs);
        while($row_designs = mysqli_fetch_assoc($res_designs)){
            $sample_username = $row_designs['sample_username'];
            $entry_id = $row_designs['entry_id'];
            ?>
            <a onmouseout="hide_mask('<?php echo $entry_id ?>')" onmouseover="show_mask('<?php echo $entry_id ?>')" target="_blank" href="https://wooble.org/<?php echo $sample_username ?>">
                <div  class="col">
                    <div class="card shadow-0">
                        <img src="design_samples/<?php echo $row_designs['design_file'] ?>" class="card-img-top rounded-2 shadow-4" alt="Hollywood Sign on The Hill"/>
                        <div id="mask_temp<?php echo $entry_id ?>" class="mask rounded-1" style="background-color: rgba(0, 0, 0, 0.6); display: none">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <p class="text-white mb-0"> <i class="fas fa-external-link-alt"></i> <u>Open Live Portfolio</u></p>
                            </div>
                        </div>
                        <div class="card-body p-1">
                            <h5 class="card-title text-muted"><?php echo $row_designs['design_name'] ?></h5>
                            <p class="card-text text-muted">
                                <?php echo $row_designs['description'] ?>
                            </p>
                        </div>

                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>

<?php include '../inc/footer_landing_page_inner.php'; ?>
</body>
<!-- End your project here-->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript" src="../plugins/js/multi-carousel.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    function show_video(title, link) {
        document.getElementById('modal_video_title').innerText = title,
            document.getElementById('my_video_iframe').src = link;
        const myModalEl = document.getElementById('modal_for_tutorial_video')
        const modal = new mdb.Modal(myModalEl)
        modal.show()
    }

    function show_mask(a){
        document.getElementById('mask_temp'+a).style.display="block";
    }

    function hide_mask(a){
        document.getElementById('mask_temp'+a).style.display="none";
    }
</script>