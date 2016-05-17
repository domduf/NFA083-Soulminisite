<!DOCTYPE html>
<html>




<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | connection </title>
<link href="./css/soul.css" rel="stylesheet" type="text/css" />
</head>
<!-- ======================================================= -->


<body>

<!-- ===================== TITRE ===================== -->
<header id="TitreSoul">
  <section>
    <p>      <?php include("./includes/bouton_connect.inc.php"); ?>      </p>
  </section>
  <section id="Titre" >
  
    <H1>Connection </br>back-office <span class="cachee">Soul Latitude</span></H1>
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


  		<?php 

  		
  		if (!isset ($_SESSION['login'])) { /* si pas encore connecté */?> 
  		<span>
  		
  		<H2>Administrateur du site, connectez vous:</H2>
  		<form name="formConnect" method="POST" action="./administration_liste_contenu.php">
  			<table>
  	     		<tr>
        			<th >login</th>
        			<td ><input type="text" size="25" name="user-name" value="toto" id="user-name"/></td>
      			</tr>

      			<tr>
        			<th >mot de passe</th>
        			<td ><input type="password" size="10" name="user-passwd" id="user-passwd" /></td>
      			</tr>	      
      			
      			<tr>
        			<th  >Se connecter</th>
        			<td ><input type="submit" name="soumission" id="soumission" value="Soumettre" /></td>
      			</tr>	
 
  			</table>
  		</form>
  		</span>
  		<?php }
  		
  		else { /* si déjà connecté */ ?>
  		<span id="administration">
  			<H2 ><?php echo $_SESSION['login'];?>, vous êtes connecté,</br> que voulez vous faire ?</H2>

  			<form name="formdeConnect" method="POST" action="./administration_deconnection.inc.php">
  			<table> 
  				<tr>
      				
      				<td><a href="administration_liste_contenu.php"><img src="./images/boutonRetour.png"></a> à la liste d'administration</td>
      			</tr>
      			<tr>
        			
        			<td><input type="submit" name="soumission" id="soumission" value="Vous déconnecter" /></td>
      			</tr>
	
  			</table>
  		</form>	
  			
  		</span>
  		<?php
  		
  		}
  		 
  		 ?>

	


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
