<?php
    include("../includes/head.php");
	include("../includes/connexion-head.php");
    require('../db/fonctions.php');
    // Vérification des données saisies dans les champs du formulaire
	require('../traitement/traitement_ajoutquestion.php');
    // Récupération des données de la session
	session_start();

	// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["pseudo"])){
        header("Location: ../connexion/connexion.php");
		exit(); 
	}

    if (!empty($_POST)) {
	    $traitement = traitementAjoutQuestion($_POST);
	}
?>
        <div id="color">
            <div class="container">
                <div id="inscription">
                    <h2><span class="span">Ajouter une question</span></h2>
                    <form id="formulaire" method="POST" action="ajoutquestion.php">
                        <div class="form-group">
                            <label for="name">Titre de la question</label>
                            <input type="text" name="titrequestion" class="form-control" placeholder="Nom" id="name">
                            <p><?php
							if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['titrequestion'])){
								echo $traitement['erreurs']['titrequestion'];
							}
							?>
						</p>
                        </div>
                        <div class="form-group">
                            <label for="categorie" id="cat">Categorie</label>
                            <select class="form-control" name="categorie" id="selectCat">
                                <option value="categories" name="categories"></option>
                                <?php
							    $categories = connexionBdd()->query('SELECT * FROM categories')->fetchAll();
                                echo $categories;
                                var_Dump($categories);
                                for($i = 0; $i < count($categories); $i++){
                                    echo '<option value="'.$categories[$i]['id_categorie'].'">'.$categories[$i]['nom_categorie'].'</option>';
                                }
                                ?>
                            </select>
						</p>
                        <button type="submit" name="submit" class="btn btn-primary" id="but">Ajouter la question</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>    
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
        <div class="snow"></div>
    <?php
        include("../includes/connexion-footer.php");
    ?>