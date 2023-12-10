
<!--footer start-->
<footer id="footer_pos" class="py-lg-5 py-3" style="background-color: <?php echo $text_color ?>;">
    <div class="row flex-sm-row flex-column-reverse">
        <!--    copyright section-->
        <div class="col-lg-6 col-12 text-lg-start text-center px-lg-5 px-2 py-2" style="font-size: 2vh; color: <?php echo $bg_color ?>;">© Copyright <a style="color: <?php echo $bg_color ?>" href="<?php echo $home_url ?>"><?php echo $row_user_info['field_1'] ?></a> | Designed Using Wooble💙 <?php echo date("Y");  ?>.</div>

        <!--    social link section-->
        <div class="col-12 col-lg-6 text-lg-end text-center py-2 px-lg-5 px-2" style="font-size: 2vh;">
            <?php
            $query_links = "SELECT * FROM `user_links` WHERE `email_id`='$userEmailID' ORDER BY `position`";
            $res_links = mysqli_query($link, $query_links);
            while($row_links = mysqli_fetch_assoc($res_links)){
                $link1 = $row_links['link'];
                $brand = $row_links['brand'];
                $url = $link1;
                $parse = parse_url($url);
                $host = $parse['host'];
                $host = str_ireplace('www.', '', $host);
                $short_host = $host;
                $first = strtok($short_host, '.');
                ?>
                <a target="_blank" href="<?php echo $link1; ?>"><i style="color:<?php echo $bg_color ?>" class="fab fa-<?php echo $first ?> fa-lg pe-3"></i></a>
            <?php } ?>
        </div>
    </div>

</footer>
<!--footer end-->