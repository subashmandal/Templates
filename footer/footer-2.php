<!--centered footer-->
<?php
$home_url = "https://wooble.org/".$row_user_info['username'];
?>
<!-- Footer -->
<footer id="footer_pos" class="text-center text-lg-start">
    <hr style="color: <?php echo $text_color?>;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4" style="background-color: <?php echo $bg_color?>;">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span style="color: <?php echo $text_color ?>">Get connected with me on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
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
                    <button class="btn btn-floating me-2" style="border:0.4px solid <?php echo $text_color ?>;">
                        <a href="<?php echo $link1?>" target="_blank" >
                            <i class="fab fa-<?php echo $first ?> fa-lg" style="color: <?php echo $text_color ?>;"></i>
                        </a>
                    </button>

            <?php }?>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <hr style="color: <?php echo $text_color?>;">
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: <?php echo $bg_color; ?>; color: <?php echo $row_user_info['tertiary_color'] ?>;">
        © Copyright by <a style="color: <?php echo $row_user_info['tertiary_color'] ?>" href="<?php echo $home_url ?>"><?php echo $row_user_info['field_1'] ?></a> | Designed Using Wooble <?php echo date("Y"); ?>.
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->