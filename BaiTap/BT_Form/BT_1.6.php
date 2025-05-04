<?php

$page_title = 'BT 1.6';
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

        select {
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

    <form method="POST" action="">
        <select name="lunch">
            <option value="pork" <?php if(isset($_POST['lunch']) && $_POST['lunch'] == 'pork') echo 'selected'; ?>>
                BBQ Pork Bun
            </option>
            <option value="chicken" <?php if(isset($_POST['lunch']) && $_POST['lunch'] == 'chicken') echo 'selected'; ?>>
                Chicken Bun
            </option>
            <option value="lotus" <?php if(isset($_POST['lunch']) && $_POST['lunch'] == 'lotus') echo 'selected'; ?>>
                Lotus Seed Bun
            </option>
        </select>
        <input type="submit" name="submit" value="Submit your order">
    </form>
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p>

    <?php
        if (isset($_POST['lunch'])) {
            echo "<div class='result'>You want a " . $_POST["lunch"] . " bun.</div>";
        }
    ?>

<?php
include('../../includes/footer.php');
?>