<!-- processPayment.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Payment</title>
    <!-- Add Google Pay API script -->
    <script src="https://pay.google.com/gp/p/js/pay.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background: url(../assets/11.jpg) no-repeat;
            background-size: cover;
	               height: 100vh;
        }
 
      

        h1 {
            margin-bottom: 20px;
        }

        #google-pay-button {
            background-color: #4285F4;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        #processed {
            margin-top: 20px;
            background-color: #34A853;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: none; /* Initially hidden */
        }
        .container {
             max-width: 600px;
             margin: 50px auto;
             padding: 20px;
             background-color: #fff;
             box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
             position: absolute;
                top: 15%;
            border-radius:20px;
                
        }
        .navbar{
                    position: fixed;
                    height: 120px;
                    width: 100%;
                    top: 0;
                    left: 0;
                    background-color: rgba(132, 220, 44, 0);
	
                
                  
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
    <h1>Payment Options</h1>
    <br><br>
    <img style="width:30vh; padding:20px;" src="ggpay.png" alt="gpay">
    <br><br>
    <!-- Google Pay button -->
   <center> <button id="google-pay-button">Pay with Google Pay</button> </center>
    

    <!-- Button to process payment and store details -->
    <button id="processed" onclick="processPayment()">Processed</button>
<div>
    
</body>
</html>