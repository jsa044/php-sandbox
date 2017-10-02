<?php

//Connect to MySQL
$con = mysqli_connect("localhost", "root", "", "shoutit");

//Test Connection

if(mysqli_connect_errno()) {
	
	
	die( "Failed to connect to MySQL: ".mysqli_connect_error());
}


?>