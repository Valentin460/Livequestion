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

                    if(isset($_POST["submit"]) && !empty($_POST["reps"])){

                        $profil = $co->query('SELECT id_utilisateur FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');

                        $id = $profil->fetch();

				        $query = $co->prepare('INSERT into reponses(id_utilisateur, question_reponse, date_reponse) VALUES(:id_utilisateur, :question_reponse, now())');

				        $query->bindParam(':question_reponse', $reps);
                        $query->bindParam(':id_utilisateur', $id['id_utilisateur']);

                        $reps = $_POST['reps'];

				        $query->execute();
		        }
                ?>
                <<div id="repondre">
                    <h4>Répondre à la question</h4>
                    <form method="post">
                        <div class="form-group">
                            <label>Votre réponse</label>
                            <textarea class="form-control" name="reps" value="reps"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" id="but">Valider</button>
                        <p class="warning">
                            <?php
                                if(isset($_POST["submit"]) && (empty($_POST["reps"])))
                                    {
                                        echo'Veuillez remplir tous les champs';
                                    }
                            ?>
                        </p>
                    </form>
                </div>
            </div>
            <h4><span>
            <?php

            $nbrep = $co->query('SELECT COUNT(question_reponse) AS nbrep FROM reponses');
            $nbreps = $nbrep->fetch();
            echo $nbreps['nbrep'];

            ?></span> Réponse</h4>
            <div class="container">
            <?php
                        $reponse = $co->query("SELECT * FROM reponses");
					    while ($donnees = $reponse->fetch()){
					    ?>
                        
                <div id="reponse">
                    <div>
                        <h6>Pseudo</h6>
                        <p><?php echo $donnees['question_reponse']; ?></p>
                    </div>
                    <br>
                </div>
                <br>
                            <?php
					        }

		        ?>
            </div>
        </section>
    <?php
        include("../includes/connexion-footer.php");
    ?>

