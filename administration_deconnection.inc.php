<!DOCTYPE html>
<html>


<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | deconnection </title>
<link href="./css/soul.css" rel="stylesheet" type="text/css" />
</head>
<!-- ======================================================= -->


<body>
  		<?php  	session_start();
  				$_SESSION = array();
  				session_destroy(); ?>
<!-- ===================== TITRE ===================== -->
<header id="TitreSoul">
  <section>
    <p>      <?php include("./includes/bouton_connect.inc.php"); ?>      </p>
  </section>
  <section id="Titre" >
  
    <H1>Déconnection </br>back-office <span class="cachee">Soul Latitude</span></H1>
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
	<?php include("includes/menu.php"); ?>



  		<span>
  			<H2 >Vous êtes déconnecté.</H2>
  		</span>
  	

	


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
