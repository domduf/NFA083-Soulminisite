<!DOCTYPE html>
<html>

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

	<?php 	$nom=htmlentities($_POST['nom']);
		

	if(strlen($nom)<=50) 
		
		{ /* test de la longueur du nom <=50 caractères */

		echo('OK pour le Nom');
		$prenom=htmlentities($_POST['prenom']);
		echo ($prenom);
		$monMail=htmlentities($_POST['monMail']);
		echo ($monMail);
		/* mise au format string du no de télephone, afin de récuperer l'éventuel 0 du début  */
		$monTel= htmlentities((string)$_POST['monTel']);
		echo ($monTel);
		$choix=htmlentities($_POST['CHOIX']);
		echo ($choix);
		$message=htmlentities($_POST['rem']);
		echo ($message);
		?>
		
	<!-- ================ Connection bdd via PDO ================ -->
	<?php include("includes/connection.php"); ?>	


		<?php 
		
		/* requète d'insertion préparée du message dans la bd */
		$sqlInsertionMessage= 
		"INSERT INTO contact (contact_nom, contact_prenom, contact_email, contact_telephone, contact_objet, contact_message)
				VALUES (?,?,?,?,?,?)";


		/* insertion via pdo */	
		$stmt=$pdo->prepare($sqlInsertionMessage);
		$nouveau_message=array($nom,$prenom,$monMail,$monTel,$choix,$message);
		$stmt->execute($nouveau_message);
		}

		else {?>
		<p>
		<?php echo('Le champ \'Nom\' contient beaucoup trop de caractères...('.strlen($nom).') ne seriez-vous pas en train de fomenter quelque chose...');?>
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
