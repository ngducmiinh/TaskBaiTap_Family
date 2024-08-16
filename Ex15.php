<?php

function findDuplicateCharacters($inputString) {
    // Khởi tạo mảng để lưu trữ số lần xuất hiện của mỗi ký tự
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

    // In ra các ký tự xuất hiện từ 2 lần trở lên cùng với số lần xuất hiện của chúng
    foreach ($charCount as $char => $count) {
        if ($count >= 2) {
            echo "Ký tự '$char' xuất hiện $count lần.\n";
        }
    }
}

// Nhập chuỗi từ người dùng
echo "Nhập chuỗi bất kỳ: ";
$inputString = trim(fgets(STDIN));

// Tìm và in ra các ký tự xuất hiện từ 2 lần trở lên
findDuplicateCharacters($inputString);

?>