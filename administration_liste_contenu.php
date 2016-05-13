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
    <p>                </p>
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

  	<span id="administration">
  	
  	<?php ?>
  	
  	<?php /*données à transmettre pour la connection à la bd */
  	$login=htmlentities($_POST ['user-name'],ENT_QUOTES); $mdp=$_POST ['user-passwd']; 

  	
  	
  	$sql = "SELECT 		mem_prenom, mem_login, mem_mdp
			FROM 		membre 
			WHERE 		mem_persona = 'Gestionaire' 
				AND mem_login ='$login'
				AND mem_mdp = '$mdp' " ;
			
  	$administrateurs= $pdo->query($sql);
	
	/* test de login et mdp */
	if ($administrateur = $administrateurs->fetch()) {
		  	
		  	
		  	/* ouverture d'une session */
		  	session_start();
  			$_SESSION['login']=$login;
  			echo $_SESSION['login'] /*test*/
  			;?>
		<p>
		<?php /*echo $administrateur["mem_login"]. ': ' . $administrateur['mem_mdp']; */ ?> 
		</p>
		  		<H2><?php echo 'Bienvenue '.$administrateur['mem_prenom'].'<br> alias '.$login.'.'; ?> </H2>
  		
  		
  		<p>Attention, toute modification influe sur le contenu de la base de donnée...</br>
  		Soyez sûr de ce que vous faites.</p>
  		
  		<form name="form_liste_contenu" method="POST" action="./administration_page.php">
  			<table>
		
 			
  		      	<tr>
        			<th>Votre choix: ?</th>
        				<td><input type="radio" name="rad-1" id="rad1" checked="checked" value="item1" />gestion de la base des musiciens.<br />
             				<input type="radio" name="rad-1" id="rad2" value="item2" />consultation des messages d' internautes.<br />
             				<input type="radio" name="rad-1"  id="rad3"  value="item3" />fichier csv.<br />
             				<input type="radio" name="rad-1" id="rad4"  value="item4" />gestion des droits.</td>
      			</tr>	
      			
      			<tr>
        			<th>C'est parti mon kiki</th>
        			<td><input type="submit" name="soumission" id="soumission" value="Soumettre" /></td>
      			</tr>
  		</table>
  		</form>
		
		<?php
		}
		
		
		else echo 'Mot de passe et/ou login incorrect...';
  	
  	?> 
  	

  		<p><a href ="./index.php">ici lien vers retour accueuil</a></p>
  

	</span>


</section>



<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>
</body>

</html>
