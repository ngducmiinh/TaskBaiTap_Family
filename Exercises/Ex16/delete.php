<?php
require 'student_model.php';
$model = new StudentModel();

$id = $_GET['id'];
$model->xoaSinhVien($id);

header('Location: index.php');
?>