<?php
	// On récupère les varaibles de session
	session_start();
	
    // Détruit toutes les variables de session --> fermeture de session
    $_SESSION = array();
	
    // Redirige vers la page de connexion
    header("Location: connexion.php");
?>