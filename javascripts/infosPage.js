//alert( ' Info --->  Javascript infosPage ' ); // histoire de voir si le lien vers le script pointe bien au bon endroit.

$largeurPage = window.screen.availWidth ;  // on stock la largeur de page dans la variable $largeurPage
$dernierEnregistrement = document.lastModified ; // on stock la date de dernier enregistrement de la page dans la variable $dernierEnregistrement


var $bloc = document.getElementById('largeurPage'); // on repère où afficher l'info.
var $bloc2 = document.getElementById('dernierEnregistrement'); // on repère où afficher l'info.


$bloc.innerHTML='Cet écran a une définition de '+ $largeurPage + ' pixels de largeur. '; //on affiche l'info.
$bloc2.innerHTML='Date de dernier enregistrement: '+ $dernierEnregistrement ;
