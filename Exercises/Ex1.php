// Lấy tất cả các số nguyên dương nhỏ hơn 1000 chia hết cho 17 hoặc 7 mà không chia hết cho 5 hoặc 3.
<?php
$numbers = [];
for ($i = 17; $i <= 1000; $i++) {
    if (($i % 17 == 0 || $i % 7 == 0) && $i % 5 != 0 && $i % 3 != 0) {
        $numbers[] = $i;
    }
}
echo implode(', ', $numbers);
?>