<!DOCTYPE html>
<html>

<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>




<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | Musicos </title>
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

<!-- ======================================================= 

<section id="accrocheAccueuil">
    
    <p><img src ="./images/uneMachineDeDix.jpg" /></p>
</section>
<!-- ===================== VISUEL ===================== -->


<!-- ============= Test de la BDD via functions.php ========= 
<span id="testbdd">
	<p>test ici </p>
	<?php
		$requete1=" SELECT mem_nom N, mem_prenom P FROM  WHERE mem_persona LIKE 'G%' ORDER BY mem_nom "; /* tester la connection et afficher ttes les données de la table membre */
		require("includes/functions.php");
		
		afficherbdd($requete1);
	?>
</span>  -->
	
	




<section id="centre">
	<!-- ===================== MENU ===================== -->
	<?php include("includes/menu.php"); ?>




	<!-- ================== Article ici ======================= -->
    <span id="article-musicos"><img src ="./images/uneMachineDeDix.png" />
    
	<!-- ============= Test de la BDD via PDO ========= -->	

	<p>test ici </p>
	<?php
	$sql = "SELECT mem_nom, mem_prenom, mem_lien_photo, mem_article FROM membre WHERE mem_activite = 'oui'";
	$musicos= $pdo->query($sql);
	while ($musico = $musicos->fetch()) {?>
		<p><?php echo $musico['mem_prenom']; ?> 
		<img src =" <?php echo $musico['mem_lien_photo'] ; ?> "/>
		<br/> 
		<?php echo $musico['mem_article']; ?> 
		<?php
		}
	
	?>


<!-- Ecriture article HTML classique 
    
    <p><img src ="./images/musicos/Dine.jpg" /> La plus belle: Sandrine</p>
    <p><img src ="./images/musicos/Michel.jpg" /> Le plus grand: Michel</p>
    <p><img src ="./images/musicos/StfD.jpg" /> Le plus fort: Stephane</p>
    <p><img src ="./images/musicos/Ribus.jpg" /> Le plus rapide: Ribus</p>
    <p><img src ="./images/musicos/ArnoGuitare.jpg" /> Le plus agile: Arnaud</p>
    <p><img src ="./images/musicos/Bol.jpg" /> Le plus responsable: Bobol</p>
    <p><img src ="./images/musicos/Nono.jpg" /> Le plus charmeur: Nono</p>    
    <p><img src ="./images/musicos/StfG.jpg" /> Le plus souple: Stephane</p>
    <p><img src ="./images/musicos/Dom.jpg" /> Le plus long: Dom</p>
    <p><img src ="./images/musicos/Pip.jpg" /> Le plus calin: Pip</p>
    </span>
-->

	</section>
<!-- ======================================================= -->




<?php include("includes/basDePage.php"); ?>

</body>

</html>
