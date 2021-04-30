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

        if(!empty($_GET['id'])) 
        {
            $id = checkInput($_GET['id']);
        }
        $db = connexionBdd();
        $statement = $db->prepare("SELECT * FROM utilisateurs, questions WHERE questions.id_utilisateur = utilisateurs.id_utilisateur AND utilisateurs.id_question = ?");
        $statement = $db->prepare('SELECT * FROM utilisateurs, questions, categories WHERE categories.id_categorie = questions.id_categorie AND questions.id_utilisateur = utilisateurs.id_utilisateur AND questions.id_question = ?');
        $statement->execute(array($id));
        $item = $statement->fetch();

        function checkInput($data) 
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        ?>
        <section>
            <div id="quest" class="container">
            	<li>
                    <ul><img id="img-avatar" src="<?php echo '../images/'.$item['avatar_utilisateur'];?>" alt="Avatar"></ul>
                    <ul id="pseudo-profil"><?php echo $item['pseudo_utilisateur']; ?></ul>
                    <p><?php echo $item['role_utilisateur']; ?></p>
                </li>
                <p class="quest-p"><?php echo $item['titre_question'] ?></p>
                <p><i class="fas fa-circle"></i><?php echo $item['nom_categorie'] ?></p>
            </div>
            <div id="rep" class="container">
                <?php
                    
                    $co = connexionBdd();

                    if(isset($_POST["submit"]) && !empty($_POST["reps"])){

                        $profil = $co->query('SELECT id_utilisateur FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
                        $quest = $co->query('SELECT * FROM questions WHERE id_question ="' .$item['id_question'].'"');

                        $id = $profil->fetch();
                        $quest = $quest->fetch();

				        $query = $co->prepare('INSERT into reponses(id_utilisateur, id_question, question_reponse, date_reponse) VALUES(:id_utilisateur, :id_question, :question_reponse, now())');

				        $query->bindParam(':question_reponse', $reps);
                        $query->bindParam(':id_utilisateur', $id['id_utilisateur']);
                        $query->bindParam(':id_question', $quest['id_question']);

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

            $nbrep = $co->query('SELECT COUNT(question_reponse) AS nbrep FROM reponses, questions WHERE reponses.id_question = questions.id_question AND reponses.id_question = "'.$item['id_question'].'"');
            $nbreps = $nbrep->fetch();
            echo $nbreps['nbrep'];

            ?></span> Réponses</h4>
            <div class="container">
            <?php
                        $reponse = $co->query('SELECT * FROM reponses, questions WHERE reponses.id_question = questions.id_question AND questions.id_question = "'.$item['id_question'].'"');
					    while ($donnees = $reponse->fetch()){
					    ?>
                        
                <div id="reponse">
                    <div>
                        <h6><?php 
                        
                        $pseudos_rep = $co->query('SELECT pseudo_utilisateur FROM utilisateurs, reponses, questions WHERE utilisateurs.id_utilisateur = reponses.id_utilisateur AND reponses.id_question = questions.id_question AND utilisateurs.pseudo_utilisateur =  "'.$_SESSION['pseudo'].'"');
                        $pseudo_reps = $pseudos_rep->fetch();
                        echo $pseudo_reps['pseudo_utilisateur'];

                        ?>
                        </h6>
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

