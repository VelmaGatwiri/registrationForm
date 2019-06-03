<?php
session_start();
	if(isset($_POST['submit'])){
		include_once 'db.php';
		
		$fname=mysqli_real_escape_string($conn,$_POST['fname']);
		$lname=mysqli_real_escape_string($conn, $_POST['lname']);
		$email=mysqli_real_escape_string($conn, $_POST['email']);
		$uname=mysqli_real_escape_string($conn, $_POST['uname']);
		$psw=mysqli_real_escape_string($conn, $_POST['psw']);
		$gen=mysqli_real_escape_string($conn, $_POST['gen']);
		$dob=mysqli_real_escape_string($conn, $_POST['dob']);
		$swd=mysqli_real_escape_string($conn, $_POST['swd']);
		
		//if(empty($fname) || empty($fname) || empty($fname) || empty($fname) || empty($fname){}
		if(!preg_match("/^[a-zA-Z]*$/", $fname)|| !preg_match("/^[a-zA-Z]*$/", $lname)){
			header("Location: ../RegForm.php?RegForm=invalid");
			exit();
		}
		else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../RegForm.php?RegForm=invalidemail");
				exit();
			}
			else{
				$sql="SELECT * FROM RegTable WHERE username='$uname'";
				$result=mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				
			if($resultCheck >0){
				header("Location: ../RegForm.php?RegForm=usernamealreadyExists");
				exit();
			}
			else{
				$hashedpsw=password_hash($psw, PASSWORD_DEFAULT);
				
				$sql="INSERT INTO RegTable (FirstName, LastName, Email, username, password, gender, DateOfBirth, SecretWord) VALUES ('$fname','$lname','$email','$uname','$hashedpsw','$gen','$dob','$swd');";
				mysqli_query($conn, $sql);
				$_SESSION['username'] = $uname;
				$_SESSION['success'] = "User successfully registered";
				$_SESSION['message']="Registration successful! Added $uname to the Database!";
				echo "$uname, Created successfully";
				header("Location:LogForm.php");
				exit();
				
			}
		}
	}
}
		

	else{
		header("Location: ../RegForm.php");
		exit();
	}
	
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	