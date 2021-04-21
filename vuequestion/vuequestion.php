    <?php
        include("../includes/head.php");
        require_once("../db/fonctions.php");
        $co = connexionBdd();
        include("../includes/connexion-head.php");
        // Récupération des données de la session
	    session_start();

	    // Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	    if(!isset($_SESSION["pseudo"])){
		    header("Location: ../connexion/connexion.php");
		    exit(); 
	    }
    ?>
        <section>
            <div id="quest" class="container">
            	<li>
                    <ul>Avatar</ul>
                    <ul>Nom</ul>
                    <ul>Nb Réponses</ul>
                    <ul>Catégories (beaucoup de Select à faire ici)</ul>
                </li>
                <p>Question</p>
            </div>
            <div id="rep" class="container">
                <div id="reponse">
                    <h4><span>2</span> Réponse</h4>
                    <div>
                        <h6>Avatar + Pseudo</h6>
                        <p>Réponse à la question (Select ici aussi)</p>
                    </div>
                </div>
                <?php
                    
                    $co = connexionBdd();

                    if(isset($_POST['submit'])){

                        $profil = $co->query('SELECT pseudo_utilisateur, id_utilisateur FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo_utilisateur'].'"');

				        $query = $co->prepare('INSERT into reponses(id_utilisateur, question_reponse, date_reponse) VALUES(:id_utilisateur, :question_reponse, now())');

				        $query->bindParam(':question_reponse', $reps);

                        $reps = $_POST['reps'];

				        $query->execute();
		        }
                ?>
                <div id="repondre">
                    <h4>Répondre à la question</h4>
                    <form method="post">
                        <div class="form-group">
                            <label>Votre réponse</label>
                            <textarea class="form-control" name="reps" value="reps"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" id="but">Valider</button>
                    </form>
                </div>
            </div>
        </section>
    <?php
        include("../includes/connexion-footer.php");
    ?>

