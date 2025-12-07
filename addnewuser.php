<?php
session_start();

if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password'])) {
  header('Location: addfaculty.php');
} else {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];


  include 'conn.php';
    mysqli_query($conn, "INSERT INTO admin(name, username, password)VALUES('$name', '$username', '$password')") or die('Query Error');

  $_SESSION['successadduser'] = "User added Successfully";
  header('Location: manageaccount.php');
}
?>