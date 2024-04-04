<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Plantation Details</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>

body{
			background: url(../assets/11.jpg) no-repeat;
			background-size: cover;
	        height: 100vh;
              }
        .navbar{
	position: fixed;
	height: 120px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(157, 228, 85, 0.726);
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

.navbar{
	position:fixed;
	height: 120px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(132, 220, 44, 0);
}



    </style>
</head>
<body>

<nav class="navbar">
				
				<img class="logo" src="../assets/logo.png">
			
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="yourdonations.php">Your Donations</a></li>
					<li><a href="../impact/index.html">About</a></li>
					<li><a href="../impact/index.html">Contact us</a></li>
				</ul>
			</nav>
    <div class="container">
        <h1 class="header">Hi, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
        <p class="subtitle">Enter tree plantation details:</p>
        <form action="processDetails.php" method="post">
            <input type="number" name="noOfTrees" placeholder="Number of Trees" class="input-box">
            <br>
            <label for="treeType" class="subtitle">Select tree type:</label>
            <select name="treeType" class="select-box">
                <option value="oak">Mango</option>
                <option value="pine">Jamun</option>
                <option value="maple">Ashoka Tree</option>
            </select>
            <br>
            <label for="area" class="subtitle">Select planting area(in sq.mtrs):</label>
            <input type="number" name="area" placeholder="Area" class="input-box">
            <br>
            <button type="submit" class="btn">Calculate Price</button>
        </form>
        <p id="price" class="price"></p>
        <br>
        <!-- <button onclick="processPayment()" class="btn">Proceed to Payment</button> -->
    </div>
</body>
</html>
