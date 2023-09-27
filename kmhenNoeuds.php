<?php 
		
	echo"Saisir la vitesse en noeuds:";
	
	$vitesseNoeuds = fgets(STDIN);

	
	$vitesseNoeuds = $vitesseNoeuds/1.852; 
	
	echo"Résultat de la conversion :", $vitesseNoeuds, " noeuds\n";
	
?>
