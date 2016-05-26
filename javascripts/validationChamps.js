
//alert(' Info --->  Javascript validationChamps.js  '); 
// histoire de voir si le lien vers le script pointe bien au bon endroit.

//place le curseur dans le 1er Champ (NOM)

document.getElementById('nom').focus();
var $entreeNom ='';
var $entreePrenom ='';
var $email='';
var $tel='';
var $rem='';
var $x ='';
var $attention='';

//==============validation et mise en forme du Nom======================
function nomFunc() {
  $entreeNom = document.preInscription.nom.value;
  var $longueurSaisieNom = $entreeNom.length;
  var $erreur= document.getElementById('errNom');
  
  
  var $regexCaracteresSpeciaux = $entreeNom.match(/\W+/);
  //alert ('CaracteresSpeciaux -'+ $regexCaracteresSpeciaux +'-');
     
  var $regexChiffre = $entreeNom.match(/[0-9]/); 
  //alert ('Chiffres -'+ $regexChiffre+'-');

  
  if ($regexChiffre){
       //alert ('erreur chiffre'); 
       $erreur.style.color= "red";
       $erreur.innerHTML = ' pas de chiffre SVP';     
       }
  
  else if ($regexCaracteresSpeciaux){
       //alert ('erreur caracteres speciaux');
       $erreur.style.color= "red";
       $erreur.innerHTML= (' pas de caract. spéciaux SVP, pour les noms composés, utilisez le \_ du 8');  
       document.preInscription.nom.value=""; 
       }
       
  else if ($longueurSaisieNom <= 1){
       $erreur.style.color= "red";
       $erreur.innerHTML= ('au moins deux lettres SVP');
       document.preInscription.nom.value="";
       }
  
  
  else { //alert ('OK');
       $erreur.style.color= "green";
       $erreur.innerHTML = ' ok !';
       $entreeNom=$entreeNom.toUpperCase();
       document.preInscription.nom.value=$entreeNom
       //var $majuscules=$entreeNom.toUpperCase();
       //document.preInscription.nom.value=$majuscules;
       //alert ($majuscules); 
       document.getElementById('prenom').focus();
       }
  }
//==============validation  du Prénom======================

function prenomFunc() {
      $entreePrenom = document.preInscription.prenom.value;
  var $erreur= document.getElementById('errPrenom');
  
  var $regexCaracteresSpeciaux = $entreePrenom.match(/\W+/);
  //alert ('CaracteresSpeciaux -'+ $regexCaracteresSpeciaux +'-');
     
  var $regexChiffre = $entreePrenom.match(/[0-9]/); 
  //alert ('Chiffres -'+ $regexChiffre+'-');

  
  if ($regexChiffre){
       //alert ('erreur chiffre'); 
       $erreur.style.color= "red";
       $erreur.innerHTML = ' pas de chiffre SVP'; 
       document.preInscription.prenom.value="";    
       }
  
  else if ($regexCaracteresSpeciaux){
       //alert ('erreur caracteres speciaux');
       $erreur.style.color= "red";
       $erreur.innerHTML= (' pas de caract. spéciaux SVP');
       document.preInscription.prenom.value="";  
       }
       

  
  else { //alert ('OK');
       $erreur.style.color= "green";
       $erreur.innerHTML = ' ok !';
       document.getElementById('monMail').focus();
       }

  }
  

//================validation de l'email============================
function emailFunc(){

      $email= document.preInscription.monMail.value;
  var $erreur = document.getElementById('errMail');
  
  function estUnEmail(myVar){  // trouvé sur http://www.analyste-programmeur.com
       // La 1ère étape consiste à définir l'expression régulière d'une adresse email
       var $regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');

       return $regEmail.test(myVar);
     }


    if ( ! estUnEmail($email)) { // si pas de la forme email
    $erreur.style.color= "red";
    $erreur.innerHTML= ('le format n\'est pas bon !');
    document.preInscription.monMail.value="";
    }
    
    else {
    $erreur.style.color= "green";
    $erreur.innerHTML= (' ok !');
    document.getElementById('monTel').focus();
    }
  }

//========================validation du téléphone======================
function telFunc(){

  $tel= document.preInscription.monTel.value;
  var $longTel=$tel.length;
  var $erreur = document.getElementById('errTel');
  
  if ( isNaN($tel)){
  $erreur.style.color= "red";
  $erreur.innerHTML= (' (juste des chiffres SVP)');
  document.preInscription.monTel.value="";  
  }
  
  else if ($longTel !=10){
  $erreur.style.color= "red";
  $erreur.innerHTML= (' (10 chiffres SVP)');
  document.preInscription.monTel.value="";    
  }   
  
  else {  
  $erreur.style.color= "green";
  $erreur.innerHTML= (' ok ! ');
  document.getElementById('rem').focus();
  }
  
}
//========================validation du message Remarque===============
function remFunc(){
 
  $rem= document.preInscription.rem.value;
  var $erreur = document.getElementById('errRem');
  //alert ("dans rem"+ $rem);
  var $regexCaracteresSpeciaux = $rem.match(/\<|\%|\$|\#|\>/);
  
  if ($regexCaracteresSpeciaux){
  $erreur.style.color= "red";
  $erreur.innerHTML= ('pas de...'+$regexCaracteresSpeciaux +  '...SVP. ' );
  $attention=1;
     }
     
  else{
  $erreur.style.color= "green";
  $erreur.innerHTML= ('merci beaucoup.');
  $attention='';
  document.getElementById('kapcharep').focus();
    }

  }


//======================== validation du kapcha=========================
function kapcharepFunc() {
  $x = document.getElementById("kapcharep").value;
  var $erreur = document.getElementById('errKapcha');
  
   if (parseInt($x) != $addition){ // la variable globale $addition est définie  à kapcha.js
     //alert ("Recommencez, comptez sur vos doigts !!!");
     
     $erreur.style.color= "red";
     $erreur.innerHTML= ('Recommencez (comptez sur vos doigts si cela vous aide)');
     document.preInscription.kapcharep.value="";
     document.preInscription.kapcharep.focus();
   }
   
   else {
   $erreur.style.color= "green";
   $erreur.innerHTML= ('Bravo !');
   }
 }  




function valider() {

 //alert ('dans valider()'+ $entreeNom);
   if (! $entreeNom || ! $entreePrenom  || ! $email ||  !$tel || ! $rem || ! $x  ){
   alert ('Un des champs requis est vide.');
   return false;
   }
   
   else if ($attention){
   alert ('Corrigez le champ \"remarques\" SVP.');
   return false;
   }

}
