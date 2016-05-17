<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>


<H2> Gestion des membres et des musiciens </H2>
<?php

	$sqlmembre = "SELECT 	mem_id, mem_description_musico, mem_civilite,
							mem_nom, mem_prenom, mem_date_naiss
					FROM 		membre " ;
		
		$membres= $pdo->query($sqlmembre); ?>
		
		<table id="tableau_messages">
		<tr>
			<th>id</th>
			<th>Prénom Nom</th>
			<th>description musico</th>
		</tr>
		<?php 
		while ($membre = $membres->fetch()) {
		?> <tr>
			<td><?php echo $membre['mem_id']?></td>
			<td><?php echo $membre['mem_prenom'].' '.$membre['mem_nom']?></td>
			<td><?php echo $membre['mem_description_musico']?></td>
			</tr>
		<?php 
		}?> 
		</table>		

		
		<!-- bouton de retour au choix d'administration -->
		<p><a href="administration_liste_contenu.php"><img src="./images/boutonRetour.png"></a><p>
			
