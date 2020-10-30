<?php  
	
	$mysqli = new mysqli("localhost", "root", "2468");
	 
	// Check connection
	if($mysqli === false){
	    die("ERROR: Could not connect. " . $mysqli->connect_error);
	}
	 
	// Print host information
	echo "Connect Successfully. Host info: " . $mysqli->host_info;
	 
	// Close connection
	$mysqli->close();


?>