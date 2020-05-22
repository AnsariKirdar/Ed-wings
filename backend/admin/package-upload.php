<?php
if (!isset($_POST['add_packages'])) {
  header('Location: ./package.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./package.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $package = mysqli_real_escape_string($conn, trim($_POST['name']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));

    $filename = $_FILES['file']['name'];
    $file_ext1 = explode('.', $filename);
    $file_ext_count1 = count($file_ext1);
    $cnt1 = $file_ext_count1 - 1;
    $filename = 'a.' . $file_ext1[$cnt1];
    $filename = md5(date('dmy-hmi')) . $filename;
    
    if ($_FILES['file']['error']) {
      header('Location: ./package.php?msg=We encountered an error with the file please try again&&msg_class=danger');
    } else {
      $filename = md5(date('Y-m-d H:i:s:u')) . $filename;
      $move = move_uploaded_file($_FILES['file']['tmp_name'], '../../img/packages/' . $filename);
      if ($move) {
        $c_by = $_SESSION['user'];
        $sql = "SELECT * FROM `packages` where `packages` = '$package'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
          header('Location: ./package.php?msg=Sorry This name is already There in Database No Changes Made&&msg_class=danger');
        } else {
          $sql = "INSERT INTO `packages`(`packages`, `file`, `description`, `c_by`) VALUES ('$package','$filename','$description', '$c_by')";
          $result = mysqli_query($conn, $sql);
          if (!$result) {
            header('Location: ./package.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
          } else {
            header('Location: ./package.php?msg=Great this Continent is Upload and Live on Website&&msg_class=success');
          }
        }
      } else {
        header('Location: ./package.php?msg=Sorry File has Some Error &&msg_class=danger');
      }
    }
  }
}
