<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize it
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $userPassword = htmlspecialchars($_POST["password"]); // Use a different variable name for form password

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
    $sql = "INSERT INTO register (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $userPassword);
    
    if ($stmt->execute()) {
        $_SESSION['registration_success'] = true; // Set a session variable

        // Close the database connection
        $stmt->close();
        $conn->close();

        // JavaScript alert for registration success
        echo '<script>alert("Registration successful");</script>';

        // Delay for 2 seconds (adjust as needed)
        echo '<script>setTimeout(function(){ window.location.href = "index.html"; }, 2000);</script>';
        exit; // Make sure to stop the script execution after redirecting
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <!-- Your HTML registration form goes here -->

    <script>
        // Check for JavaScript errors in the console
        window.onerror = function(message, source, lineno, colno, error) {
            console.error('JavaScript Error:', message, source, lineno, colno, error);
        };
    </script>
</body>
</html>
