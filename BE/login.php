<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include('db.php');

    // Get user input
    $loginInput = $_POST['loginInput']; // Username or email
    $password = $_POST['password'];

    // SQL query to retrieve hashed password
    $query = "SELECT * FROM tbl_users WHERE USERNAME='$loginInput' OR EMAIL='$loginInput'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if the user exists
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['PASSWORD'];

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['username'] = $row['USERNAME']; // Set session variable
                header("Location: db.php"); // Redirect to dashboard or another page
                exit(); // Ensure no further execution after redirection
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

