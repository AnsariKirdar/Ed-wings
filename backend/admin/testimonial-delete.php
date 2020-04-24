<?php
if (!isset($_GET['q'])) {
  // header('Location: ./testimonial.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['q'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "SELECT `file` FROM `testimonials`WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $file = $row['file'];
  unlink('./../../img/testimonial/' . $file . '');
  $sql = "DELETE FROM `testimonials` WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./testimonial.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./testimonial.php?msg=Great this s is Deleted and No More Live on Website&&msg_class=success');
  }
}
