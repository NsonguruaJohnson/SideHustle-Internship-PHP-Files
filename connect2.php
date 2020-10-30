<?php

/* Attempt to start MySql server connection with user 'root' and password '2468'. no databse is specified yet
	
	*/

	try{
		$pdo = new PDO ("mysql:host=localhost", 'root', '2468' );

		

		// Set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Print host information
		echo "Connect successfully. Host info: " . $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
	} catch (PDOException $e) {
		die("Error: Could not connect. " . $e->getMessage());
	}

	// Close connection
	unset($pdo);
?>