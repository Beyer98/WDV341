<?php

// Bridesmaids

	// Megan
	$maidObject->title = "Maid of Honor";
	$maidObject->maid_name = "Megan Dirks";
	$maidObject->maid_time = "Friend (Good friends with bride since day 1!)";
	$maidObject->maid_img = "images/megan.jpg";
		
	$myJSON = json_encode($maidObject);
	
	$my_file = $maidObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
	
	// Erica
	$maidObject->title = "Bridesmaid";
	$maidObject->maid_name = "Erica Egesdal";
	$maidObject->maid_time = "Friend (Sister of the bride.)";
	$maidObject->maid_img = "images/erica.jpg";
		
	$myJSON = json_encode($maidObject);
	
	$my_file = $maidObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

	// Amber
	$maidObject->title = "Bridesmaid2";
	$maidObject->maid_name = "Amber Cusimano";
	$maidObject->maid_time = "Friend (Good friends with bride since day 1!)";
	$maidObject->maid_img = "images/amber.jpg"; // Cupcakes a cupcake_img object directing to the jpg file 
		
	$myJSON = json_encode($maidObject);

	$my_file = $maidObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

	// Makayla
	$maidObject->title = "Bridesmaid3";
	$maidObject->maid_name = "Makayla Nook";
	$maidObject->maid_time = "Friend (Cousin of the bride.)";
	$maidObject->maid_img = "images/makayla.jpg"; // Cupcakes a cupcake_img object directing to the jpg file 
		
	$myJSON = json_encode($maidObject);

	$my_file = $maidObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

// Groomsmen

	// Jay
	$manObject->title = "BestMan";
	$manObject->man_name = "Jay Beyer";
	$manObject->man_time = "Brother of Groom";
	$manObject->man_img = "images/jay.jpg";
		
	$myJSON = json_encode($manObject);

	$my_file = $manObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

	// Chase
	$manObject->title = "Groomsman";
	$manObject->man_name = "Chase Beyer";
	$manObject->man_time = "Brother of Groom";
	$manObject->man_img = "images/chase.jpg";
		
	$myJSON = json_encode($manObject);

	$my_file = $manObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

	// Tyler
	$manObject->title = "Groomsman2";
	$manObject->man_name = "Tyler Egesdal";
	$manObject->man_time = "Brother of the Bride";
	$manObject->man_img = "images/tyler.jpg";
		
	$myJSON = json_encode($manObject);

	$my_file = $manObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);

	// Michael
	$manObject->title = "Groomsman3";
	$manObject->man_name = "Michael Buma";
	$manObject->man_time = "Friend of Groom since day 1!";
	$manObject->man_img = "images/michael.jpg";
		
	$myJSON = json_encode($manObject);

	$my_file = $manObject->title . ".js";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
	
?>