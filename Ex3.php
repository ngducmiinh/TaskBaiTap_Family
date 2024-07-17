//In hình tam giác cân rỗng với chiều cao n bất kỳ
<?php
function printTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            printf(". ");
        }
        for ($j = 1; $j <= $i; $j++) {
            printf("%d ", $j);
        }
        for ($j = $i - 1; $j >= 1; $j--) {
            printf("%d ", $j);
        }
        for ($j = $i; $j < $n; $j++) {
            printf(". ");
        }
        
        printf("\n");
    }
}

$n = 7;
printTriangle($n);
?>