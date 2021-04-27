<?php
    include("../includes/head.php");
    require("../traitement/traitement_desinscription.php");

    // Récupération des données de la session
	session_start();

	// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["pseudo"])){
		header("Location: ../connexion/connexion.php");
		exit(); 
	}

    $co = connexionBdd();
    $statement = $co->query('SELECT * FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
    while($item = $statement->fetch()){
?>
<div class="container admin">
    <div class="row">
        <h1><strong>Se desinscrire</strong></h1>
        <br>
        <form class="form" action="desinscription.php" role="form" method="post">
            <input type="hidden" name="id" value="<?php echo $item['id_utilisateur'];}?>">
                <p class="alert alert-warning">Etes-vous sur de vouloir supprimer ?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-warning">Oui</button>
                    <a class="btn btn-default" href="../profil/profil.php">Non</a>
                </div>
        </form>
    </div>
</div>
