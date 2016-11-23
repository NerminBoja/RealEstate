<?php


if(isset($_POST['register'])) { 
// connection

$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['register-username'];
$password = $_POST['register-password'];
$birthday = $_POST['birthday'];



$error = "Wrong username and/or password!";

//preventing mysql injection

$firstname = stripcslashes ($firstname);
$lastname = stripcslashes ($lastname);
$firstname = mysqli_real_escape_string($con,$firstname);
$lastname = mysqli_real_escape_string ($con,$lastname);
$username = stripcslashes ($username);
$password = stripcslashes ($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string ($con,$password);


// querry for user

$result = mysqli_query($con,"INSERT INTO users (username,password,firstname,lastname,birthday) VALUES ('$username','$password','$firstname','$lastname','$birthday')") 
				or die("Failed to query database".mysqli_error());



}

if($result)
{
	echo "registration confirmed";
	header("Location:index.php");
}



?>