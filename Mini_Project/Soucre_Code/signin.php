<?php
session_start(); // Start the session to access session variables
require 'db.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a select statement to retrieve the hashed password and user name for the provided email
    $stmt = $conn->prepare("SELECT name, password FROM users WHERE email = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if a user exists with the provided email
    if ($stmt->num_rows > 0) {
        // Bind the result to variables
        $stmt->bind_result($name, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_name'] = $name; // Store the user's name in the session
            header("Location: welcome.php"); // Redirect to the welcome page or dashboard
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }

    $stmt->close();
    $conn->close();
}
?>
