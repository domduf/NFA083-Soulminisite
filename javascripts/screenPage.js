alert( ' Info --->  Javascript screenPage ' ); // histoire de voir si le lien vers le script pointe bien au bon endroit.

$largeurPage = window.screen.availWidth ;  // on stock la largeur de page dans la variable $largeurPage
var $bloc = document.getElementById('largeurPage'); // on repère où afficher l'info.

$bloc.innerHTML='Cette page a '+ $largeurPage + ' pixels de largeur.'; //on affiche l'info.
