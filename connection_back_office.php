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
    <p>                </p>
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

  	<span>
  	
  		<H2>Administrateur du site, connectez vous:</H2>
  		
  		
  		
  		
  		<?php 
  		session_start();
  		
  		if (!isset ($_SESSION['login'])) { /*test*/?> 
  		
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
  		
  		<?php }
  		
  		else {
  		echo $_SESSION['login'];
  		
  		}
  		 
  		 ?>
  
  		<p></p>
  		<p></p>

	</span>


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
