<?php
session_start();
include_once "config.php";

$method = $_SERVER['REQUEST_METHOD'];

if ($method === "POST" || isset($_POST['signup-btn'])) {

    $user_uid = uniqid(" ");
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if inputs is Empty
    if (empty($user_uid) || empty($username) || empty($email) || empty($password)) {
        echo "Please Fill up all Fields";
        exit;
    }

    // Check if email is already exist
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Failed";
        exit;
    } else {

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_fetch_assoc($result)) {
            echo "Email is Already exist";
            exit;
        }
    }


    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is not valid";
        exit;
    }


    // Check if password is less than 8 characters
    if (strlen($password) <= 8) {
        echo "Password must be At least 8 characters";
        exit;
    }


    // Insert User to Database
    $sql = "INSERT INTO users (user_uid, username, email, password) VALUES (? ,? ,? ,?)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Failed";
        exit;
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $user_uid, $username, $email, $hashedPassword);
        mysqli_stmt_execute($stmt);

        $results = mysqli_stmt_get_result($stmt);

        if (mysqli_fetch_assoc($result)) {
            echo "Registered Successfully";
        }
    }
}