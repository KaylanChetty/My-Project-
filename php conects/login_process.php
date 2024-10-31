<?php
// Start the session
session_start();

// Database connection settings
$host = 'localhost';
$dbname = 'realhome_db';
$username = 'root';
$password = ''; // Use your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input values
    $user = htmlspecialchars(trim($_POST['username']));
    $pass = htmlspecialchars(trim($_POST['password']));

    // Check if username and password fields are filled
    if (empty($user) || empty($pass)) {
        echo "Please fill in both fields.";
        exit;
    }

    // Query to fetch the user's details
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $hashed_password);

    // Check if user exists and verify password
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($pass, $hashed_password)) {
            // If login is successful, store user info in session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, " . $username . ".";
            header("Location: dashboard.php"); // Redirect to a dashboard page
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>