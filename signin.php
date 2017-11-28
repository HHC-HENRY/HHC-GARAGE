<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HHC Login</title>
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

<form action="login.php" method="POST">

	<div class="container-fluid" >
		<div class="row">
			<div class="col-md-offset-1" >
			  <h2 class="text-center">Login</h2><br />
			</div>
		</div>
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

	
</body>

</html>
