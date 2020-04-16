<?php
if (!isset($_GET['q'])) {
  header('Location: ./location.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['q'];
  $id = hex2bin($id);
  echo $id;
  include '../../dbh/conn.php';
  $sql = "DELETE FROM `continent` WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./location.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./location.php?msg=Great this Continent is Deleted and No More Live on Website&&msg_class=success');
  }
}
