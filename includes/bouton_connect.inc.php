    <p id= "btcontact">      
    
    <?php 
  		session_start();
  		
  		if (!isset ($_SESSION['login'])) { /* si non connecté */?> 
    	<a href="./connection_back_office.php"> <img src="./images/since2004_deconnecte.png"></a>  </p>
    	<?php }
    	
    	else { /* si connecte */ ?>
    	<a href="./connection_back_office.php"> <img src="./images/since2004_connecte.png"></a>  </p>
    	
    	<?php
    	}
    	?>