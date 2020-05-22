<?php
echo '<pre>';
print_r($_FILES);
print_r($_POST);
echo '</pre>';
if (!isset($_POST['upload_brochure'])) {
  header('Location: ./e-brochure.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  session_start();
  $c_by = $_SESSION['user'];
  $title = mysqli_real_escape_string($conn, trim($_POST['title']));
  $packages = mysqli_real_escape_string($conn, trim($_POST['packages']));

  $brochure_img = $_FILES['brochure_img']['name'];
  $file_ext1 = explode('.', $brochure_img);
  $file_ext_count1 = count($file_ext1);
  $cnt1 = $file_ext_count1 - 1;
  $brochure_img = 'a.' . $file_ext1[$cnt1];
  $brochure_img = md5(date('dmy-hmi')) . $brochure_img;


  $brochure_pdf = $_FILES['brochure_pdf']['name'];
  $file_ext1 = explode('.', $brochure_pdf);
  $file_ext_count1 = count($file_ext1);
  $cnt1 = $file_ext_count1 - 1;
  $brochure_pdf = 'a.' . $file_ext1[$cnt1];
  $brochure_pdf = md5(date('dmy-hmi')) . $brochure_pdf;
  if ($_FILES['brochure_pdf']['error'] && $_FILES['brochure_img']['error']) {
    header('Location: ./e-brochure.php?msg=We encountered an error with the file please try again&&msg_class=danger');
  } else {
    $move = move_uploaded_file($_FILES['brochure_img']['tmp_name'], '../../img/brochure/covers/' . $brochure_img);
    $move1 = move_uploaded_file($_FILES['brochure_pdf']['tmp_name'], '../../img/brochure/' . $brochure_pdf);
    
    if (!$move && !$move1) {
      header('Location: ./e-brochure.php?msg=We encountered an error with the file Moveing to Server please Try Again&&msg_class=danger');
    } else {
      echo 'hi';
    }
    $sql = "INSERT INTO `brochure`(`packages`, `file`, `image_File`, `title`, `c_by`) VALUES ('$packages', '$brochure_pdf', '$brochure_img', '$title', '$c_by')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      header('Location: ./e-brochure.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
    } else {
      header('Location: ./e-brochure.php?msg=Great this Continent is Upload and Live on Website&&msg_class=success');
    }

  }
}
