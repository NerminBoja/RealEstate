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
<title>Houses-Real estate</title>
</head>
<body>



<?php include("includes/header.php");?>




<div class="container">
  <div class="row">


<?php
	$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

$perpage = 15;

if(isset($_GET["page"])){
$page = intval($_GET["page"]);
}
else {
$page = 1;
}
$calc = $perpage * $page;
$start = $calc - $perpage;
	
	
	$resultrow = mysqli_query($con, "select * from houses Limit $start, $perpage");

$rows = mysqli_num_rows($resultrow);

	if($rows)
	{ 
		$i = 0;
		while($result = mysqli_fetch_array($resultrow, MYSQL_NUM)) 
		{
            print"
			<div class='col-lg-4 col-md-5 col-xs-12'>
				<div><img src=".$result[6]." alt='nesto' class='img-thumbnail'></div>
				<div class='apartman-details'>
                    <div class='adress'><span class='city'>".$result[1]."</span>, ".$result[2]."<br> <span class='price'>$".$result[5]."</span></div>
                    <div class='space'>".$result[3]." m2 — ".$result[4]." rooms</div>
				</div>
			</div>";
			
			
		
         }
	}

?>


</div>
</div>

<div id='pagination'>

<?php include("pagination.php");?>
</div>


<?php include("includes/footer.php");?>


</body>
</html>