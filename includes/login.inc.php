<?php
session_start();
include_once "config.php";

$method = $_SERVER['REQUEST_METHOD'];

if ($method === "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if inputs is Empty
    if (empty($email) || empty($password)) {
        echo "Please Fill up all Fields";
        exit;
    }

    // Login User
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Statement Failed";
        exit;
    } else {

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_uid'] = $row['user_uid'];
                $_SESSION['username'] = $row['username'];

                echo "User LoggedIn Successfully";
            } else {
                echo "wrong password";
                exit;
            }
        } else {
            echo "No Account Found!";
        }
    }
}