<?php
// Tạo ngẫu nhiên một số nguyên trong khoảng [-100, 100]
$randomNumber = rand(-100, 100);

// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Kiểm tra và lưu số nguyên tố vào file
if (isPrime($randomNumber)) {
    $fileName = "soNT.txt";
    $fileHandle = fopen($fileName, "a"); // Mở file ở chế độ ghi nối tiếp
    if ($fileHandle) {
        fwrite($fileHandle, $randomNumber . PHP_EOL); // Ghi số nguyên tố vào file
        fclose($fileHandle); // Đóng file
        echo "Số $randomNumber là số nguyên tố và đã được lưu vào file $fileName.";
    } else {
        echo "Không thể mở file $fileName để ghi.";
    }
} else {
    echo "Số $randomNumber không phải là số nguyên tố.";
}
?>