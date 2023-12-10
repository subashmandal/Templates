<head>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        .button_back {
            width: 60px;
            height: 60px;
            font-family: 'Roboto', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 50px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        .button_back:hover {
            background-color: grey;
            box-shadow: 0px 15px 20px rgba(50, 51, 52);
            color: #fff;
            transform: translateY(-7px);
        }

        .hero{
            width: 100%;
            height: 100vh;
            background: transparent;
            overflow: hidden;
        }
        .hero .carousel{
            width: 300px;
            margin: 100px auto 0;
            overflow: visible;
        }
        .carousel img{
            -webkit-box-reflect: below 20px linear-gradient(rgba(255,255,255,0.1),rgba(255,255,255,0.3));
        }
    </style>
    <link rel="stylesheet" href="flipster/jquery.flipster.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div id="loader" class="text-center" style="height: 100vh; display: block; margin-top:30vh">
    <center><lottie-player src="https://assets5.lottiefiles.com/packages/lf20_viPY2JpSS4.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player></center>
    <div class="text-center"><center><p style="font-family: Ubuntu; color: white" >A picture is worth a thousand words. We are loading the best ones!</p></center></div>
</div>
<body id="main_content" style="display: none">


<div style="position:fixed; top:40px; left:40px">
    <a href="https://wooble.org/<?php echo $username ?>"><button style="margin: 20px" class="button_back"><i class="fa-solid fa-4x fa-caret-left"></i></button></a>
</div>
<div class="hero lazy">
    <div class="carousel lazy">
        <ul>
            <?php
            $count=0;
            $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' AND `thumbnail`!='' ORDER BY `file_created` DESC";
            $res_gallery = mysqli_query($link, $query_gallery);
            while ($row_gallery = mysqli_fetch_assoc($res_gallery)){
            $file_content = $row_gallery['file_content'];
            $title = $row_gallery['title'];
            $thumbnail = $row_gallery['thumbnail'];
            $description = $row_gallery['description'];
            $title_processed = str_replace("'", "&quot;", $title);
            $description_processed = str_replace("'", "&quot;", $description);
            $file_location = 'https://app.wooble.org/gallery/upload/'.$row_gallery['file_name'];
            ?>

            <li>
                <center class="text-muted bg-secondary primary_color" style="font-family: Ubuntu;"><?php echo $row_gallery['title'] ?></center>
                <img
                        data-mdb-lazy-src="<?php echo $thumbnail ?>"
                        src="<?php echo $file_location ?>"
                        onerror="if (this.src != '<?php echo $thumbnail ?>') this.src = '<?php echo $thumbnail ?>';"
                        class="img-fluid"
                        style="width: 500px; height: 500px; object-fit: cover">
<!--                <div align="right">-->
<!--                <a type="button" style="padding:5px; background-color: transparent;color: white"">-->
<!--                    <img width="18px" src="https://wooble.org/img/icon/zoom-in.png">-->
<!--                </a>-->
<!--                </div>-->

            </li>
          <?php } ?>
            <!-- <li><img src="img/IMG_9004-01.jpeg"></li>
            <li><img src="img/template16.jpg"></li> -->
        </ul>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="flipster/jquery.flipster.min.js"></script>
<script>
    $('.carousel').flipster({
        style:'carousel',
        spacing: -0.4,
    });

    function full_screen_preview(){
        console.log("Hello World");
    }

    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            console.log("Ready");
            document.getElementById('main_content').style.display="block";
            document.getElementById('loader').style.display="none";
        }
    };

</script>
</body>