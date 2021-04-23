<?php

// Affichage des erreurs en cas de champs vides
function traitementAjoutQuestion(array $informations){
	$erreurs = [];

	if (empty($informations['titrequestion'])){
	$erreurs['titrequestion'] = "Veuillez saisir votre question";
	}

	if (strlen($informations['titrequestion']) > 255){
	$erreurs['titrequestion'] = "Votre question ne peut pas d�passer 255 caract�res";
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
			if(isset($_POST['titrequestion'])){

				// V�rification des champs et suppression des espaces, antislashs et convertit les caract�res sp�ciaux en entit�s HTML
				function verifyInput($var)
				{
					$var = trim($var);
					$var = stripslashes($var);
					$var = htmlspecialchars($var);

					return $var;
				}

				// Connexion � la base de donn�es
				$co = connexionBdd();

				$profil = $co->query('SELECT id_utilisateur FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');

				$id = $profil->fetch();
				
				// R�cup�ration des valeurs du formulaire
				$titre = $_POST['titrequestion'];

				// Pr�pation de la requ�te afin d'inserer les valeurs en base de donn�es
				$query = $co->prepare("INSERT into questions (titre_question, id_utilisateur, date_creation_question) VALUES (:titre_question, :id_utilisateur, now())");

				$query->bindParam(':titre_question', $titre);
				$query->bindParam(':id_utilisateur', $id['id_utilisateur']);

				// Ex�cution de la requ�te
				$query->execute();

				// Message de confirmation apr�s l'envoie des informations en base de donn�es
				if($query){
					echo "<div>
							<center><h3>Votre question a bien �t� enregistr�e !</h3></center>
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