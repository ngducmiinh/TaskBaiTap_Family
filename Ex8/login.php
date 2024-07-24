<?php
session_start();

$valid_credentials = [
    'user1' => 'password1',
    'user2' => 'password2'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    if (isset($valid_credentials[$username]) && $valid_credentials[$username] === $password) {
        // Đăng nhập thành công
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        // Đăng nhập thất bại
        echo "Thông tin đăng nhập không chính xác!";
    }
}
?>