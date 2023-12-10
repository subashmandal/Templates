<?php
include '../inc/dbconnection.php';
$dir= "../../" ;

$username = $_GET['id'];
$query_user_info = "SELECT * FROM `user_details` WHERE `username`='$username'";
$res_user_info = mysqli_query($link, $query_user_info);
$row_user_info = mysqli_fetch_assoc($res_user_info);
$full_name = $row_user_info['field_1'];
//$profile_pic = $row_user_info['profile_pic'];
$theme = $row_user_info['theme'];
$theme = strtolower($theme);
$email_id = $row_user_info['email'];
$primary_color = $row_user_info['primary_color'];
$secondary_color = $row_user_info['secondary_color'];
$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);

$query_resume = "SELECT * FROM `resume` WHERE `email`='$email_id' AND `status`='1'";
$res_resume = mysqli_query($link, $query_resume);
$row_resume = mysqli_fetch_assoc($res_resume);
$blog_content = $row_resume['content'];
$last_updated = $row_resume['last_updated'];
$date_created = $row_resume['creation_date'];
$pdf_files = $row_resume['content'];
$pdf_files = urlencode($pdf_files);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $full_name; //echo $profile_pic; ?>-s Resume | Wooble</title>
    <!-- Wooble icon -->
    <link rel="icon" href="https://app.wooble.org/home/upload/<?php echo rawurlencode($profile_pic); ?>" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">

<style>
    .primary_color{
    color: <?php echo $row_user_info['primary_color']?>!important;
    }
    .secondary_color {
        color: <?php echo $row_user_info['secondary_color']?> !important;
    }
    .my_font{
        font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
    }
    </style>
    <link rel="stylesheet" href="../css/mdb.min.css" />
</head>

<div id="loader" class="text-center" style="min-height: 100vh; display: block; margin-top:30vh">
    <center><lottie-player src="https://assets8.lottiefiles.com/packages/lf20_FhjUyiCFgJ.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player></center>
    <div class="text-center"><center><p style="font-family: Ubuntu; color: white" >Document Loader!</p></center></div>
</div>


<body id="main_content" style="<?php echo $row_user_info['background'] ?>">
<?php include '../inc/header_'.$theme.'.php'; ?>


<div class="d-flex p-2" style="min-height: 120vh;">

    <div class="align-content-center justify-content-center" style="background-color: transparent">
        <center>
        <?php
        if($row_resume['file_type']!='1'){
            echo '<div class="fr-view p-2">'.$row_resume['content'].'</div>';
        }
        else{
            ?>
            <embed src="https://app.wooble.org/home/pdf_files/<?php echo $pdf_files ?>" type="application/pdf" width="100%" style="height: 100vh;" />
            <object data=
                    "https://app.wooble.org/home/pdf_files/<?php echo $pdf_files ?>#toolbar=0" style="min-width: 100vw; height: 1020px">
            </object>
                <!--iframe style="min-height:auto; width:auto" src='https://app.wooble.org/home/pdf_files/<?php echo $pdf_files ?>'#toolbar=0></iframe-->

        <?php
        }

        ?>
        </center>
    </div>


</div>


<script type="text/javascript" src="../js/mdb.min.js"></script>

<script type="text/javascript">
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            console.log("Ready");
            document.getElementById('main_content').style.display="block";
            document.getElementById('loader').style.display="none";
        }
    };
</script>

<?php mysqli_close($link) ?>
</body>
</html>
