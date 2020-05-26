<?php

    include('../Model/connect.php');
    include('../Model/Human.php');
    if (isset($_SESSION['user_id'])) {
        header("location:../index.php");
    }
    
    if (isset($_POST["submit"])) 
    {
        $login = new Human();
        $returned = $login->Login($_POST['username']);
        
        if($returned == 0) {
            echo "<script> alert('Wrong Username'); window.location.href='../View/Login.php'; </script>";
        }
        else if($returned['usertypeid'] == 1)
        {
            if ($_POST["password"] == $returned["password"])
            {
                $_SESSION['user_id'] = $returned['email'];
                header("Location:../View/ProductHomePage.php");
            }
            else {
                echo "<script> alert('Wrong Password2'); window.location.href='../View/Login.php'; </script>";
            }
        }
        else 
        {
            if ($returned['user_email_status'] == 'verified') 
            {
                if (password_verify($_POST["password"], $returned["password"])) {
                    $_SESSION['user_id'] = $returned['email'];
                } else {
                    echo "<script> alert('Wrong Password'); window.location.href='../View/Login.php'; </script>";
                }
                echo "<script> alert('Login successful'); window.location.href='../View/HomePage.php'; </script>";
            } 
            else {
                echo "<script> alert('Please First Verify, your email address'); window.location.href='../View/Login.php'; </script>";
            }
        }    
    } 
        