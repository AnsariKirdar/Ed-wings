<?php
if (!isset($_GET['bid'])) {
  header('Location: ./blogs.php?msg=Error Pls try again&&msg_class=danger&&c=view');
} else {
  $id = $_GET['bid'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "SELECT * FROM `blogs` WHERE  `id`=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $file = $row['file'];
  unlink('./../../img/blogs/' . $file . '');
  $sql = "DELETE FROM `blogs` WHERE `id`='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./blogs.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger&&c=view');
  } else {
    header('Location: ./blogs.php?msg=Great this Blog is Deleted and No More Live on Website&&msg_class=success&&c=view');
  }
}
