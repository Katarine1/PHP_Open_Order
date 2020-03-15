<?php 

	// // Creates an Array of data
	$file = fopen('file.hd', 'a');

	// Variables that take the value of the input field
	$title = $_POST['title'];
	$quantity = $_POST['quantity'];

	// Displays values with a line break
	$text = $title . ' - ' . $quantity . PHP_EOL;

	// Print data
	fwrite($file, $text);

	// Close file
	fclose($file);

	// Forces the page call
	header('location:index.php');
?>