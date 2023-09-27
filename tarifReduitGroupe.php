<?php
	 define("TARIF_GROUPE", 18);

	 define("TARIF_REDUIT_GROUPE", 15);

	 echo "Saisir le nombre d'adultes: ";

		 $nombreAdultes = fgets(STDIN); 
		 $nbAdultesTR = min($nombreAdultes, 7); 
		 $nbAdultesPT = $nombreAdultes - $nbAdultesTR;
		 $montantTotal = ($nbAdultesTR * TARIF_REDUIT_GROUPE) + ($nbAdultesPT * TARIF_GROUPE);

	 echo "Montant à régler : ", $montantTotal, " €\n";
?>
