<?php

function findDuplicateCharacters($inputString) {
    // Khởi tạo mảng để lưu trữ số lần xuất hiện của từng ký tự
    $charCount = [];

    // Duyệt qua từng ký tự trong chuỗi
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }

    // Duyệt qua mảng để tìm các ký tự xuất hiện từ 2 lần trở lên
    foreach ($charCount as $char => $count) {
        if ($count > 1) {
            echo "Ký tự '$char' xuất hiện $count lần.\n";
        }
    }
}

// Nhập chuỗi từ người dùng
echo "Nhập chuỗi: ";
$inputString = trim(fgets(STDIN));
findDuplicateCharacters($inputString);

?>