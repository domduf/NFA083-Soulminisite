<!DOCTYPE html>
<html>

<!-- ======================================================= -->
<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>

<link rel="icon" href="soullat2.ico" />

<title>Soul Latitude | Sons </title>
<link href="./css/soul.css" rel="stylesheet" type="text/css" />
</head>
<!-- ======================================================= -->


<body>

<!-- ===================== TITRE ===================== -->
<header id="TitreSoul">
  <section>
    <?php include("./includes/bouton_connect.inc.php"); ?>
  </section>
  <section id="Titre" >
  
    <H1>Sons <span class="cachee">Soul Latitude</span></H1>
  </section>
<!-- ===================== CONTACTS ===================== -->
  <section id="contactsTitre">
    <H2>Contacts</H2>
    <p><a href="https://fr-fr.facebook.com/Soul-Latitude-330890707038975/"><img src="./images/facebook.ico" width="20%"/></a> Soul Latitude</p>
    <p>Mobile: 06 72 27 66 00</p>
  </section>
</header>


<!-- ===================== VISUEL ===================== -->

<section id="centre">
<!-- ===================== MENU ===================== -->
<?php include("includes/menu.php"); ?>
    <span >
    <img  id="visuelSon" src="./images/maitresInfluences.png" />
    
    <p>Piste 1</p>
    <audio controls preload="none" > 
    <source  src="./sons/01.ogg" type="audio/ogg" />
    <source src="./sons/01.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    <p>Piste 3</p>
    <audio controls preload="none" >
    <source src="./sons/03.ogg" type="audio/ogg" />
    <source src="./sons/03.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    <p>Piste 4</p>
    <audio controls preload="none"> 
    <source src="./sons/04.ogg" type="audio/ogg" />
    <source src="./sons/04.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    <p>Piste 7</p>
    <audio controls preload="none"> 
    <source src="./sons/07.ogg" type="audio/ogg" />
    <source src="./sons/07.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    <p>Piste 8</p>
    <audio controls preload="none"> 
    <source src="./sons/08.ogg" type="audio/ogg" />
    <source src="./sons/08.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    <p>Piste 9</p>
    <audio controls preload="none"> 
    <source src="./sons/09.ogg" type="audio/ogg" />
    <source src="./sons/09.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    <p>Piste 10</p>
    <audio controls preload="none"> 
    <source src="./sons/10.ogg" type="audio/ogg" />
    <source src="./sons/10.mp3" type="audio/mp3"/>
    Mettez à jour votre navigateur
    </audio>
    
    </span>


</section>
<!-- ======================================================= -->



<?php include("includes/basDePage.php"); ?>

</body>

</html>
