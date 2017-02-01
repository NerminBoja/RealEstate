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
<title>Apartmants-Real estate</title>
</head>
<body>



<?php include("includes/header.php");?>

<!--
<div id="pretraga">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Pretrazite kuce" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right meni" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filtriraj </label>
                                    <select class="form-control">
                                        <option value="0" selected>Sve</option>
                                        <option value="1">Preporucene</option>
                                        <option value="2">Najpopularnije</option>
                                        <option value="3">Najbolje ocjene</option>
                                        <option value="4">Najvise komentarisane</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Izdavac</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </div>
</div>
</div>

</div>-->








<div class="container">
  <div class="row">
     <?php
		
		$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

	
	$resultrow = mysqli_query($con, "select * from apartmants ");

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



<?php include("includes/footer.php");?>


</body>
</html> 

