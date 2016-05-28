<!DOCTYPE html>
<html>

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
  	
  	
 	$choixZic=$_POST ['choixZic'];
 	echo (' id choix membre: '. $choixZic);
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

		<H2><?php echo ('Bienvenue '.$membre['mem_prenom']);?><br> 
		
			<?php	$_SESSION['vientDeAdminContenu']=1; ?> </H2>
  		 		
  		<p>Attention, toute modification influe sur le contenu de la base de donnée...</br>
  		Soyez sûr de ce que vous faites.</p>
  		
  		
  		
	</span>
	<?php 
		
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
