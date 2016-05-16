<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>


<H2> Affichage des messages reçus</H2>
<?php

	$sqlmessage = "SELECT 		*
		FROM 		contact " ;
		
		$messages= $pdo->query($sqlmessage);
		
		if ($message = $messages->fetch()) {
		?> <p>
			<?php echo ' |--  '. $message['contact_id'].'  --| '.$message['contact_nom'].'  '.$message['contact_prenom'].' | '.
						$message['contact_email'].' | '.$message['contact_telephone'].' | '.$message['contact_objet'].' | '.
						$message['contact_message'].' || '; ?>
			</p>
		
		<?php 
		
		}?> 
		
<H2> Création du fichier CSV de la liste des messages.</H2>
		
		<p><a href="administration_liste_contenu.php">Retour</a>
			
