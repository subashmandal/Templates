<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | <?php echo $row_user_info['field_1'] ?></title>
    <style>
        body
        {
            background-color:rgb(135, 74, 74)
        }
        .wrap
        {
            margin:50px auto 0 auto;
            width:100%;
            display:flex;
            align-items:space-around;
            max-width:1200px;
        }
        .tile
        {
            width:380px;
            height:380px;
            margin:10px;
            background-color:#99aeff;
            display:inline-block;
            background-size:cover;
            position:relative;
            cursor:pointer;
            transition: all 0.4s ease-out;
            box-shadow: 0px 35px 77px -17px rgba(175, 173, 173, 0.44);
            overflow:hidden;
            color:white;
            font-family:'Roboto';
        }
        .tile img
        {
            height:100%;
            width:100%;
            position:absolute;
            top:0;
            left:0;
            z-index:0;
            transition: all 0.4s ease-out;
        }
        .tile .text
        {
            /*   z-index:99; */
            position:absolute;
            padding:30px;
            height:calc(100% - 60px);
        }
        .tile h1
        {
            font-weight:300;
            margin:0;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        .tile h2
        {
            font-weight:100;
            margin:20px 0 0 0;
            font-style:italic;
            transform: translateX(200px);
        }
        .tile p
        {
            font-weight:300;
            margin:20px 0 0 0;
            line-height: 25px;
            /*   opacity:0; */
            transform: translateX(-200px);
            transition-delay: 0.2s;
        }
        .animate-text
        {
            opacity:0;
            transition: all 0.6s ease-in-out;
        }
        .tile:hover
        {
            /*   background-color:#99aeff; */
            box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.64);
            transform:scale(1.05);
        }
        .tile:hover img
        {
            opacity: 0.2;
        }
        .tile:hover .animate-text
        {
            transform:translateX(0);
            opacity:1;
        }
        .dots
        {
            position:absolute;
            bottom:20px;
            right:30px;
            margin: 0 auto;
            width:30px;
            height:30px;
            color:currentColor;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:space-around;
        }
        .dots span
        {
            width: 5px;
            height:5px;
            background-color: currentColor;
            border-radius: 50%;
            display:block;
            opacity:0;
            transition: transform 0.4s ease-out, opacity 0.5s ease;
            transform: translateY(30px);
        }
        .tile:hover span
        {
            opacity:1;
            transform:translateY(0px);
        }
        .dots span:nth-child(1)
        {
            transition-delay: 0.05s;
        }
        .dots span:nth-child(2)
        {
            transition-delay: 0.1s;
        }
        .dots span:nth-child(3)
        {
            transition-delay: 0.15s;
        }
        @media (max-width: 1000px) {
            .wrap {
                flex-direction: column;
                width:400px;
            }
        }
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
        #rotate{
            vertical-align:top;
            transform:rotate(7deg);
            -ms-transform:rotate(90deg); /* IE 9 */
            -moz-transform:rotate(90deg); /* Firefox */
            -webkit-transform:rotate(90deg); /* Safari and Chrome */
            -o-transform:rotate(90deg); /* Opera */}

        #vert{
            height: auto;
            min-width: auto;
        }

        button,
        input{
            display: inline-flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-self: center;

            cursor:pointer;
            height:50px;
            min-width: 100px;
            position:relative;

            border: 1px solid #333;
            border-radius: 5px;
            padding: 0 10px;

            font-size: 20px;
        }

        input:hover{box-shadow:0px 0px 4px #fff;}
        input:active{top:1px;}

        body{background-color:#222;}

        .button-container {
            display: grid;
            grid-gap: 40px;
            grid-template-columns: repeat(3,1fr);
            justify-items: center;
            width: 400px;
            padding: 40px 0;
            margin: 0 auto;
        }

        .button_back:hover {
            background-color: grey;
            box-shadow: 0px 15px 20px rgba(50, 51, 52);
            color: #fff;
            transform: translateY(-7px);
        }
    </style>
    <link rel="stylesheet" href="http://wooble.org/css/mdb.min.css"/>
    <link rel="stylesheet" href="http://wooble.org/plugins/css/multi-carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
    $font_combo_id = $row_user_info['font_id'];
    $query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
    $res_fonts = mysqli_query($link, $query_fonts);
    $row_fonts = mysqli_fetch_assoc($res_fonts);
    echo $row_fonts['font_1_link'];
    echo $row_fonts['font_2_link'];
    ?>
</head>
<body style="background-color:<?php echo $background ?>">


<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<br>
<center>
    <div style="min-height: 80vh;">


        <?php
        $count=0;
        $query_gallery = "SELECT * FROM `gallery_db` WHERE `email_id`='$userEmailID' ORDER BY `position` ASC, `file_created` DESC";
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


            <div class="tile">
                <img src='<?php echo $file_location ?>' style="object-fit: cover">
                <div class="text">
                    <h2 class="animate-text"><?php echo $title ?></h2>
                    <p class="animate-text"><?php echo $description ?></p>
                    <!--                    <div class="dots">-->
                    <!--                        <span></span>-->
                    <!--                        <span></span>-->
                    <!--                        <span></span>-->
                    <!--                    </div>-->
                </div>
            </div>

        <?php } ?>

    </div>
</center>
</div>
<!--footer section start-->
<div style="overflow-x: hidden!important;">
    <?php
    include '../footer/'.$row_user_info["footer_type"].'.php';
    ?>
</div>
<!--footer section end-->
<script type="text/javascript">

    var vert = 'vertical'.split("").join("<br/>")
    $('#vert').html(vert);

</script>

<script type="text/javascript" src="https://wooble.org/js/mdb.min.js"></script>

</body>
</html>