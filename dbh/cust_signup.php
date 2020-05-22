<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
if (!isset($_POST['cust_sign_up'])) {
  header('Location: ./../login.php?s=signup&&msg=Error 404 Please Try again&&msg_class=danger');
} else {
  include './conn.php';
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['pass1']));
  $type = "customer";
  $otp = date('shi');
  $sql = "INSERT INTO `user_unverified`(`name`, `username`, `password`, `email`, `otp`, `type`) VALUES ('$name', '$email', '$pass', '$email', '$otp', '$type')";
  $result = mysqli_query($conn, $sql);
  $v = bin2hex($email);
  echo $v;
  if ($result) {
    header('Location: ./sign_verify.php?v='. $v);
  } else {
    header('Location: ./../login.php?msg=Sorry For Innocency Your Signup request cannot been process pls Try Again in some Time&& msg_class=danger&&msg_head=Sorry for innocency');
  }
}

?>