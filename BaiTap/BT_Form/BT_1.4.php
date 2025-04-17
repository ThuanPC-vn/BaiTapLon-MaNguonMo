<!DOCTYPE html>
<html>
<head>
    <title>Checkbox Selection</title>
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

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="checkbox"] {
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
</head>
<body>
    <form method="post" action="">
        <label>
            <input type="checkbox" name="chk1" value="en" 
                <?php if(isset($_POST['chk1'])&& $_POST['chk1']=='en') echo 'checked'; ?>/> English
        </label>
        <label>
            <input type="checkbox" name="chk2" value="vn"
                <?php if(isset($_POST['chk2'])&& $_POST['chk2']=='vn') echo 'checked'; ?>/> Vietnam
        </label>
        <input type="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['chk1']) || isset($_POST['chk2'])) {
            echo "<div class='result'>";
            if(isset($_POST['chk1'])) echo "Checkbox 1: " . $_POST['chk1'] . "<br>";
            if(isset($_POST['chk2'])) echo "Checkbox 2: " . $_POST['chk2'];
            echo "</div>";
        }
    ?>
</body>
</html>