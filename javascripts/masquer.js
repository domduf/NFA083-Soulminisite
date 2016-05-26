alert( ' Info ---> Ce script masque au chargement \n et ouvre et masque les resumés\nen cliquant sur les images. ' ); // histoire de voir si le lien vers le script pointe bien au bon endroit.

// à décommenter pour simuler une erreur JS et vérifier le chargement de la page en cas de non-prise en charge du JS

//masquerOnLoad   permet de masquer au chargement... et si le script JS n'est pas pris en charge par le 
//navigateur, d'afficher qd même l'article (sécurité.)

function masque(id){
  var $message = document.getElementById(id);
  $message.style.display = 'none';
  }

//AfficheOuMasquerOnClick .


function afficheOuMasque(id){
  var $message = document.getElementById(id);
  
  if($message.style.display == ''){
          $message.style.display = 'none';
      }
    else{
          $message.style.display = '';
         }
}

