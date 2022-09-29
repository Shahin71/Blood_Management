<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="web.css">
</head>
<body>
	<h2>Welcome to Blood Donation Management System</h2>
		<div id="form">

			<img src="3.png" alt="" id="img">
			<form action="reg.php" method="POST">

			<label>User-Name</label><br>
			<input type="text" name="name" placeholder="Enter your Name" id="hero" required=""><br><br>

			<label>User-Email</label><br>
			<input type="email" name="email" placeholder="Enter your Email" id="hero" required=""><br><br>

			
			<label>User-Password</label><br>
			<input type="Password" name="pass" placeholder="Enter your Password" id="hero" required=""><br><br>

			<label>Confirm-Password</label><br>
			<input type="password" name="cpass" placeholder="Confirm your Password" id="hero" required=""><br><br>

			<input name="reg" type="Submit" id="button" value="sign-up">
			
			<a href="login.php"><input name="back" type="button" id="button" value="Back to Log-in"></a>
			

			</form>



		<?php
				if(isset($_POST['reg']) )
				{

				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$cpass = $_POST['cpass'];

				if($pass == $cpass){
					$query="select*from user where email='$email' ";


					$query_check= mysqli_query($con,$query);

					if($query_check){

					if(mysqli_num_rows($query_check)>0){
						
						echo"
						<script>
							alert ('Email Alredy In Use');
							window.location.href='login.php';
						</script>
						";


				}
				else

				{
						$insertion= "insert into user values('$name','$email','$pass')"; 

						$run= mysqli_query($con,$insertion);

							if($run){

								echo"
								<script>
									alert ('you are successfully Registered');
									window.location.href='home.php';
								</script>

								";


				}
				else
				{
			 			echo"
						<script>
							alert ('Connection Failed');
							window.location.href='reg.php';
						</script>
						";
				}




			}

				}else{
						echo"
						<script>
							alert ('Database Error');
							window.location.href='reg.php';
						</script>

						";
			}

			}
				else{
						echo"
						<script>
							alert ('Password & Confirm-Password dose note match ');
							window.location.href='reg.php';
						</script>
						";
			}

			}

			else{

		}


		?>


		</div>
</body>
</html>