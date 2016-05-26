<!DOCTYPE html>
<!--ici la page réservé au gestionnaire pour afficher tous les articles et mettre à jour les articles-->
<!-- formulaire qui traitera les actions du gestionnaire-------->

<html>

<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>
<title>Soul Latitude | Page administrateur </title>
<link rel="icon" href="../soullat2.ico" />

<link href="../css/soul.css" rel="stylesheet" type="text/css" />
</head>

<!-- ======================================================= -->
<!-- ======== initialisation de la session ou récupération de la session ================= -->
<?php
session_start();
?>
<!----------------------------------------------------------------------------------------->

<body>


<section id="centre">
<?php include("../includes/menu.php"); ?>

<span class ="boiteformulaire">

<!---- affiche que le gestionnaire est connecté a sa session--->

<div id = "variable_session"> <?php echo 'Bienvenu '.$_SESSION["login"].'!' ?> 
<img src="../images/pro.png" width="20" height="20"  alt="avatar utilisateur"/>
<br />
<p id="bouton"><a href="deconnexion.php">Deconnexion</a></p>
</div>

<!---------------------------------------------------------->

<p id= "choix_gestionnaire">
<form action = "traitement_admin.php" method="post"/>
<legend> Choisissez ici l'action que vous allez effectuer</legend>
<select name = "table">
<option value=""> ----- Choisir ----- </option>
<option value="1"> Afficher tous les articles </option>
<option value="2"> Mettre à jour un article </option>
</select></br>
</p>

<p id="identifiant">
<fieldset ><legend> Ici le login du membre titulaire de l'article</legend>
<input type ="text" name="log" placeholder="Ex=bobol" max_length="10"/>
</fieldset>
</p>

<p id= "article">
<fieldset ><legend> Entez ici votre article:</legend>
<textarea type ="text" name ="article" placeholder= "Ex : Voici un nouvel article"></textarea>
</fieldset>
</p></br>

<input type="submit" name="submit" value="Envoyer" />
</form>
</span>
</section>
</body>

<!-- ============= Appels de scripts JS ================== -->

</html>
