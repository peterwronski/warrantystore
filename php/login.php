<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 6:48 PM
 */
session_start();
session_unset();
require_once 'db.php';




if (isset($_SESSION['userSession'])&&(($_SESSION['userSession']) != "")) {
    header("Location: landing.php");
}

if (isset($_POST['login-btn'])) {
    if (empty($_POST['email'])) {// this checks if email field is empty
        $_SESSION['loginmessage'] = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span>Email field cannot be empty </div>";
        header("Location: index.php");
    }
    if (empty($_POST['password'])) {//this checks if password field is empty
        $_SESSION['loginmessage'] = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> Password field cannot be empty </div>";
        header("Location: index.php");


    }

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $query = $conn->query("SELECT username, email, password FROM user WHERE email='$email'");
    $row=$query->fetch_array();

    $count = $query->num_rows; // if email/password are correct returns must be 1 row

    if (password_verify($password, $row['password']) && $count==1) {
        $_SESSION['userSession'] = $row['username'];
        header("Location: landing.php");
    } else {

        $_SESSION['loginmessage'] = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
        header("Location: index.php");
    }
    $conn->close();
}