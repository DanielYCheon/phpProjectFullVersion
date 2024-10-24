<?php
// Path: ProjectFullVersion/profile.php
include 'senior_database_connect.php';
session_start();
$user_id = $_SESSION['user_id'];
$is_logged_in = isset($_SESSION['user_id']);

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to sign-in page
    header('location: sign_in.php');
    exit();
}

// Initialize variables
$user_email = '';
$user_firstname = '';
$user_lastname = '';
$user_address = '';
$user_city = '';
$user_zipcode = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    // Get the form data
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);

    // Update user information in the database
    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', address='$address', city='$city', zipcode='$zipcode' WHERE user_id='$user_id'";
    if (mysqli_query($db, $sql)) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . mysqli_error($db);
    }
}

// Fetch user information
$sql = "SELECT firstname, lastname, email, address, city, zipcode FROM users WHERE user_id = '$user_id'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $user_email = $row['email'];
    $user_firstname = $row['firstname'];
    $user_lastname = $row['lastname'];
    $user_address = $row['address'];
    $user_city = $row['city'];
    $user_zipcode = $row['zipcode'];
} else {
    echo "Error fetching user information.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="profileStyle.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="sign_up.js"></script>
</head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
         
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="index.php">FIND MY PROFESSOR</a>
        <!-- Form -->
       <div class=""><b></b></div>
      <div class="navbar">
        
        <a class="nav-link text-white" href="index.php#priceSection" id="priceLink">Register</a>
        <a class="nav-link text-white" href="index.php#aboutSection" id="aboutLink">About Us</a>

        <a class="nav-link text-white" href="index.php#servicesSection" id="servicesLink"
          >Services</a
        >

        

        <a class="nav-link text-white" href="index.php#contactSection" id="contactLink">Contact</a>

         <?php if ($is_logged_in): ?>
                <a class="nav-link text-white" href="log_out.php" id="logoutLink">Logout</a>
            <?php else: ?>
                <a class="nav-link" href="sign_in.php" id="signInLink">Sign In</a>
            <?php endif; ?>

      </div>
        
      </div>
      
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://cdn.glitch.global/52ba1065-e108-4e81-b597-1ecb711dff5f/1043362.jpg?v=1675398051840); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo htmlspecialchars($user_id); ?>!
        </h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your tasks</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              
              <div class="text-center">
                
                
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2">RateMyProfessor</i>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>California State University, Northridge - Computer Information Technology, Computer Science Department
                </div>
                <hr class="my-4">
                <p>The application uses PHP for server-side logic, MySQL for database management, and a combination of HTML, CSS, and JavaScript for the client-side.</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="profile.php">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo htmlspecialchars($user_id); ?>
                        " readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control form-control-alternative" value="<?php echo htmlspecialchars($user_email); ?>" required>
                       
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo htmlspecialchars($user_firstname); ?>
                        ">
                        
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo htmlspecialchars($user_lastname); ?>
                        ">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input type="text" id="input-address" name="address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo htmlspecialchars($user_address); ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php
                        echo htmlspecialchars($user_city);
                        ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                     
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code" value="<?php echo htmlspecialchars($user_zipcode);
                        ?>">
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="text-center">
                  <input type="submit" name="update" class="btn btn-primary mt-4" value="Update Profile">
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    RateMyProfessor
  </footer>
</body>

</html>