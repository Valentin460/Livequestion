<?php
        include("../includes/head.php");
        require('../db/fonctions.php');
        if(isset($_POST['submit'])){
            if(isset($_POST['titrequestion'])){
                $titre = $_POST['titrequestion'];

                $co = connexionBdd();

                $query = $co->prepare("INSERT into questions (titre, date_crea) VALUES (:titre, now())");

                $query->bindParam(':titre', $titre);

                $query->execute();
            }
        }
        else{
    ?>

        <?php
            require_once("../db/fonctions.php");

            if (isset($_POST['categorie']))
            {
                $categorie = $_POST['categorie'];
            }
            else
            {
                $categorie = "sport";
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
                        </div>
                        <div class="form-group">
                            <label for="categorie" id="cat">Catégorie</label>
                            <select class="form-control" name="catetogie" id="selectCat">
                                <option value="sport" <?php if ($categorie=='sport') { echo 'selected';} ?>>Sport</option>
                                <option value="musique" <?php if ($categorie=='musique') { echo 'selected';} ?>>Musique</option>
                                <option value="cinema" <?php if ($categorie=='cinema') { echo 'selected';} ?>>Cinéma</option>
                                <option value="jeux" <?php if ($categorie=='jeux') { echo 'selected';} ?>>Jeux</option>
                                <option value="histoire" <?php if ($categorie=='histoire') { echo 'selected';} ?>>histoire</option>
                                <option value="science" <?php if ($categorie=='science') { echo 'selected';} ?>>science</option>
                                <option value="politique" <?php if ($categorie=='politique') { echo 'selected';} ?>>Politique</option>
                                <option value="television" <?php if ($categorie=='television') { echo 'selected';} ?>>Télévision</option>
                                <option value="art" <?php if ($categorie=='art') { echo 'selected';} ?>>Art</option>
                                <option value="gastronomie" <?php if ($categorie=='gastronomie') { echo 'selected';} ?>>Gastronomie</option>
                                <option value="voyage" <?php if ($categorie=='voyage') { echo 'selected';} ?>>Voyage</option>
                                <option value="geographie" <?php if ($categorie=='geographie') { echo 'selected';} ?>>Géographie</option>
                                <option value="economie" <?php if ($categorie=='economie') { echo 'selected';} ?>>Economie</option>
                            </select>
                        <button type="submit" name="submit" class="btn btn-primary" id="but">Ajouter la question</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    <?php
        include("../includes/connexion-footer.php");
    ?>