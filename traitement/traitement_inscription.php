<?php

// Affichage des erreurs en cas de champs vides
function traitementInscription(array $informations){
	$erreurs = [];

	if (empty($informations['name'])){
	$erreurs['name'] = "Veuillez saisir votre pseudo";
	}

	if (empty($informations['email'])){
	$erreurs['email'] = "Veuillez saisir votre adresse email";
	}

	if (empty($informations['email'])){
	$erreurs['email'] = "Veuillez saisir votre adresse mail";
	}

	if ($_POST['password'] =! $_POST['verifyPassword']){
	$erreurs['password'] = "Les mots de passe ne correspondent pas";
	$erreurs['verifyPassword'] = "Les mots de passe ne correspondent pas";
	}

    if (strlen($informations['password']) < 8 AND htmlspecialchars($informations['password']) < 1){
	$erreurs['password'] = "Votre mot de passe doit contenir au moins 8 caractères et au moins un caractère spécial";
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
			if(isset($_POST['name'], $_POST['email'], $_POST['genre'], $_POST['password'])){

				// Vérification des champs et suppression des espaces, antislashs et convertit les caractères spéciaux en entités HTML
				function verifyInput($var)
				{
					$var = trim($var);
					$var = stripslashes($var);
					$var = htmlspecialchars($var);

					return $var;
				}
				
				// Récupération des valeurs du formulaire
				$pseudo_utilisateur = $_POST['name'];
                $email_utilisateur = $_POST['email'];
				$genre_utilisateur = $_POST['genre'];
				$mot_de_passe_utilisateur = hash('sha256', $_POST['password']);

				// Connexion à la base de données
				$co = connexionBdd();

				// Prépation de la requête afin d'inserer les valeurs en base de données
				$query = $co->prepare("INSERT into utilisateurs (pseudo_utilisateur, email_utilisateur, genre_utilisateur, mot_de_passe_utilisateur, date_inscription_utilisateur) VALUES (:pseudo_utilisateur, :email_utilisateur, :genre_utilisateur, :mot_de_passe_utilisateur, now())");

				$query->bindParam(':pseudo_utilisateur', $pseudo_utilisateur);
                $query->bindParam(':email_utilisateur', $email_utilisateur);
				$query->bindParam(':genre_utilisateur', $genre_utilisateur);
				$query->bindParam(':mot_de_passe_utilisateur', $mot_de_passe_utilisateur);

				// Exécution de la requête
				$query->execute();

				// Message de confirmation après l'envoie des informations en base de données
				if($query){
					echo "<div>
							<center><h3>Votre inscription a bien été prise en compte !</h3></center>
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