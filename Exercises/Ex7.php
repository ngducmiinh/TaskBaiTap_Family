// Đếm số nguyên âm, phụ âm trong 1 chuỗi. Cho 1 chuỗi bất kỳ
// Yêu cầu: Đếm số nguyên âm, phụ âm trong chuỗi đó
<?php
// Hàm kiểm tra ký tự có phải là nguyên âm hay không
function isVowel($char) {
    $char = strtolower($char);
    return in_array($char, ['a', 'e', 'i', 'o', 'u']);
}

// Hàm đếm số nguyên âm và phụ âm trong chuỗi
function countVowelsAndConsonants($str) {
    $vowels = 0;
    $consonants = 0;

    // Duyệt qua từng ký tự trong chuỗi
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Kiểm tra xem ký tự có phải là chữ cái không
        if (ctype_alpha($char)) {
            if (isVowel($char)) {
                $vowels++;
            } else {
                $consonants++;
            }
        }
    }

    return [$vowels, $consonants];
}

// Nhập chuỗi từ người dùng
echo "Nhập một chuỗi bất kỳ: ";
$inputStr = readline();

// Đếm số nguyên âm và phụ âm trong chuỗi đã nhập
list($vowelCount, $consonantCount) = countVowelsAndConsonants($inputStr);

echo "Số nguyên âm trong chuỗi: " . $vowelCount . "\n";
echo "Số phụ âm trong chuỗi: " . $consonantCount . "\n";
?>