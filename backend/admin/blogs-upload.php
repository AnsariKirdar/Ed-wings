<?php
if (!isset($_POST['upload_blogs'])) {
  header('Location: ./blogs.php?msg=Error 404 Please try again&&msg_class=danger');
} else {
  echo 'Hiiii';
  print_r($_POST);
  print_r($_FILES);
}