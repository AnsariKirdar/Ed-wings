<?php

if(!isset($_POST['upload_slider'])){
  header('Location: ./slider-control.php?msg=Error 404 Please try again&&msg_class=danger');
}else{
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./slider-control.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $link = mysqli_real_escape_string($conn, trim($_POST['link']));
    $link_text = mysqli_real_escape_string($conn, trim(ucfirst($_POST['link_text'])));
    $c_by = $_SESSION['user'];
    $filename = $_FILES['slider']['name'];
    $file_ext1 = explode('.', $filename);
    $file_ext_count1 = count($file_ext1);
    $cnt1 = $file_ext_count1 - 1;
    $filename = 'a.' . $file_ext1[$cnt1];

    if ($_FILES['slider']['error']) {
      header('Location: ./slider-control.php?msg=We encountered an error with the file please try again&&msg_class=danger');
    } else {
      $filename = md5(date('Y-m-d H:i:s:u')).$filename;
      $move = move_uploaded_file($_FILES['slider']['tmp_name'],'../../img/banner/'.$filename);
      if (!$move) {
        header('Location: ./slider-control.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
      } else {
        $sql = "INSERT INTO `slider`(`title`, `description`, `link`, `file`,`c_by`,`link_text`) VALUES ('$title', '$description', '$link', '$filename','$c_by','$link_text')";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
          header('Location: ./slider-control.php?msg=We encountered an error with the uploading Data please try again&&msg_class=danger');
        } else {
          header('Location: ./slider-control.php?msg=Great this Slider is Upload and Live on Website&&msg_class=success');
        }
       
      }
      
    }
    
  }
  
}
