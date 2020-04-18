<?php
if (!isset($_POST['upload_slider'])) {
  header('Location: ./gallery.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if ($conn) {
    header('Location: ./gallery.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    $id = mysqli_real_escape_string($conn, trim($_POST['s_id']));
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $e_by = $_SESSION['user'];
    $filename = $_FILES['thumb']['name'];
    if ($filename) {
      if ($_FILES['slider']['error']) {
        header('Location: ./gallery.php?msg=We encountered an error with the file please try again&&msg_class=danger');
      } else {
        $filename1 = trim($_FILES['thumb']['name']);
        $file_ext1 = explode('.', $filename1);
        $file_ext_count1 = count($file_ext1);
        $cnt1 = $file_ext_count1 - 1;
        $filename1 = 'a.' . $file_ext1[$cnt1];

        $filename = trim($_FILES['full_img']['name']);
        $file_ext = explode('.', $filename);
        $file_ext_count = count($file_ext);
        $cnt = $file_ext_count - 1;
        $filename = 'a.' . $file_ext[$cnt];

        if ($_FILES['thumb']['error']) {
          header('Location: ./gallery.php?msg=We encountered an error with the file please try again&&msg_class=danger');
        } elseif ($_FILES['full_img']['error']) {
          header('Location: ./gallery.php?msg=We encountered an error with the file please try again&&msg_class=danger');
        } else {
          $filename1 = md5(date('Y-m-d H:i:s:u')) . $filename1;
          $filename = md5(date('Y-m-d H:i:s:u')) . $filename;
          $move = move_uploaded_file($_FILES['thumb']['tmp_name'], '../../img/gallery/thumb/' . $filename1);
          $move = move_uploaded_file($_FILES['full_img']['tmp_name'], '../../img/gallery/full_img/' . $filename);
          if (!$move) {
            header('Location: ./gallery.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
          } else {
            $sql = "UPDATE `gallery` (`title`, `thumb`, `full_img`) VALUES ('$title', ' $filename1', ' $filename')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
              header('Location: ./gallery.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
            } else {
              header('Location: ./gallery.php?msg=Great this Gallery is Upload and Live on Website&&msg_class=success');
            }
          }
        }
      }
    } else {
      $sql = "UPDATE `gallery` SET `title`='$title' WHERE id='$id'";
      echo $sql;
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        header('Location: ./gallery.php?msg=We encountered an error with the Updateing Data please try again&&msg_class=danger');
      } else {
        header('Location: ./gallery.php?msg=Great this New Slider is Upload and Live on Website&&msg_class=success');
      }
    }
  }
  echo "<pre>";
  print_r($_POST);
  print_r($_FILES);
  echo "</pre>";
}
