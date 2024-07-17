// Vẽ cây thông với chiều cao cho trước
<?php
function printTree($height) {
    for ($i = 0; $i < $height; $i++) {
        for ($j = $height - $i; $j > 1; $j--) {
            echo " ";
        }
        for ($j = 0; $j < (2 * $i + 1); $j++) {
            echo "*";
        }
        echo "\n"; 
    }
}
$height = 10; 
printTree($height);
?>