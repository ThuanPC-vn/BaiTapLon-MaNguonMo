<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Information</title>
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
            width: 400px;
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }

        legend {
            font-weight: bold;
            padding: 5px 10px;
            background-color: #f0f0f0;
            border-radius: 3px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px 0;
        }

        input[type="text"],
        select,
        textarea {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .center {
            text-align: center;
        }

        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            /* text-align: center;  */
        }
    </style>
</head>
<body>
    <form align='center' action="" method="post">
        <fieldset>
            <legend>Enter your information in the form below</legend>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type='text' name='name' value="<?php echo $name;?>"/></td>
                </tr>
                <tr>
                    <td>Email address:</td>
                    <td><input type='text' name='email' value="<?php echo $email;?>"/></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type='radio' name='gender' value='male' 
                            <?php if(isset($_POST['gender']) && ($_POST['gender']=='male')) echo "checked='checked'" ?>/>Male 
                        <input type='radio' name='gender' value='female' 
                            <?php if(isset($_POST['gender']) && ($_POST['gender']=='female')) echo "checked='checked'" ?>/>Female
                    </td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td>
                        <select name='age'>
                            <option value='below30' <?php if(isset($_POST['age'])&& $_POST['age']=='below30') echo 'selected="selected"';?>>Below 30</option>
                            <option value='30-60' <?php if(isset($_POST['age'])&& $_POST['age']=='30-60') echo 'selected="selected"';?>>Between 30 and 60</option>
                            <option value='above60' <?php if(isset($_POST['age'])&& $_POST['age']=='above60') echo 'selected="selected"';?>>Above 60</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Comments:</td>
                    <td>
                        <textarea name='comments' cols='20' rows='5'>
                            <?php if(isset($_POST['comments'])) echo $_POST['comments'];?>
                        </textarea> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit My Information"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST') { 
            if(isset($_POST['name'],$_POST['email'],$_POST['gender'],$_POST['age'],$_POST['comments'])){
                echo "<div class='result'>";
                echo "Welcome to this page<br>";
                echo "Your information:<br> Name:". $_POST['name'] .
                     "<br>Email: ".$_POST['email']. "<br> Gender: ". $_POST['gender'].
                     "<br> Age: ". $_POST['age']."<br> Comments: ".$_POST['comments'];
                echo "</div>";
            } else {
                echo "<div class='error'>Please enter your information.</div>";
            }
        }
    ?>
</body>
</html>