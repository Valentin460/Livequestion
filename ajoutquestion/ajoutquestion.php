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
                                <option value="categories"></option>
                                <?php
							    $categories = connexionBdd()->query('SELECT nom FROM categories')->fetchAll();

                                for($i = 0; $i < count($categories); $i++){
                                    echo '<option value="'.$categories[$i]['id'].'">'.$categories[$i]['nom'].'</option>';
                                }
                                ?>
                            </select>
                        <button type="submit" name="submit" class="btn btn-primary" id="but">Ajouter la question</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
        include("../includes/connexion-footer.php");
    ?>