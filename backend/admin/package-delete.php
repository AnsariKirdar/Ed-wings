<?php
if (!isset($_GET['id'])) {
  header('Location: ./package.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['id'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "SELECT `file` FROM `packages`WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $file = $row['file'];
  unlink('./../../img/packages/' . $file . '');
  $sql = "DELETE FROM `packages` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./package.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./package.php?msg=Great this Slider is Deleted and No More Live on Website&&msg_class=success');
  }
}
