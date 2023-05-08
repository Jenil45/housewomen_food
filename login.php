<?php
$login = false;
$showError = false;
include './database/_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password` = '$password'";
    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            // if (password_verify($password, $row['password'])) {

            //     $login = true;
            //     session_start();
            //     $_SESSION['loggedIn'] = true;
            //     $_SESSION['username'] = $username;
            //     header("location: welcome.php");
            // } 
            if ($password == $row['password']) {

                $login = true;
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['email'] = $email;
                // header("location: welco.php");
            } else {
                $showError = "Invalid credentials..";
            }
        }
    } else {
        $showError = "Invalid credentials..";
    }
}
