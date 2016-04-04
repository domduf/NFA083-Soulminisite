//alert( ' Info --->  Javascript  ' ); // histoire de voir si le lien vers le script pointe bien au bon endroit.

//preparation du remplacement dans paragraphe "date" 
var $bloc = document.getElementById('datedujour'); /* sera stocké dans le paragrapge d'id 'datedujour' 
                                                      du   formulaire */
var $heure = document.getElementById('heurePlat');

//variables de date:

function inferieurA10($arg){ /* Cette fonction permet de mettre un chiffre sous forme de nombre, 
                               par exemple 8 devient 08 */
   if ($arg<10){
    $arg='0'+$arg;
    }
  return $arg;
  } 
  
function jourSemaine($arg){ /*  Cette fonction renvoie le jour de la semaine*/
   if ($arg==1){
   $arg='lundi';
   }
   if ($arg==2){
   $arg='mardi';
   }
   if ($arg==3){
   $arg='mercredi';
   }
   if ($arg==4){
   $arg='jeudi';
   }
   if ($arg==5){
   $arg='vendredi';
   }
   if ($arg==6){
   $arg='samedi';
   }
   if ($arg==0){
   $arg='dimanche';
   }
  return $arg;
  }
  
var $moisLettre = new Array('janvier','fevrier','mars','avril','mai',
'juin','juillet','aout','septembre','octobre','novembre','décembre' );






//for (i=0 ; i=+1; i<12){}

  
var $date = new Date(); /* on va chercher l'objet Date.*/

var $annee=    $date.getYear()-100; /* -100 car année >2000 */
var $mois=     $moisLettre[$date.getMonth()];// on va chercher le mois en tte lettre dans le tableau $moisLettre
var $jourMois= inferieurA10($date.getDate());
var $day=      jourSemaine(jourSemaine($date.getDay()));/* appel de la conversion vers jour de semaine*/
var $heure=    inferieurA10($date.getHours());
var $minute=   inferieurA10($date.getMinutes());
  

 
  

/* insertion dans le champs d'Id "datedujour" */
$bloc.innerHTML= 'Nous sommes le ' +$day +' '+ $jourMois +' '+ $mois+ ' 20' + $annee+  '. Cette page a été chargée à: '+ $heure + ':'+ $minute;

