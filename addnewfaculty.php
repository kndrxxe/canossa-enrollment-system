<?php
session_start();

date_default_timezone_set('Asia/Manila');

if (empty($_POST['firstName']) || empty($_POST['middleName']) || empty($_POST['lastName'])) {
  header('Location: addfaculty.php');
} else {

  $firstName = $_POST['firstName'];
  $middleName = $_POST['middleName'];
  $lastName = $_POST['lastName'];
  $position = $_POST['position'];
  $track = $_POST['track'];
  $type = $_POST['type'];

  include 'conn.php';
  mysqli_query($conn, "INSERT INTO faculty(firstName, middleName, lastName, position, track, type)VALUES('$firstName', '$middleName', '$lastName', '$position', '$track', '$type')") or die('Query Error');

  $_SESSION['successaddfaculty'] = "Faculty added Successfully";
  header('Location: settings.php');
}
?>