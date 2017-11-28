<?php
session_start();
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HHC Register</title>
	<link href="css/register.css" rel="stylesheet">
	<script src="js/register.js"></script>
	
	<link rel="stylesheet" type="text/css" href="BootStrap v3.3.7-dist/CSS/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="BootStrap v3.3.7-dist/CSS/bootstrap-theme.css" />
	<script type="text/javascript" language="javascript" src="JQuery v3.2.1/jquery.js" ></script>
	<script type="text/javascript" language="javascript" src="BootStrap v3.3.7-dist/JS/bootstrap.js" ></script>
	
	<link rel="shortcut icon" href="img/classicCar.ico">
</head>
<body>

<body background="img/steering.jpg">

<?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($url, 'error=empty') !== false) {
					print "Fill out all fields";	
					
				}
				
				
				if (strpos($url, 'error=email') !== false) {
					print "Email Existed!";
					
				}
				
				if (strpos($url, 'error=password') !== false) {
					print "Please enter your password"; 
					
				}
				
				 if (strpos($url, 'error=confirmpassword') !== false) {
					print "Your confirmed password does not match the original password"; 
				}
					
					
				?>
				
				

<form action="signup.php" method="POST">
  <h2 class="text-center">Register</h2><br />
  

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1">
			  <div class="form-group">
				<label for="Email">Email address:</label>
				<input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address."value="<?php if (isset ($_POST['email'])) {print htmlspecialchars($_POST['email']); } ?>">
			  </div>
			  <div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" required data-validation-required-message="Please enter your password."value="<?php if (isset ($_POST['password'])) {print htmlspecialchars($_POST['password']); } ?>">
			  </div>
			  <div class="form-group">
				<label for="confirm_password">Confirm Password:</label>
				<input type="password" class="form-control" name="confirmpassword" required data-validation-required-message="Please confirm your password."value="<?php if (isset ($_POST['confirmpassword'])) {print htmlspecialchars($_POST['confirmpassword']); } ?>">
			  </div>
				<p>
					<button type="submit" class="btn btn-default center-block">Submit</button>
				</p>
			</div>
		</div>
	</div>
	
	
</form>

     <!-- Footer -->
    <footer>
        <div class="container text-center">
           <span class="copyright" style="color:white;">Copyright &copy; HHC GARAGE 2017</span>
        </div>
    </footer>
	
</html>