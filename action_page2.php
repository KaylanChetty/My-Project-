<?php
// Start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password is usually empty
$dbname = "realhome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
    else {
        // Prepare an SQL statement
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the user already exists
        if ($result->num_rows > 0) {
            $error_message = "Email already registered. Please use another email or login.";
        } 
        else {
            // Hash the password and save user information to the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $hashed_password);
            $stmt->execute();

            // Set session to log the user in automatically
            $_SESSION['email'] = $email;

            // Redirect to a welcome page or user dashboard
            header("Location: welcome.php"); // Change to your actual welcome or dashboard page
            exit();
        }
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>