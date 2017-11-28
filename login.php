<?php
session_start();
include 'dbh.php';


$email = $_POST['email'];
$password = $_POST['password'];


$_SESSION['email'] = $email;
$sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."';";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	header("Location:../HHC/signin.php?error=emailpassword");
}
else {

	$_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
	$_SESSION['role'] = $row['role'];
	
header("Location:index.php");
}


	
?>