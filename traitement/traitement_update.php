<?php

    require '../db/fonctions.php';

    if(isset($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
    $pseudoErreur = $emailErreur = $motDePasseErreur = $pseudo = $email = $motDePasse = "";

    if(!empty($_POST)) 
    {
        $pseudo = checkInput($_POST['pseudo']);
        $email = checkInput($_POST['email']);
        $motdepasse = checkInput(hash('sha256', $_POST['motdepasse']));
        $avatar = $_FILES["image"]["name"];
        $id = checkInput($_POST['id']);
        $isSuccess = true;
       
        if(empty($pseudo)) 
        {
            $pseudoErreur = 'Veuillez saisir votre pseudo';
            $isSuccess = false;
        }
        if(empty($email)) 
        {
            $emailErreur = 'Veuillez saisir votre adresse email';
            $isSuccess = false;
        } 
        if(empty($motdepasse)) 
        {
            $motDePasseErreur = 'Veuillez saisir votre mot de passe';
            $isSuccess = false;
        }
         
        if ($isSuccess) 
        { 
            $db = connexionBdd();
            if($isSuccess)
            {
                $statement = $db->prepare("UPDATE utilisateurs set pseudo_utilisateur = ?, email_utilisateur = ?, mot_de_passe_utilisateur = ?, avatar_utilisateur = ? WHERE id_utilisateur = ?");
                $statement->execute(array($pseudo,$email,$motdepasse,$avatar,$id));
            }
            header("Location: profil.php");
        }
    }
    else 
    {
        $db = connexionBdd();
        $statement = $db->prepare("SELECT * FROM utilisateurs where id_utilisateur = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $pseudo = $item['pseudo_utilisateur'];
        $email = $item['email_utilisateur'];
        $motdepasse = $item['mot_de_passe_utilisateur'];
        $avatar = $item['avatar_utilisateur'];
        $id = $item['id_utilisateur'];
    }

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
					if(file_exists("../images/" . $_FILES["image"]["name"])){
						echo $_FILES["image"]["name"] . " existe déjà.";
					} else{
						move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $_FILES["image"]["name"]);
						echo "Votre fichier a été téléchargé avec succès.";
					} 
				} else{
					echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
				}
				}

                $avatar = strtr($avatar,
				'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜİàáâãäåçèéêëìíîïğòóôõöùúûüıÿ',
				'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); 

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>