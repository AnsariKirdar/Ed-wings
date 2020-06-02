<?php
if (!isset($_GET['id'])) {
  header('Location: ./mis.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['id'];
  include '../../dbh/conn.php';
  $sql = "SELECT `img` FROM `office`WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $file = $row['img'];
  unlink('./../../img/office/' . $file . '');
  $sql = "DELETE FROM `office` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./mis.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./mis.php?msg=Great this Office is Deleted and No More Live on Website&&msg_class=success');
  }
}