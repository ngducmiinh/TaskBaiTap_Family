<?php

function countNumbersEqualToSumOfTwoOthers($numbers) {
    $count = 0;
    $length = count($numbers);

    // Sử dụng hai vòng lặp lồng nhau để kiểm tra các cặp số
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            $sum = $numbers[$i] + $numbers[$j];
            if (in_array($sum, $numbers)) {
                $count++;
            }
        }
    }

    return $count;
}

// Nhập dãy số từ người dùng
echo "Nhập dãy số, cách nhau bởi dấu phẩy: ";
$input = trim(fgets(STDIN));

// Chuyển đổi dãy số thành mảng các số nguyên
$numbers = array_map('intval', explode(',', $input));

// Đếm số lượng số bằng tổng của hai số khác
$result = countNumbersEqualToSumOfTwoOthers($numbers);

echo "Số lượng số bằng tổng của hai số khác trong dãy là: $result\n";

?>