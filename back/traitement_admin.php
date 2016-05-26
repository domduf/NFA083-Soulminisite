<!--ici on traitera les actions du gestionnaire en relation avec la bdd--->


<html>
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>
<title>Soul Latitude | Connexion session </title>
<link rel="icon" href="../soullat2.ico" />

<link href="../css/soul.css" rel="stylesheet" type="text/css" />
</head>
<?php

session_start();
?>

<body>
<section id="centre">

<?php include("../includes/menu.php"); ?>
<div id="table_affiche">
<?php

$choix = $_POST['table'];
$log = htmlspecialchars($_POST['log']);
$article = htmlspecialchars($_POST ['article']);
?>
<fieldset>
<?php
/* Traitement des données, requettes et envoi en bdd*/
include ("fonctions.php"); $con=connexionbdd();
switch ($choix){
  
   case"1": 
    $requete = "SELECT mem_login, mem_article FROM membre";
    affiche('mem_login','mem_article',$requete);
  break;  
  case"2":
  
  if (isset($log)){
    $miseajour = $con -> exec("UPDATE membre SET mem_article='$article' WHERE mem_login='$log'");
    /*affichage de l'article mise a jour*/
    $requete = "SELECT mem_login,mem_article FROM membre WHERE mem_login='$log'";
    affiche('mem_login','mem_article',$requete);
    echo'article mise a jour'   ; 
  }
  break;
  
  default :
  header('Location: page_admin.php'); 
  break;
}
?>
</fieldset>
</div>

<p id="bouton"><a href ="page_admin.php"> Retouner à la page gestionnaire</a> </p>