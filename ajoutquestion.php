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
            if(isset($_POST['titrequestion'], $_POST['cat'])){
                $titre = $_POST['titrequestion'];
                $cat_id = $_POST['cat'];

                $co = connexionBdd();

                $query = $co->prepare("INSERT into questions (titre, cat_id, date_crea) VALUES (:titre, :cat_id, now())");

                $query->bindParam(':titre', $titre);
                $query->bindParam(':cat_id', $cat_id);

                $query->execute();
            }
        }
        else{
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
                            <label for="categorie" id="cat">Cat�gorie</label>
                            <select class="form-control" name="catetogie" id="selectCat">
                                <option name="cat">Cin�ma</option>
                                <option name="cat">Maths</option>
                                <option name="cat">Fran�ais</option>
                                <option name="cat">Technologie</option>
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