<?php

include 'dbh.php';


$email = $_POST['email'];
$password = $_POST['password'];	
$confirmpassword = $_POST['confirmpassword'];	


if(empty($_POST['email'])){

	     header("Location:register.php?error=email");
		
		exit();
	}
	
	//Validate the password 
	if (empty($_POST['password'])){
		 header("Location:register.php?error=password");
	
		exit();
	}
	
	
	//Check the two passwords for equality:
	if ($_POST['password'] != $_POST['confirmpassword']) {
		  header("Location:register.php?error=confirmpassword'");
		
		exit();
	}



    
		$sql= "SELECT id FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0) {
			 header("Location:register.php?error=email");
			print '<p class="error">Email Existed!.</p>';
			exit();
		} 
		//If there were no errors, print a success message: 
		else {
			mysqli_free_result($result);
			$sql = "INSERT INTO users (email,password,confirmpassword)
			VALUES ('$email','$password','$confirmpassword')";
			$result = mysqli_query($conn, $sql);
			
			print '<p style="color:red" "font-size:300%" "text-align:center;">You have been successfully registered.</p>';
			echo '<script>setTimeout(function(){window.open("index.php","_self");}, 2000);</script>';
		}
		

	
?>