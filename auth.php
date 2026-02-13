<?php
session_start();

$students = [
    "jm" => "jm",
    "mariel" => "mariel",
    "jimmy" => "jimmy"
];

$input_username = $_POST["username"];
$input_password = $_POST["password"];

if (empty($input_username) || empty($input_password)) {
    echo "Please provide all the fields";
    return; 
}   

$foundUser = false;

foreach ($students as $username => $password) {
    if ($username === $input_username && $password === $input_password) {
        $foundUser = true;
        $_SESSION["username"] = $input_username;
        header("Location: dashboard.php");
    }
}

if (!$foundUser) {
    header("Location: logout.php");
    return;
}
?>
