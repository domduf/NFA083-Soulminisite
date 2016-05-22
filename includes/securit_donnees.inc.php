<?php /* vue sur Open Classroom à https://openclassrooms.com/courses/securite-php-securiser-les-flux-de-donnees#*/
	function securite_bdd($string)
	{
		// On regarde si le type de string est un nombre entier (int)
		if(ctype_digit($string))
		{
			$string = intval($string);
		}
		// Pour tous les autres types
		else
		{	
			$string = htmlentities($string,ENT_QUOTES); /* rajouté par domduf, une pierre deux coups */
			/* $string = mysql_real_escape_string($string);  obsolete*/
			$string = addcslashes($string, '%_');
		}
		
		return $string;
	}
?>
