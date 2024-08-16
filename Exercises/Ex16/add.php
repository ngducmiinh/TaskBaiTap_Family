<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
</head>
<body>
    <h1>Thêm sinh viên</h1>
    <form action="add_process.php" method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>
        <label for="hovaten">Fullname:</label>
        <input type="text" name="hovaten" required><br>
        <label for="ngaysinh">Birthday:</label>
        <input type="date" name="ngaysinh" required><br>
        <button type="submit">Thêm mới</button>
    </form>
    <br>
    <a href="index.php">BACK</a>
</body>
</html>