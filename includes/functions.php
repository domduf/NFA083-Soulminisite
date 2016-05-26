<?php /* fichier de connection à la base de donnée, à inclure dans la ou les pages concernées. */

	function afficherbdd($requete) {
		
		/* DECLARATION des Variables de connection à la bdd */
		$serveur = 'localhost';
		$loginserveur = 'root';
		$mdpserveur = '';
		$nombdd = 'soul_5mai';
		
		/* CONNECTION serveur, definition du charset, connection BDD, requete SQL */
		$bdd = mysqli_connect($serveur, $loginserveur, $mdpserveur)
			or die ("Impossible de se connecter : " . mysql_error()); /* affiche erreur si problème */
		$bdd->set_charset('utf8');
		mysqli_select_db($bdd, $nombdd);
		
		$resultat = mysqli_query($bdd, $requete);
		
		/* AFFICHAGE de toutes les données demandées par la requete */
		while ($donnees = @mysqli_fetch_row($resultat)) {
			foreach ($donnees as $don) {
			echo $don . ' | ' ;
			}; ?>
			<br/>
			<br/><?php
		}
	}
		
?>
	
