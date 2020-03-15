<?php 

	// Creates an Array of data
	$orders = Array();

	// Opens the text file
	$file = fopen('file.hd', 'r');

	// Error the Array and display the data
	while(!feof($file)) {
		$register = fgets($file);
		$orders[] = $register;
	}

	// Close file
	fclose($file);

	//print_r($orders);
?>