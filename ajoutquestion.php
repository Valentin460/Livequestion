<!DOCTYPE html>
<html>
    <head>
        <title>Livequestion</title>
        <link rel="stylesheet" type="text/css" href="ajoutquestions.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	    <script src="https://kit.fontawesome.com/d8cf10d130.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>

    <?php
        require('db/fonctions.php');
        if(isset($_POST['submit'])){
            if(isset($_POST['titrequestion'], $_POST['categorie'])){
                $titre = $_POST['titrequestion'];
                $cat_id = $_POST['categorie'];

                $co = connexionBdd();

                $query = $co->prepare("INSERT into questions (titre, cat_id, date_crea) VALUES (:titre, :cat_id, now())");

                $query->bindParam(':titre', $titre);
                $query->bindParam(':cat_id', $cat_id);

                $query->execute();
            }
        }
        else{
    ?>

        <?php
            require_once("db/fonctions.php");

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
                        <button type="submit" class="btn btn-primary" id="but">Ajouter la question</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </body>
</html>