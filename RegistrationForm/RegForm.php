<!DOCTYPE html>
<html>

	<head>
		<title>RegistrationForm</title>
			<meta charset = "utf - 8" />
				<link rel="stylesheet" type="text/css" href="RegForm.css">
				<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Lato|Playfair+Display&display=swap" rel="stylesheet"> 
	</head>
	
	<body>
		
			<form method="POST" action="server.php">
				
				<div class="container">
					<div class="head">
						<h1 style="text-shadow:4px 4px 8px black; color:#DDD;font-family: 'Lato', sans-serif; font-size:34px;">REGISTRATION FORM</h1><br>
					</div>
					<label for="fname" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD;padding-bottom:10px;"><b>First Name:</b></label>
						<input type="text" placeholder="First Name" name="fname" required></br>
					<label for="lname" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD; padding-bottom:10px;"><b>Last Name:</b></label>
						<input type="text" placeholder="Enter your Last Name" name="lname" required></br>
					<label for="email" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD; padding-bottom:10px;"><b>Email:</b></label>
						<input type="text" placeholder="Enter your Email Address" name="email" required></br>
					<label for="uname" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD; padding-bottom:10px;"><b>Username:</b></label>
						<input type="text" placeholder="Enter your Username" name="uname" required></br>
					<label for="password" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD; padding-bottom:10px;"><b>Password:</b></label>
						<input type="password" placeholder="Enter your password" name="psw" required></br>
					<label for="gen" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD; padding-bottom:10px;"><b>Gender:</b></label>
						<input type="text" placeholder="Enter your Gender" name="gen" required></br>
					<label for="dob" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD; padding-bottom:10px;"><b>Date of birth:</b></label>
						<input type="text" placeholder="DD/MM/YY" name="dob" required></br>
					<label for="swd" style="font-family: 'Playfair Display', serif; font-size:24px; text-shadow:2px 2px 4px #black; color:#DDD;padding-bottom:10px;"><b>Secret Word:</b></label>
						<input type="text" placeholder="Enter a Secret Word" name="swd"></br>
						
					<input type="checkbox" name="T&C" value="tc">I agree to the Terms and Conditions<br>
					<button type="Submit" class="Button" name="submit">SIGN UP!</button>
					<p style="font-family: 'Lato', sans-serif;">Already have an account?</p>
					<a href="LogForm.php" class="regButton">LOGIN</a></center></br>
					
				</div>
			
			</form>
	</body>
	
</html>