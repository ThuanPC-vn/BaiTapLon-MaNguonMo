<?php
// Tạo một số nguyên dương ngẫu nhiên trong khoảng từ 1 đến 10
$randomNumber = rand(1, 10);

$page_title = 'BT So1';
include('../../includes/header.php');
?>

    <style>
        
        .table-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        .multiplication-table {
            width: 100px;
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
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p>

<?php
include('../../includes/footer.php');
?>