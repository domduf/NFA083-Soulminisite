<?php 

function recuperer_enum($table,$champ) {
	$sql_enum = "	SHOW COLUMNS 
					FROM '$table' 
					LIKE '$champ'";
	$enums = $pdo->query($sql_enum);/**/

	return $enums;
	}
?>
	
