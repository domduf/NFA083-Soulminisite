<!DOCTYPE html>
<html>

<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>




<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Soul Latitude presentation de  "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | Les musiciens </title>
<link href="./css/soul.css" rel="stylesheet" type="text/css" />
</head>
<!-- ======================================================= -->


<body>

<!-- ===================== TITRE ===================== -->
<header id="TitreSoul">
  <section>
    <p>                </p>
  </section>
  
  <!-- ============ ICI le titre avec le nom transmis par l'URL ============-->
  <section id="Titre" >
    <H1>
    <?php if(isset($_GET['prenomMusico']))  {echo 'Soul\' membre: '?></br><?php  echo $_GET['prenomMusico'];} ?> 
    <span class="cachee">Soul Latitude</span></H1>
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




	<!-- ================== Article ici ======================= -->
    <span id="accrocheAccueuil">
   
    
	<!-- ============= Test de la BDD via PDO ========= -->	
	<?php
	
	/* recuperation de la variable transmise par l'URL */
	$prenomMusico =  $_GET['prenomMusico'];
	
	
	/*  Requete de sélection des musiciens, et tri par sexe et prénom */
	$sql = "SELECT 		*
			FROM 		membre 
			WHERE 		mem_prenom = '$prenomMusico' AND mem_activite= 'oui' ";
			
	$musicos= $pdo->query($sql);
	
	/* "Boucle" d'affichage */
	while ($musico = $musicos->fetch()) {?>
		<p>
		<!--  lien par l'image, et transmission de l'adressse via l'URL en PHP -->
		
		<img src ="<?php echo $musico['mem_lien_photo'] ; ?>"/>
		
		
		<?php echo $musico["mem_description_musico"]. ': </br> <H3>' . $musico['mem_prenom']. ' '.$musico['mem_nom']; ?> </H3>
		</p>
		<p>
		<?php echo $musico["mem_article"]; ?> 
		</p>
		<?php
		};
	
	?>
	</span>


</section>
<!-- ======================================================= -->




<?php include("includes/basDePage.php"); ?>

</body>

</html>
