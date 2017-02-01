<?php
session_start();	
	
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="index.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Publish news-Real estate</title>
</head>
<body>
<script src="preview.js"></script>

<?php include("includes/header-home.php");?>




<div class="container">
  
	<form id="forma-kontakt" name="dodavanjeNovostiForm" action="publishNews.php" method="post" >
		
		<h2>Publish new real estate</h2>
		<div class="col-sm-3">
		<div><input type="text"   placeholder="City" name="submitCity" required></div><br>
		<div><input type="text"   placeholder="Street" name="submitStreet" required></div><br>
		<div><input type="number"   placeholder="Size in m2" name="submitSize" required></div><br>
		<div><label>Picture URL:</label><INPUT NAME="file_up" TYPE="file" accept="images/jpeg" onchange="readURL(this);" required></div><br>		
		<br><br></div>
		<div class="col-sm-3">
		
		<div><input type="number"   placeholder="Rooms" name="submitRooms" required></div><br>
		<div><input type="number"   placeholder="Price" name="submitPrice" required></div><br>
		<div class="form-group">

            <select class="form-control" name='submitType' required>
				<option hidden>Type:</option>

                <option value="houses">Houses</option>

                <option value="apartmants">Apartmants</option>

                <option value="studios">Studios</option>
            </select>

        </div>
			<button  type="submit" name='submitPublish' value='Publish'>Publish</button>
		<br><br></div>
		<div class="col-sm-6">
		<label>Preview:</label>
		<div><img src="#" alt='nesto' class='img-thumbnail'></div><br>
		</div>
	</form>
	
	
	
</div>


<?php


$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
$type = filter_input(INPUT_POST, 'submitType');
$size = filter_input(INPUT_POST, 'submitSize');
$street = filter_input(INPUT_POST,'submitStreet');
$city = filter_input(INPUT_POST,'submitCity');
$picture=filter_input(INPUT_POST,'file_up');
$rooms = filter_input(INPUT_POST, 'submitRooms');
$price = filter_input(INPUT_POST, 'submitPrice');

$picture = "http://localhost/images/$picture";



if (isset($_POST['submitPublish']) && !empty($_POST['submitCity'])&& !empty($_POST['submitType'])&& !empty($_POST['submitSize'])&& 
	!empty($_POST['submitRooms'])&& !empty($_POST['submitStreet'])&& !empty($_POST['file_up'])&& !empty($_POST['submitPrice']))
{



		$result = mysqli_query($con,"INSERT INTO $type (city, street, space, rooms, price, slika) VALUES ('$city', '$street', '$size', '$rooms', '$price', '$picture');") or die(mysqli_error($con));
		
		if($result)
		{
			print "Success! ID of last inserted record is :  <br/>"; 
		}
		else
		{
			die("Error : ");
		}


}
?>




<?php include("includes/footer.php");?>

</body>
</html> 

