
//alert(' Info --->  Javascript validationChamps.js  '); 
// histoire de voir si le lien vers le script pointe bien au bon endroit.

//place le curseur dans le 1er Champ (NOM)

document.getElementById('login').focus();
var $entreelogin ='';
var $password ='';
var $rem='';
var $x ='';
var $attention='';

//==============validation et mise en forme du Nom======================
function loginFunc() {
  $entreeLogin = document.session_connex.login.value;
  var $longueurSaisieLogin = $entreeLogin.length;
  var $erreur= document.getElementById('errLogin');
  
  
  var $regexCaracteresSpeciaux = $entreeLogin.match(/\W+/);
  //alert ('CaracteresSpeciaux -'+ $regexCaracteresSpeciaux +'-');
     
  var $regexChiffre = $entreeLogin.match(/[0-9]/); 
  //alert ('Chiffres -'+ $regexChiffre+'-');

  
  if ($regexChiffre){
       //alert ('erreur chiffre'); 
       $erreur.style.color= "red";
       $erreur.innerHTML = ' pas de chiffre SVP';     
       }
  
  else if ($regexCaracteresSpeciaux){
       //alert ('erreur caracteres speciaux');
       $erreur.style.color= "red";
       $erreur.innerHTML= (' pas de caract. spéciaux SVP');  
       document.session_connex.login.value=""; 
       }
       
  else if ($longueurSaisieLogin <= 1){
       $erreur.style.color= "red";
       $erreur.innerHTML= ('au moins deux lettres SVP');
       document.session_connex.login.value="";
       }
  
  
  else { //alert ('OK');
       $erreur.style.color= "green";
       $erreur.innerHTML = ' ok !';
       $entreeLogin=$entreeLogin.toUpperCase();
       document.session_connex.login.value=$entreeNom
       //var $majuscules=$entreelogin.toUpperCase();
       //document.session_connex.login.value=$majuscules;
       //alert ($majuscules); 
       document.getElementById('password').focus();
       }
  }

  
}
//========================validation du message Remarque===============
function passwordFunc(){
 
  $password= document.session_connex.password.value;
  var $erreur = document.getElementById('errPassword');
  //alert ("dans password"+ $password);
  var $regexCaracteresSpeciaux = $password.match(/\<|\%|\$|\#|\>/);
  
  if ($regexCaracteresSpeciaux){
  $erreur.style.color= "red";
  $erreur.innerHTML= ('pas de...'+$regexCaracteresSpeciaux +  '...SVP. ' );
  $attention=1;
     }
     
  else{
  $erreur.style.color= "green";
  $erreur.innerHTML= ('merci beaucoup.');
  $attention='';
  
    }

  }






function valider() {

 //alert ('dans valider()'+ $entreeNom);
   if (! $entreeLogin || ! $password  ){
   alert ('Un des champs requis est vide.');
   return false;
   }
   
   else if ($attention){
   alert ('Corrigez le champ \"remarques\" SVP.');
   return false;
   }

}
