<!DOCTYPE html>
<html>

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
    <p>                </p>
  </section>
  <section id="Titre" >
  
    <H1>liste administaration </br>back-office <span class="cachee">Soul Latitude</span></H1>
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

  	<span id="administration">
  	
  	
  	<?php /*données à transmettre pour la connection à la bd */
  	$login=$_POST ['user-name']; $mdp=$_POST ['user-passwd']; ?> 
  	
  		<H2><?php echo 'Bienvenue '.$login.'.'; ?> </H2>
  		
  		
  		<p>Attention, toute modification influe sur le contenu de la base de donnée...</br>
  		Soyez sûr de ce que vous faites.</p>
  		
  		<form action="./administration_liste_contenu.php">
  			<table>
		
 			
  		      	<tr>
        			<th>Votre choix: ?</th>
        				<td >	<input type="radio" name="rad-1" id="rad1" checked="checked" value="adminitrer_gestion_musiciens.php" />Radio 1<br />
             					<input type="radio" name="rad-1" id="rad2" value="item2" />Radio 2<br />
             					<input type="radio" name="rad-1"  id="rad3"  value="item3" />Radio 3<br />
             					<input type="radio" name="rad-1" id="rad4"  value="item4" />Radio 4</td>
      			</tr>
  		</table>
  		</form>
  		<p></p>
  		<p></p>

	</span>


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
