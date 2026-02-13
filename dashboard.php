<?php
session_start();
$username = $_SESSION["username"];
echo "Welcome to dashboard $username";
?>