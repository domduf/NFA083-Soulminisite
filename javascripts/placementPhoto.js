//alert( ' Info --->  Javascript dimensionsPhoto.js  ' );

var $bloc = document.getElementById('placeTexteIci');//on récupère l'adresse DOM où placer le texte
 
     function phrase($largeur, $hauteur){
       var $texte = "Largeur-" + $largeur +"px<br>"+" Hauteur-"+ $hauteur +"px";
       return $texte;
       }
   
     
           // On récupère les dimensions de l'image
	var $largeur = document.getElementById("photoProf").offsetWidth;
	var $hauteur = document.getElementById("photoProf").offsetHeight;	   
	
	
	// affichage au chargement du script 
	$bloc.innerHTML = phrase($largeur, $hauteur);
	
	
	function agrandir(){
	//alert( ' souris sur photo !!!  ' );
	  document.getElementById('photoProf').style.width = "20%"; //on agrandit au delà de la limite sup du CSS     
	  // On calcule la position
	  $largeur = document.getElementById("photoProf").offsetWidth;
	  $hauteur = document.getElementById("photoProf").offsetHeight;
	  $bloc.innerHTML = phrase($largeur, $hauteur);
	
	 
	  }
	
	function remettre(){
	  //alert( ' souris sur photo !!!  ' );
	  document.getElementById('photoProf').style.width = "10%";   //on rétrecit au deça de la limite inf du CSS     
	  // On calcule la position
	  $largeur = document.getElementById("photoProf").offsetWidth;
	  $hauteur = document.getElementById("photoProf").offsetHeight;
	  $bloc.innerHTML = phrase($largeur, $hauteur);
	  }
