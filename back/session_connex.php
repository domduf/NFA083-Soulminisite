<!--ici la page qui de connexion au back reserve au gestionnaire -->
<!-- Authentification et connexion qui se redirigera vers elle même en cas d'erreur de saisie-->
<html>

<head>

<meta charset="UTF-8" lang="fr"/>
<meta name="Soul Latitude"  content="Groupe musique RythmNBlues dix musiciens concerts live "/>
<title>Soul Latitude | Connexion session </title>
<link rel="icon" href="../soullat2.ico" />

<link href="../css/soul.css" rel="stylesheet" type="text/css" />
</head>


<body>

<section id="centre">

<?php include("../includes/menu.php") ;?>

<span class="sessionConnexion">

<form method="post" action="session_secure.php">
<fieldset>
   <table><caption="table_de_données"
    <tr>
     <td width="200"><b>Vôtre login</b></td>
     <td width="200">
     <input type "text" name ="login"/>
     </td>
    </tr>
    <tr>
     <td width="200"><b>Vôtre mot de passe<b></td>
     <td width="200">
      <input type="password" name ="password"/>
     </td>
    </tr>
    <tr>
     <td colspan="2">
      <input type="submit" name="submit" value="connexion">
     </td>
    </tr> 
   </table>
   </fieldset>
  </form>
</span>
</section>
</body>

</html>