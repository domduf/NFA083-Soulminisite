<!DOCTYPE html>
<html lang="fr-fr" >

<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | Formulaire_renseignement  </title>
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
    	<H1>Contact<span class="cachee">Soul Latitude</span></H1>
  	</section>

<!-- ===================== CONTACTS ===================== -->
	<section id="contactsTitre">
    	<H2>Contacts</H2>
    	<p><a href="https://fr-fr.facebook.com/Soul-Latitude-330890707038975/">
    		<img src="./images/facebook.ico" width="20%"/></a> Soul Latitude</p>
    	<p>Mobile: 06 72 27 66 00</p>
  	</section>
</header>
<!-- ======================================================= -->
<!-- ======================================================= -->

<section id="accrocheAccueuil">
    <H3>Merci d'avoir rempli le formulaire.</H3>
    <p>Nous vous contactons au plus vite. </p>


</section>
<!-- ===================== VISUEL ===================== -->

<section id="centre">
	<!-- ===================== MENU ===================== -->
	<?php include("includes/menu.php"); ?>

  	<!-- =========================== Resultat ici ========================= -->
	<div>

	<?php 	

	/* si les données du formulaire ne sont pas déjà entrées en BD */
	if( !isset($_SESSION['formulaire_entreeBD']) || $_SESSION['formulaire_entreeBD']== 0 ) 
		
		{ 
		/* mise à 1 de l'indicateur d'entrée des données du formulaire en BD */
		$_SESSION['formulaire_entreeBD']=1;

		/* securite par fonction ET htmlentities */
		require "./includes/securit_donnees.inc.php";
		$nom=htmlentities($_POST['nom']);
		$prenom=htmlentities($_POST['prenom']);
		$monMail=htmlentities($_POST['monMail']);
		/* mise au format string du no de télephone, afin de récuperer l'éventuel 0 du début  */
		$monTel= htmlentities((string)$_POST['monTel']);
		$choix=htmlentities($_POST['CHOIX']);
		$message=htmlentities($_POST['rem']);	
		
		/*recupération de la date et de l'heure*/
		$contact_dateTime = date('Y-m-d H:i:s');?>
	
	<!-- ========================= Affichage comptre rendu du message ===================== -->
		<H2>Merci M/Mme <?php echo($prenom.' '.$nom);?></H2>
		
		<p>Date et heure d'enregistrement de votre message </br>
		<?php echo ($contact_dateTime); ?></p>

		<H2>Vos coordonnées: </H2>
		
		<p>
		<table id="tableau_messages">
			<tr>
				<td>Votre mail</td>
				<td>Votre télephone</td>
			</tr>
			<tr>
				<td><?php echo ($monMail);?></td>
				<td><?php echo ($monTel);?></td>
			</tr>
		</table>
		</p>
		
		<H2>Votre missive: </H2>
		<p>
		<table id="tableau_messages">
			<tr>
				<td>Objet du message</td>
				<td>Votre message</td>
			</tr>
			<tr>
				<td><?php echo ($choix);?></td>
				<td><?php echo ($message);?></td>
			</tr>
		</table>
		</p>		
		
		
		
		
		<!-- ================ Connection bdd via PDO ================ -->
		<?php include("includes/connection.php"); ?>	


		<?php 
		
		/* requète d'insertion préparée du message dans la bd */
		$sqlInsertionMessage= 
		"INSERT INTO contact (contact_nom, contact_prenom, contact_email, contact_telephone, contact_objet, contact_message, contact_dateTime)
				VALUES (?,?,?,?,?,?,?)";


		/* insertion via pdo */	
		$stmt=$pdo->prepare($sqlInsertionMessage);
		$nouveau_message=array($nom,$prenom,$monMail,$monTel,$choix,$message,$contact_dateTime);
		$stmt->execute($nouveau_message);

		/* affichage du message de l'heure d'enregistrement */
		?>
		<p>
		<?php 
		echo ('Votre message a été enregistré en base de donnée le '.date('d/m/Y').' à '.date('H').'h'.date('i').'min et '.date('s').' s</br>');		
		?>
		</p>
		<?php 
		}
		

		/* si les données du formulaire  sont pas déjà entrées en BD */
	else {?>
			<p>
			<?php 

				echo('Vous devez remplir un autre formulaire, celui ci est déjà enregistré en base de données, merci.');?>
			</p>

			<p><a href="formulaireRenseignement.php"><img src="./images/boutonRetour.png"></a> au formulaire de contact.</p>

			<?php
		}
		?>

	</div>

</section>


<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>

<!-- ============= Appels de scripts JS ================== -->
<script src='./javascripts/localisation.js' type = 'text/javascript' ></script>


</body>

</html>
