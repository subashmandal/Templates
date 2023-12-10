<footer class="container text-center secondary_color my-4 py-2" style="border-top:0px solid <?php echo $secondary_color ?>">
    <div class="row  flex-md-row flex-column-reverse">
    <!-- Copyright -->
    <div class="text-lg-start text-sm-center col-lg-6 secondary_color my_font">
        © <?php echo date("Y") ?> Copyright:
        <span class="primary_color" ><?php echo $row_user_info['field_1']  ?></span>
        <p style="font-size: 12px">Designed using <a style="font-family: Ubuntu" target="_blank" class="secondary_color fw-bold" href="https://wooble.org">Wooble</a></p>
    </div>
    <!-- Copyright -->
    <!-- Social Icons -->
    <div class="justify-content-center col-lg-6 d-flex align-items-center">
            <?php
            $query_link = "SELECT * FROM `user_links` WHERE `email_id`='$userEmailID' LIMIT 5";
            $res_link = mysqli_query($link, $query_link);
            while ($row_link = mysqli_fetch_assoc($res_link)) {
                $link1 = $row_link['link'];
                $brand = $row_link['brand'];
                $url = $link1;
                $parse = parse_url($url);
                $host = $parse['host'];
                $host = str_ireplace('www.', '', $host);
                $short_host = $host;
                $first = strtok($short_host, '.');
                //            echo $first; // home
                ?>
                <div class="cols" align="center">
                    <center>
                        <a target="_blank" class="m-3 primary_color" href="<?php echo $link1 ?>">
                            <i style="font-size: 32px; color: <?php echo $secondary_color ?>"
                               class="fab fa-<?php echo $first ?> secondary_color nav_21"></i>
                        </a>
                    </center>
                </div>
            <?php } ?>
        </div>
    <!-- Social icons -->
    </div>
</footer>