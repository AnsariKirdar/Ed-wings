<?php
if (!isset($_POST['cust_sign_up'])) {
  header('Location: ./../login.php?s=signup&&msg=Error 404 Please Try again&&msg_class=danger');
} else {
  include './conn.php';
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['pass1']));
  $type = "customer";
  $otp = date('shi');
  $sql = "SELECT * FROM `login` WHERE `email` = '$email' ";
  $result = mysqli_query($conn, $sql);
  $rowcount = mysqli_num_rows($result);
  $v = bin2hex($email);

  if ($rowcount > 0) {
    header('Location: ./../index.php?msg=We find the same User in the Ed-wings Database Pls try to login or try with different email&&msg_class=danger');
  } else {
    $sql = "SELECT * FROM `user_unverified` WHERE `email` = '$email' ";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0) {
      $to = $email;
      $subject = "HTML email";
      $message = "
      <!doctype html><html lang='en'><head><title>Title</title><style>.bg-danger {background-color: red !important;}.text-white {color: #fff;}.font-italic {font-style: italic;}.font-weight-bold {font-weight: bold;}.h5 {font-size: x-large;font-family: Monospace;padding-left: 30px;padding-right: 30px;}.text-muted {color: #666;}.jumbotron {padding-left: 30px;padding-right: 30px;padding-top: 10px;padding-bottom: 10px;border-radius: 10px;}.container {padding: 20px;}.contact {padding: 10px;padding-left: 30px;padding-right: 30px;font-size: large;border-radius: 10px;}</style></head><body><div class='container'><div class='jumbotron bg-danger'><h1 class='text-white display-3 font-italic font-weight-bold'><img src='http://ed-wings.com/asset/img/logo.png' height='40px' alt='' srcset=''> Ed-wings Email verification</h1></div><p class='h5 text-muted'>Dear $name, <br><br><br> Thank you for showing interest in Ed-wings.com. Please click on this <a href='http://crystalocean.co.in/Ed-wings/activateuser.php?c=$otp&m=123%40mail.com&t=ef'>emailverification link</a> to proceed with your account verification.Or use this OTP $otp<br><br> Please do not share the link with anyone else.<br><br><br> Regards,<br> Team Ed-wings</p><div class='bg-danger contact px-4 py-2 text-white font-weight-bold'>Contact info</div></div></body></html>
      ";
      $headers = '';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     // More headers
     $headers .= 'From: <noreply@ed-wings.com>' . "\r\n";
      $headers .= 'Cc: myboss@example.com' . "\r\n";
      $mail = mail($to, $subject, $message, $headers);
      if ($mail) {
        header('Location: ./sign_verify.php?msg=User Verification is pending&&msg_class=primary&&v='.$v);
      } else {
        header('Location: ./login..php?Error We find the same the user name in unverified User base Pls Chaeck Email for OTP and verification link&&msg_class=danger');
      }

    } else {

      $to = $email;
      $subject = "HTML email";
      $message = "
      <!doctype html><html lang='en'><head><title>Title</title><style>.bg-danger {background-color: red !important;}.text-white {color: #fff;}.font-italic {font-style: italic;}.font-weight-bold {font-weight: bold;}.h5 {font-size: x-large;font-family: Monospace;padding-left: 30px;padding-right: 30px;}.text-muted {color: #666;}.jumbotron {padding-left: 30px;padding-right: 30px;padding-top: 10px;padding-bottom: 10px;border-radius: 10px;}.container {padding: 20px;}.contact {padding: 10px;padding-left: 30px;padding-right: 30px;font-size: large;border-radius: 10px;}</style></head><body><div class='container'><div class='jumbotron bg-danger'><h1 class='text-white display-3 font-italic font-weight-bold'><img src='http://ed-wings.com/asset/img/logo.png' height='40px' alt='' srcset=''> Ed-wings Email verification</h1></div><p class='h5 text-muted'>Dear $name, <br><br><br> Thank you for showing interest in Ed-wings.com. Please click on this <a href='http://crystalocean.co.in/Ed-wings/activateuser.php?c=$otp&m=123%40mail.com&t=e'>emailverification link</a> to proceed with your account verification.Or use this OTP $otp<br><br> Please do not share the link with anyone else.<br><br><br> Regards,<br> Team Ed-wings</p><div class='bg-danger contact px-4 py-2 text-white font-weight-bold'>Contact info</div></div></body></html>
      ";
      $headers = '';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      // More headers
      $headers .= 'From: <noreply@ed-wings.com>' . "\r\n";
      $headers .= 'Cc: myboss@example.com' . "\r\n";
      $mail = mail($to, $subject, $message, $headers);
      if ($mail) {

        $sql = "INSERT INTO `user_unverified`(`name`, `username`, `password`, `email`, `otp`, `type`) VALUES ('$name', '$email', '$pass', '$email', '$otp', '$type')";
        $result = mysqli_query($conn, $sql);
       
        if ($result) {
          header('Location: ./sign_verify.php?v='.$v);
        } else {
          header('Location: ./../login.php?msg=Sorry For Innocency Your Signup request cannot been process pls Try Again in some Time&& msg_class=danger&&msg_head=Sorry for innocency');
        }

      } else {
        header('Location: ./../login.php?msg=Sorry For Innocency Your Signup request cannot been process pls Try Again in some Time&& msg_class=danger&&msg_head=Sorry for innocency');
      }
    }
  }
}
