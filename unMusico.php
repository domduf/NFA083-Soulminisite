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
 
 
 	<?php
	
	/* recuperation de la variable transmise par l'URL */
	if (isset ($_GET['idMusico'])) { $idMusico =  $_GET['idMusico'];};
	
	
	/*  Requete de sélection des musiciens, et tri par sexe et prénom */
	$sql = "SELECT 		*
			FROM 		membre 
			WHERE 		mem_id = '$idMusico' AND mem_activite= 'oui' ";
			
	$musicos= $pdo->query($sql);?>
 
 	<?php   /* "Boucle" d'affichage */
	
while ($musico = $musicos->fetch()) {?>
  
  <!-- ============ ICI le titre avec le nom transmis par l'URL ============-->
  <section id="Titre" >
    <H1>
    <?php echo 'Soul\' membre: '?></br><?php  echo $musico['mem_prenom'].',</br> '. $musico["mem_description_musico"].'.'; ?> 
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
   
    
	<!-- mettre instrument joué(s) par musico ici -->
		<?php 
		/*echo ($idMusico);*/
		$sql2 = "SELECT 		inst_nom, mem_id 
			FROM 	 instrument AS I JOIN jouer AS J ON I.inst_id = J.inst_id
			WHERE mem_id=	'$idMusico' ";
			/*echo ($sql2);*/
			$instrus= $pdo->query($sql2);
		?>

	

	
		<!--  lien par l'image, et transmission de l'adressse via l'URL en PHP -->
		<H3>	<?php echo $musico['mem_prenom']. ' '.$musico['mem_nom'].', <br/> '; 
				while ($instru = $instrus->fetch()) {
				echo $instru["inst_nom"].' </br> '; } ?> 
		</H3>
		
		</br>
		<img src ="<?php echo $musico['mem_lien_photo'] ; ?>"/>
		
		
		<p>
		<?php echo $musico["mem_article"]; ?> 
		</p>
		


	
	
	</span>


</section>

<!-- ======================================================= -->

<?php 
		};?>


<?php include("includes/basDePage.php"); ?>

</body>

</html>
