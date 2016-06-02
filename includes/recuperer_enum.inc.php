<?php 

function recuperer_enum($table,$champ) {
	require './includes/connection.php';
	$sql_enum = "	SHOW COLUMNS 
					FROM '$table' 
					LIKE '$champ'";
	$enums = $pdo->query($sql_enum);/**/

	return $enums;
	}
?>
	
