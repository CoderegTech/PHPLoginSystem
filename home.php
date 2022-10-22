<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <a href="includes/logout.inc.php">logout</a>
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>

</body>

</html>