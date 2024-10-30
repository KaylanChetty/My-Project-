<?php
// Start the session
session_start();

// Placeholder for a simple "database" of users, replace this with actual database logic in production
$users = [];

// Function to validate email format
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirm_password = $_POST['psw-repeat'];

    // Validate email format
    if (!validate_email($email)) {
        $error_message = "Invalid email format.";
    } 
    // Check if the passwords match
    elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } 
    // Check if the user already exists (in this demo, $users array is used, but use a database in real implementation)
    elseif (array_key_exists($email, $users)) {
        $error_message = "Email already registered. Please use another email or login.";
    } 
    else {
        // Save user information (in real implementation, save to a database)
        $users[$email] = password_hash($password, PASSWORD_DEFAULT); // Use hashed passwords for security
        
        // Set session to log the user in automatically
        $_SESSION['email'] = $email;

        // Redirect to a welcome page or user dashboard
        header("Location: welcome.php"); // Change to your actual welcome or dashboard page
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - RealHome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 50px;
            text-align: center;
        }
        .error {
            color: red;
            margin-bottom: 20px;
        }
        a {
            color: dodgerblue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Sign Up to RealHome</h1>

<?php
// Show error message if sign-up failed
if (!empty($error_message)) {
    echo "<div class='error'>" . $error_message . "</div>";
}
?>

<form action="action_page2.php" method="post">
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br>

    <button type="submit">Sign Up</button>
</form>

<p><a href="#">Already have an account? Login here</a></p>

</body>
</html>