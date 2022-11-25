<?php session_start();


    $con = mysqli_connect('localhost','root','','project');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli:300,700&display=swap');

* {
	box-sizing: border-box;
}

body {
	font-family: 'Muli', sans-serif;
	background-color: #FFF5F3;
	display: flex;
	align-items: left;
	justify-content: center;
	height: 100vh;
	margin: 0;
}

.box {
	background-color: #fff;
  	box-shadow: 0 10px 20px rgba(0,0,0,0.05), 0 6px 6px rgba(0,0,0,0.1);
	border-radius: 20px;
	padding: 40px 60px;
	position: relative;
}
h1{
    text-align: center;
}

.box::before {
	background-color: #FF3D44;
	border-radius: 30px;
	content: '';
	opacity: 0.9;
	position: absolute;
	bottom: -30px;
	right: -30px;
	height: 220px;
	width: 220px;
	z-index: -1;
}

.box img {
	display: center;
	margin-top: 100px;
	margin-bottom: 10px;
	width: 10%;
}

.box h2 {
	margin: 0;
}

.box p {
	line-height: 24px;
}

.btn {
	border-radius: 5px;
  	box-shadow: 0 10px 20px rgba(0,0,0,0.05), 0 6px 6px rgba(0,0,0,0.1);
	color: #fff;
	display: inline-block;
	padding: 10px 15px;
	text-decoration: none;
}

.btn.paypal {
	background-color: #0070ba;
	margin-right: 10px;
}

.btn.patreon {
	background-color: rgb(232, 91, 70);
}




@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}
    </style>
</head>
<body>
<div class="box">
    <h1 class="pp"> WELCOME</h1>
	<img src="img/p.png" alt="coins" />
	<h2>               Donate                 </h2>
	<p>Support your favorite creator. <br/>Donate Now.</p>
	<a href="index.php"  class="btn paypal">
		<i class="fab fa-paypal"></i> Profile
	</a>
	<a href="info.php"  class="btn patreon">
		<i class="fab fa-patreon"></i> donate form
	</a>
    
    <a href="contact.php"  class="btn patreon">
		<i class="fab fa-patreon"></i> About
	</a>
    
    <a href="donartable.php"  class="btn patreon">
		<i class="fab fa-patreon"></i> Donor information 
	</a>
    <a href="logout.php"  class="btn patreon">
		<i class="fab fa-patreon"></i> Logout <br>
	</a>
</div>








</body>
</html>