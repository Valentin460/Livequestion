<?php

	function connexionBdd() {

        require('config.php');
        
		try{
			$co = new PDO("mysql:host=" . $server ."; charset=utf8; dbname=" . $dbName, $user, $pass);
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
			die('Erreur lors de la connexion à la base de données: ' . $e->getMessage());
		}
        return $co;
    }
?>