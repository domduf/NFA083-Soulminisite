<!DOCTYPE html>
<html lang="fr-fr" >

<!-- ================ Connection bdd via PDO ================ -->
<?php include("./includes/connection.php"); ?>

<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="liens contenus administrables"/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | adminnistration </title>
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
  
    <H1>Page d'administration </br>Back-office <span class="cachee">Soul Latitude</span></H1>
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
	<?php /*include("includes/menu.php"); */ ?>
<!-- ================================================ -->

  		<section id="administration">

  	
  	<?php /*recupération en POST des données à transmettre pour la connection à la bd */
  	 /*echo ('log de session: '.$_SESSION['login']); test*/
  	
 if ( isset($_SESSION['login'])) {
  	

	if ( $_SESSION['vientDeAdminContenu']==1 ){
  	$_SESSION['choix_administration']=$_POST ['rad-1'];}
  	
  	
  	if ($_SESSION['choix_administration'] == 'messages') {

			/*  test de selection ou non de tri */
		if (!isset ($_POST ['tri_messages'])){
		$_SESSION ['ordre_messages'] = 'contact_id';
		}
			else {
			$_SESSION ['ordre_messages'] = $_POST ['tri_messages'];
			}
  		
  		include("./includes/messages_admin.inc.php");
  	
  	}
  	
  	
  	if ($_SESSION['choix_administration'] == 'musiciens'){
  	
  		include("includes/musiciens_admin.inc.php");
  	
  	}
  	
  	if ($_SESSION['choix_administration'] == 'droits'){
  		echo ('droits mon gars');
  	
  	}
  	
  	}
  	
  	else { ?>
  	<H2>Vous n'êtes plus connectés.</H2>
  	<p><a href="connection_back_office.php"><img src="./images/boutonRetour.png"></a><p>
  	 
  	 
  <?php	}
  	
  	
  
?>

		</section>
</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
