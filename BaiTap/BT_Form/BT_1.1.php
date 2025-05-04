
<?php

$page_title = 'BT 1.1';
include('../../includes/header.php');
?>
    <style>
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px; /* Điều chỉnh chiều rộng form */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: center;
        }
    </style>


    <form action="BT_1.1.php" name="myform" method="post">
        <label for="Name">Tên của bạn:</label>
        <input type="text" name="Name" id="Name" value="<?php if(isset($_POST['Name'])) echo $_POST['Name'];?>" />
        <br>
        <input type="submit" value="Gửi">
    </form>
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p>

    <?php
        if (isset($_POST["Name"])) {
            echo "<div class='result'>Halluuu:3 " . $_POST["Name"] . "</div>";
        }
    ?>



<?php
include('../../includes/footer.php');
?>