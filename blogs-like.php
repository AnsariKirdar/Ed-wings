<?php
$bid = $_GET['bid'];
$bid = hex2bin($bid);
include_once './dbh/conn.php';
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from remote address
else {
  $ip_address = $_SERVER['REMOTE_ADDR'];
}
$ip = $ip_address;
$result = mysqli_query($conn, "SELECT * FROM `blogs` where `id`= $bid");
$row = mysqli_fetch_assoc($result);
$c_like = $row['likes'] + 1;
$likes = mysqli_query($conn, "SELECT * FROM `like_log` where `bid` = $bid && `ip` = '$ip' ");
if (mysqli_num_rows($likes) == 0) {
  mysqli_query($conn, "INSERT INTO `like_log`( `ip`, `bid`) VALUES ('$ip',$bid)");
  mysqli_query($conn, "UPDATE `blogs` SET `likes`=$c_like where `id` =$bid");
  $data =  '<div class="like">You Just like this</div>';
  echo $data;
}
?>