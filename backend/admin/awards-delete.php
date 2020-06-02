<?php
if (!isset($_GET['id'])) {
  header('Location: ./mis.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['id'];
  include '../../dbh/conn.php';
  $sql = "SELECT `img` FROM `award`WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $file = $row['img'];
  unlink('./../../img/awards/' . $file . '');
  $sql = "DELETE FROM `award` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./mis.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./mis.php?msg=Great this Award is Deleted and No More Live on Website&&msg_class=success');
  }
}