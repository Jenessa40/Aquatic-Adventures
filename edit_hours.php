<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Store Hours</title>
</head>
<body>
    <h2>Edit Hours of Operation</h2>

    <form action="save_hours.php" method="POST">
        <label>Wednesday:</label>
        <input type="text" name="wed" placeholder="11:00 AM - 5:00 PM"><br>

        <label>Thursday:</label>
        <input type="text" name="thu"><br>

        <label>Friday:</label>
        <input type="text" name="fri"><br>

        <label>Saturday:</label>
        <input type="text" name="sat"><br>

        <label>Sunday:</label>
        <input type="text" name="sun"><br>

        <label>Monday:</label>
        <input type="text" name="mon"><br>

        <label>Tuesday:</label>
        <input type="text" name="tue"><br>

        <button type="submit">Save Hours</button>
    </form>
</body>
</html>
