<?php

if ($_SESSION['user_uid']) {
  header("location: home.php");
} else {
  header("location: login.php");
}