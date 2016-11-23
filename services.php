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
<title>Services-Real estate</title>
</head>
<body>



<?php include("includes/header.php");?>



<h2>Popular houses</h2>
<div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive center-block" src="http://oglasi.cc/wp-content/uploads/2012/07/389709-500x375.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="http://kuce-prodaja.com/wp-content/uploads/2013/07/kuce-prodaja.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="http://www.crozilla-nekretnine.com/images/estate/web/3/2/g.4231582.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive center-block" src="http://www.vile-mjm.hr/vile/vila-g.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="row">
     <div class="col-sm-4">
      <h3>Kuca u centru </h3>
      <p>Ako vas zanima urbaninacin zivota ovo je prava stavr za vas</p>
     <img src="http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg" alt="nesto" class="img-thumbnail">
    </div>
    <div class="col-sm-4">
   <h3>Kuca u centru </h3>
      <p>Ako vas zanima urbaninacin zivota ovo je prava stavr za vas</p>
     <img src="http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg" alt="nesto" class="img-thumbnail">
    </div>
    <div class="col-sm-4">
   <h3>Kuca u centru </h3>
      <p>Ako vas zanima urbaninacin zivota ovo je prava stavr za vas</p>
     <img src="http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg" alt="nesto" class="img-thumbnail">
    </div>
  </div>
  <div class="row">
     <div class="col-sm-4">
      <h3>Kuca u centru </h3>
      <p>Ako vas zanima urbaninacin zivota ovo je prava stavr za vas</p>
     <img src="http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg" alt="nesto" class="img-thumbnail">
    </div>
    <div class="col-sm-4">
   <h3>Kuca u centru </h3>
      <p>Ako vas zanima urbaninacin zivota ovo je prava stavr za vas</p>
     <img src="http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg" alt="nesto" class="img-thumbnail">
    </div>
    <div class="col-sm-4">
   <h3>Kuca u centru </h3>
      <p>Ako vas zanima urbaninacin zivota ovo je prava stavr za vas</p>
     <img src="http://www.eurolineslovakia.sk/Rodinne-domy-Euroline-Vila-1352.jpg" alt="nesto" class="img-thumbnail">
    </div>
  </div>
</div>


<?php include("includes/footer.php");?>


</body>
</html> 

