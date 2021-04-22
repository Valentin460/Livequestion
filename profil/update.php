<?php
	include("../includes/head.php");
	include("../includes/connexion-head.php");

	// Récupération des données de la session
	session_start();

	// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["pseudo"])){
		header("Location: ../connexion/connexion.php");
		exit(); 
	}
?>
        <form class="form" action="<?php echo 'update.php?id='.$id_utilisateur;?>" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Titre :
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Nom d'utilisateur" value="<?php echo $pseudo_utilisateur;?>">
                    <span class="help-inline"><?php echo $pseudo_utilisateurErreur;?></span>
                </label>
            </div>
            <div class="form-group">
                <label for="name">Intitulé :
                    <input type="text" class="form-control" id="email" name="email" placeholder="Adresse email" value="<?php echo $email_utilisateur;?>">
                    <span class="help-inline"><?php echo $email_utilisateurErreur;?></span>
                </label>
            </div>
            <div class="form-group">
                <label for="name">Charge en heure :
                    <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="Mot de passe" value="<?php echo $mot_de_passe_utilisateur;?>">
                    <span class="help-inline"><?php echo $mot_de_passe_utilisateurErreur;?></span>
                </label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
                    <a class="btn btn-primary" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
            </div>
        </form>