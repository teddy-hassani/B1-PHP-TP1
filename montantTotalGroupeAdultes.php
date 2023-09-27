<?php 

	define("TARIF_GROUPE", 17);
		
	echo"Saisir le nombre d'adultes: ";
	
	$nbadultes = fgets(STDIN);

	
	$nbadultes = $nbadultes* TARIF_GROUPE; 
	
	echo"Le prix total est de ",$nbadultes, " €\n";
	
?>
