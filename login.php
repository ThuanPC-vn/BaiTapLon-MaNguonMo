<?php # Script 10.7 - login.php
// This page processes the login form.
//
// This script now uses sessions for login.

$page_title = 'Login';
include ('includes/header.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require ('mysqli_connect.php'); // Connect to the db.

    // Validate the email address:
    if (!empty($_POST['email'])) {
        $e = mysqli_real_escape_string($dbc, $_POST['email']);
    } else {
        $errors[] = 'You forgot to enter your email address.';
    }

    // Validate the password:
    if (!empty($_POST['pass'])) {
        $p = mysqli_real_escape_string($dbc, $_POST['pass']);
    } else {
        $errors[] = 'You forgot to enter your password.';
    }

    if (empty($errors)) { // If everything's OK.

        // Retrieve the user_id, first_name, and permission bit for that email/password combination:
        $q = "SELECT user_id, first_name, pass, permisson FROM users WHERE email='$e'";
        $r = @mysqli_query ($dbc, $q); // Run the query.

        // Check if a row was returned:
        if (mysqli_num_rows($r) == 1) {

            // Fetch the record:
            $row = mysqli_fetch_array ($r, MYSQLI_ASSOC);

            // Check if the password matches:
            if (password_verify($p, $row['pass'])) {

                // Store data in a session:
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['permisson'] = $row['permisson'];

                // Redirect the user:
                $url = 'index.php'; // Default page
                if ($_SESSION['permisson'] == 1) {
                    $url = 'admin.php'; // Redirect to admin page if permission is 1
                }
                header("Location: $url");
                exit(); // Quit the script.

            } else { // Incorrect password.
                $errors[] = 'The email address and password do not match.';
            }

        } else { // No matching email/password combination.
            $errors[] = 'The email address and password do not match.';
        }

    } // End of the errors IF.

    // Display the errors:
    if (!empty($errors)) {
        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br />\n";
        }
        echo '</p><p>Please try again.</p>';
    }

    mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.
?>

<h1>Login</h1>
<form action="login.php" method="post">
    <p>Email Address: <input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>
    <p>Password: <input type="password" name="pass" size="20" maxlength="20" /></p>
    <p><input type="submit" name="submit" value="Login" /></p>
</form>

<?php include ('includes/footer.php'); ?>