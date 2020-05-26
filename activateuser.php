<?php
if(!isset($_GET['t'])&&!isset($_GET['m'])&&!isset($_GET['c'])){
header('Location: ./index.php?Error 404&msg_class=danger');
}else{
  echo 'yet';
}
?>