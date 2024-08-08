<?php
// Example username and password (in a real application, you'd check this against a database)
$correct_username = 'user123';
$correct_password = 'password123';

// Get the form input values
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are correct
if ($username === $correct_username && $password === $correct_password) {
    // Start a session and store user information
    session_start();
    $_SESSION['username'] = $username;
    echo "Login successful! Welcome, " . $username . ".";
    // Redirect to a protected page
    // header("Location: protected_page.php");
} else {
    echo "Incorrect username or password.";
}
?>


