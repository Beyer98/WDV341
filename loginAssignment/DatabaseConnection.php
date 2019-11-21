<?php

	$servername = "localhost";

	$username = "slbeyer2_wdv341";

	$password = "Pandapo1?";



	try {

   		$conn = new PDO("mysql:host=$servername;dbname=slbeyer2_wdv341", $username, $password);

   		// set the PDO error mode to exception

   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   		echo "<script>console.log('Connected successfully') </script>";

  	 }

	catch(PDOException $e)

   	{

   		echo "Connection failed: " . $e->getMessage();

   	}

?>