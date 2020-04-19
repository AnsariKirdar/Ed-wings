<?php
if (!isset($_POST['upload_blogs'])) {
  header('Location: ./blogs.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./blogs.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $sub_title = mysqli_real_escape_string($conn, trim($_POST['sub_title']));
    $content = mysqli_real_escape_string($conn, trim($_POST['content']));
    $e_by = $_SESSION['user'];
    $filename = $_FILES['file']['name'];

    if ($_FILES['file']['error']) {
      header('Location: ./blogs.php?msg=we encountered Error with File pls Try again&&msg_class=danger');
    } else {
      $file_ext1 = explode('.', $filename);
      $file_ext_count1 = count($file_ext1);
      $cnt1 = $file_ext_count1 - 1;
      $filename = 'a.' . $file_ext1[$cnt1];
      $filename = md5(date('dmy-hmi')) . $filename;
      $date = date('l d-F-Y');
      echo $filename;
      $move = move_uploaded_file($_FILES['file']['tmp_name'], '../../img/blogs/' . $filename);
      if (!$move) {
        header('Location: ./blogs.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
      } else {
        $sql = "INSERT INTO `blogs`(`title`, `content`, `file`, `likes`, `data`, `sub_title`, `c_by`) VALUES ('$title', '$content', '$filename', 0, '$date', '$sub_title', '$e_by')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          header('Location: ./blogs.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
        } else {
          header('Location: ./blogs.php?msg=Great this Blogs is Upload and Live on Website&&msg_class=success');
        }
      }
    }
  }
}