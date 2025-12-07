<?php
session_start();

include 'conn.php';
if (isset($_POST['updateuser'])) {
    $id = $_POST['update_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($id)) {
        $query = "UPDATE admin SET name='$name', username='$username', password='$password' WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['updatesuccess'] = "Updated Successfully";
            header('Location: manageaccount.php');
        } else {
            $_SESSION['updateerror'] = "Update Failed";
            header('Location: manageaccount.php');
        }
    }
}
