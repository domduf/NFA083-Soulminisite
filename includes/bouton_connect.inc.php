        
    
    <?php 
  		session_start();
  		
  		if (!isset ($_SESSION['login'])) { /* si non connecté */?> 
    	<p><a href="./connection_back_office.php"> <img src="./images/since2004_deconnecte.png" alt="bouton de connection"></a>  </p>
    	<?php }
    	
    	else { /* si connecte */ ?>
    	<p id="administration"> <?php echo $_SESSION['login']; ?>
    	<a href="./connection_back_office.php"> <img src="./images/since2004_connecte.png" alt="bouton de déconnection"></a>  </p>
    	
    	<?php
    	}
    	?>
