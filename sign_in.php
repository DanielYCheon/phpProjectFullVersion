<?php
session_start();
$db = mysqli_connect('localhost', 'root', 'password', 'senior_project');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // mysqli_real_escape_string() is used to prevent SQL injection
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_pass = mysqli_real_escape_string($db, $_POST['user_pass']);

    // Check if the fields are empty
    if (empty($user_id) || empty($user_pass)) {
        header("location: sign_in.php?error=All fields are required");
        exit();
    }
    // Check if the user exists in the database 
    else {
        $sql = "SELECT * FROM users WHERE user_id='$user_id'";
        $result = mysqli_query($db, $sql);
    // Check if the user exists in the database
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($user_pass, $row['user_pass'])) {

                // Store user information in session variables
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                // Redirect to index1.html after successful login
                echo '<script>
                alert(" Successful Login ");
                window.location.href = "index.php";

                </script>';
                
                exit();
            }
            // If the password is incorrect 
            else {
                header("location: sign_in.php?error=Incorrect Password");
                exit();
            }
        }
        // If the user does not exist 
        else {
            header("location: sign_in.php?error=User ID not found");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="sign_up.js"></script>
</head>
<body>
<div class="container right-panel-active">
    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="sign_in.php" class="form" id="form2" method="post">
            <h2 class="form__title">Sign In</h2>
            <input type="text" placeholder="User ID" class="input" name="user_id" required />
            <input type="password" placeholder="Password" class="input" name="user_pass" required />
            <div class="error-message
            <?php echo isset($_GET['error']) ? 'show' : ''; ?>" name="error">

            <?php echo isset($_GET['error']) ? htmlspecialchars($_GET['error']) : 'show'; ?>

            </div>
             <div class="button-group">
                <button class="btn" name="submit">Sign In</button>
                <button class="btn" onclick="location.href='sign_up.php'">Register</button>
            </div>
        </form>
       
    </div>

</div>
</body>
</html>