<?php

$page_title = 'BT 1.5';
include('../../includes/header.php');
?>

    
    <style>

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
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

    <form action="" name="myform" method="post">
        <label>
            <input type="radio" name="radGT" value="Nam" <?php if(isset($_POST['radGT']) && $_POST['radGT'] == 'Nam') echo 'checked="checked"'; ?> checked/> Male
        </label>
        <label>
            <input type="radio" name="radGT" value="Nu" <?php if(isset($_POST['radGT']) && $_POST['radGT'] == 'Nữ') echo 'checked="checked"'; ?>/> Female
        </label>

        <input type="submit" value="Submit">
    </form>
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p>

    <?php
        if (isset($_POST['radGT'])) {
            echo "<div class='result'>Gender: " . $_POST['radGT'] . "</div>";
        }
    ?>

<?php
include('../../includes/footer.php');
?>