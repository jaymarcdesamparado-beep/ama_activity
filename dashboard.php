<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    $username = $_SESSION["username"];
    echo "Welcome to dashboard $username";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>