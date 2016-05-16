<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>


<H2> Affichage des messages reçus</H2>
<?php

	$sqlmessage = "SELECT 		*
		FROM 		contact " ;
		
		$messages= $pdo->query($sqlmessage); ?>
		
		<table id="tableau_messages">
		<tr>
			<th>id</th>
			<th>Prénom Nom</th>
			<th>mail</th>
			<th>tel</th>
			<th>Objet</th>	
			<th>Message</th>	
		</tr>
		<?php 
		while ($message = $messages->fetch()) {
		?> <tr>
			<td><?php echo $message['contact_id']?></td>
			<td><?php echo $message['contact_prenom'].' '.$message['contact_nom']?></td>
			<td><?php echo $message['contact_email']?></td>
			<td><?php echo $message['contact_telephone']?></td>
			<td><?php echo $message['contact_objet']?></td>
			<td><?php echo $message['contact_message']?></td>
			</tr>
		<?php 
		}?> 
		</table>		
<H2> Création du fichier CSV de la liste des messages.</H2>
		
		<p><a href="administration_liste_contenu.php">Retour</a>
			
