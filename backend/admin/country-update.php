<?php
print_r($_POST);
if (!isset($_POST['update_country'])) {
  header('Location: ./location.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./location.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $s_id = mysqli_real_escape_string($conn, trim($_POST['s_id']));
    $country = mysqli_real_escape_string($conn, trim($_POST['country']));
    $continents = mysqli_real_escape_string($conn, trim($_POST['continent']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $e_by = $_SESSION['user'];
    $sql = "SELECT * FROM `continent` where `country` = '$country'&& `continent` = '$continents'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)) {
      header('Location: ./location.php?msg=Sorry This name is already There in Database No Changes Made&&msg_class=danger');
    } else {
      $sql = "UPDATE `country` SET `country`='$country',`continents`='$continents',`description`='$description',`e_by`='$e_by' WHERE id='$s_id'";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        header('Location: ./location.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
      } else {
        header('Location: ./location.php?msg=Great this Country is Updated and Live on Website&&msg_class=success');
      }
    }
  }
}
