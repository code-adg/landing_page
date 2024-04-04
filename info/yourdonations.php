<?php
// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server address or IP
$username = "root"; // Change this to your MySQL username
$password = ""; // Password for your MySQL server
$dbname = "tree_plantation"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT name, occasion, noOfTrees, treeType, price FROM tree_plantation"; // Change this to your table name
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Plantation Records</title>
    <style>
        /* CSS styles for the cards */
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            background-color: #fff;
        }
        .navbar{
	position:fixed;
	height: 120px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(157, 228, 85, 0.726);
}


.logo{
	width: 110px;
	height: auto;
	
	left: 2%;
	top: 1%;
	position:fixed;
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
    </style>
</head>
<body>
<nav class="navbar" style="position: relative;">
			
      <img class="logo" src="../assets/logo.png" style="position: relative;">
    

    
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a href="index.php">Donate now</a></li>
        <li><a href="yourdonations.php">Your Donations</a></li>
        <li><a href="../impact/index.html">About</a></li>
					<li><a href="../impact/index.html">Contact us</a></li>
      </ul>
    </nav>

<?php
// Check if the query was successful
if ($result) {
    // Fetch data from the result set
    while ($row = $result->fetch_assoc()) {
        // Display the data as a card on the web page
        echo '<div class="card">';
        echo "<p>Name: " . $row['name'] . "</p>";
        echo "<p>Occasion: " . $row['occasion'] . "</p>";
        echo "<p>No. of Trees: " . $row['noOfTrees'] . "</p>";
        echo "<p>Tree Type: " . $row['treeType'] . "</p>";
        echo "<p>Price: ₹ " . $row['price'] . "</p>"; 
        echo '</div>';
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

</body>
</html>
