<?php /* fichier de connection à la base de donnée, à inclure dans la ou les pages concernées. 
		source: memento PHP5 & SQL */

		
		/* DECLARATION des Variables de connection à la bdd */
		$dsn="mysql:host=localhost;dbname=soul_26mai;charset=UTF8";
		$login = "root";
		$pass= "";
		
		/* CONNECTION serveur*/
		$pdo= new PDO($dsn, $login, $pass);
		
		/* EXEPTION en cas d'erreur */
		$pdo->setAttribute(PDO::ATTR_ERRMODE,
							PDO::ERRMODE_EXCEPTION);
							
	
		
?>
		
		
