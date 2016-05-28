<!DOCTYPE html>
<html>

<!-- ================ Connection bdd via PDO ================ -->
<?php include("./includes/connection.php"); ?>

<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="validation modif membre"/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | validation modif membr </title>
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
  
    <H1>Page d'administration </br>Validation modif membre <span class="cachee">Soul Latitude</span></H1>
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
<!-- ===================== MENU ===================== -->
	<?php include("includes/menu.php");  ?>
<!-- ================================================ -->

	<section id="administration">

  	
  	<?php /*recupération en POST des données à transmettre pour la connection à la bd */
  	 /*echo ('log de session: '.$_SESSION['login']); test*/
  	
 if ( isset($_SESSION['login'])) {
 
 		/* récup des variables */
 		$choixZic=$_SESSION['choixZic'];
 		$mem_description_musico = $_POST ['mem_description_musico'];
 		
 		echo $choixZic;
		?></br><?php
		
		
 		echo $mem_description_musico;
		?></br><?php
 		
 		$mem_sexe = $_POST ['mem_sexe'];
 		echo $mem_sexe;
 
 		?></br><?php










	/*--------INSERTION EN BD -----------------*/
	
	$sql_update_membre = "	UPDATE 	membre
							SET mem_sexe = ?
							WHERE mem_id = ? " ;
			
  	/* requete préparée */
  	$preparee = $pdo->prepare($sql_update_membre);
  	$nouvelles_valeurs= array ($mem_sexe , $choixZic);
	$preparee->execute ($nouvelles_valeurs);





	}

  	else { ?>
  	<H2>Vous n'êtes plus connectés.</H2>
  	<p><a href="connection_back_office.php"><img src="./images/boutonRetour.png"></a><p>
  	 
  	 
  <?php	}

?>


</section> 

<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
