<?php
// Tạo kích thước ma trận ngẫu nhiên
$m = rand(2, 5); // Số hàng
$n = rand(2, 5); // Số cột

// Tạo ma trận với các phần tử ngẫu nhiên trong khoảng [-100, 100]
$matrix = [];
for ($i = 0; $i < $m; $i++) {
    $row = [];
    for ($j = 0; $j < $n; $j++) {
        $row[] = rand(-100, 100);
    }
    $matrix[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển Thị Ma Trận</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Ma Trận Kích Thước <?php echo $m . "x" . $n; ?></h1>
    <table>
        <?php foreach ($matrix as $row): ?>
            <tr>
                <?php foreach ($row as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>