<?php
if(!isset($_POST['login_submit'])){
header('Location: ../login.php?msg=Error 404 Page Not Found&&msg_class=danger');
}else{
include('./conn.php');
$userName = mysqli_real_escape_string($conn,trim($_POST['username']));
$password = mysqli_real_escape_string($conn,trim(md5($_POST['password'])));
if ($conn) {
$sql = "SELECT * FROM `login` WHERE username = '$userName'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
  $sql = "SELECT * FROM `login` WHERE `password` = '$password'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
    $sql = "SELECT * FROM `login` WHERE  username = '$userName' &&`password` = '$password'";
    
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
session_start();
$_SESSION['user'] = $row['name'];
$_SESSION['type'] = $row['type'];
header('Location: ../backend/admin/index.php?msg=Welcome Back&&msg_class=danger');
}else
{
  die();
header('Location: ../login.php?msg=Sorry We are unable to authentic this Password please Try again&&msg_class=danger');
}
}
}else
{
  die();
header('Location: ../login.php?msg=Sorry We are unable to authentic this User please Try again&&msg_class=danger');
}
}
