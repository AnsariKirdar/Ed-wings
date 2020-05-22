<?php
if (!isset($_GET['lid'])) {
  header('Location: ./location.php?msg=Error Pls try again&&msg_class=danger&&c=view');
} else {
  $id = $_GET['lid'];
  $id = hex2bin($id);
  include '../../dbh/conn.php';
  $sql = "SELECT * FROM `itinerary` WHERE  `id`=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $card_img = $row['card_img'];
  $header_img = $row['header_img'];
  echo $card_img;
  echo $header_img;
  unlink('./../../img/Itinerary/' . $card_img . '');
  unlink('./../../img/Itinerary/header/' . $header_img . '');
  $sql = "DELETE FROM `itinerary` WHERE `id`='$id'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    header('Location: ./location.php?msg=We encountered an error with the Deleteing Data please try again&&msg_class=danger&&c=view');
  } else {
    header('Location: ./location.php?msg=Great this Itinerary is Deleted and No More Live on Website&&msg_class=success&&c=view');
  }
}
