<?php 

/*******************************************************************
 *Author:  Jeff Allaire
 *Description:  Build a PHP login page. 
*********************************************************************/ 

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	/*echo $_POST['email'] . "</br>";
	echo $_POST['password'];
	*/
	die();
	
	//Next step is to query the database and check if the user name and password is correct	
endif;	
 ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login Below</title>
		<link rel="stylesheet" type='text/css' href='assets/css/style.css'>
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	</head>
	
	<body>
		
		<header class="header">
			<a href="index.php">Intentional Energy</a>			
		</header>
		<h1>Login</h1>
			<span>or <a href="register.php">register here</a></span>
		<form action="login.php" method="POST">
				<input type="text" placeholder="Enter your email" name="email">
				<input type="password" placeholder="and password" name="password">
				
				<input type="submit" value="Submit">
				
		</form>
	</body>	
</html>	