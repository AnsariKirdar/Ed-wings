<?php
if (!isset($_GET['bid'])) {
  // header('Location: ./e-brochure.php?msg=Error Pls try again&&msg_class=danger&&c=view');
} else {
  $id = $_GET['bid'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "SELECT * FROM `brochure` WHERE  `id`=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $file = $row['file'];
  $image_File = $row['image_File'];
  unlink('./../../img/brochure/' . $file . '');
  unlink('./../../img/brochure/covers/' . $image_File . '');
  $sql = "DELETE FROM `brochure` WHERE `id`='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./e-brochure.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger&&c=view');
  } else {
    header('Location: ./e-brochure.php?msg=Great this Brochure is Deleted and No More Live on Website&&msg_class=success&&c=view');
  }
}
