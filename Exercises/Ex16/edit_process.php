<?php
require 'student_model.php';
$model = new StudentModel();

$id = $_POST['id'];
$hovaten = $_POST['hovaten'];
$ngaysinh = $_POST['ngaysinh'];

$model->capNhatSinhVien($id, $hovaten, $ngaysinh);

header('Location: index.php');
?>