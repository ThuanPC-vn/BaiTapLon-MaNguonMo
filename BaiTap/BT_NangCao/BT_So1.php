<?php
// Tạo một số nguyên dương ngẫu nhiên trong khoảng từ 1 đến 10
$randomNumber = rand(1, 10);

$page_title = 'BT So1';
include('../../includes/header.php');
?>

    <style>
        
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
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p>    

<?php
include('../../includes/footer.php');
?>