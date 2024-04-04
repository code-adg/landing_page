<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Plantation Form</title>
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

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    position: absolute;
    top: 20%;
    left:30%;
    border-radius: 20px;
}
    </style>
</head>
<body>


			<nav class="navbar">
				
				<img class="logo" src="logo.png">
			
				<ul>
					<li><a  href="index.html">Home</a></li>
					<li><a href="yourdonations.php">Your Donations</a></li>
					<li><a href="../impact/index.html">About</a></li>
					<li><a href="../impact/index.html">Contact us</a></li>
				</ul>
			</nav>
        <br><br><br><br><br><br><br><br><br>

    <div class="container">
        <h1 class="header">Hi, there!</h1>
        <p class="subtitle">Select an occasion:</p>
        <form action="processForm.php" method="post">
            <select name="occasion" class="select-box">
                <option value="birthday">Birthday</option>
                <option value="anniversary">Anniversary</option>
                <option value="noOccasion">Just want to contribute</option>
            </select>
            <br>
            <p class="subtitle">Enter your name:</p>
            <input type="text" name="name" class="input-box">
            <br>
            <button type="submit" class="btn">Next</button>
        </form>
    </div>
    
</body>
</html>
