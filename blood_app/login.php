<?php

include 'config.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login page</title>
	<link rel="stylesheet" href="web.css">
</head>
<body>

	<h2>Welcome to Blood Donation Management System</h2>
		<div id="form">

			<img src="6.jpg" alt="" id="img"> <br><br>
				<form action="login.php" method="POST">

					<label>User-Email</label><br>
					<input type="email" name="email" placeholder="Enter your Email" id="hero"><br><br>

					

					<label>User-Password</label><br>
					<input type="Password" name="pass" placeholder="Enter your Password" id="hero"><br><br>

				

					<input name="login" type="Submit" id="button" value="Log-In">
					
					<a href="reg.php">	<input name="reg" type="button" id="button" value="Registration"></a>

				</form>




<?php

    if(isset($_POST['login'])){
  
  $email= $_POST['email'];
  $pass=$_POST['pass'];
  
  $check = "select*from user where email='$email' AND password ='$pass'";
  $check_work= mysqli_query($con,$check);
  
  if($check_work){
   if(mysqli_num_rows($check_work) > 0 ){
    
    echo"
    <script>
    alert('You are Successfully  Logged in');
    window.location.href='home.php';
    </script>
    ";
    
   }else{
    
    echo"
    <script>
    alert('Password or Email are not Correct ');
    window.location.href('register.php');
    </script>
    ";
   }
   
   
  }else{
   
   
    echo"
    <script>
    alert('Database Error  ');
    window.location.href('login.php');
    </script>
    ";
  }
  
  
  
 }else{
  
  
 }





?>


		</div>
	
</body>
</html>