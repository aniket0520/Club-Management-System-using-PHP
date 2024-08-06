<?php
session_start();

if (isset($_GET['user'])) {
    if ($_GET['user'] == 'admin') {
        header("location: admin/index.php");
    } else if ($_GET['user'] == 'moderator') {
        header("location: moderator/index.php");
    } else if ($_GET['user'] == 'student') {
        // Make sure $_SESSION['username'] is set before using it
        if (isset($_SESSION['username'])) {
            header("location: homepage/?id=" . $_SESSION['username']);
        } else {
            header("location: login.php");
        }
    } else {
        header("location: login.php");
    }
} else {
    // Check if $_SESSION['userType'] is set
    if (isset($_SESSION['userType'])) {
        if ($_SESSION['userType'] == 'admin') {
            header("location: admin/index.php");
        } else if ($_SESSION['userType'] == 'moderator') {
            header("location: moderator/index.php");
        } else if ($_SESSION['userType'] == 'student') {
            // Make sure $_SESSION['username'] is set before using it
            if (isset($_SESSION['username'])) {
                header("location: homepage/?id=" . $_SESSION['username']);
            } else {
                header("location: login.php");
            }
        } else {
            header("location: login.php");
        }
    } else {
        // $_SESSION['userType'] is not set, handle accordingly
        header("location: login.php");
    }
}
?>