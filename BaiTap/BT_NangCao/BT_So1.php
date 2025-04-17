<?php
// Tạo một số nguyên dương ngẫu nhiên trong khoảng từ 1 đến 10
$randomNumber = rand(1, 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 300px;
            border: 2px solid #4CAF50;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Bảng Cửu Chương <?php echo $randomNumber; ?></h1>
    <table>
        <thead>
            <tr>
                <th>Phép Tính</th>
                <th>Kết Quả</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>{$randomNumber} x {$i}</td>";
                echo "<td>" . ($randomNumber * $i) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>