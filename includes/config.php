<?php

$hostname = "localhost";
$username = "root";
$passwd = "";
$dbname = "loginSystem";

$conn = mysqli_connect($hostname, $username, $passwd, $dbname);

if (mysqli_connect_errno()) {
    echo "Connection Failed";
    exit();
}