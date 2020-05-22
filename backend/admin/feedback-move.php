<?php
if (!isset($_GET['q'])) {
  header('Location: ./index.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  $id = $_GET['q'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "UPDATE `customer_feedback` SET `viewed`= '1'  WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./index.php?msg=We encountered an error with the Moveing Data please try again&&msg_class=danger');
  } else {
    header('Location: ./index.php?msg=Great this Feedback is Move to Feedback Page under Customer Relationship&&msg_class=success');
  }
}
