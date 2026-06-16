<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit();
}

$hours = [
    "wed" => $_POST['wed'],
    "thu" => $_POST['thu'],
    "fri" => $_POST['fri'],
    "sat" => $_POST['sat'],
    "sun" => $_POST['sun'],
    "mon" => $_POST['mon'],
    "tue" => $_POST['tue']
];

file_put_contents("hours.json", json_encode($hours));

header("Location: edit_hours.php?saved=1");
exit();
?>
