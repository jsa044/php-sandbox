<?php
	require 'database.php';
	if(!empty($_POST['email']) && !empty($_POST['password'])):
		
		//Enter new user in database
		$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
		$stmt = $conn->prepare($sql);
		
		//Bind the parameters
		
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
		
		//Execute the above statements
		
		if( $stmt->execute() ):
			die('Success');
		else:
			die('Fail');	
		endif;	
		
	endif;	
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Register Below</title>
		<link rel="stylesheet" type='text/css' href='assets/css/style.css'>
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	</head>
	
	<body>
		
		<header>
		   <a href="index.php">Intentional Energy</a>
	    </header>  
		   <h1>Register</h1>
		   <span>or <a href="login.php">Login here</a></span>
		   
		<form action="register.php" method="POST">
				<input type="text" placeholder="Enter your email" name="email">
				<input type="password" placeholder="and password" name="password">
				<input type="password" placeholder="confirm password" name="confirm_password">
				
				<input type="submit" value="Submit">				
		</form>   
	</body>	
</html>	
