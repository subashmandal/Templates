<?php
include 'inc/dbconnection.php';
$username = $_GET['id'];
$sql = "SELECT * FROM user_details WHERE email='$username'";
$result = mysqli_fetch_assoc(mysqli_query($link, $sql));
$name = $result['field_1'];
$mobile_no = $result['mobile'];
$image = 'https://wooble.org/app/home/images/'.$result['compressed_image'].'.png';
$company_name = $result['field_2'];
$email = $username;

$username_sort = $result['username'];
// define here all the variable like $name,$image,$company_name & all other
header('Content-Type: text/x-vcard');
header('Content-Disposition: inline; filename= "' . $name . '.vcf"');

if ($image != "") {
    $getPhoto = file_get_contents($image);
    $b64vcard = base64_encode($getPhoto);
    $b64mline = chunk_split($b64vcard, 74, "\n");
    $b64final = preg_replace('/(.+)/', ' $1', $b64mline);
    $photo = $b64final;
}
$vCard = "BEGIN:VCARD\r\n";
$vCard .= "VERSION:3.0\r\n";
$vCard .= "FN:" . $name . "\r\n";
$vCard .= "TITLE:" . $company_name . "\r\n";
$vCard .= "URL:https://wooble.org/".$username_sort. "\r\n";
$vCard .= "NOTE:".$result['field_3']."\r\n";
$vCard .= "LINK:".$result['field_3']."\r\n";

if ($email) {
    $vCard .= "EMAIL;TYPE=internet,pref:" . $email . "\r\n";
}
if ($getPhoto) {
    $vCard .= "PHOTO;ENCODING=b;TYPE=JPEG:";
    $vCard .= $photo . "\r\n";
}

if ($mobile_no) {
    $vCard .= "TEL;TYPE=work,voice:" . $mobile_no . "\r\n";
}


$vCard .= "END:VCARD\r\n";
echo $vCard;

