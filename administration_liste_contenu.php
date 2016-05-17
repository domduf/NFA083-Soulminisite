<!DOCTYPE html>
<html>

<!-- ================ Connection bdd via PDO ================ -->
<?php include("includes/connection.php"); ?>

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
    <p>      <?php include("./includes/bouton_connect.inc.php"); ?>          </p>
  </section>
  <section id="Titre" >
  
    <H1>Liste administration </br>Back-office <span class="cachee">Soul Latitude</span></H1>
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

 	
  	<?php /*recupération en POST des données à transmettre pour la connection à la bd */
  	
  	if (!isset($_SESSION['login'])){ /*init des variables de session*/
  	
  			$_SESSION['login']=htmlentities($_POST ['user-name'],ENT_QUOTES); 
  			$_SESSION['mdp']=htmlentities($_POST ['user-passwd'],ENT_QUOTES); 
  	}
  	
 	
  	$login=$_SESSION['login'];
  	$mdp=$_SESSION['mdp'];
  	
  	$sql = "SELECT 		mem_prenom, mem_login, mem_mdp
			FROM 		membre 
			WHERE 		mem_persona = 'Gestionaire' 
				AND mem_login = '$login'
				AND mem_mdp = '$mdp' " ;
			
  	$administrateurs= $pdo->query($sql);
	
	/* test de login et mdp */
	if ($administrateur = $administrateurs->fetch()) {
	
  			/* echo $_SESSION['login'] test*/?>
  
    <span id="administration"> 

		<H2><?php echo 'Bienvenue '.$administrateur['mem_prenom'].'<br> alias '.$login.'.'; ?> </H2>
  		 		
  		<p>Attention, toute modification influe sur le contenu de la base de donnée...</br>
  		Soyez sûr de ce que vous faites.</p>
  		
  		<form name="form_liste_contenu" method="POST" action="./administration_page.php">
  			
  			<table>	
  		      	<tr>
        			<th>Votre choix: ?</th>
        				<td><input type="radio" name="rad-1" id="musiciens" checked="checked" value="musiciens" />gestion de la base des musiciens.<br />
             				<input type="radio" name="rad-1" id="messages" value="messages" />consultation des messages d' internautes.<br />
             				<input type="radio" name="rad-1"  id="rad3"  value="item3" />fichier csv.<br />
             				<input type="radio" name="rad-1" id="droits"  value="droits" />gestion des droits.</td>
      			</tr>	
      			<tr>
        			<th>C'est parti mon kiki</th>
        			<td><input type="submit" name="soumission" id="soumission" value="Soumettre" /></td>
      			</tr>
  			</table>
  		</form>
	</span>
	<?php 
	}

	else {	?>
	<span>
		<H2>Désolé <?php echo ($_SESSION['login']);?>, mot de passe et/ou login incorrect...
		<a href="connection_back_office.php"><img src="./images/boutonRetour.png"></a></H2>
		
	</span>
		
	<?php /* destruction de la session */
	$_SESSION = array();
  	session_destroy();
	}
	?> 


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
