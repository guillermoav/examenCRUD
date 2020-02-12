<?php  
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$bd = 'crud_2019';

	$conn = new mysqli($server,$user,$password,$bd);

	if ($conn-> connect_error) {
		die('error de conexion'.$conn-> connect_error);
	}
?>