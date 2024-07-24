// Tiền điện 1000đ 1 số với 50 số đầu, 1200đ với 50 số tiếp theo, 1500đ với 50 số tiếp theo, 1750đ với 50 số tiếp theo, các số tiếp theo sẽ có giá 1800đ
// Yêu cầu: Tính số tiền điện mà bạn phải thanh toán khi dùng 37, 73, 123, 150, 199, 333
<?php
// Hàm tính tiền điện phải thanh toán
function calculateElectricityBill($kWh) {
    $totalCost = 0;
    if ($kWh <= 50) {
        $totalCost = $kWh * 1000;
    } elseif ($kWh <= 100) {
        $totalCost = 50 * 1000 + ($kWh - 50) * 1200;
    } elseif ($kWh <= 150) {
        $totalCost = 50 * 1000 + 50 * 1200 + ($kWh - 100) * 1500;
    } elseif ($kWh <= 200) {
        $totalCost = 50 * 1000 + 50 * 1200 + 50 * 1500 + ($kWh - 150) * 1750;
    } else {
        $totalCost = 50 * 1000 + 50 * 1200 + 50 * 1500 + 50 * 1750 + ($kWh - 200) * 1800;
    }
    return $totalCost;
}

// Test các ví dụ
$usageArray = [37, 73, 123, 150, 199, 333];
foreach ($usageArray as $usage) {
    echo "Tiền điện phải thanh toán cho $usage số điện: " . calculateElectricityBill($usage) . "đ\n";
}
?>