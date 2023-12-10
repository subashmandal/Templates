<?php
$host = "217.21.80.10";
$user = "u502039025_h85";
$pass = "Tp9M!o7Vc?";
$dbname = "u502039025_h85";
$link = @mysqli_connect($host, $user, $pass, $dbname);
if (mysqli_connect_errno()) {
    echo "Some issue, Please try again later";
}