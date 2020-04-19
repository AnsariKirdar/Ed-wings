<?php
session_start();
if (!isset($_SESSION['type'])) {
    header('Location: ../../login.php?msg=Sorry to access this you need to be login as adimin&&msg_class=danger');
}