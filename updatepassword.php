<?php
session_start();

include 'conn.php';
if (isset($_POST['updatepass'])) {
    $id = $_POST['update_id'];
    $password = $_POST['password'];
    $last_password_change = date("Y-m-d H:i:s");

    // Get the last password change date from the database
    $user_query = "SELECT last_password_change FROM superadmin WHERE id = '$id'";
    $user_result = mysqli_query($conn, $user_query);
    $user_row = mysqli_fetch_array($user_result);
    $lastPasswordChange = new DateTime($user_row['last_password_change']);
    $now = new DateTime();

    if (!empty($id)) {
        $query = "UPDATE superadmin SET password = '$password', last_password_change = '$last_password_change' WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['updatesuccess'] = "Password Updated Successfully";
            header('Location: changecredentials.php');
        } else {
            $_SESSION['updateerror'] = "Password Update Error";
            header('Location: changecredentials.php');
        }
    }
}
?>