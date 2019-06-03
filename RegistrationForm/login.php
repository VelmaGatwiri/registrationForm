<?php
session_start();

	if(isset($_POST['submit'])){
		include 'db.php';
		
		$email=mysqli_real_escape_string($conn, $_POST['email']);
		$uname=mysqli_real_escape_string($conn, $_POST['uname']);
		$psw=mysqli_real_escape_string($conn, $_POST['psw']);
		
		if(empty($uname) || empty($psw)){
			header("location: ../LogForm.php?login=emptyFields");
			exit();
		}
		else{
			$sql="SELECT * FROM RegTable where username='$uname' OR Email='$email'";
			$result=mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
				if($resultCheck < 1){
					header("location: ../LogForm.php?login=theuserdoesnotexist");
					exit();
				}
				else{
					if($row = mysqli_fetch_assoc($result)){
						echo $row['username'];
						$hashedPswCheck=password_verify($psw, $row['password']);
						if($hashedPswCheck==false){
							header("location: ../LogForm.php?login=wrongpassword");
							exit();
						}
						elseif($hashedPswCheck==true){
							$_SESSION['us_first'] = $row['FirstName'];
							$_SESSION['us_last'] = $row['LastName'];
							$_SESSION['us_email'] = $row['Email'];
							$_SESSION['us_user'] = $row['username'];
							$_SESSION['us_pass'] = $row['password'];
							$_SESSION['us_gend'] = $row['gender'];
							$_SESSION['us_dateob'] = $row['DateOfBirth'];
							$_SESSION['us_secret'] = $row['SecretWord'];
							
							header("location:index.php");
							exit();
							echo "You are Logged in";
						}
					}
				}
		}
	
		
	}
		else{
			header("location: ../LogForm.php?login=error");
			exit();
		}