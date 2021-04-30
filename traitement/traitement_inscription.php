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

	// S'il y a des erreurs : on les retourne, sinon on ins�re dans la base de donn�es

	if (!empty($erreurs)) {
		return [
			'success' => false,
			'erreurs' => $erreurs,
	];

	}
	else{
			
		// Si l'on clique sur le bouton envoyer du formulaire
		if(isset($_POST['submit'])) {

			// V�rification si les champs ont �t� saisis
			if(isset($_POST['name'], $_POST['email'], $_POST['genre'], $_POST['password'], $_FILES['image'])){

				// V�rification des champs et suppression des espaces, antislashs et convertit les caract�res sp�ciaux en entit�s HTML
				function verifyInput($var)
				{
					$var = trim($var);
					$var = stripslashes($var);
					$var = htmlspecialchars($var);

					return $var;
				}
				
				// R�cup�ration des valeurs du formulaire
				$pseudo_utilisateur = $_POST['name'];
                $email_utilisateur = $_POST['email'];
				$genre_utilisateur = $_POST['genre'];
				$mot_de_passe_utilisateur = hash('sha256', $_POST['password']);
				$avatar_utilisateur = $_FILES["image"]["name"];

				// Connexion � la base de donn�es
				$co = connexionBdd();

				// Pr�pation de la requ�te afin d'inserer les valeurs en base de donn�es
				$query = $co->prepare("INSERT into utilisateurs (pseudo_utilisateur, email_utilisateur, mot_de_passe_utilisateur, avatar_utilisateur, genre_utilisateur, date_inscription_utilisateur) VALUES (:pseudo_utilisateur, :email_utilisateur, :mot_de_passe_utilisateur, :avatar_utilisateur, :genre_utilisateur, now())");

				// V�rifie si le fichier a �t� upload� sans erreur.
				if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
				$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
				$filename = $_FILES["image"]["name"];
				$filetype = $_FILES["image"]["type"];
				$filesize = $_FILES["image"]["size"];

				// V�rifie l'extension du fichier
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez s�lectionner un format de fichier valide.");

				// V�rifie la taille du fichier - 5Mo maximum
				$maxsize = 5 * 1024 * 1024;
				if($filesize > $maxsize) die("Error: La taille du fichier est sup�rieure � la limite autoris�e.");

				// V�rifie le type MIME du fichier
				if(in_array($filetype, $allowed)){
					// V�rifie si le fichier existe avant de le t�l�charger.
					if(file_exists("upload/" . $_FILES["image"]["name"])){
						echo $_FILES["image"]["name"] . " existe d�j�.";
					} else{
						move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
						echo "Votre fichier a �t� t�l�charg� avec succ�s.";
					} 
				} else{
					echo "Error: Il y a eu un probl�me de t�l�chargement de votre fichier. Veuillez r�essayer."; 
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

				// Ex�cution de la requ�te
				$query->execute();

				// Message de confirmation apr�s l'envoie des informations en base de donn�es
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