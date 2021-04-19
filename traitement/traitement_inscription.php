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

    if (empty($informations['password'])){
    $erreurs['password'] = "Veuillez saisir votre mot de passe";
    }

    if (empty($informations['verifyPassword'])){
    $erreurs['verifyPassword'] = "Veuillez confirmer votre mot de passe";
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
				$pseudo = $_POST['name'];
                $email = $_POST['email'];
				$genre = $_POST['genre'];
				$mot_de_passe = hash('sha256', $_POST['password']);

				// Connexion à la base de données
				$co = connexionBdd();

				// Prépation de la requête afin d'inserer les valeurs en base de données
				$query = $co->prepare("INSERT into utilisateurs (pseudo, email, genre, mot_de_passe, date_inscription) VALUES (:pseudo, :email, :genre, :mot_de_passe, now())");

				$query->bindParam(':pseudo', $pseudo);
                $query->bindParam(':email', $email);
				$query->bindParam(':genre', $genre);
				$query->bindParam(':mot_de_passe', $mot_de_passe);

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