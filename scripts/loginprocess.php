<?php
session_start();

$email=($_POST['email']);
$password=($_POST['password']);



if (empty($email) || empty($password)) {
    header("Location: ../public/login.php?error=empty");
    exit;
}










if ($email === "test@gmail.com" && $password === "123456") {

    $_SESSION["user"] = [
        "nom" => "test",
        "role" => "student"
    ];

    header("Location: ../public/dashbord.php");
    exit;

} else {
    header("Location: ../public/login.php?error=1");
    exit;
}