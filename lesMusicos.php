<!DOCTYPE html>
<html>

<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>




<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Soul Latitude presentation des musiciens "/>

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
  <section id="Titre" >
  
    <H1>Les Musiciens <span class="cachee">Soul Latitude</span></H1>
  </section>
<!-- ===================== CONTACTS ===================== -->
  <section id="contactsTitre">
    <H2>Contacts</H2>
    <p><a href="https://fr-fr.facebook.com/Soul-Latitude-330890707038975/"><img src="./images/facebook.ico" width="20%"/></a> Soul Latitude</p>
    <p>Mobile: 06 72 27 66 00</p>
  </section>
</header>

<!-- ======================================================= -->





<section id="centre">
	<!-- ===================== MENU ===================== -->
	<?php include("includes/menu.php"); ?>




	<!-- ================== Article ici ======================= -->
    <span>
    <img src ="./images/uneMachineDeDix.png" />
    
	<!-- ============= Test de la BDD via PDO ========= -->	
	<?php
	
	/*  Requete de sélection des musiciens, et tri par sexe et prénom */
	$sql = "SELECT 		mem_id, mem_prenom,mem_description_musico, mem_lien_photo
			FROM 		membre 
			WHERE 		mem_activite = 'oui' 
			ORDER BY 	mem_sexe DESC, mem_prenom";
			
	$musicos= $pdo->query($sql);
	
	/* Boucle d'affichage */
	while ($musico = $musicos->fetch()) {?>
		<p>
		<!--  lien par l'image, et transmission de l'adressse via l'URL en PHP -->
		<a href= "unMusico.php?idMusico=<?php echo $musico['mem_id'];?>">
		<img src ="<?php echo $musico['mem_lien_photo'] ; ?>"/>
		</a>
		
		<?php echo $musico["mem_description_musico"]. ': ' . $musico['mem_prenom'].$musico['mem_id']; ?> 
		</p>
		<?php
		}
	
	?>
	</span>


</section>
<!-- ======================================================= -->




<?php include("includes/basDePage.php"); ?>

</body>

</html>
