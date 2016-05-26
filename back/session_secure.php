<?php
session_start();
$_SESSION["login"]=$_POST["login"];
$_SESSION["password"]=$_POST["password"];
 
include ('fonctions.php');

$con=connexionbdd();

/*verification des variables saisi, redirection vers formulaire pour ressai ========*/
  
    if (empty($_SESSION["login"]) or empty($_SESSION['password'])) {
    echo "veuillez saisir un login et un mot de passe";
    header("Location: session_connex.php");
      }

  /*requette pdo, securisation données saisies, verification données,redirection vers page gestionnaire==*/
  
  else {
      $requete = $con->query("SELECT COUNT(*) FROM membre WHERE mem_login='".htmlspecialchars($_SESSION["login"])."'
      AND mem_mdp='".htmlspecialchars($_SESSION["password"])."'")->fetch(); // requette et recupération du résultat
      if ($requete['COUNT(*)'] == 1){    // verification du résulat en base de données
          header("Location: page_admin.php");  // redirection si résultat vérifié
        }
        else{
          echo "Valeurs saisi éronnées, Veuillez resaisir les informations ";
          header('Location:session_connex.php');
        }
        
    } 



?>