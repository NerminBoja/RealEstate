

<div  class="jumbotron text-center site-header" >
 

 <div id="navigacija"> 

<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <p id="navbar-span">☰</p>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a id="meni-font" href="index.php">Home</a></li>
        <li><a id="meni-font" href="houses.php">Houses</a></li>
        <li><a id="meni-font" href="apartmants.php">Apartmants</a></li> 
        <li><a id="meni-font" href="cities.php">Cities</a></li>
		<li><a id="meni-font" href="services.php">Services</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><?php
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
				       		print "<p>Dobrodošao/la</p>
									<form action='logout.php' method='post'>
										<input type='submit' name='login' value='Log Out'></input> 
									</form>";
				   		}
					else {
				 print "<div class='dropdown'>
			  <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Registration
			  <span class='caret'></span></button>
			  <ul class='dropdown-menu'>
				<form action='register.php' method='POST'>
					<li><input id='first-name' type='text' name='firstname' placeholder='first name'></li>
					<li><input id='last-name' type='text' name='lastname' placeholder='last name'></li>
					<label id='lbl-birth-date' for='birth-date'>Date of bith:</label>
					<li><input id='birth-date' type='date' name='birthday' value='1979-12-31'></li>
					<li><input id='first-name' type='text' name='register-username' placeholder='username'></li>
					<li><input id='first-name' type='password' name='register-password' placeholder='password'></li>
					<li><input type='submit' value='Register'/></li>
				</form>
			  </ul>
			    </div>
		
		<li><div class='dropdown'>
			  <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Log In
			<span class='caret'></span></button>
			  <ul class='dropdown-menu'>
				<form action='login.php' method='POST'>
				<li><input id='username' type='text' name='username' placeholder='username'></li>
				<li><input id='password' type='password' name='password' placeholder='password'></li>
				<li><input type='submit' name='login' value='Login'/></li>
				</form>
			  </ul>
			</div>
		</li>";}
		?> 
      </ul>
    </div>
  </div>
</nav>

</div>
  <h1>Pravo mjesto za pravu nekretninu</h1>
</div>
