<!--- ici la page qui traite la deconnexion --->


<?php
session_start();
session_destroy();
header('location: ../index.php');
exit;
?>