<?php
// Transfer data from form into variables
$xemail = $_POST['femail'];
$xpass = $_POST['fpass'];

// Link the system to the database
$dbcs = mysqli_connect("localhost", "root", "", "accsrsrpt");

// Check the connection
if (!$dbcs) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a user with the same email already exists
$sql_check_user = "SELECT * FROM userlogin WHERE email = '$xemail';";
$result_check_user = mysqli_query($dbcs, $sql_check_user);

if (!$result_check_user) {
    die("Query failed: " . mysqli_error($dbcs));
}

if (mysqli_num_rows($result_check_user) > 0) {
    // If a user with the same email exists, show an alert and redirect to registration page
    print '<script>alert("User with this email already exists! Please choose a different email.");</script>';
    print '<script>window.location.assign("register.php");</script>';
} else {
    // If the user with the same email doesn't exist, insert the new record
    $sql_user = "INSERT INTO `userlogin` (`email`, `password`) VALUES ('$xemail', '$xpass');";
    $sql_check = mysqli_query($dbcs, $sql_user);

    if ($sql_check) {
        print '<script>alert("User Registered Successfully!");</script>';
        print '<script>window.location.assign("userpage.php");</script>';
    } else {
        print '<script>alert("Warning: User Registration Failed");</script>';
        print '<script>window.location.assign("user login.php");</script>';
    }
}

// Close the database connection
mysqli_close($dbcs);
?>
