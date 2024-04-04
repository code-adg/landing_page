<?php
session_start();

// Assuming you have a database connection
$servername = "localhost"; // replace with your MySQL server address or IP
$username = "root"; // assuming the root user without a password
$password = ""; // assuming there is no password for your MySQL server
$dbname = "tree_plantation"; // replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from session
$name = $_SESSION['name'];
$occasion = $_SESSION['occasion'];
$noOfTrees = $_SESSION['noOfTrees'];
$treeType = $_SESSION['treeType'];
$area = $_SESSION['area'];
$price = $_SESSION['price'];

// Insert data into the database (Update the table name to 'tree_plantation')
$sql = "INSERT INTO tree_plantation (occasion, name, noOfTrees, treeType, area, price) VALUES ('$occasion', '$name', $noOfTrees, '$treeType', $area, $price)";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .container{
            position: absolute;
            top: 20%;
            left:40%;
        }


        .navbar{
	position: fixed;
	height: 120px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(132, 220, 44, 0);
}
.navbar .logo{
	width: 110px;
	height: auto;

	position: absolute;
	left: 2%;
	top: 5%;
}
.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
	padding: 8px;


}
.navbar ul li a{
	font-size: 30px;
	font-family: serif;
	font-weight:bold;
	color: rgb(0, 0, 0);
	padding: 6px 13px;
	text-decoration: none;
	transition: .3s;
}
.navbar ul li a.active{
	background: rgb(49, 198, 46);
	border-radius: 20px;
}
.navbar ul li a:hover{
	background: rgb(49, 198, 46);
	border-radius: 20px;
}

body{
			background: url(../assets/11.jpg) no-repeat;
			background-size: cover;
	        height: 100vh;
              }

    </style>
</head>
<body>


<nav class="navbar">
				
				<img class="logo" src="../assets/logo.png">
			
				<ul>
					<li><a  href="index.html">Home</a></li>
					<li><a href="yourdonations.php">Your Donations</a></li>
					<li><a href="../impact/index.html">About</a></li>
					<li><a href="../impact/index.html">Contact us</a></li>
				</ul>
			</nav>
    <div class="container">
        <h1 class="header">Payment Details</h1>
        <p class="subtitle">Review your tree plantation details:</p>
        <p>Name: <?php echo htmlspecialchars($name); ?></p>
        <p>Number of Trees: <?php echo htmlspecialchars($noOfTrees); ?></p>
        <p>Tree Type: <?php echo htmlspecialchars($treeType); ?></p>
        <p>Area: <?php echo htmlspecialchars($area); ?> </p>
        <p>Total Price: ₹<?php echo number_format($price, 2); ?></p>
        
        <!-- Add your payment form or payment processing logic here -->
        <form action="processPayment.php" method="post">
            <!-- Your payment form fields go here -->
            <button type="submit" class="btn">Proceed to Pay</button>
        </form>
    </div>
</body>
</html>
