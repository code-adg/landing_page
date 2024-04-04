<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize it
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Save data to the database
    $servername = "localhost"; // Change this to your MySQL server address or IP
    $username = "root"; // Change this to your MySQL username
    $dbPassword = ""; // No password for localhost, use a different variable name
    $dbname = "register"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM register WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, set session variables or perform other actions
        $_SESSION['user_email'] = $email;
        echo '<script>alert("Login successful");</script>';
        echo '<script>window.location.href = "info/index.html";</script>'; // Redirect to a dashboard page
    } else {
        // User not found, display an error message and redirect to the login page
        echo '<script>alert("Invalid email or password");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>