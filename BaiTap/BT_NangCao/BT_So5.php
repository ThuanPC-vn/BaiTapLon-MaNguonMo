<?php
$page_title = 'BT So1';
include('../../includes/header.php');

// Tạo một số ngẫu nhiên n trong miền [-50, 50]
$n = rand(-50, 50);

// a. Kiểm tra n có là số nguyên dương, nếu là số âm thì thay đổi giá trị của n thành đối số của nó
if ($n < 0) {
    $n = abs($n);
}

// b. Tạo 1 mảng có n phần tử, các phần tử là số ngẫu nhiên trong miền [-100, 100]
$array = [];
for ($i = 0; $i < $n; $i++) {
    $array[] = rand(-100, 100);
}

// In ra mảng được tạo
echo "Mảng được tạo: ";
print_r($array);

// c. Tính tổng các phần tử trong mảng là số chẵn
$evenSum = 0;
foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenSum += $value;
    }
}

echo "Tổng các phần tử chẵn trong mảng: $evenSum";

echo "<p class='register-link'>Wanna back site? <a href='#' onclick='history.back()'> Back</a></p> ";

include('../../includes/footer.php');
?>