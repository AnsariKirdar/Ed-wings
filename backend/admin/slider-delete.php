<?php
if (!isset($_GET['s_id'])) {
  header('Location: ./slider-control.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['s_id'];
  $id = hex2bin($id);
  echo$id;
  include '../../dbh/conn.php';
  $sql = "SELECT `file` FROM `slider`WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
  $file = $row['file'];
  unlink('./../../img/banner/' . $file . '');
  $sql = "DELETE FROM `slider` WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./slider-control.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./slider-control.php?msg=Great this Slider is Deleted and No More Live on Website&&msg_class=success');
  }
}
