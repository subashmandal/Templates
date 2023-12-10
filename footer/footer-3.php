<!--centered footer-->
<?php
$home_url = "https://wooble.org/".$row_user_info['username'];
?>
<footer id="footer_pos" class="text-center" style="color:<?php echo $row_user_info['tertiary_color'] ?>; background-color: <?php echo $bg_color; ?>;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
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
            <!-- Facebook -->
            <a class="btn btn-floating m-1" href="<?php echo $link1?>" target="_blank" role="button" style="border: 0.4px solid <?php echo $text_color?>;"
            ><i class="fab fa-<?php echo $first ?> fa-md" style="color: <?php echo $text_color?>"></i
                ></a>
            <?php } ?>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: <?php echo $bg_color;?>;">
        © Copyright by <a style="color: <?php echo $row_user_info['tertiary_color'] ?>" href="<?php echo $home_url ?>"><?php echo $row_user_info['field_1'] ?></a> | Designed Using Wooble <?php echo date("Y"); ?>.
    </div>
    <!-- Copyright -->
</footer>