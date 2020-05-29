<?php
include_once "../Model/admin.php";
include_once "../Model/User.php";
include_once "../constants/constants.php";
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();
    $result = $user->Login($username, $password);
    if (isset($result['Id']) && isset($result['UserTypeId'])) {
        $id = $result['Id'];
        $type = $result['UserTypeId'];
        $username = $result['UserName'];
        $email = $result['Email'];
        $feedback = $result['Feedback'];
        $isVerified = $result['user_email_status'];
        if ($type == 1) {
            $_SESSION[ADMIN_SESSION] = $id;
            header("Location: ../View/AdminHomePage.php");
        } else {
            if ($isVerified == 'verified') {
                $_SESSION[USER_SESSION] = $id;
                header("Location: ../View/HomePage.php");
                $user->logger(7, $_POST['username']);
            } else {
                echo "<script>
        alert('Login failed, email not verified');
        </script>";
            }
        }
    } else if ($result == 0) {
        echo "<script>
        alert('Login failed, invalid data');
        </script>";
    }
}
