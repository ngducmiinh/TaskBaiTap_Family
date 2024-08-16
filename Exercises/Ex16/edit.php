<?php
require 'student_model.php';
$model = new StudentModel();
$sinhvien = $model->laySinhVienTheoId($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa sinh viên</title>
</head>
<body>
    <h1>Sửa sinh viên</h1>
    <form action="edit_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $sinhvien['id']; ?>">
        <label for="hovaten">Fullname:</label>
        <input type="text" name="hovaten" value="<?php echo $sinhvien['hovaten']; ?>" required><br>
        <label for="ngaysinh">Birthday:</label>
        <input type="date" name="ngaysinh" value="<?php echo $sinhvien['ngaysinh']; ?>" required><br>
        <button type="submit">Cập nhật</button>
    </form>
    <br>
    <a href="index.php">BACK</a>
</body>
</html>