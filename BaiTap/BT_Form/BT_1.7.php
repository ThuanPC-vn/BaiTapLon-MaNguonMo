<?php

$page_title = 'BT 1.7';
include('../../includes/header.php');
?>

    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

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
            height: 100px; /* Adjust height for listbox */
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
            text-align: left; /* Align result text to the left */
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <select name="lunch[]" multiple>
            <option value="pork" selected>
                BBQ Pork Bun
            </option>
            <option value="chicken">
                Chicken Bun
            </option>
            <option value="lotus">
                Lotus Seed Bun
            </option>
        </select>
        <p>
            <input type="submit" name="submit" value="Submit your order">
        </p>
    </form>
    <p class="register-link">Wanna back site? <a href="#" onclick="history.back()"> Back</a></p>

    <?php
        if (isset($_POST['lunch'])) {
            echo "<div class='result'>";
            echo "Selected buns:<br/>";
            foreach ($_POST['lunch'] as $choice) {
                print "You want a $choice bun. <br/>";
            }
            echo "</div>";
        }
    ?>

<?php
include('../../includes/footer.php');
?>