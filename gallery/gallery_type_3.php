<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <style>
        .my_font{
            font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
        }
        .module {
            background: <?php echo $secondary_color ?>;
            position: relative;
            border: 5px solid <?php echo $primary_color ?>;
            margin: 20px;
            border-radius: 40px;
        }
        .primary_color{
            color: <?php echo $row_user_info['primary_color']?>!important;
        }
        .secondary_color{
            color: <?php echo $row_user_info['secondary_color']?>!important;
        }
    </style>

    <link
            rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../plugins/css/all.min.css" />
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script type="text/javascript" src="../plugins/js/all.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script type="text/javascript" src="../plugins/js/all.min.js"></script>


    <script type="text/javascript">
        function img_desc(img, caption, desc){
            console.log("Check_desc");
            document.getElementById('showcase_thumbnail').src = img;
            document.getElementById('showcase_caption').innerHTML = caption;
            document.getElementById('showcase_description').innerHTML = desc;
            const myModalEl = document.getElementById('image_caption_description_modal');
            const modal = new mdb.Modal(myModalEl);
            modal.show();
        }
    </script>

    <style>
        .primary_color{
            color: <?php echo $row_user_info['primary_color']?>!important;
        }
        .secondary_color{
            color: <?php echo $row_user_info['secondary_color']?>!important;
        }
    </style>

</head>
<?php include '../inc/header_'.$theme.'.php'; ?>
<br>
<div class="container" style="min-height: 100vh">
<div class="modal fade right" id="image_caption_description_modal" tabindex="-1" aria-labelledby="exampleSideModal1" aria-hidden="true">
    <div class="modal-dialog modal-side modal-top-right">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showcase_caption"></h5>
                <button type="button" class="btn-close btn-close-white" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img id="showcase_thumbnail" width="200px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p id="showcase_description"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="lightbox">
        <div class="row justify-content-center ">

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
        ?>

            <div class="m-4 text-center animation fade-in-up" style="width: 320px; height: 300px; margin-bottom: 40px!important;">
                <p align="right" class="text-white mb-0">
                    <a onclick="img_desc('<?php echo $row_gallery['thumbnail']?>', '<?php echo $title_processed?>', '<?php echo $description_processed ?>')" style="margin-right: -20px;" role="button">
                        <i style="color: darkgrey" class="fas fa-info-circle"></i>
                    </a>

                </p>
                <img
                    class="rounded-4 text-center shadow-4-strong shadow_my"
                    src="<?php echo $row_gallery['thumbnail']?>"
                    alt="<?php echo $row_gallery['title']?>"
                    data-mdb-img="imageView.php?id=<?php echo $row_gallery['file_id'];?>"
                    style="object-fit: cover; width: 320px; height: 300px; border: 0px solid black; padding: 0px; border-bottom-left-radius: 0px!important; border-bottom-right-radius: 0px!important;">
                <p style="width: 320px; border-top-left-radius: 0px; border-top-right-radius: 0px" class="text-black mb-4 overflow-hidden card"><?php echo $row_gallery["title"]; ?>
                </p>

            </div>


        <?php $count++; }
        if($count==0){ ?>
            <div class="container">
                <div class="justify-content-center align-content-center" style="height: 80vh; vertical-align: middle">
                    <br><br><br><br><br>
                    <center><img src="no_gallery.png" width="300px" height="200px" style="vertical-align: middle"></center>
                    <br>
                    <button class="btn btn-primary">Request to add Images</button>
                </div>

            </div>
       <?php }
        ?>

    </div>
    </div>
</div>