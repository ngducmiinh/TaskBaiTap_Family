<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($username); ?>!</h1>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>