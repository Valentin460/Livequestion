<?php
	// On r�cup�re les varaibles de session
	session_start();
	
    // D�truit toutes les variables de session --> fermeture de session
    $_SESSION = array();
	
    // Redirige vers la page de connexion
    header("Location: connexion.php");
?>