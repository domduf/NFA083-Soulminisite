  	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78488307-1', 'auto');
  ga('send', 'pageview');

	</script>      
    
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
