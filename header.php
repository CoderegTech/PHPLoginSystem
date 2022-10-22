<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" defer></script>
    <script src="js/app.js" defer></script>
    <script src="js/script.js" defer></script>

    <title>Login System</title>

</head>

<body>
    <!-- Warning alert -->
    <div class="alert hide">
        <p class="alert-msg"></p>
        <span id="alert-close"><i class="fa-solid fa-xmark"></i></span>
    </div>