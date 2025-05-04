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

$page_title = 'BT So1';
include('../../includes/header.php');
?>


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
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p> 

<?php
include('../../includes/footer.php');
?>