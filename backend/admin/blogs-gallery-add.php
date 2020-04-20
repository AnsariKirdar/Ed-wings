<?php
if (!isset($_POST['add_blog_gallery'])) {
  header('Location: ./blogs.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
 include './../../dbh/conn.php';
 if (!$conn) {
    header('Location: ./blogs.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
 } else {
   session_start();
    $blogsId = mysqli_real_escape_string($conn, trim(hex2bin($_POST['blogsId'])));
    $filename = $_FILES['file']['name'];
    $file_ext1 = explode('.', $filename);
    $file_ext_count1 = count($file_ext1);
    $cnt1 = $file_ext_count1 - 1;
    $filename = 'a.' . $file_ext1[$cnt1];
    $filename = md5(date('dmy-hmi')) . $filename;
    if ($_FILES['file']['error']) {
      header('Location: ./blogs.php?msg=We encountered an error with the file please try again&&msg_class=danger');
    } else {
      $move = move_uploaded_file($_FILES['file']['tmp_name'], '../../img/blogs_gallery/' . $filename);
      if (!$move) {
        header('Location: ./blogs.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
      } else {
        $sql = "INSERT INTO `blogs_gallery`(`blogs_id`, `file`) VALUES ('$blogsId', '$filename')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          header('Location: ./blogs.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
        } else {
          header('Location: ./blogs.php?msg=Great this Slider is Upload and Live on Website&&msg_class=success');
        }
      }
    }
 }
}