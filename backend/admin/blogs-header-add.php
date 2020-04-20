<?php
if (!isset($_POST['upload_File'])) {
  header('Location: ./blog.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if ($conn) {
    header('Location: ./blog.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    $id = mysqli_real_escape_string($conn, trim($_POST['s_id']));
    $filename = $_FILES['file']['name'];
    if ($filename) {
      if ($_FILES['file']['error']) {
        header('Location: ./blog.php?msg=We encountered an error with the file please try again&&msg_class=danger');
      } else {
        $filename1 = trim($_FILES['file']['name']);
        $file_ext1 = explode('.', $filename1);
        $file_ext_count1 = count($file_ext1);
        $cnt1 = $file_ext_count1 - 1;
        $filename1 = 'a.' . $file_ext1[$cnt1];

        if ($_FILES['file']['error']) {
          header('Location: ./blog.php?msg=We encountered an error with the file please try again&&msg_class=danger');
        } else {
          $filename1 = md5(date('Y-m-d H:i:s:u')) . $filename1;
          $move = move_uploaded_file($_FILES['thumb']['tmp_name'], '../../img/blog/header/' . $filename1);
          if (!$move) {
            header('Location: ./blog.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
          } else {
            // $sql = "UPDATE `gallery` (`title`, `thumb`, `full_img`) VALUES ('$title', ' $filename1', ' $filename')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
              header('Location: ./blog.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
            } else {
              header('Location: ./blog.php?msg=Great this Blogs Header Image is Upload and Live on Website&&msg_class=success');
            }
          }
        }
      }
    } else {
      header('Location: ./blogs.php?msg=We encountered an error with the Updateing Data please try again&&msg_class=danger');
         }
  }
  // echo "<pre>";
  // print_r($_POST);
  // print_r($_FILES);
  // echo "</pre>";
}
