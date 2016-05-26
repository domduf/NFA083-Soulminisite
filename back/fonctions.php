<!-- ici la page qui reunit tous les fonctions en PDO et traite les requetes PDO --->

<?php


/*Connection a la base de données===================================*/
function connexionbdd() {

/* Variables de connexion à la BDD ================================== */
    $serveur = 'localhost';       $loginserveur = 'root';   $mdpserveur = '';
    $nombdd  = 'soul_1mai';

    
/* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============== */

    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
    $con = new PDO('mysql:host='.$serveur.';dbname='.$nombdd, $loginserveur, $mdpserveur, $pdo_options);   // Connexion à la BDD
    return $con; /* pour ré utiliser l'identifiant de connexion pour executer les requetes */
  } 

 
/* Affichage d'une requete select======*/

function affiche($champsselect1,$champsselect2,$requete){
  
  /* variables ============================================================================ */
    /* $requete : requete a executer */
    /* $champsselect1 : 1er champ à afficher */
    /* $champsselect2 : 2e  champ à afficher */
     
     
/* connexion BDD ====================================================================== */
    $con=connexionbdd();
     
/* resultat requete SQL =============================================================== */
    $resultat = $con->query($requete);
      
/* Affichage de toutes les données demandées par la requête =========================== */
    while($donnees = $resultat->fetch()) { 
        echo $donnees[$champsselect1];
        if($champsselect2) {echo ' | '.$donnees[$champsselect2];  } ?><br/><?php
    } ?><br/><?php
}
 
