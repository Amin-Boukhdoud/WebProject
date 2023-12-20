<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include('db.php');

    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert new user with hashed password
    $query = "INSERT INTO tbl_users (USERNAME, PASSWORD, EMAIL) VALUES ('$username', '$hashedPassword', '$email')";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        echo "Signup successful! You can now <a href='index.html'>login</a>.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>