<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        .table-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .multiplication-table {
            border: 2px solid #4CAF50;
            border-radius: 8px;
            padding: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .multiplication-table h3 {
            text-align: center;
            color: #4CAF50;
        }
        .multiplication-table p {
            margin: 5px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Bảng Cửu Chương</h1>
    <div class="table-container">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<div class="multiplication-table">';
            echo "<h3>Bảng $i</h3>";
            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                echo "<p>$i x $j = $result</p>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>