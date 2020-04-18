<?php
if (!isset($_GET['s_id'])) {
  header('Location: ./gallery.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['s_id'];
  $id = hex2bin($id);
  echo$id;
  include '../../dbh/conn.php';
  $sql = "SELECT `thumb`,`full_img` FROM `gallery` WHERE id='$id'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
  $file1 = trim($row['thumb']);
  $file2 = trim($row['full_img']);
  unlink('./../../img/gallery/thumb/' . $file1 . '');
  unlink('./../../img/gallery/full_img/' . $file2 . '');
  $sql = "DELETE FROM `gallery` WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./gallery.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./gallery.php?msg=Great this Gallery is Deleted and No More Live on Website&&msg_class=success');
  }
}
