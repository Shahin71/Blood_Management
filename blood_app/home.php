<?php

include 'config.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title>apon.org</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="app_css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app_css/web.css">
	
</head>
<body class="bg-dark">
	

      <section>
      	<div class="bg-light">

			
			<h3 class="card-header text-white text-center bg-primary">FIND YOUR NEAREST CORONA RECOVERED BLOOD DONETOR</h3> 
           
		      <form action="home.php" method="POST">
				
				

				<div class="text-center bg-success">Voter-ID</label>
				<input class="bg-light border-primary" type="text" name="name" placeholder="Enter your Voter-ID" id="hero" ><br>

				
				<div class="text-center bg-warning">Blood-Group</label>
				<input class="bg-light border-primary" type="text" name="name" placeholder="Enter your Blood-Group" id="hero" ><br>

				<div class="text-center bg-success">Contact-Number</label>
				<input class="bg-light border-primary" type="text" name="name" placeholder="Confirm your Contact-Number" id="hero" ><br>

				<div class="text-center bg-warning">Location</label>
				<input class="bg-light border-primary" type="text" name="name" placeholder="Confirm your location" id="hero"><br><br>





            <div class="bg-dark">
				<input class="bg-danger"name="logout" type="submit" id="button" value="Log-Out">

				<input class="bg-success" name="h" type="submit" id="button" value="Submit">
			</div>
					
				
				</form>

			
			<?php
				if(isset($_POST['logout']))
					{
						echo"
							<script>
								alert ('You are successfully logged out');
								window.location.href='login.php';
								
							</script>
						";
					}
				else
					{
						///log out
					}

			?>


		</div>
      </section>
		
<!-- SCRIPT -->
   <script type="text/javascript" src="app_js/jquery.js"></script>
   <script type="text/javascript" src="app_js/jquery.min.js"></script>
   <script type="text/javascript" src="app_js/bootstrap.js"></script>
   <script type="text/javascript" src="app_js/bootstrap.min.js"></script>
	
</body>
</html>