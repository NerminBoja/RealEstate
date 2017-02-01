<?php


// connection

$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
$choosenCity = filter_input(INPUT_GET, 'chooseCity');
$choosenType = filter_input(INPUT_GET, 'type');
$size = filter_input(INPUT_GET, 'size_m2');
$rooms = filter_input(INPUT_GET, 'rooms');
$minPrice = filter_input(INPUT_GET, 'min_price');
$maxPrice = filter_input(INPUT_GET, 'max_price');


if (isset($_GET['search']) && !empty($_GET['chooseCity'])&& !empty($_GET['type'])&& !empty($_GET['size_m2'])&& !empty($_GET['rooms'])&& !empty($_GET['min_price'])&& !empty($_GET['max_price']))
{
	

	
		$resultCount = mysqli_query($con,"select Count(*) as Total from $choosenType WHERE (price BETWEEN '$minPrice' and '$maxPrice') and (space BETWEEN '0' and '$size') and (city = '$choosenCity') and (rooms = '$rooms');") or die(mysqli_error($con));
		$rowCount = mysqli_num_rows($resultCount);
		
		
		
		if($rowCount)

			{

			$rs = mysqli_fetch_assoc($resultCount);
		
			$total = $rs["Total"];
			print"
			<div id='filter_search'>
				Results found: ".$total."
			</div>";
				
			}
	
	$result = mysqli_query($con,"select * from $choosenType WHERE (price BETWEEN '$minPrice' and '$maxPrice') and (space BETWEEN '0' and '$size') and (city = '$choosenCity') and (rooms = '$rooms') ;") or die(mysqli_error($con));
	
	
	while($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
		print"
			<div class='col-lg-4 col-md-5 col-xs-12'>
				<div><img src=".$row[6]." alt='nesto' class='img-thumbnail'></div>
				<div class='apartman-details'>
                    <div class='adress'><span class='city'>".$row[1]."</span>, ".$row[2]."<br> <span class='price'>$".$row[5]."</span></div>
                    <div class='space'>".$row[3]." m2 — ".$row[4]." rooms</div>
				</div>
			</div>";
		}
}



else
{

// querry for user

$result = mysqli_query($con,"select * from houses ORDER BY price LIMIT 0,6 ;") or die(mysqli_error($con));

	
		while($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
			
		print"
			<div class='col-lg-4 col-md-5 col-xs-12'>
				<div><img src=".$row[6]." alt='nesto' class='img-thumbnail'></div>
				<div class='apartman-details'>
                    <div class='adress'><span class='city'>".$row[1]."</span>, ".$row[2]."<br> <span class='price'>$".$row[5]."</span></div>
                    <div class='space'>".$row[3]." m2 — ".$row[4]." rooms</div>
				</div>
			</div>";
		}
}
?>
