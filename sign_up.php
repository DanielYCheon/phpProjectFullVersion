<?php
include("senior_database_connect.php");
$db = mysqli_connect('localhost', 'root', 'password', 'senior_project');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_pass = mysqli_real_escape_string($db, $_POST['user_pass']);
    $user_pass_confirm = mysqli_real_escape_string($db, $_POST['user_pass_confirm']);

    // Regular expression for password
    $pwd_error = "/^(?=.*[a-z])(?=.*\d)(?=.*[`~!@#$%^&*|\\\'\";:\.\,\/?=+\-_()<>{}])[a-z\d`~!@#$%^&*|\\\'\";:\.\,\/?=+\-_(){}<>]{8,}$/m";
    $sql_injection = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
    // Check if the fields are empty
    if (empty($first_name) || empty($last_name) || empty($email) || empty($address) || empty($city) || empty($zipcode) || empty($user_id) || empty($user_pass) || empty($user_pass_confirm)) {
        header("location: sign_up.php?error=All fields are required");
        exit();
    } elseif (preg_match($sql_injection, $user_id)) {
        header("location: sign_up.php?error=User Name Cannot use Special Characters");
        exit();
    } elseif ($user_pass != $user_pass_confirm) {
        header("location: sign_up.php?error=Password Does Not Match");
        exit();
    } else {
        $user_pass = password_hash($user_pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (firstname, lastname, address, city, zipcode, email, user_id, user_pass) VALUES ('$first_name', '$last_name', '$address', '$city', '$zipcode', '$email', '$user_id', '$user_pass')";

        $result = mysqli_query($db, $sql);
        // Check if the information is stored in the database
        if ($result) {
            echo "<script>
                    alert('SUCCESSFULLY information stored in database');
                    window.location.href = 'index.html';
                  </script>";
        } else {
            echo "Fail to add information: " . mysqli_error($db);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="sign_up.js"></script>
</head>
<body>
<div class="container right-panel-active">
    <!-- Sign Up -->
    <div class="container__form container--signup">
        <form action="sign_up.php" class="form" id="form1" method="post">
            <h2 class="form__title">Sign Up</h2>
            <input type="text" placeholder="First Name" class="input" name="first_name" required />
            <input type="text" placeholder="Last Name" class="input" name="last_name" required />
            <input type="email" placeholder="Email" class="input" name="email" required />
            <input type="text" placeholder="Address" class="input" name="address" required />
            <input type="text" placeholder="City" class="input" name="city" required />
            <input type="text" placeholder="Zip Code" class="input" name="zipcode" required />
            <input type="text" placeholder="User ID" class="input" name="user_id" required />
            <input type="password" placeholder="Password" class="input" name="user_pass" required />
            <input type="password" placeholder="Confirm Password" class="input" name="user_pass_confirm" required />
            <button class="btn" name="submit">Sign Up</button>
        </form>
        <div style="border:2px solid purple; padding:15px;width:40%;color:red;text-align:center;" name="error">
            <?php echo isset($_GET['error']) ? $_GET['error'] : ''; ?>
        </div>
    </div>

    <!-- Overlay -->

</div>
</body>
</html>