<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
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
                                <option>Cin�ma</option>
                                <option>Maths</option>
                                <option>Fran�ais</option>
                                <option>Technologie</option>
                            </select>
                        <button type="submit" class="btn btn-primary" id="but">Ajouter la question</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>