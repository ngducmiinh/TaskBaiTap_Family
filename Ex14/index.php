<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <?php if (!isset($_SESSION['loggedin'])): ?>
        <p>You are not logged in. Please <a href="login.php">login</a> to download files.</p>
        <ul>
            <li><a href="#" onclick="alert('You must be logged in to download files.'); return false;">Download Image 1</a></li>
            <li><a href="#" onclick="alert('You must be logged in to download files.'); return false;">Download Image 2</a></li>
            <li><a href="#" onclick="alert('You must be logged in to download files.'); return false;">Download Image 3</a></li>
        </ul>
    <?php else: ?>
        <p>Welcome, you are logged in. <a href="logout.php">Logout</a></p>
        <ul>
            <li><a href="download.php?file=image1.jpg">Download Image 1</a></li>
            <li><a href="download.php?file=image2.jpg">Download Image 2</a></li>
            <li><a href="download.php?file=image3.jpg">Download Image 3</a></li>
        </ul>
    <?php endif; ?>
</body>
</html>