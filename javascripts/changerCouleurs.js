function changeCouleur() {
//alert ('Couleur');
  
 $champCoordonnees = document.getElementById('Champscoordonnee');
  $couleur = document.getElementById('couleur').value;
  //alert($couleur);
  //alert($champCoordonnees);
  $champCoordonnees.style.backgroundColor = $couleur;
}
