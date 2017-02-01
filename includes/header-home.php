

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
		<li> 
			<?php
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
					{
						print print "<a id='meni-font' href='publishNews.php'>Publish</a>";
					} 
			?>
		</li>
		
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li> 
		<?php
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
				       		print "<p>Welcome</p>
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
					<li><input id='birth-date' type='date' name='birthday' value='1990-12-31'></li>
					<li><input id='first-name' type='text' name='register-username' placeholder='username'></li>
					<li><input id='first-name' type='password' name='register-password' placeholder='password'></li>
					<li><input type='submit' id='loginAndRegister-btn' name='register' value='Register'/></li>
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
				<li><input id='loginAndRegister-btn' type='submit' name='submit' value='Login'/></li>
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
  <h1><a href="index.php"><img id="icon-thumbnail" src="https://images.designtrends.com/wp-content/uploads/2016/01/18050242/House-Sale-Agreement-Icon.png"></a>Best place for best real estate</h1>



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

                                <div class="col-md-12">

            <div class="input-group" id="boot-search-box">

                <input type="text" class="form-control" 
				placeholder="<?php if (isset($_GET['search']))
								{if(!empty($_GET['chooseCity'])&& !empty($_GET['type'])&& !empty($_GET['size_m2'])&& !empty($_GET['rooms'])&& !empty($_GET['min_price'])&& !empty($_GET['max_price']))
									{
										echo "Type a search term like: House in center of Sarajevo";
									} 
								else echo "Fill out all of the fields!!!";
								} 
							else echo "Type a search term like: House in center of Sarajevo"; ?>" />

                <div class="input-group-btn">

                    <div class="btn-group" role="group">

                        <div class="dropdown dropdown-lg">

                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>

                            <div class="dropdown-menu dropdown-menu-right" role="menu">

                                <form class="form-horizontal" action='index.php' method='get' role="form">

                                  <div class="form-group">

                                    <select class="form-control" name='chooseCity'>
										<option hidden>Choose city:</option>

                                        

                                        <?php
										
											$con=mysqli_connect('localhost', 'root', 'root', 'realestatedb');

											if (mysqli_connect_errno())
											  {
											  echo "Failed to connect to MySQL: " . mysqli_connect_error();
											  }
  
  

										// querry for user

											$result = mysqli_query($con,"select distinct city from houses") 
															or die("Failed to query database".mysqli_error());




											while($row = mysqli_fetch_assoc($result))
											{
											print"
													<option name = ".$row['city'].">".$row['city']."</option>
													";
											}
										
										?>

                                    </select>

                                  </div>
									
									<div class="form-group">

                                    <select class="form-control" name='type'>
										<option hidden>Type:</option>

                                        <option value="houses">Houses</option>

                                        <option value="apartmants">Apartmants</option>

                                        <option value="studios">Studios</option>
                                    </select>

                                  </div>
 

                                 <div class="form-group">

                                <div class="col-sm-6">
									<input type="number" class="form-control" name="size_m2" id="size-m2" min="0" max="500" placeholder="Size in m2"> <br/><br/>

                                    <input type="number" class="form-control" name="rooms" id="rooms"  placeholder="Rooms"><br/><br/>
									
                                </div>
								
								<div class="col-sm-6">

                                    <input type="number" class="form-control" name="min_price" id="min-price" placeholder="Min. price"><br/><br/>

                                    <input type="number" class="form-control" name="max_price" id="max-price" placeholder="Max. price"> <br /><br />
                                </div>

                                  <br /><br /><br /><br />                        
								<a href="/search/">
                                  <button type="submit" name="search" class="btn btn-primary btn-block">Search: <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </a>
								</form>

                            </div>

                        </div>
                        <button type="button" class="btn btn-success "><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					
                    </div>

                </div>

            </div>

          </div>

        </div>

                </div>

</div>

</div>

