<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head> 
		<title>LoginForm</title>
			<meta charset = "utf - 8" />
				<link rel="stylesheet" type="text/css" href="LogForm.css">
				<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lato|Playfair+Display&display=swap" rel="stylesheet"> 
	</head>
	<body>
		<form method="POST" action="login.php">
		
		<div class="container">
			<div class="avatar">
				<img src="man2-avatar.png" alt="avatar" style="float:left; width:150px; height;100px; ">
			</div>
			<div class="login">
				<h1 style="text-shadow:4px 4px 8px black;color:#DDD; font-family:font-family: 'Lato', sans-serif; font-size:38px;">LOGIN FORM</h1><hr style="border: 1px dashed white;"/>
			</div>
			<label for="uname" style="font-family: 'Playfair Display', serif; font-size:22px; text-shadow:2px 2px 4px #DDD;"><b>Username:</b></label>
				<input type="text" placeholder="Enter your Username/Email" name="uname" required></br>
			<label for="password" style="font-family: 'Playfair Display', serif; font-size:22px; text-shadow:2px 2px 4px #DDD;"><b>Password:</b></label>
				<input type="password" placeholder="Enter your password" name="psw" required></br>
			<button type="submit" class="regButton" name="submit">LOGIN</button>
			<a href="RegForm.php" class="button">CANCEL</a></center></br>
		</div>
		</form>
	</body>
</html>
