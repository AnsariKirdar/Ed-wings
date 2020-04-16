<?php
if (!isset($_POST['add_location'])) {
  header('Location: ./location.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./location.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $continents = mysqli_real_escape_string($conn, trim($_POST['name']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $c_by = $_SESSION['user'];
    $sql = "SELECT * FROM `continent` where `continents` = '$continents'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
      header('Location: ./location.php?msg=Sorry This name is already There in Database No Changes Made&&msg_class=danger');
    } else {
      $sql = "INSERT INTO `continent`(`continents`, `description`, `c_by`) VALUES ('$continents', '$description', '$c_by')";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        header('Location: ./location.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
      } else {
        header('Location: ./location.php?msg=Great this Continent is Upload and Live on Website&&msg_class=success');
      }
    }
    
  }
}
