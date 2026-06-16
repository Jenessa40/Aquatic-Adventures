<?php
session_start();

// Hardcoded login for now
$valid_username = "AquaticAdventures24";
$valid_password = "Mamabear1923!!"; // Replace with something strong

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['logged_in'] = true;
    header("Location: edit_hours.php");
    exit();
} else {
    echo "Invalid login.";
}
?>

