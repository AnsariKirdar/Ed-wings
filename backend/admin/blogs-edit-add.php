<?php
if (!isset($_POST['update_blogs'])) {
  header('Location: ./blogs.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  if (!$conn) {
    header('Location: ./blogs.php?msg=Sorry looks that code has a broken piece pls contact the developer&&msg_class=danger');
  } else {
    session_start();
    $blogsId = mysqli_real_escape_string($conn, trim(hex2bin($_POST['blogsId'])));
    $title = mysqli_real_escape_string($conn, trim($_POST['title']));
    $sub_title = mysqli_real_escape_string($conn, trim($_POST['sub_title']));
    $content = mysqli_real_escape_string($conn, trim($_POST['content']));
    $filename = $_FILES['file']['name'];
    if ($filename) {
      $file_ext1 = explode('.', $filename);
      $file_ext_count1 = count($file_ext1);
      $cnt1 = $file_ext_count1 - 1;
      $filename = 'a.' . $file_ext1[$cnt1];
      $filename = md5(date('dmy-hmi')) . $filename;
      $move = move_uploaded_file($_FILES['file']['tmp_name'], '../../img/blogs/' . $filename);
      if (!$move) {
        header('Location: ./blogs.php?msg=We encountered an error with the uploading image please try again&&msg_class=danger');
      } else {
        $sql = "SELECT `file` FROM `blogs`WHERE id=$blogsId";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $file = $row['file'];
        unlink('./../../img/blogs/' . $file . '');
        $sql = "UPDATE `blogs` SET `title`='$title',`sub_title`='$sub_title',`content`='$content' , `file` = '$filename' WHERE id=  $blogsId";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          header('Location: ./blogs.php?msg=We encountered an error with the Updateing Data please try again&&msg_class=danger');
        } else {
          header('Location: ./blogs.php?msg=Great this New Blogs is Updated and Live on Website&&msg_class=success');
        }      
      }
    } else {
     $sql = "UPDATE `blogs` SET `title`='$title',`sub_title`='$sub_title',`content`='$content' WHERE id=  $blogsId";
     echo $sql;
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        header('Location: ./blogs.php?msg=We encountered an error with the Updateing Data please try again&&msg_class=danger');
      } else {
        header('Location: ./blogs.php?msg=Great this New Blogs is Updated and Live on Website&&msg_class=success');
      }
    }
    
  }
  
}

echo '<pre>';
print_r($_POST);
Print_r($_FILES);
echo '</pre>';