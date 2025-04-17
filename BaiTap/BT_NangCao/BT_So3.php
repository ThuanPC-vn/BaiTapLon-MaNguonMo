<?php
// Tạo ngẫu nhiên 1 số nguyên trong khoảng [10, 1000]
$randomNumber = rand(10, 1000);
echo "Số nguyên được tạo: $randomNumber<br>";

// a. Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

echo "Các số nguyên tố nhỏ hơn $randomNumber: ";
for ($i = 2; $i < $randomNumber; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";

// b. Cho biết số nguyên này có bao nhiêu chữ số
$digitCount = strlen((string)$randomNumber);
echo "Số chữ số của $randomNumber: $digitCount<br>";

// c. Cho biết chữ số lớn nhất trong số nguyên này
$maxDigit = max(str_split((string)$randomNumber));
echo "Chữ số lớn nhất trong $randomNumber: $maxDigit<br>";
?>