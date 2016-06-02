<!DOCTYPE html>
<html lang="fr-fr">

<!-- ================ Connection bdd via PDO ================ -->
<?php include("./includes/connection.php"); ?>

<!-- ======================================================= -->
<head>

	<meta charset="UTF-8" lang="fr"/>
	<meta name="Soul Latitude"  content="liens contenus administrables"/>

	<link rel="icon" href="soullat2.ico" />

	<title>Soul Latitude | connection </title>
	<link href="./css/soul.css" rel="stylesheet" type="text/css" />
</head>
<!-- ======================================================= -->


<body>



<!-- ===================== TITRE ===================== -->
<header id="TitreSoul">
  <section>
    <?php include("./includes/bouton_connect.inc.php"); ?>
  </section>
  

  	
  <section id="Titre" >
  
    <H1>Administration </br>modif. d'un membre<span class="cachee">Soul Latitude</span></H1>
  </section>

<!-- ===================== CONTACTS ===================== -->
  <section id="contactsTitre">
    <H2>Contacts</H2>
    <p><a href="https://fr-fr.facebook.com/Soul-Latitude-330890707038975/"><img src="./images/facebook.ico" width="20%"/></a> Soul Latitude</p>
    <p>Mobile: 06 72 27 66 00</p>
  </section>
</header>	

<!-- ===================== VISUEL ===================== -->

<section id="centre">
<!-- ===================== pas de MENU ===================== -->
	
  <!-- ===============Requete SQL selection du membre ==================== -->

  	<?php /*recupération en POST des données à transmettre pour la connection à la bd */
  	 
  	 
  	if ( isset($_SESSION['login'])) {
  	
 	$choixZic=$_POST ['choixZic'];
 	$_SESSION['choixZic']=$choixZic;

  	$login=$_SESSION['login'];
  	$mdp=$_SESSION['mdp'];
  	
  	$sql_membre = "	SELECT 		*
						FROM 		membre 
						WHERE 		mem_id= '$choixZic' " ;
			
  	$membres= $pdo->query($sql_membre); ?>
 	

  	
	<?php
	/* test de login et mdp */
	if ($membre = $membres->fetch()) {
	
  			 /*echo ('membre: '.$membre['mem_prenom']); test*/?>
  
    <span id="administration"> 
		<?php echo (' id choix membre: '. $choixZic); ?>
		<H2><?php echo ('Modification de '.$membre['mem_prenom'].' '.$membre['mem_nom'].' (id '.$membre['mem_id'].')');?><br> 
		
			<?php	$_SESSION['vientDeAdminContenu']=1;
					$_SESSION ['flag_requete_update_membre']=0 ?> </H2>
  		 		
  		<p>Attention, toute modification influe sur le contenu de la base de donnée...</br>
  		Soyez sûr de ce que vous faites.</p>
  		
  	<form name="modifMembre"  method="POST" action="./administration_modif_membre_validation.php" >
  	
  		<table id="tableau_messages">
			<tr>
				
				<th>mem_id</th>
				<td><?php echo ($membre['mem_id']); ?></td>	
			</tr>
				
			<tr>
				<th>mem_persona</th>
				<td>
				<select name="mem_persona" id ="mem_persona">
		 			<?php 

					if ($membre['mem_persona']=='Gestionaire') {?>
						<option value="Gestionaire" selected="selected">Gestionaire</option>
						<?php }

					else {
					$choix_persona = array('Internaute','Mobinaute' ,'');
					foreach ($choix_persona as $persona) { ?>
							<option value="<?php echo ($persona); ?>" 
									<?php 
										if ($persona == $membre['mem_persona']) { ?>
										 selected="selected" 
										<?php } ?> 
										><?php
									
							echo ($persona); ?>
							</option>
							<?php }} ?>
				</select>
				</td>
		
			</tr>	
			<tr>
				<th>mem_activite</th>
				<td>
				<select name="mem_activite" id ="mem_activite">
		 			<?php 

					
					$choix_activite = array('oui','non');
					foreach ($choix_activite as $activite) { ?>
							<option value="<?php echo ($activite); ?>" 
									<?php 
										if ($activite == $membre['mem_activite']) { ?>
										 selected="selected" 
										<?php } ?> 
										><?php
									
							echo ($activite); ?>
							</option>
							<?php } ?>
				</select>
				</td>
				
			</tr>
						
			<tr>
				<th>mem_description_musico</th>
				<td>
				<input type="text" 
		    name="mem_description_musico" value="<?php echo ($membre['mem_description_musico']); ?>" 
		    id="mem_description_musico"/>
				</td>
			</tr>
						
			<tr>
				<th>mem_civilite</th>
				<td>
				<select name="mem_civilite" id ="mem_civilite">
		 			<?php 
					$choix_civilite = array('M.','Mme','Mlle');
					foreach ($choix_civilite as $civilite) { ?>
							<option value="<?php echo ($civilite); ?>" 
									<?php 
										if ($civilite == $membre['mem_civilite']) { ?>
										 selected="selected" 
										<?php } ?> 
										><?php
									
							echo ($civilite); ?>
							</option>
							<?php } ?>
				</select>
				</td>	
			</tr>

			
			<tr>
				<th>mem_nom</th>
				<td>
				<input type="text" 
		    name="mem_nom" value="<?php echo ($membre['mem_nom']); ?>" 
		    id="mem_nom"/>
				</td>
			</tr>	
					
			<tr>
				<th>mem_prenom</th>
				<td>
				<input type="text" 
		    name="mem_prenom" value="<?php echo ($membre['mem_prenom']); ?>" 
		    id="mem_prenom"/>
				</td>
			</tr>
						
			<tr>
				<th>mem_date_naiss</th>
				<td>
				<input type="date" name="mem_date_naiss" value="<?php echo ($membre['mem_date_naiss']); ?>">
				</td>
			</tr>	
		
			<tr>
				<th>mem_sexe</th>
				<td>
				<select name="mem_sexe" id="mem_sexe">
					<?php 
					
					if ($membre['mem_sexe']=='masculin'){ ?>
					
					<option value="masculin" selected="selected" >masculin</option>
            		<option value="feminin">feminin</option> 
            		
					<?php } 
					
					else { ?>
            		<option value="masculin">masculin</option>
            		<option value="feminin" selected="selected">feminin</option>					
					<?php } ?>	

         		</select>
				</td>
			</tr>
			
			<tr>
				<th>mem_centre_interet</th>
				<td>
					<input type="text" 
					name="mem_centre_interet" id="mem_centre_interet" value="<?php echo ($membre['mem_centre_interet']); ?>"/>
				</td>
			</tr>			
			<tr>
				<th>mem_article</th>
				<td>
					<textarea  
					name="mem_article" id="mem_article"><?php echo ($membre['mem_article']); ?></textarea>
				</td>
			</tr>

			
			<tr>
				<th>mem_lien_photo</th>

				<td><input type="text" 
		    		name="mem_lien_photo" value="<?php echo ($membre['mem_lien_photo']); ?>" 
		    		id="mem_lien_photo"/></td>
			</tr>

			
			<tr>
				<th>mem_membre_bureau</th>
				<td><?php echo ($membre['mem_membre_bureau']); ?></td>
			</tr>			
			<tr>
				<th>mem_email</th>
				<td><?php echo ($membre['mem_email']); ?></td>
			</tr>			
			<tr>
				<th>mem_adres_num</th>
				<td><?php echo ($membre['mem_adres_num']); ?></td>
			</tr>			
			
			<tr>
				<th>mem_adres_rue</th>
				<td><?php echo ($membre['mem_adres_rue']); ?></td>
			</tr>			
			<tr>
				<th>mem_adres_cp</th>
				<td><?php echo ($membre['mem_adres_cp']); ?></td>
			</tr>				
			<tr>
				<th>mem_adres_ville</th>
				<td><?php echo ($membre['mem_adres_ville']); ?></td>
			</tr>						
  		</table>
  		
  		<input type="submit" name="submit" value="Modifier je suis sûr de tout..." />
  		
  	</form>
  		
	</span>
	
	<?php 
		
	}
	
	}

	else {	?>
	<span>
		<H2>Désolé <?php echo ($_SESSION['login']);?>, mot de passe et/ou login incorrect...
		<a href="connection_back_office.php"><img src="./images/boutonRetour.png"></a></H2>
		
	</span>
		
	<?php /* destruction de la session */
	$_SESSION = array();
  	session_destroy();
	}
	
	
	
	?> 


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
