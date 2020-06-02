<?php

if (!isset($_POST['add_awards'])) {
  header('Location: ./mis.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./mis.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $date = mysqli_real_escape_string($conn, trim($_POST['date']));
    $c_by = $_SESSION['user'];
    $filename = $_FILES['files']['name'];
    $file_ext1 = explode('.', $filename);
    $file_ext_count1 = count($file_ext1);
    $cnt1 = $file_ext_count1 - 1;
    $filename = 'a.' . $file_ext1[$cnt1];
    $filename = md5(date('dmy-hmi')) . $filename;
    if ($_FILES['files']['error']) {
      header('Location: ./mis.php?msg=We encountered an error with the file please try again&&msg_class=danger');
    } else {
      $filename = md5(date('Y-m-d H:i:s:u')) . $filename;
      $move = move_uploaded_file($_FILES['files']['tmp_name'], '../../img/awards/' . $filename);
      if (!$move) {
        header('Location: ./mis.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
      } else {
        $sql = "INSERT INTO `award` (`name`, `date`, `img`, `inserted_by`, `c_date`) VALUES ( '$name', '$date', '$filename', '$c_by', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          header('Location: ./mis.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
        } else {
          header('Location: ./mis.php?msg=Great this Award is Upload and Live on Website&&msg_class=success');
        }
      }
    }
  }
}