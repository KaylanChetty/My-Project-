<?php
// Start the session
session_start();

// Database connection settings
$host = 'localhost';
$dbname = 'wil project';
$username = 'root';
$password = ''; // Default MySQL password for XAMPP

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
    } else {
        // Query to fetch the user's details
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists and verify the password
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();

            if (password_verify($pass, $hashed_password)) {
                // Login successful: store user info in session
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;

                // Display success message
                echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
            } else {
                echo "Invalid password. Please try again.";
            }
        } else {
            echo "No user found with that username. Please try again.";
        }

        // Close the statement
        $stmt->close();
    }
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();
?>