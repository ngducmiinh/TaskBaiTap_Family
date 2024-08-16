<?php

function findMaxSumArithmeticSequence($numbers) {
    $n = count($numbers);
    if ($n < 3) {
        return 0; // Không có cấp số cộng nào nếu dãy số có ít hơn 3 phần tử
    }

    $maxSum = PHP_INT_MIN;
    $currentSum = 0;
    $currentSequence = [];
    $bestSequence = [];

    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            $diff = $numbers[$j] - $numbers[$i];
            $currentSequence = [$numbers[$i], $numbers[$j]];
            $currentSum = $numbers[$i] + $numbers[$j];

            for ($k = $j + 1; $k < $n; $k++) {
                if ($numbers[$k] - end($currentSequence) == $diff) {
                    $currentSequence[] = $numbers[$k];
                    $currentSum += $numbers[$k];
                }
            }

            if (count($currentSequence) >= 3 && $currentSum > $maxSum) {
                $maxSum = $currentSum;
                $bestSequence = $currentSequence;
            }
        }
    }

    return $maxSum;
}

// Nhập dãy số từ người dùng
echo "Nhập dãy số, cách nhau bởi dấu phẩy: ";
$input = trim(fgets(STDIN));

// Chuyển đổi dãy số thành mảng các số nguyên
$numbers = array_map('intval', explode(',', $input));

// Tìm và tính tổng cấp số cộng có tổng lớn nhất
$result = findMaxSumArithmeticSequence($numbers);

echo "Tổng cấp số cộng có tổng lớn nhất là: $result\n";

?>