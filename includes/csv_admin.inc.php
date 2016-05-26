
<?php 

// Connection bdd via PDO 

include("../includes/connection.php");
 


 
// Creation du fichier

$file = fopen('message.csv', 'w+');
 
// Collecte des donnees
$req = $pdo->query('SELECT * FROM contact;');
$rep = $req->fetchAll(PDO::FETCH_ASSOC);

// Première ligne : ligne de titres
if(count($rep))
   fputcsv($file, array_keys($rep[0]));
 
// Ajout des lignes de données
foreach($rep as $row)
   fputcsv($file, $row);
 
// Fermeture du fichier
fclose($file);



//fonction pour forcer le telechagement
 
function forcerTelechargement($nom, $situation, $poids)
  {
    header('Content-Type: text/csv');
    header('Content-Length: '. $poids);
    header('Content-disposition: attachment; filename= "'.$nom.'"');
    header('Pragma: public');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    readfile($situation);
    exit();
  }
  forcerTelechargement('message.csv', './message.csv', 1000);
		
    
  ?>