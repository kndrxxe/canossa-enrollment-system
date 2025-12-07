<?php
session_start();

session_destroy();
header('Location: superadmin-login.php');
?>