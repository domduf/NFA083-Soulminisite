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
    <p><?php include("./includes/bouton_connect.inc.php"); ?>  </p>
  </section>
  <section id="Titre" >
  
    <H1>Contact<span class="cachee">Soul Latitude</span></H1>
  </section>

<!-- ===================== CONTACTS ===================== -->
  <section id="contactsTitre">
    <H2>Contacts</H2>
    <p><a href="https://fr-fr.facebook.com/Soul-Latitude-330890707038975/"><img src="./images/facebook.ico" width="20%"/></a> Soul Latitude</p>
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
		echo ($nom. strlen($nom));
		 if(strlen($nom)<=50) {
								echo('OK');
								}
		$prenom=htmlentities($_POST['prenom']);
		echo ($prenom);
		$monMail=htmlentities($_POST['monMail']);
		echo ($monMail);
		$monTel=htmlentities($_POST['monTel']);
		echo ($monTel);
		$choix=htmlentities($_POST['CHOIX']);
		echo ($choix);
		$message=htmlentities($_POST['rem']);
		echo ($message);
		
		
		?>

</div>

</section>

<!-- ======================================================= -->
<!-- ======================================================= -->

<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>

<!-- ============= Appels de scripts JS ================== -->
<script src='./javascripts/localisation.js' type = 'text/javascript' ></script>


</body>

</html>
