<?php 
		
	echo"Saisir la température en °C:";
	
	$temperatureFraneheit = fgets(STDIN);

	
	$temperatureFraneheit = 1.8*$temperatureFraneheit+32; 
	
	echo"Température en °F :",  $temperatureFraneheit, " °C\n";
	
?>
