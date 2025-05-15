<?php
include "../include/confige.php"; // Include your database connection file
session_start(); // Start the session

// Get POSTed email and password
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute query to fetch user by email
$query = "SELECT * FROM signup WHERE email = :email";
$query = $dbh->prepare($query);
$query->bindParam(":email", $email);
$query->execute();

$key = $query->fetch(PDO::FETCH_ASSOC); // Fetch single result (not all)

// Check if user exists
if ($key) {
    
    if ($password === $key['password']) {
        // Set session variables
        $_SESSION['userid'] = $key['userid'];
        $_SESSION['email'] = $key['email'];

        // Redirect to homepage
        $daud="../index.php";
        header("Location: " . $daud);
        exit;
    } else {
        // Incorrect password
        echo "Incorrect password.";
        exit;
    }
} else {
    // User with given email doesn't exist
    echo "No user found with this email.";
    exit;
}
?>
