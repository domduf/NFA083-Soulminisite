/*// alert( ' Info ---> contrôle par Javascript testHumain.js    ' ); // test histoire de voir si le lien vers le script pointe bien au bon endroit.


//test de l'humanité de l'opérateur.
var $humain ;
var $reponse='oui';
$humain=prompt ("Etes-vous bien un humain ?..la réponse est \"oui\"") ; 
//alert ('Réponse donnée: ' + $humain+' || Réponse attendue : '+ $reponse);  //test


if ($humain == $reponse){
  //alert( 'Bienvenue humain'); //test
  //$validFormulaire = true;
  }
else {
  alert( 'Passe ton chemin robot !');
  document.location.href="formulaireRenseignement.php"; // rechargement de la page de formulaire en cas d'erreur.
  }



