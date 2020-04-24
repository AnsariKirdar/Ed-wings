<?php
if (!isset($_POST['test_upload'])) {
  header('Location: ./testimonial.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./testimonial.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $add_by = $_SESSION['user'];
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $from = mysqli_real_escape_string($conn, trim($_POST['from']));
    $trip_to = mysqli_real_escape_string($conn, trim($_POST['trip_to']));
    $testimonials = mysqli_real_escape_string($conn, trim($_POST['testimonials']));

    $profile_img_n = $_FILES['profile']['name'];
    $profile_img_n = explode('.', $profile_img_n);
    $profile_img_n_c = count($profile_img_n);
    $profile_img_n_c = $profile_img_n_c - 1;
    $profile_img_n = 'a.' . $profile_img_n[$profile_img_n_c];
    $profile_img_n = md5(date('dmy-hmi')) . $profile_img_n;
    $profile_img_e = $_FILES['profile']['error'];
    $profile_img_t = $_FILES['profile']['tmp_name'];
    if ($profile_img_e > 0) {
      header('Location: ./testimonial.php?msg=we encountered Errors with File pls Try again&&msg_class=danger');
    } else {
      $move1 = move_uploaded_file($profile_img_t, '../../img/testimonial/' . $profile_img_n);
      $sql = "INSERT INTO `testimonials`(`name`, `from_city`, `trip_to`, `testimonial`, `file`) VALUES ('$name','$from','$trip_to','$testimonials','$profile_img_n')";
      $result =mysqli_query($conn,$sql);
      if (!$result) {
        header('Location: ./testimonial.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
      } else {
        header('Location: ./testimonial.php?msg=Great this Testimonial is Upload and Live on Website&&msg_class=success');
      }
    }
    
  }
  
}?>