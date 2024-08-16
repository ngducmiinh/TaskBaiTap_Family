<?php
session_start();

class StudentModel {
    public function layDanhSachSinhVien() {
        return $_SESSION['sinhvien'] ?? [];
    }

    public function laySinhVienTheoId($id) {
        foreach ($this->layDanhSachSinhVien() as $sinhvien) {
            if ($sinhvien['id'] == $id) {
                return $sinhvien;
            }
        }
        return null;
    }

    public function themSinhVien($id, $hovaten, $ngaysinh) {
        if (!isset($_SESSION['sinhvien'])) {
            $_SESSION['sinhvien'] = [];
        }
        $_SESSION['sinhvien'][] = [
            'id' => $id,
            'hovaten' => $hovaten,
            'ngaysinh' => $ngaysinh
        ];
    }

    public function capNhatSinhVien($id, $hovaten, $ngaysinh) {
        foreach ($_SESSION['sinhvien'] as &$sinhvien) {
            if ($sinhvien['id'] == $id) {
                $sinhvien['hovaten'] = $hovaten;
                $sinhvien['ngaysinh'] = $ngaysinh;
                break;
            }
        }
    }

    public function xoaSinhVien($id) {
        $_SESSION['sinhvien'] = array_filter($_SESSION['sinhvien'], function($sinhvien) use ($id) {
            return $sinhvien['id'] != $id;
        });
    }
}
?>