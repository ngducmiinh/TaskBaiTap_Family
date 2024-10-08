// Cho một mảng 2 chiều a gồm các số tự nhiên. 
// Hãy tính tổng tất cả các số nguyên tố trong mảng 2 chiều đó

<?php
// Hàm kiểm tra số nguyên tố
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;

    if ($num % 2 == 0 || $num % 3 == 0) return false;

    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
    }
    return true;
}

// Hàm tính tổng các số nguyên tố trong mảng 2 chiều
function sumOfPrimes($array) {
    $sum = 0;
    foreach ($array as $row) {
        foreach ($row as $num) {
            if (isPrime($num)) {
                $sum += $num;
            }
        }
    }
    return $sum;
}

// Nhập mảng 2 chiều từ người dùng
function inputArray() {
    $array = [];
    echo "Nhập số lượng hàng của mảng: ";
    $rows = (int)fgets(STDIN);
    for ($i = 0; $i < $rows; $i++) {
        echo "Nhập các phần tử của hàng " . ($i + 1) . " (cách nhau bởi dấu cách): ";
        $row = trim(fgets(STDIN));
        $array[] = array_map('intval', explode(' ', $row));
    }
    return $array;
}

// Nhập mảng 2 chiều từ người dùng và tính tổng các số nguyên tố
$array = inputArray();
echo "Tổng các số nguyên tố trong mảng: " . sumOfPrimes($array) . "\n";
?>