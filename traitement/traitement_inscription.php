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

    if (strlen($informations['password']) < 8){
	$erreurs['password'] = "Votre mot de passe doit contenir au moins 8 caracteres";
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
			if(isset($_POST['name'], $_POST['email'], $_POST['genre'], $_POST['password'], $_FILES['image'])){

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
				$avatar_utilisateur = $_FILES["image"]["name"];

				// Connexion à la base de données
				$co = connexionBdd();

				// Prépation de la requête afin d'inserer les valeurs en base de données
				$query = $co->prepare("INSERT into utilisateurs (pseudo_utilisateur, email_utilisateur, mot_de_passe_utilisateur, avatar_utilisateur, genre_utilisateur, date_inscription_utilisateur) VALUES (:pseudo_utilisateur, :email_utilisateur, :mot_de_passe_utilisateur, :avatar_utilisateur, :genre_utilisateur, now())");

				// Vérifie si le fichier a été uploadé sans erreur.
				if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
				$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
				$filename = $_FILES["image"]["name"];
				$filetype = $_FILES["image"]["type"];
				$filesize = $_FILES["image"]["size"];

				// Vérifie l'extension du fichier
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

				// Vérifie la taille du fichier - 5Mo maximum
				$maxsize = 5 * 1024 * 1024;
				if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

				// Vérifie le type MIME du fichier
				if(in_array($filetype, $allowed)){
					// Vérifie si le fichier existe avant de le télécharger.
					if(file_exists("upload/" . $_FILES["image"]["name"])){
						echo $_FILES["image"]["name"] . " existe déjà.";
					} else{
						move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
						echo "Votre fichier a été téléchargé avec succès.";
					} 
				} else{
					echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
				}
				} else{
				echo "Error: " . $_FILES["image"]["error"];
				}

				move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);

				$query->bindParam(':pseudo_utilisateur', $pseudo_utilisateur);
                $query->bindParam(':email_utilisateur', $email_utilisateur);
				$query->bindParam(':mot_de_passe_utilisateur', $mot_de_passe_utilisateur);
				$query->bindParam(':avatar_utilisateur', $avatar_utilisateur);
				$query->bindParam(':genre_utilisateur', $genre_utilisateur);

				// Exécution de la requête
				$query->execute();

				// Message de confirmation après l'envoie des informations en base de données
				if($query){
					echo "<div>
							<center><h3>Votre inscription a bien ete prise en compte !</h3></center>
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