<?php
if (!isset($_POST['upload_itinerary'])) {
  header('Location: ./location.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./location.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $add_by = $_SESSION['user'];
    $continent = mysqli_real_escape_string($conn, trim($_POST['continent']));
    $country = mysqli_real_escape_string($conn, trim($_POST['country']));
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $days_place_name = $_POST['days_place_name'];
    $days_place_name = implode($days_place_name,'-----');
    $days_place_decs = $_POST['days_place_decs'];
    $days_place_decs = implode($days_place_decs,'-----');
    $included = $_POST['included'];
    $included = implode($included,'-----');

    $price = mysqli_real_escape_string($conn, trim($_POST['price']));
    $accommodation = mysqli_real_escape_string($conn, trim($_POST['accommodation']));
    $meals = mysqli_real_escape_string($conn, trim($_POST['meals']));
    $transportation = mysqli_real_escape_string($conn, trim($_POST['transportation']));
    $visa = mysqli_real_escape_string($conn, trim($_POST['visa']));
    $tags = mysqli_real_escape_string($conn, trim($_POST['tags']));
    $travel_type = mysqli_real_escape_string($conn, trim($_POST['travel_type']));
    $activity_level = mysqli_real_escape_string($conn, trim($_POST['activity_level']));
    $group_size_min = mysqli_real_escape_string($conn, trim($_POST['group_size_min']));
    $group_size_max = mysqli_real_escape_string($conn, trim($_POST['group_size_max']));
    $group_size_avg = mysqli_real_escape_string($conn, trim($_POST['group_size_avg']));
    $card_img_n = $_FILES['card_img']['name'];
    $card_img_n = explode('.', $card_img_n);
    $card_img_n_c = count($card_img_n);
    $card_img_n_c = $card_img_n_c - 1;
    $card_img_n = 'a.' . $card_img_n[$card_img_n_c];
    $card_img_n = md5(date('dmy-hmi')) . $card_img_n;
    $card_img_e = $_FILES['card_img']['error'];
    $card_img_t = $_FILES['card_img']['tmp_name'];

    $header_img_n = $_FILES['header']['name'];
    $header_img_n = explode('.', $header_img_n);
    $header_img_n_c = count($header_img_n);
    $header_img_n_c = $header_img_n_c - 1;
    $header_img_n = 'a.' . $header_img_n[$header_img_n_c];
    $header_img_n = md5(date('dmy-hmi')) . $header_img_n;
    $header_img_e = $_FILES['header']['error'];
    $header_img_t = $_FILES['header']['tmp_name'];

    $sql = "
INSERT INTO `itinerary`(`title`,
 `description`,
 `days_place_name`,
 `days_place_decs`,
 `card_img`,
 `header_img`,
 `accommodation`,
 `meals`,
 `transportation`,
 `visa`,
 `included`,
 `activity_level`,
 `group_size_min`,
 `group_size_max`,
 `group_size_avg`,
 `travel_type`,
 `tags`,
 `add_by`,
 `continents`,
 `country`,
 `price`
 ) 
VALUES (
  '$title',
'$description',
'$days_place_name',
'$days_place_decs',
'$card_img_n',
'$header_img_n',
'$accommodation',
'$meals',
'$transportation',
'$visa',
'$included',
'$activity_level',
'$group_size_min',
'$group_size_max',
'$group_size_avg',
'$travel_type',
'$tags',
'$add_by',
'$continent',
'$country',
'$price'
)";
// echo $sql;
// die();
 if ($card_img_t > 0 || $header_img_t > 0) {
      header('Location: ./location.php?msg=we encountered Errors with File pls Try again&&msg_class=danger');
  } else {
      $move1 = move_uploaded_file($header_img_t, '../../img/Itinerary/header/' . $header_img_n);
      $move2 = move_uploaded_file($card_img_t, '../../img/Itinerary/' . $card_img_n);
      if (!$move1 && !$move2) {
        header('Location: ./location.php?msg=we encountered Errors with Moving Files to Server pls Try again&&msg_class=danger');
      } else {
        $result  = mysqli_query($conn,$sql);
        if (!$result) {
          header('Location: ./location.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
        } else {
          header('Location: ./location.php?msg=Great this Itinerary is Upload and Live on Website&&msg_class=success');
        }
      }
      
 }
 
  }
}

// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
// echo '</pre>';
