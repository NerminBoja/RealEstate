<?php


if(isset($_POST['submit'])) { 
// connection

$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
$username = $_POST['username'];
$password = $_POST['password'];
$error = "Wrong username and/or password!";

//preventing mysql injection

$username = stripcslashes ($username);
$password = stripcslashes ($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string ($con,$password);




// querry for user

$result = mysqli_query($con,"select * from users where username='$username' AND password='$password';") 
				or die("Failed to query database".mysqli_error());


$row = mysqli_fetch_array($result, MYSQLI_NUM);

	if($row[1] == $username && $row[2] == $password)
{
	session_start();
	$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	header("Location: index.php"); 
}
	else
{
	echo '<script>alert("'.$error.'");</script>';
	header("Location: index.php");
}
}





?>