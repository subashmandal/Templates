<?php
    include '../inc/dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Designs | Portfolio Builder</title>
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../plugins/css/all.min.css" />
    <link rel="stylesheet" href="../css/modules/animate.min.css" />
    <link rel="icon" href="https://wooble.org/img/wooble_icon.png" type="image/x-icon"/>


    <style>
        .zoom{
            transition: transform 1s ease-in-out;
        }
        .zoom:hover {
            cursor: pointer;
            transition: transform 1s ease-in;
            transform: scale(1.04); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
</head>

<body style="background-color:whitesmoke">

<header class="bg-light shadow" style="position:sticky; top:0; z-index: 100;" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="pulse" data-mdb-animation-start="onLoad">
    <nav class="navbar navbar-expand-lg navbar-light shadow-0 container">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../">
                <img src="https://wooble.org/img/wooble logo 1.svg" alt="Wooble Logo" class="src w-25" loading="lazy">
                <small class="fs-1 fw-bold ls-wide" style="font-family: 'Ubuntu', sans-serif; color:#002366;">Wooble</small>
            </a>
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
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-family: 'Ubuntu', sans-serif;">
                    <!--                    <li class="nav-item text-center">-->
                    <!--                        <a class="nav-link fs-5 ls-wide text-black" href="../examples">Examples</a>-->
                    <!--                    </li>-->
                    <li class="nav-item text-center">
                        <a class="nav-link fs-5 ls-wide text-black" href="../features">Features</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link fs-5 ls-wide text-black" href="../wooble-blogs">Blogs</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link fs-5 ls-wide text-black" href="https://app.wooble.org">Sign In</a>
                    </li>
                    <!--                    <li class="nav-item text-center">-->
                    <!--                        <a class="nav-link fs-5 ls-wide text-black" href="https://app.wooble.org"><button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-ripple-color="#002366" style="color: #002366;">View demo</button></a>-->
                    <!--                    </li>-->
                    <li class="nav-item text-center">
                        <a class="nav-link" href="https://app.wooble.org/"><button type="button" class="btn btn-rounded text-white" style="background-color: #002366;">get started</button></a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
        </div>
    </nav>
</header>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-4">
            <div>
                <h3 style="font-family:Ubuntu">Profession</h3>
                <br>
                <a href="index.php" type="button" class="btn <?php if(!isset($_GET['prof'])){ echo 'btn-primary';} else{ echo 'btn-outline-primary';} ?>  btn-rounded m-1" data-mdb-ripple-color="dark">All</a>
                <?php
                    $selected_profession = $_GET['prof'];
                    $i=0;
                    $professions[] = array();
                    $query_list_profession = "SELECT * FROM `design_list`";
                    $res_list_profession = mysqli_query($link, $query_list_profession);

                    while($row_list_profession = mysqli_fetch_assoc($res_list_profession)){
                        $professions[$i++]= $row_list_profession['profession'];
                        $professions[$i++]= $row_list_profession['profession2'];
                        $professions[$i++]= $row_list_profession['profession3'];
                        $professions[$i++]= $row_list_profession['profession4'];
                        $professions[$i++]= $row_list_profession['profession5'];
                    }
                    $professions = array_unique($professions);

                    for($j=0; $j<$i;$j++){?>
                        <?php if($professions[$j]!=''){?>
                            <a href="?prof=<?php echo $professions[$j] ?>" type="button" class="btn <?php if($selected_profession==$professions[$j]){ echo 'btn-primary';} else{ echo 'btn-outline-primary';} ?>  btn-rounded m-1" data-mdb-ripple-color="dark"><?php echo $professions[$j]; ?></a>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                    if(isset($_GET['prof'])){
                        $query_design_list = "SELECT * FROM `design_list` WHERE `profession`='$selected_profession' OR `profession2`='$selected_profession' OR `profession3`='$selected_profession' OR `profession4`='$selected_profession' OR `profession5`='$selected_profession' ORDER BY RAND()";
                        //echo $query_design_list;
                    }
                    else{
                        $query_design_list = "SELECT * FROM `design_list` ORDER BY RAND()";
                    }
                    $res_design_list = mysqli_query($link, $query_design_list);
                    while($row_design_list = mysqli_fetch_assoc($res_design_list)){
                ?>
<!--                        <a href="#" type="button" data-mdb-toggle="modal" data-mdb-target="#viewDesignModal">-->

                        <a onclick="show_preview_modal('<?php echo $row_design_list["sample_username"] ?>');">
                <div class="col zoom">
                    <div class="card">
                        <img src="https://wooble.org/portfolio-designs/design_samples/<?php echo $row_design_list['design_file'] ?>" class="card-img-top" alt="<?php echo $row_design_list['design_name'] ?>" Design Template for <?php echo $row_design_list['profession'] ?> | <?php echo $row_design_list['profession2'] ?> | <?php echo $row_design_list['profession3'] ?> | <?php echo $row_design_list['profession4'] ?> | <?php echo $row_design_list['profession5'] ?> />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_design_list['design_name'] ?></h5>
                            <span class="badge rounded-pill badge-primary"><?php echo $row_design_list['profession'] ?></span>  &nbsp; <span class="badge rounded-pill badge-secondary"><?php echo $row_design_list['profession2'] ?></span>
                            <span class="badge rounded-pill badge-primary"><?php echo $row_design_list['profession3'] ?></span>  &nbsp; <span class="badge rounded-pill badge-secondary"><?php echo $row_design_list['profession4'] ?></span>
                            <span class="badge rounded-pill badge-primary"><?php echo $row_design_list['profession5'] ?></span>


                            <p class="card-text">
                                <?php echo $row_design_list['description'] ?>
                            </p>

                        </div>
                    </div>
                </div>
                            </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal top fade" id="viewDesignModal" tabindex="-1" aria-labelledby="viewDesignModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewDesignModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height:70vh">
                <iframe id="pv_iframe" src="https://wooble.org/jack" width="100%" height="100%">

                </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript" src="../plugins/js/all.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript">
    function show_preview_modal(a){
        preview_iframe = document.getElementById('pv_iframe');
        preview_iframe.src = 'https://wooble.org/'+a;
        console.log(a);

        const myModal = new mdb.Modal(document.getElementById('viewDesignModal'));
        myModal.show();


    }
</script>


    </body>
</html>
