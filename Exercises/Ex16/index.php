<?php
require 'student_model.php';
$model = new StudentModel();
$sinhviens = $model->layDanhSachSinhVien();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Birthday</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($sinhviens as $sinhvien): ?>
        <tr>
            <td><?php echo $sinhvien['id']; ?></td>
            <td><a href="edit.php?id=<?php echo $sinhvien['id']; ?>"><?php echo $sinhvien['hovaten']; ?></a></td>
            <td><?php echo $sinhvien['ngaysinh']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $sinhvien['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="add.php">Thêm sinh viên</a>
</body>
</html>