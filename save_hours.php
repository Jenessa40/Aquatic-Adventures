<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit();
}

$hours = [
    "mon" => $_POST['mon'],
    "tue" => $_POST['tue'],
    "wed" => $_POST['wed'],
    "thu" => $_POST['thu'],
    "fri" => $_POST['fri'],
    "sat" => $_POST['sat'],
    "sun" => $_POST['sun']
];

file_put_contents("hours.json", json_encode($hours, JSON_PRETTY_PRINT));

header("Location: edit_hours.php?success=1");
exit();
?>

