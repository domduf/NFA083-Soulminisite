<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>

<?php

	$_SESSION['vientDeAdminContenu']=0;
	$tri=$_SESSION ['ordre_messages'];?>

<H2> Affichage des messages reçus</H2>

<!-- ==================================================================  -->		
		<form name="form_tri" method="POST" action="./administration_page.php">
  			
  			<table>	
  		      	<tr>
        			<th>Vous pouvez trier par: </th>
        				<td><input type="radio" name="tri_messages" id="ids"  value="contact_id" />id<br />
							<input type="radio" name="tri_messages" id="prenoms" value="contact_prenom" />Prenoms<br />
             				<input type="radio" name="tri_messages" id="noms" value="contact_nom" />Noms<br />
							<input type="radio" name="tri_messages" id="objets" value="contact_objet" />objet du message<br />
             				<input type="radio" name="tri_messages"  id="dateTimes"  value="contact_dateTime" />Dates Times<br />
             			</td>
      			</tr>	
      			<tr>
        			<th>Tri actuel: <?php echo $_SESSION ['ordre_messages']; ?></th>
        			<td><input type="submit" name="soumission" id="soumission" value="Trier" /></td>
      			</tr>
  			</table>
  		</form>
<!-- ==================================================================  -->




<?php

	$sqlmessage = "SELECT 		*
		FROM 		contact 
		ORDER BY $tri ;" ;
		
		$messages= $pdo->query($sqlmessage); ?>
		
		<table id="tableau_messages">
		<tr>
			<th>id</th>
			<th>Prénom Nom</th>
			<th>mail</th>
			<th>tel</th>
			<th>Objet</th>	
			<th>Message</th>
			<th>Date Time</th>
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
			<td><?php echo $message['contact_dateTime']?></td>
			</tr>
		<?php 
		}?> 
		</table>
		
<H2> Création du fichier CSV de la liste des messages.</H2>
		


		<p><a href="administration_liste_contenu.php"><img src="./images/boutonRetour.png"></a><p>
			
