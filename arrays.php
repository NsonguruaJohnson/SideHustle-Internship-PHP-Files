<?php  
	
	// Numeric Array
	$User = ["Nsongurua", "Precious" , "Johnson", "Gold", "Excellent"];

	 echo $User[0];

	// Associative Array
	$password = ["Nsongurua" => "123pwd",
	 			"Precious" => '2468',
	 			"Johnson" => '135.y!',
	 			"Gold" => '@#qwerty',
	 			"Excellent" => '09877'];

	echo $password['Excellent'];
	echo "<h3>". $password['Excellent']. "</h3>";

	// Multidimensional Array
	$store = [
		"Phones" 	=> ["Gionee S10 Lite", "Gionee S11", "Samsung 10", "iPhoneX Max"],
		"Cars" 		=> ["BMW", "Benz", "Ferrari", "Lamborghini"],
		"Shoes" 	=> ["Sneakers", "Joggers", "Palms", "Cover front"]

				];

	echo $store["Shoes"][1] . "<br>";
	echo $store["Cars"][2];

?>