<?php
require "functions.php";
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username= '$username' AND password = '$password'");
    if (mysqli_num_rows($query) !== 0) {
        $get = mysqli_fetch_array($query);
        $level = $get['level'];
        $_SESSION['login'] = $username;
        if ($level == "admin") {
            echo "<script type='text/javascript'>alert('Hello $level'); location.href=\"home.php\";</script>";
        } elseif ($level == "user") {
            echo "<script type='text/javascript'>alert('Hello $level'); location.href=\"user/user.php\";</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('username atau password salah !'); location.href=\"login.php\"; </script>";
    }
}
?>