
<?php
   include 'database.php';
 ?>
 
 <?php
   //Create Select Query
   
   $query= 'SELECT * FROM shouts ORDER BY id ';
    $shouts=mysqli_query($con, $query);
 
 ?>


<!DOCTYPE html>

<html lang= 'en-US'>

	<head>
		<meta charset='utf-8'/>
		<title>SHOUT IT!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>

	<body>
		<div id="container">
		
			<header>
				<h1>SHOUT <span id="extra"> Shoutbox</span></h1>
			
			</header>		
			<div id='shouts'>
				<ul>
				
					<?php  while($row = mysqli_fetch_assoc($shouts)) : ?>
					   <li class='shout'><span><?php echo $row['time']?> - </span><strong><?php echo $row['user']?> :</strong> <?php echo $row['message']?></li>
					<?php endwhile; ?>
					
					
				</ul>
			
			</div>  <!--end of shouts-->
			
			<div id='input'>
			
			   <?php if(isset($_GET['error'])) : ?>
			   
				<div class='error'>  <?php echo $_GET['error'];  ?> 	</div>
			   
			   <?php endif; ?>
			
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter your name" />
					<input type="text" name="message" placeholder="Enter your message" />
					<br/>
					<input class="shout-btn" type="submit" name="submit"  value="SHOUT IT!" />
					
					
					
				
			</div>
			
		</div>  <!--end of container-->
	
	</body>



</html>
