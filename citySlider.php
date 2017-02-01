<?php


// connection

$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  

// querry for user

$result = mysqli_query($con,"select * from houses ORDER BY price DESC LIMIT 0,3;") 
				or die("Failed to query database".mysqli_error());


		

		while($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
		print
		"<div class='item'>
			  <img class='img-responsive center-block'  src=".$row[6].">
				<div class='carousel-caption'>
					<h3>".$row[1].", ".$row[2]."</h3>
					<p>House with ".$row[4].", ".$row[3]."m2 and it costs $".$row[5].".</p>
				</div>
		</div>";
		}

?>
