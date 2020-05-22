<?php
if (!isset($_GET['q'])) {
  header('Location: ./index.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['q'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "DELETE FROM `customer_feedback` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./index.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./index.php?msg=Great this Feedback is Permanently Deleted and No More Live on Website&&msg_class=success');
  }
}
