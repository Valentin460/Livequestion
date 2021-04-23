<?php

// Affichage des erreurs en cas de champs vides
function traitementAjoutQuestion(array $informations){
	$erreurs = [];

	if (empty($informations['titrequestion'])){
	$erreurs['titrequestion'] = "Veuillez saisir votre question";
	}

	if (strlen($informations['titrequestion']) > 255){
	$erreurs['titrequestion'] = "Votre question ne peut pas dépasser 255 caractères";
	} 

	// S'il y a des erreurs : on les retourne, sinon on insère dans la base de données

	if (!empty($erreurs)) {
		return [
			'success' => false,
			'erreurs' => $erreurs,
	];

	}
	else{
			
		// Si l'on clique sur le bouton envoyer du formulaire
		if(isset($_POST['submit'])) {

			// Vérification si les champs ont été saisis
			if(isset($_POST['titrequestion'])){

				// Vérification des champs et suppression des espaces, antislashs et convertit les caractères spéciaux en entités HTML
				function verifyInput($var)
				{
					$var = trim($var);
					$var = stripslashes($var);
					$var = htmlspecialchars($var);

					return $var;
				}

				// Connexion à la base de données
				$co = connexionBdd();

				$profil = $co->query('SELECT id_utilisateur FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');

				$id = $profil->fetch();
				
				// Récupération des valeurs du formulaire
				$titre = $_POST['titrequestion'];

				// Prépation de la requête afin d'inserer les valeurs en base de données
				$query = $co->prepare("INSERT into questions (titre_question, id_utilisateur, date_creation_question) VALUES (:titre_question, :id_utilisateur, now())");

				$query->bindParam(':titre_question', $titre);
				$query->bindParam(':id_utilisateur', $id['id_utilisateur']);

				// Exécution de la requête
				$query->execute();

				// Message de confirmation après l'envoie des informations en base de données
				if($query){
					echo "<div>
							<center><h3>Votre question a bien été enregistrée !</h3></center>
						</div>";
				}
			}
		}
	}
	return [
		'success' => true,
	];
}

?>