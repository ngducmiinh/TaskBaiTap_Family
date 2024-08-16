// Cho một chuỗi bất kỳ sao cho trong chuỗi đó các từ có thể cách nhau với 1 tab hoặc 1 space hoặc 1 xuống dòng
// Yêu cầu: Đếm số từ trong chuỗi đó
<?php
// Hàm đếm số từ trong chuỗi
function countWords($str) {
    $words = preg_split('/[\s\t\n]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    return count($words);
}

// Nhập chuỗi từ người dùng
echo "Nhập một chuỗi bất kỳ: ";
$inputStr = readline();

// Đếm số từ trong chuỗi đã nhập
$wordCount = countWords($inputStr);

echo "Số từ trong chuỗi bạn vừa nhập là: " . $wordCount . "\n";
?>