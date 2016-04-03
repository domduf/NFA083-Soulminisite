<!DOCTYPE html>
<html>

<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | Formulaire_renseignement  </title>
<link href="./css/soul.css" rel="stylesheet" type="text/css" />
</head>
<!-- ======================================================= -->


<body>



<!-- ===================== TITRE ===================== -->
<header id="TitreSoul">
  <section>
    <p>                </p>
  </section>
  <section id="Titre" >
  
    <H1>Groupe <span class="cachee">Soul Latitude</span></H1>
  </section>

<!-- ===================== CONTACTS ===================== -->
  <section id="contactsTitre">
    <H2>Contacts</H2>
    <p><a href="https://fr-fr.facebook.com/Soul-Latitude-330890707038975/"><img src="./images/facebook.ico" width="20%"/></a> Soul Latitude</p>
    <p>Mobile: 06 72 27 66 00</p>
  </section>
</header>
<!-- ======================================================= -->
<!-- ======================================================= -->

<section id="accrocheAccueuil">
    <H3>Une machine de dix musiciens prête à vous faire remonter le temps en un clin d'oeil.</H3>
    <p>Soul Latitude accompagne vos Comités d'Entreprise, Festivals, Evènements privés, Séminaires, Inaugurations, Vernissages. </p>
</section>
<!-- ===================== VISUEL ===================== -->

<section id="centre">
<!-- ===================== MENU ===================== -->
<?php include("includes/menu.php"); ?>

  <!-- =========================== Formulaire ICI ============================ -->
<div>

<!-- Début du FORMULAIRE -->
	<form name="preInscription"  method="POST" action="InscriptionRenseignement.php" onsubmit="return valider()" >
	
	
		<!-- retour du script date.js -->
		<p id="datedujour" name="datedujour"></p> 
	
	
	<p>
	<div>
    <fieldset id="Champscoordonnee" class="Champscoordonnee" ><legend>Vos coordonnées</legend>
    
    
    
    
    <label for="nom">NOM*<span id="errNom"></span> :</label>
    <input  onblur="nomFunc()"   type="text" name="nom" id="nom"/><br/>
    
    <label for="prenom">Prénom*<span id="errPrenom"></span>:</label>
    <input onblur="prenomFunc()" type="text" name="prenom" id="prenom"/><br/>
    
    <label for="monMail">Email*<span id="errMail"></span>:</label>
    <input onblur="emailFunc()"  type="text" name="monMail" id="monMail"/><br/>
	
	<label for="monTel">N° de tel portable*:<span id="errTel"></span></label>
	<input onblur="telFunc()" type="tel" name="monTel" id="monTel" /><br/>
	
    <div> * Champ obligatoires.</div>

    </fieldset> </div>
    
    <br/>
    
<br/>
 
     <p>Avant d'envoyer, saurez-vous faire cette terrible addition* (pour un musicien...)<br/>  
     <label for="kapcharep"><span id="n1"></span> + <span id="n2"> </span> =</label>
      <input onblur="kapcharepFunc()" type="text"  name="kapcharep" id="kapcharep"  /> <span id="errKapcha"></span><div> * Champ obligatoires.</div></p>
     
     <br/>
    <p><input type="submit" value="Envoyer à notre secretaire" /> ou alors...<input type="reset" value="J'annule tout, désolé." />
    </p>
    </form>	

</div>

</section>

<!-- ======================================================= -->
<!-- ======================================================= -->

<!-- ===================== BAS DE PAGE  ===================== -->
<?php include("includes/basDePage.php"); ?>

<!-- ============= Appels de scripts JS ================== -->
<script src='./javascripts/validationChamps.js' type = 'text/javascript' ></script>
<script src='./javascripts/date.js' type = 'text/javascript' ></script>
<script src='./javascripts/kapcha.js' type = 'text/javascript' ></script>

</body>

</html>
