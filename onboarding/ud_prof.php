<?php
//include '../inc/dbconnection.php';
$reg_time = date('Y-m-d h:i:sa');
echo "Reached ajax";
echo $_POST['email_id'];
if(isset($_POST['email_id'])) {
    $user_id = $_POST['users__id'];
    $profession = $_POST['profession'];
    $query_set_profession = "UPDATE `user_details` SET `field_2`='$profession', `reg_time`='$reg_time' WHERE `entry_id`='$user_id'";
    echo $query_set_profession;
    $res_set_profession = mysqli_query($link, $query_set_profession);
    $row_set_profession = mysqli_fetch_assoc($res_set_profession);
}
else{
    echo "Mandatory Parameters not available";
}