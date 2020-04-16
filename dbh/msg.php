<?php

if(isset($_GET['msg'])){
$msg = $_GET['msg'];
$msg_class = strtolower($_GET['msg_class']);
echo '
<div class="alert alert-'.$msg_class.' alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <strong>'.ucwords($msg).'.</strong>
  </div>
';
}