<?php
if (!isset($_POST['upload_slider'])) {
  header('Location: ./slider-control.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./slider-control.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $id = mysqli_real_escape_string($conn, trim($_POST['s_id']));
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $link = mysqli_real_escape_string($conn, trim($_POST['link']));
    $link_text = mysqli_real_escape_string($conn, trim(ucfirst($_POST['link_text'])));
    $e_by = $_SESSION['user'];
    $filename = $_FILES['slider']['name'];
if ($filename) {
      if ($_FILES['slider']['error']) {
        header('Location: ./slider-control.php?msg=We encountered an error with the file please try again&&msg_class=danger');
      } else {
        $filename = md5(date('Y-m-d H:i:s:u')) . $filename;
        $move = move_uploaded_file($_FILES['slider']['tmp_name'], '../../img/banner/' . $filename);
        if (!$move) {
          header('Location: ./slider-control.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
        } else {
          $sql = "SELECT `file` FROM `slider`WHERE id='$id'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $file = $row['file'];
          unlink('./../../img/banner/' . $file . '');
          $sql = "UPDATE `slider` SET `title`='$title',`description`='$description',`link`='$link',`link_text`='$link_text',`file`='$filename',`e_by`='$e_by' WHERE id='$id'";
          echo $sql;
          $result = mysqli_query($conn, $sql);
          if (!$result) {
            header('Location: ./slider-control.php?msg=We encountered an error with the Updateing Data please try again&&msg_class=danger');
          } else {
            header('Location: ./slider-control.php?msg=Great this New Slider is Upload and Live on Website&&msg_class=success');
          }
        }
      }
}else {
      $sql = "UPDATE `slider` SET `title`='$title',`description`='$description',`link`='$link',`link_text`='$link_text',`e_by`='$e_by' WHERE id='$id'";
      echo $sql;
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        header('Location: ./slider-control.php?msg=We encountered an error with the Updateing Data please try again&&msg_class=danger');
      } else {
        header('Location: ./slider-control.php?msg=Great this New Slider is Upload and Live on Website&&msg_class=success');
      }
}

    
  }
}
