//alert( ' Info --->  Javascript  ' ); // histoire de voir si le lien vers le script pointe bien au bon endroit...à décommenter

var $bouton = document.getElementById('imprimer');
$bouton.onclick = function(e) {  // methode trouvée sur openClassrom...pas trop de mérite !
    print();
    return false;
  //e.preventDefault();
  //print();
}
