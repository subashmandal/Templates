<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $row_user_info['field_1']; $profile_pic = $row_user_info['profile_pic']; ?> | Wooble</title>
    <!-- MDB icon -->
    <link rel="icon" href="<?php echo $profile_pic ?>" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style>

        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }


        .rounded_link:hover {
            /*background-color: white !important;*/
            animation: cursor_colour_change 1s;
            animation-fill-mode: forwards;
        }

        @keyframes cursor_colour_change {
            from {
                background-color: ;
            }
            to {
                background-color: white;
            }
        }

        .rounded_link {
            width: 120px;
            height: 120px;
            border-radius: 100%;
            padding: 22px;
            align-content: center;
            vertical-align: middle;
            font-family: "Arial Black";
            color: #0d0d0d;
            border: 1px solid black;

        }

        .blur   {
            filter: blur(5px);
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
        }

        .br{
            border: 0px solid black;
    </style>
</head>
<body  onload="name_font_size_check()" style="<?php echo $row_user_info['background'] ?>; background-size: cover; background-repeat: no-repeat; height: 100vh;">
<?php include 'inc/header_'.$theme.'.php'; ?>
<br><br><br><br>
<div class="container br mt-2">
    <div class="d-flex justify-content-center align-items-center">
        <div class="text-center">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5 br">
                    <center><div align="center" style='background-image: url("<?php echo $profile_pic ?>");
                            width: 35vh;
                            height: 35vh;
                            border-radius: 50%;
                            background-repeat: no-repeat;
                            background-size: cover;
                            }'></div></center>
                </div>
                <div class="col-lg-7 br" align="center" style="vertical-align: middle">
                    <center><h3 id="full_name" style="font-family: 'Arial Black'; display: inline; class="font-weight-bold mb-4"><?php echo $row_user_info['field_1'] ?></h3>
                        <!--p style="font-family: 'Arial Black'; font-size: 20px">A bit about me</p-->
                        <h5 class="mt-1 mb-1"><?php echo $row_user_info['field_2'] ?></h5></center>
                    <p class="p-4"><?php echo $row_user_info['field_3'] ?></p></center>
                    <div class="row mt-4">
                        <div class="col-lg-4 col-4">
                            <a href="../resume/<?php echo $username ?>"><div style="background-color: #ff9706" class="rounded_link d-flex flex-center align-items-center justify-content-center">Resume
                                </div></a>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href="../gallery/<?php echo $username ?>"><div style="background-color: #ff3421" class="bg-image rounded_link d-flex flex-center align-items-center justify-content-center">Gallery
                                </div></a>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href="../blogs/<?php echo $username ?>" style="background-color: #76d4d6" class="rounded_link d-flex flex-center align-items-center justify-content-center">Blogs
                            </a>
                        </div>
                    </div>


                    <div class="mt-4">
                        <center>

                            <div class="">
                                <?php
                                if($row_user_info['fb_link']!=""){
                                    echo '<a class="btn btn-primary m-2" target="_blank" style="background-color: #3b5998 !important;" href="'.$row_user_info['fb_link'].'" role="button">
  <i class="fab fa-facebook-f"></i>
</a>';
                                };

                                if($row_user_info['insta_link']!=""){
                                    echo '<a class="btn btn-primary m-2" target="_blank" style="background-color: #ac2bac !important;" href="'.$row_user_info['insta_link'].'" role="button">
  <i class="fab fa-instagram"></i>
</a>';
                                };

                                if($row_user_info['twitter_link']!=""){
                                    echo '<a class="btn btn-primary m-2" target="_blank" style="background-color: #55acee !important;" href="'.$row_user_info['twitter_link'].'" role="button">
  <i class="fab fa-twitter"></i>
</a>';
                                };

                                if($row_user_info['linkedin_link']!=""){
                                    echo '<a class="btn btn-primary m-2" target="_blank" style="background-color: #0082ca !important;" href="'.$row_user_info['linkedin_link'].'" role="button">
  <i class="fab fa-linkedin"></i>
</a>';
                                };

                                if($row_user_info['whatsapp_link']!=""){
                                    echo '<a class="btn btn-primary m-2" target="_blank" style="background-color: #25d366 !important;" href="https://wa.me/91'.$row_user_info['whatsapp_link'].'" role="button">
  <i class="fab fa-whatsapp"></i>
</a>';
                                };

                                ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->

</div>

<script type="text/javascript">
    function name_font_size_check(){
        var full_name_value = document.getElementById('full_name').innerText;
        var full_name = document.getElementById('full_name');
        length = full_name_value.length;
        if(length<15){
            full_name.style.fontSize="50px";
            //console.log('20px');
        }
        else{
            full_name.style.fontSize="35px";
            //console.log('60px');
        }
    }

</script>
</body>
</html>
